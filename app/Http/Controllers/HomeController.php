<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
        // Method to handle the home page
        public function index()
        {
            return view('dashboard.main');  // Adjust this view if needed
        }
    
        
    }
    

