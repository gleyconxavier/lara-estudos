<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Bem-vindo ao FastSell!';
        // return view('pages.index', compact('title'));
        // In this otherway we can pass even a array
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = 'Sobre o FastSell';
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
