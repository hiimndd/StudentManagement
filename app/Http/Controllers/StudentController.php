<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;
use App\Models\Classn;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::with('classn.time.room')->findOrFail(Auth::user()->id);
        return view('pagesStudent.indexstudent',['user'=> $user]);
    }
    public function indexprofile()
    {
        $user = User::with('classn.course')->findOrFail(Auth::user()->id);
        return view('pagesStudent.indexprofilestudent',['user' => $user]);
    }
    public function studentclass()
    {
        $class = User::with('classn.user')->with('classn.course')->find(Auth::user()->id);
        return view('pagesStudent.informationclass',['class'=>$class]);
    }
    public function checkschedule()
    {
        
        $classcbb = Classn::All();
        $class = Classn::with('time.room')->with('course')->find(5);
       
        return view('pagesStudent.schedulestudent',['class'=>$class,'classcbb'=>$classcbb]);
    }
    public function seachschedule(Request $request)
    {
        $keepvl = Classn::find($request->roomname);
        $classcbb = Classn::All()->where('id', '!=', $request->roomname);
        $class = Classn::with('time.classn')->findOrFail($request->roomname);
        
        return view('pagesStudent.schedulestudent',['class'=>$class,'classcbb'=>$classcbb,'keepvl' => $keepvl]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = Course::All();
        return view('pagesStudent.registerstudent',['course'=>$course]);
    }
    public function getClassesByCourseIdhv(Request $request)
    {
        $classes = Course::findOrFail($request->courseId)->classn; 
        // dd($class);
        //return view('pagesRegister.addregister',['course'=>$course]);
        
        return response()->json([
            'classes' => $classes,
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'coursename' =>'required',
            'classname' =>'required',

        ],[
            
            'coursename.required' => 'H??y ch???n kh??a h???c mong mu???n',
            'classname.required' => 'ch???n t??n l???p',
        ]);
        $user = User::with('classn')->findOrFail(Auth::user()->id);
        foreach($user->classn as $row){
            if($row->id == $request->classname){
                return redirect()->route('schedule.create',$request->classname)->with('notificationer','B???n ???? ????ng k?? l???p h???c n??y!');
            }
        }

        $data = User::find(Auth::user()->id);
        $data->classn()->syncWithoutDetaching([$request->classname]);
        return redirect()->route('schedule.index',$request->classname)->with('notification','????ng k?? th??nh c??ng');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class = Classn::with('user')->find($id);
        return view('pagesStudent.showclass',['class'=>$class]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('pagesStudent.editprofilestudent',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        $this->validate($request,
        [
            'email' => "required|email|unique:users,email,$id",
            'name' => "required",
            'birthday' => 'required',
        ],[
            'email.unique' => 'Email n??y ???? ???????c s??? d???ng',
            'email.required' => 'Ch??ng t??i c???n bi???t email c???a t??i kho???n',
            'email.email' => 'Email kh??ng ????ng ?????nh d???ng',
            'name.required' => 'Kh??ng b??? tr???ng t??n ????ng nh???p',
            'birthday.required' => '?????ng b??? tr???ng d??ng n??y ',
            
        ]);
       
        $user->name = $request->name;
        $user->birthday = $request->birthday;
        $user->email = $request->email;
        
        $user->save();
        return redirect()->route('scheduleindex')->with('notification','S???a th??nh c??ng!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class = Classn::find($id);
        $class->user()->detach(Auth::user()->id);
        return redirect()->route('studentclass')->with('notification','???? h???y ????ng k??!');
    }
    public function editpassword($id)
    {
        $user = User::find($id);
        return view('pagesStudent.editpasswordstudent',['user'=>$user]);
    }
    public function storepassword(Request $request, $id)
    {
        $this->validate($request,
        [
            'password' => 'required',
            'newpass' => 'required',
            'password_confirmation' => 'required_with:password|same:newpass',
        ],[
            
            
            'password.required' => 'Nh???p m???t kh???u',
            'newpass.required' => 'Nh???p m???t kh???u m???i',
            'password_confirmation.same' => 'Nh???p sai khi x??c nh???n m???t kh???u',
        ]);
        if (! Hash::check($request->password, $request->user()->password)) {
            return back()->withErrors([
                'password' => ['M???t kh???u cung c???p kh??ng kh???p v???i h??? s?? c???a b???n']
            ]);
        }
        $user = User::find($id);
        $user->password = bcrypt($request->newpass);
        $user->save();
        return redirect()->route('scheduleindex')->with('notification','l??u th??nh c??ng!');
    }
    
}
