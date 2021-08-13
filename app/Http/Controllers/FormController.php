<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Http\Controllers\FormController;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
        public function index()
        { 
            $forms=Form::orderBy('id','desc')->get();
            return view('form',compact('forms'));
        }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
    	return view('form');
    }

    public function store(Request $request)
    {   
        try{
        $request->validate([
        'name'=>'required',
        'email'=>'required',
        'phone'=>'required',
        'country'=>'required',
        'payment_method'=>'required',
        'txn_id'=>'required',
        'booking_period'=>'required',
        'subject'=>'required',
         ]);

         $data=[
        'name'=>$request->input('name'),
        'email'=>$request->input('email'),
        'phone'=>$request->input('phone'),
        'country'=>$request->input('country'),
        'payment_method'=>$request->input('payment_method'),
        'txn_id'=>$request->input('txn_id'),
        'booking_period'=>$request->input('booking_period'),
        'subject'=>$request->input('subject'),
        ];

        Form::create($data);
        return redirect('This is a data create successfully!');
        //return response()->json($form);

        }catch(\Exception $exception){
         return redirect()->back()->withErrors($exception->getMessage());

        }
      
    }
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}
