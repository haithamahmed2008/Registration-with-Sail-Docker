<?php

namespace App\Http\Controllers;
use App\Models\Haitham;

use Illuminate\Http\Request;

class HaithamController extends Controller
{
    public function show()
    {
        return view('HaithamView');     
    }
}
