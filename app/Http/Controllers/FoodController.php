<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FoodController;
use App\Models\Buy;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    { 
        $buys=Buy::orderBy('id','desc')->get();
        return view('buy-now',compact('buys'));
    }
    public function create()
    {
        return view('buy-now');
    }
    public function store(Request $request)
    {   
        try{
        $request->validate([
        'name'=>'required',
        'email'=>'required',
        'room_no'=>'required',
        'payment_method'=>'required',
        'txn_id'=>'required',
        'eat_time'=>'required',
        'description'=>'required',
         ]);

         $data=[
        'name'=>$request->input('name'),
        'email'=>$request->input('email'),
        'room_no'=>$request->input('room_no'),
        'payment_method'=>$request->input('payment_method'),
        'txn_id'=>$request->input('txn_id'),
        'eat_time'=>$request->input('eat_time'),
        'description'=>$request->input('description'),
        ];
        
        Buy::create($data);

        
        return response()->json($form);
        

        }catch(\Exception $exception){
         return redirect()->back()->withErrors($exception->getMessage());

        }
      
    }

}
