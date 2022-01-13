<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Yajra\DataTables\DataTables;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $data = Customer::get();
           return DataTables::of($data) 
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn ='&nbsp;<a href="javascript:void(0)" data-id="'.$row->id.'" class=" btn btn-danger btn-sm  dlt">Delete <i class="fas fa-trash-alt"></i></a>';
                    $btn .= '&nbsp;<a href="customer/'.$row->id.'/edit" class="btn btn-success btn-sm showbtn">Update <i class="fas fa-file-alt"></i></a>';
                    $btn .= '&nbsp;<a href="customer/'.$row->id.'" class="btn btn-primary btn-sm editbtn">SIZE CHART <i class="fas fa-edit"></i></a>';

                    return $btn;
                })
                ->editColumn('type', function($data){
               return $data['type1'];
                })
                ->rawColumns(['action'])
                ->make(true);
        }

      
        // $cus = Customer::all();
            return view('customer');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createcustomer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
       
        $customer=new Customer;
        $customer->customerID=$request->customerID;
        $customer->name=$request->name;
        $customer->mobile=$request->mobile;
        $customer->email=$request->email;
        $customer->type1=$request->type1;
        $customer->lambai=$request->lambai;
        $customer->calar=$request->calar;
        $customer->tira=$request->tira;
        $customer->bain=$request->bain;
        $customer->astin=$request->astin;
        $customer->cuff=$request->cuff;
        $customer->colar=$request->calarsize;
        $customer->patti=$request->patti;
        $customer->chatti=$request->chatti;
        $customer->gheri=$request->gheri;
        $customer->design=$request->design;
        $customer->pait=$request->pait;
        $customer->silai=$request->silai;
        $customer->side_pocket=$request->side_pocket;
        $customer->front_pocket=$request->front_pocket;
        $customer->kamar=$request->kamar;
        $customer->hip=$request->hip;
        $customer->cuffsize=$request->cuffsize;
        $customer->moda=$request->moda;
        $customer->karhai=$request->karhai;
        $customer->shalwarlength=$request->shalwarlength;
        $customer->shalwarpocket=$request->shalwarpocket;
        $customer->shalwarghera=$request->shalwarghera;
        $customer->poncha=$request->poncha;
        // $customer->poncha2=$request->poncha2;
        // $customer->currentdate=$request->currentdate;
        // $customer->returndate=$request->returndate;
        $customer->stitcher=$request->stitcher;
        $customer->tayar1=$request->tayar1;
        $customer->tayar2=$request->tayar2;
        $customer->tayar3=$request->tayar3;
        // $customer->tayar4=$request->tayar4;
        $customer->cutter=$request->cutter;
        // $customer->rack=$request->rack;
        $customer->enteredby=$request->enteredby;
        $customer->downshoulder=$request->downshoulder;
        $customer->konisize=$request->konisize;
        // $customer->advance=$request->advance;
        // $customer->discount=$request->discount;
        $customer->total_price=$request->total_price;
        $customer->save();

        $customer->total_price=$customer->total_price - ($customer->discount +  $customer->advance );
        $customer->update();

        return redirect()->route('customer.index')->with('success', 'Customer Entered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        {    
            $data = Customer::where('id', '=', $id)->get();

            // dd($data[0]->type1);
            //    $data = Customer::find($id)->all();
                return view('showreportcustomers', compact('data'));
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        // dd($customer->type1[0]);
        // dd($stock);
        return view('updatecustomer', compact('customer'));
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

        
        $customer = Customer::find($id);
        $customer->customerID=$request->customerID;
        $customer->name=$request->name;
        $customer->mobile=$request->mobile;
        $customer->email=$request->email;
        $customer->type1=$request->type1;
        $customer->lambai=$request->lambai;
        $customer->calar=$request->calar;
        $customer->tira=$request->tira;
        $customer->bain=$request->bain;
        $customer->astin=$request->astin;
        $customer->cuff=$request->cuff;
        $customer->colar=$request->calarsize;
        $customer->patti=$request->patti;
        $customer->chatti=$request->chatti;
        $customer->gheri=$request->gheri;
        $customer->design=$request->design;
        $customer->pait=$request->pait;
        $customer->silai=$request->silai;
        $customer->side_pocket=$request->side_pocket;
        $customer->front_pocket=$request->front_pocket;
        $customer->kamar=$request->kamar;
        $customer->hip=$request->hip;
        $customer->cuffsize=$request->cuffsize;
        $customer->moda=$request->moda;
        $customer->karhai=$request->karhai;
        $customer->shalwarlength=$request->shalwarlength;
        $customer->shalwarpocket=$request->shalwarpocket;
        $customer->shalwarghera=$request->shalwarghera;
        $customer->poncha=$request->poncha;
        // $customer->poncha2=$request->poncha2;
        // $customer->currentdate=$request->currentdate;
        // $customer->returndate=$request->returndate;
        $customer->stitcher=$request->stitcher;
        $customer->tayar1=$request->tayar1;
        $customer->tayar2=$request->tayar2;
        $customer->tayar3=$request->tayar3;
        // $customer->tayar4=$request->tayar4;
        $customer->cutter=$request->cutter;
        // $customer->rack=$request->rack;
        $customer->enteredby=$request->enteredby;
        $customer->downshoulder=$request->downshoulder;
        $customer->konisize=$request->konisize;
        // $customer->advance=$request->advance;
        // $customer->discount=$request->discount;
        $customer->total_price=$request->total_price;
        $customer->update();

        return redirect()->route('customer.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        // $cus = Customer::find($id)->delete();
        // return redirect()->route('customer.index')->with('error', 'Customer DELETED Successfully');
        $customer->delete();
        return response()->json("success");
    }

    
}
