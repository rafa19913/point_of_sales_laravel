<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('contactos', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);
        Customer::create($request->all());
        
        $customers = Customer::all();
        return view('contactos', compact('customers')); 
    }

     // edit data function
     public function editCustomer(Request $req) {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);
        $customer = Customer::find ($req->id);
        Customer::update($request->all());
        
        $customers = Customer::all();
        return view('contactos', compact('customers')); 


        //$blog = Customer::find ($req->id);
        //$blog->title = $req->title;
        //$blog->description = $req->description;
        //$blog->save();
        //return response()->json($blog);
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find ($req->id);
        $customer->first_name = $req->first_name;
        $customer->last_name = $req->last_name;
        $customer->email = $req->email;
        $customer->phone_number = $req->phone_number;
        
        $customer->save();
        return response()->json($customer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer){
       $customer->delete();
       return redirect()->route('home')->with('success', 'Cliente deleted');
    }


}
