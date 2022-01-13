<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ledger;
use Yajra\DataTables\DataTables;
use DB;

class LedgerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {

        // $data = Ledger::get();
        // dd($data);
    if($request->ajax()){
        $data = Ledger::get();
        // dd($data);
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                // $btn = '<a href="customer/'.$row->id.'/edit" class="btn btn-danger btn-sm dltbtn">Delete  <i class="fas fa-trash-alt"></i></a>';
                // $btn = '<a href="customer/'.$row->id.'/edit" class="btn btn-primary btn-sm editbtn">Delete  <i class="fas fa-edit"></i></a>';
                $btn = '<a href="ledger/'.$row->id.'/edit" class="btn btn-primary btn-sm editbtn"><i class="fas fa-edit"></i></a>';
                $btn .='&nbsp;<a href="javascript:void(0)" data-id="'.$row->id.'" class=" btn btn-danger btn-sm  dlt"><i class="fas fa-trash-alt"></i></a>';
                // $btn .= '&nbsp;<a href="stock/'.$row->id.'" class="btn btn-success btn-sm showbtn">Reciept <i class="fas fa-file-alt"></i></a>';
                return $btn;
            })
           
            ->rawColumns(['action'])
            ->make(true);
    }
    $total = DB::table('ledger')->sum('savings');
    $led = Ledger::all();
        return view('ledger.ledger', compact('led','total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ledger.createledger');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ledger=new Ledger;
        $ledger->purpose1=$request->purpose1;
        $ledger->purpose2=$request->purpose2;
        // $ledger->purpose3=$request->purpose3;
        // $ledger->purpose4=$request->purpose4;
        // $ledger->purpose5=$request->purpose5;
        $ledger->debit=$request->debit;
        $ledger->credit=$request->credit;
        $ledger->savings = $request->debit - $request->credit;
        $ledger->date = $request->date;
        $ledger->save();
            
        return redirect()->route('ledger.index')->with('success', 'Ledger Entered Successfully');
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
        $led = Ledger::find($id);
        return view('ledger.updateledger' , compact('led'));
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
        $led = Ledger::find($id);
        $led->purpose1=$request->purpose1;
        $led->purpose2=$request->purpose2;
        $led->purpose3=$request->purpose3;
        $led->purpose4=$request->purpose4;
        $led->purpose5=$request->purpose5;
        $led->debit=$request->debit;
        $led->credit=$request->credit;
        $led->savings = $request->debit - $request->credit;
        $led->date = $request->date;
        $led->update();

        return redirect()->route('ledger.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ledger $ledger)
    {
        $ledger->delete();
        return response()->json("success");
    }
}
