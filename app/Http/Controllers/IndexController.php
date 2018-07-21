<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return 'My page';
        // return view('welcome');
    }

    public function about()
    {
        return 'About page';
    }

    public function testGet(Request $request)
    {
        $name = $request->input('name');
        $age = $request->input('age');
        // var_dump($request);
        // return 'Ok';
        // // die;
        return view('gaz.asd',[
            'name'=>$name,
            'age'=>$age
        ]);
    }

    public function testPost(Request $request)
    {
        $allInput = $request->all();

        if ($request->route()->named('route2')) {
            echo "We are here!";
        }

        if ($allInput['login'] == '1' && $allInput['password'] == '2') {
            dump($allInput);
            echo "Ok";
        } else {
            // return redirect (route('route1'));

            // return redirect() -> route('route1');
        } 
        return 'Ok';
    }

    public function getNews(Request $request,$id, $slug)
    {
        return 'NEWS CONTENT ' . $id . $slug;
    }
}
