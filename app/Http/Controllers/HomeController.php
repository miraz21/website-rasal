<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function index()
 {
     return view('layouts.app');
 }
 public function page()
 {
     return view('service');
 }
 public function pageOn()
 {
     return view('security');
 }
 public function bill()
 {
     return view('cost');
 }
 public function showFood()
 {
     return view('restaurant');
 }
 public function food()
 {
     return view('buy-now');
 }
 public function priceList()
 {
     return view('price-list');
 }
}
