<?php

namespace Example\Http\Controllers;

use Example\Example;
use Example\Http\Requests\AddExampleRequest;


class ExampleController extends Controller
{
    public function getLive()
    {
        return view('example.live');
    }
    
    public function getData()
    {
        $data = Example::get();
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
    
    public function getEditData($id = null)
    {
        if($id)
        {
            $player = Example::find($id);
            return view('example.edit', ['player'=>$player]);
        }else
        {   
            $players = Example::all();
            return view('example.edit', ['players'=>$players]);
        }
    }
    
    public function postEditData(AddExampleRequest $request)
    {
        $status = Example::editExample($request);
        if($status)
        {
            \Session::flash('flash_message','Player Edited');
            return redirect('/data');
        }else{
            \Session::flash('flash_message','There was a problem with your request, please try again');
            return redirect('/editdata');
        }
    }
}
