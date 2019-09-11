<?php

namespace App\Http\Controllers\discount;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiscController extends Controller
{
    public function receive()
    {
        return  view('discount/receive');
    }
}
