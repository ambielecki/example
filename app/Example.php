<?php

namespace Example;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Example\Example
 *
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $column1
 * @property integer $column2
 * @method static \Illuminate\Database\Query\Builder|\Example\Example whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Example\Example whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Example\Example whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Example\Example whereColumn1($value)
 * @method static \Illuminate\Database\Query\Builder|\Example\Example whereColumn2($value)
 * @mixin \Eloquent
 */
class Example extends Model
{
    public static function addExample($request)
    {
        $player = new Example();
        $player->column1 = $request->input('column1');
        $player->column2 = $request->input('column2');
        $player->save();
    }

    public static function editExample($request)
    {
        try{
            $player = Example::find($request->input('id'));
        }catch(ModelNotFoundException $ex){
            return false;
        }
        
        $player->column1 = $request->input('column1');
        $player->column2 = $request->input('column2');
        $player->save();
        return true;
    }
}
