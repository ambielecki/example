<?php

namespace Example\Http\Controllers;

use Example\Example;
use Illuminate\Http\Request;

use Example\Http\Requests;
use Example\Http\Requests\AddExampleRequest;


class ExampleController extends Controller
{
    public function getLive()
    {
        return view('example.live');
    }
    
    public function getData()
    {
        $data = \Example\Example::get();
        return view('example.data', ['data'=>$data]);
    }
    
    public function getForm()
    {
        return view('example.form');
    }

    public function postForm(AddExampleRequest $request)
    {
        //Call the Example model method to add and Example using the request information
        Example::addExample($request);
        \Session::flash('flash_message','Player Added');
        return redirect('/form');
    }
}
