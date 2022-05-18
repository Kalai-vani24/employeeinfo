<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
     {
        $employeeDetails=\DB::table('employee_info as e')->select('e.id','e.name','e.designation','e.salary','d.emp_id','d.cl','d.dmax')->join('employee_data as d','e.id','=','d.id')->whereNull('e.deleted_at')->get();
        return view('home',compact('employeeDetails'));  //compact is a method
        
    }
   
        public function deleteEmployee($slug)
        {
            $deleteData = \DB::table('employee_info')->where('id',$slug)->update(['deleted_at'=>now()]);
            $employeeDetails=\DB::table('employee_info as e')->select('e.id','e.name','e.designation','e.salary','d.emp_id','d.cl','d.dmax',)->join('employee_data as d','e.id','=','d.id')->whereNull('e.deleted_at')->get(); // instead of on keyword '...''=''...'
            return view('home',compact('employeeDetails')); // compact is a method
        }
        public function createEmployee()
        {
            return view('add');
        }
        

    
        // print_r($request->all());
        // exit();
        public function employeeSave(Request $request)
        {
        $employeeSaveData = \DB::table('employee_info')->insertGetId([
            'name'=>$request->all()['name'],
            'designation'=>$request->all()['designation'],
            'salary'=>$request->all()['salary'],
            'created_at'=>now(), 
            'updated_at'=>now()
        ]);
    
    $employeeData = \DB::table('employee_data')->insert([
        'id'=> $employeeSaveData,
        'cl'=>$request->all()['cl'],
        'dmax'=>$request->all()['dmax'],
        'created_at'=>now(), 
        'updated_at'=>now()
    ]);
return redirect()->route('home');
}
public function editRecord($slug)
{
     $editData=\DB::table('employee_info as e')->select('e.id','e.name','e.designation','e.salary','d.cl','d.dmax')->join('employee_data as d','e.id','=','d.id')->where('e.id',$slug)->first();
     return view('edit',compact('editData'));
}
public function employeeUpdate(Request $request){
    \DB::table('employee_info')->where('id',$request->all()['updatedata'])->update([
        'name'=>$request->all()['name'],
        'designation'=>$request->all()['designation'],
        'salary'=>$request->all()['salary'],
        'updated_at'=>now()
        
    ]);
    \DB::table('employee_data')->where('id',$request->all()['updatedata'])->update([
        'cl'=>$request->all()['cl'],
        'dmax'=>$request->all()['dmax'],
        'updated_at'=>now()   
    ]);
    return redirect()->route('home');
}
} // compact is a method 



    
