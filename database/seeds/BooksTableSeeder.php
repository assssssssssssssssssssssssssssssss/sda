<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Book;

class BooksTableSeeder extends Seeder
{

    public function run()
    {
    	Book::truncate();

    	Book::create([
    		'title'=>'Suicide is Badass',
    		'writer'=>'hoohoohaha',
    		'user_id'=> 1
    	]);

    	Book::create([
    		'title'=>'How to Suicide',
    		'writer'=>'afailureatlife',
    		'user_id'=> 2
    	]);

    	Book::create([
    		'title'=>'Hakuna Matata to the afterlife baby',
    		'writer'=>'sedlyfeboi',
    		'user_id'=> 3
    	]);

    }
}
