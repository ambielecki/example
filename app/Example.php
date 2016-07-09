<?php

namespace Example;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    public static function addExample($request){
        $player = new Example();
        $player->column1 = $request->input('column1');
        $player->column2 = $request->input('column2');
        $player->save();
    }
}
