<?php

use Illuminate\Database\Seeder;
use Example\Example;

class ExampleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $example =  new Example();
        $example->column1 = "BigPapi";
        $example->column2 = 34;
        $example->save();

        $example =  new Example();
        $example->column1 = "Roger Clemens";
        $example->column2 = 21;
        $example->save();

        $example =  new Example();
        $example->column1 = "Jim Rice";
        $example->column2 = 14;
        $example->save();
    }
}
