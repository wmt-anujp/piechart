<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class EchartController extends Controller
{
	public function echart(Request $request)
	{
		return view('echart');
	}
}
