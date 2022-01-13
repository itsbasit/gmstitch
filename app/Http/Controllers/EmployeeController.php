<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Employee;
use App\Models\Employeerecord;
use DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
        {
            if($request->ajax()){
                $data = Employee::get();
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        // $btn = '<a href="customer/'.$row->id.'/edit" class="btn btn-danger btn-sm dltbtn">Delete  <i class="fas fa-trash-alt"></i></a>';
                        $btn = '<a href="employee/'.$row->id.'/edit" class="btn btn-primary btn-sm editbtn"><i class="fas fa-edit"></i></a>';
                        $btn .='&nbsp;<a href="javascript:void(0)" data-id="'.$row->id.'" class=" btn btn-danger btn-sm  dlt"><i class="fas fa-trash-alt"></i></a>';
                        $btn .= '&nbsp;<a href="employee/'.$row->id.'" class="btn btn-success btn-sm showbtn"><i class="fas fa-file-alt"></i></a>';
    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }
            $emp = Employee::all();
            return view('employee', compact('emp'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createemployee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee=new Employee;
        $employee->name=$request->name;
        $employee->fathername=$request->fathername;
        $employee->cnic=$request->cnic;
        $employee->mobile=$request->mobile;
        $employee->address=$request->address;
        $employee->reference=$request->reference;

        $employee->save();

        return redirect()->route('employee.index')->with('success', 'Employee Entered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $data = Employeerecord::where('employee_id', '=', $id)
            ->join('employee', 'employee.id', '=', 'employeerecord.employee_id')
            ->select('employee.*', 'employeerecord.date', 'employeerecord.total_price', 'employeerecord.no_of_suit_stitch')
            ->get();

        return view('showreport', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emp = Employee::find($id);
        return view('updateemployee', compact('emp'));
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
        $emp = Employee::find($id);
        $emp->name=$request->name;
        $emp->fathername=$request->fathername;
        $emp->cnic=$request->cnic;
        $emp->mobile=$request->mobile;
        $emp->address=$request->address;
        $emp->reference=$request->reference;
        $emp->update();

        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        // $student = Employee::find($id)->delete();
        // return redirect()->route('employee.index')->with('error', 'Employee DELETED Successfully');

        $employee->delete();
        return response()->json("success");
    }
}
