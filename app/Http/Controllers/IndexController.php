<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function about(Request $request)
    {
        $name = $request->input('name', '');
        // $age = $request->input('age', '');
        return view('gaz.asd',[
            'name' => $name,
            // 'age' => $request->input('age', ''),
        ]);
    }
} 