<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FooterController;
use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
   public function helpLine()
   {
       return view('footers.help-line');
   }
   public function hotLine()
   {
       return view('footers.hot-line');
   }
   public function officeRule()
   {
       return view('footers.office-rule');
   }
   
   public function index()
   { 
       $footers=Footer::orderBy('id','desc')->get();
       return view('footers.complaints-point',compact('footers'));
   }

   public function create()
   {
    return view('footers.complaints-point');
   } 
   public function store(Request $request)
   {   
       try{
       $request->validate([
       'problem_area'=>'required',
       'description'=>'required',
      ]);

        $data=[
       'problem_area'=>$request->input('problem_area'),
       'description'=>$request->input('description'),
        ];

       Footer::create($data);
       
       return redirect('This is a data create successfully!');

       }catch(\Exception $exception){
        return redirect()->back()->withErrors($exception->getMessage());

       }
     
   }


  
}
