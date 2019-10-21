<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to GXAPP!';
        // return view('pages.index', compact('title'));
        // In this otherway we can pass even a array
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = 'About The GXAPP';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
