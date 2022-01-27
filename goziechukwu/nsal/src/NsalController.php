<?php

namespace Goziechukwu\NSAL;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Goziechukwu\NSAL\Models\State;
use Goziechukwu\NSAL\Models\Lga;

class NsalController extends Controller
{
    //
    public function getStates(){
        return State::with('lga')->get();
    }

    public function getLgas(){
        return Lga::with('states')->get();
    }
}
