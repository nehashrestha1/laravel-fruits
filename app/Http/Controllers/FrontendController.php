<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $sliders=Slider::limit(3);
        return view('frontend.index',compact('sliders'));
    }
    // public function about(){

    // }

}
