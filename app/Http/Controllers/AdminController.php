<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public  function holidaycalender(Request $request)
    {
        $title="holiday calender";
        return view('admin.holiday_calender');
    }
    public function addstudent(Request $request)
    
    {

        return view('admin.newstudent');
    }
    public function save_new_student(Request $requset)
    {
        //dd( $requset->all());
        $data=[
            'name'=> $requset->name,
            'email'=> $requset->email,
            'user_type'=>'3',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>now(),
        ];
        $student_details=[
            'student_name'=> $requset->name,
            'email'=> $requset->email,
            'parent_name' => $requset->parent_name,
            'mobile'=> $requset->mobile,
            'class'=> $requset->class,
            'sections' => $requset->section,
            'created_at'=>date('Y-m-d H:i:s'),


        ];
      //dd( $student_details);

        DB::table('users')->insert($data);
        DB::table('student_details')->insert($student_details);

        return redirect('/student_details')->withSuccess('student added successfully');
    }
public function student_details(Request $request){

    $data= DB::table('student_details')->get();
     //dd( $data);
    return view('admin.studentdetails',compact('data'));
}
public function edit_student_details(Request $request,$id){

 $user_details=DB::table('student_details')->where('id',$id)->first();
   //dd($user_details);
    return view('admin.edit_student_details',compact('user_details'));
}
public function update_details(Request $request)
{
$update_data=[
    'student_name' => $request->name,
    'parent_name' => $request->parent_name,
    'mobile' => $request->mobile,
    'email' => $request->email,
    'class'=> $request->class,
    'sections' => $request->section,
    'update_at'=>now()
];
DB::table('student_details')->where('id',$request->id)->update($update_data);
    return redirect('/student_details')->withSuccess('student update successfully');
}
public function delete_data(Request $request,$id){
    // dd($request->id);
    DB::table('student_details')->where('id',$request->id)->delete();
    return redirect('/student_details')->withSuccess('student deleted successfully');

}
    
}
