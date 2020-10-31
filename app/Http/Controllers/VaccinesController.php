<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VaccinesController extends Controller
{
    public function addpatient(){


    	return view('moderator.vaccines.createvaccinespatient');
    }
    public function viewvacpatient(){


    	return view('moderator.vaccines.viewvaccinespatient');
    }
    public function addvac(){


    	return view('moderator.vaccines.addvaccines');
    }
    public function viewvacdetail(){


    	return view('moderator.vaccines.viewvacdetail');
    }
}
