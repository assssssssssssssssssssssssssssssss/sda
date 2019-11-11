<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        User::truncate();

    	User::create([
    		'username'=>'saad',
    		'email'=>'saad@saad.saad',
    		'password'=>'aaaaaa'
    	]);

    	User::create([
    		'username'=>'sasa',
    		'email'=>'sasa@sasa.sasa',
    		'password'=>'aaaaaa'
    	]);

    	User::create([
    		'username'=>'ass',
    		'email'=>'ass@ass.ass',
    		'password'=>'aaaaaa'
    	]);

    }
}
