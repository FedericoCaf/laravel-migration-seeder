<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index(){

        $packages = Package:: orderBy('prezzo') ->get();
        
        // dump($packages);
        return view('home', compact('packages'));
    }
}
