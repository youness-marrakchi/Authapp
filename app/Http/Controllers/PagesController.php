<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to AuthApp';
    	return view('pages.index')->with('title', $title);
    }

    public function about() {
    	$title = "About";
    	return view('pages.about')->with('title', $title);
    }

    public function services() {
    	$data = array(
    		'title' => 'services',
    		'services' => ['food', 'entertainement', 'delivery', 'transportation']
    	);
    	return view('pages.services')->with($data);
    }
}
