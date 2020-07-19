<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentionsController extends Controller
{
    public function mentions(){
        return view('mentions');
    }
}
