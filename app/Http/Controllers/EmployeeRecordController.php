<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employeerecord;
use App\Models\Employee;
use Yajra\DataTables\DataTables;
use DB;
class EmployeeRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $data = DB::table('employeerecord')
        ->join('employee','employeerecord.employee_id','=','employee.id')
            ->select('employeerecord.*','employee.name  as employee-name')
            // ->where('employee_id', '=' , 'name')
            ->get(); 
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="employeerecord/'.$row->id.'/edit" class="btn btn-primary btn-sm editbtn"><i class="fas fa-edit"></i></a>';
                    $btn .='&nbsp;<a href="javascript:void(0)" data-id="'.$row->id.'" class=" btn btn-danger btn-sm  dlt"><i class="fas fa-trash-alt"></i></a>';
                    // $btn .= '&nbsp;<a href="employeerecord/'.$row->id.'" class="btn btn-success btn-sm showbtn">Report <i class="fas fa-file-alt"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.employeerecord');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Employee::select('id','name')->get(); 
        return view('createemployeerecord',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee=new Employeerecord;
        $employee->employee_id=$request->employee_id;
        $employee->date=$request->date;
        $employee->no_of_suit_stitch=$request->no_of_suit_stitch;
        $employee->customer_id=$request->customer_id;
        $employee->suit_type=$request->suit_type;
        $employee->paid=$request->paid;
        $employee->advance=$request->advance;
        $employee->total_price=$request->total_price;
        $employee->remaining = $request->total_price - $request->advance;
        $employee->save();

       
        // $employee->update();
        return redirect()->route('employeerecord.index')->with('success', 'Employee Entered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Employee::select('id','name')->get(); 
        $emp = Employeerecord::find($id);
        return view('updateemployeerecord', compact('emp', 'data'));
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
        $employee = Employeerecord::find($id);
        $employee->employee_id=$request->employee_id;
        $employee->date=$request->date;
        $employee->no_of_suit_stitch=$request->no_of_suit_stitch;
        $employee->customer_id=$request->customer_id;
        $employee->suit_type=$request->suit_type;
        $employee->paid=$request->paid;
        $employee->advance=$request->advance;
        $employee->total_price=$request->total_price;
        $employee->remaining = $request->total_price - $request->advance;
        $employee->update();

        return redirect()->route('employeerecord.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(employeerecord $employeerecord)
    {
        // $emp = Employeerecord::find($id)->delete();
        // return redirect()->route('employeerecord.index')->with('error', 'Employee DELETED Successfully');
        $employeerecord->delete();
        return response()->json("success");
    }
}
