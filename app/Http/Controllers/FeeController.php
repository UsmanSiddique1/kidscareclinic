<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeeController extends Controller
{
    public function generatebill(){

    	return view('moderator.bill.generatebill');
    }

public function viewbill(){

    	return view('moderator.bill.viewallbill');
    }
    public function viewbilllll(){

    	return view('Admin.bill.viewallbill');
    }
}
