<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class EchartController extends Controller
{
    public function echart(Request $request)
    {
    	$motivbook = Product::where('product_type','motivational')->get();
    	$litbook = Product::where('product_type','literary')->get();
    	$histbook = Product::where('product_type','historical')->get();
    	$relbook = Product::where('product_type','religious')->get();
    	$m_count = count($motivbook);    	
    	$l_count = count($litbook);
    	$h_count = count($histbook);
    	$r_count = count($relbook);
    	return view('echart',compact('m_count','l_count','h_count','r_count'));
    }
}
