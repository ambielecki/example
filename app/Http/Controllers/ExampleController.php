<?php

namespace Example\Http\Controllers;

use Example\Example;
use Illuminate\Http\Request;

use Example\Http\Requests;

class ExampleController extends Controller
{
    public function getLive(){
        return view('example.live');
    }
    
    public function getData(){
        $data = \Example\Example::get();
        return view('example.data', ['data'=>$data]);
    }
    
    public function getForm(){
        return view('example.form');
    }

    public function postForm(Request $request){
        $this->validate($request,[
            'column1' => 'required',
            'column2' => 'required|numeric|integer'
        ]);

        $player = new \Example\Example();
        $player->column1 = $request->input('column1');
        $player->column2 = $request->input('column2');
        $player->save();

        \Session::flash('flash_message','Player Added');
        return redirect('/form');
    }
}
