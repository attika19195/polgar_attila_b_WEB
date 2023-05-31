<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Szavak;
use Illuminate\Http\Request;

class SzavakController extends Controller
{
    public function index(){
        $szavak =  Szavak::all();
        return $szavak;
    }
}
