<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoatModel;
use Yajra\DataTables\DataTables;

class CoatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $data = CoatModel::get();
           return DataTables::of($data) 
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn ='&nbsp;<a href="javascript:void(0)" data-id="'.$row->id.'" class=" btn btn-danger btn-sm  dlt">Delete <i class="fas fa-trash-alt"></i></a>';
                    $btn .= '&nbsp;<a href="coat/'.$row->id.'/edit" class="btn btn-success btn-sm showbtn">Update <i class="fas fa-file-alt"></i></a><br>';
                    $btn .= '&nbsp;<a href="coat/'.$row->id.'" class="btn btn-primary btn-sm editbtn">SIZE CHART <i class="fas fa-edit"></i></a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('coat.coat');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coat.createcoat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coat = new CoatModel;

        $coat->type = $request->type;
        $coat->customerID = $request->customerID;
        $coat->name = $request->name;
        $coat->mobile = $request->mobile;
        $coat->length = $request->length;
        $coat->bazu = $request->bazu;
        $coat->tira = $request->tira;
        $coat->gala = $request->gala;
        $coat->chati = $request->chati;
        $coat->gap = $request->gap;
        $coat->kamar = $request->kamar;
        $coat->hip = $request->hip;
        $coat->half_back = $request->half_back;
        $coat->cros_back = $request->cros_back;
        $coat->dola = $request->dola;
        $coat->side_chaak = $request->side_chaak;
        $coat->napail_size = $request->napail_size;
        $coat->gheri = $request->gheri;
        $coat->button = $request->button;
        $coat->style = $request->style;

        $coat->save();
        return redirect()->route('coat.index')->with('success', 'Coat Entered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = CoatModel::where('id', '=', $id)->get();
        return view('coat.sizechart', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = CoatModel::find($id);
        // $customer = Customer::find($id);
        return view('coat.updatecoat', compact('data'));
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
        $coat = CoatModel::find($id);
    
        $coat->type = $request->type;
        $coat->customerID = $request->customerID;
        $coat->name = $request->name;
        $coat->mobile = $request->mobile;
        $coat->length = $request->length;
        $coat->bazu = $request->bazu;
        $coat->tira = $request->tira;
        $coat->gala = $request->gala;
        $coat->chati = $request->chati;
        $coat->gap = $request->gap;
        $coat->kamar = $request->kamar;
        $coat->hip = $request->hip;
        $coat->half_back = $request->half_back;
        $coat->cros_back = $request->cros_back;
        $coat->dola = $request->dola;
        $coat->side_chaak = $request->side_chaak;
        $coat->napail_size = $request->napail_size;
        $coat->gheri = $request->gheri;
        $coat->button = $request->button;
        $coat->style = $request->style;
        $coat->update();

        return redirect()->route('coat.index')->with('success', 'Coat Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CoatModel::where('id', $id)->delete();
        return response()->json("success");
    }
}
