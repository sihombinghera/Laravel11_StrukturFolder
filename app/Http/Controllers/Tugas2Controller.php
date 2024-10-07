<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tugas2Controller extends Controller
{
    public function login()
    {
        //$men = 'form/menuForm';
       // $content = 'form/contact';
        $data = [
          //  'title' => 'Data Contact',
          //  'menu' => $men,
          //  'content' => $content,

        ];
        return view('tugas2/login', $data);
    }


    public function home()
    {
        //$men = 'form/menuForm';
       $content = 'tugas2/content';
        $data = [
          //  'title' => 'Data Contact',
          //  'menu' => $men,
           'content' => $content,

        ];
        return view('tugas2/form', $data);
    }
    public function about()
    {
        //$men = 'form/menuForm';
       $content = 'tugas2/about';
        $data = [
          //  'title' => 'Data Contact',
          //  'menu' => $men,
           'content' => $content,

        ];
        return view('tugas2/form', $data);
    }
    public function contact()
    {
        //$men = 'form/menuForm';
       $content = 'tugas2/contact';
        $data = [
          //  'title' => 'Data Contact',
          //  'menu' => $men,
           'content' => $content,

        ];
        return view('tugas2/form', $data);
    }
    
}
