<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Validator, Request, Redirect, Auth; 


use App\User;
use App\Book;


class UserController extends BaseController
{
    
    public function home() {

    	return view('home');
    }

    public function getLogin(){
    	return view('login');
    }

    public function postLogin(){
    	
    	$rules = array(
    		'username' => 'required',
    		'password' => 'required|min:4'
    	);

    	$validator = Validator::make(Request::all(), $rules);

    	if ($validator->fails()){
    		return Redirect::to('login')
    		->withErrors($validator)
    		->withInput(Request::except('password'));
    	}

    	else{
    		$userdata = array(
    			'username' => Request::get('username'),
    			'password' => Request::get('password')
    		);

    		$remember = Request::has('remember') ? true:false;

    		if (Auth::attempt($userdata, $remember)){
    			return Redirect::route('home');
    		}

    		else {
    			return Redirect::to('login')
    							->with('message', 'Invalid username or password')
    							->with('alert-class', 'alert-danger');
    		}
    	}
    }


    public function getRegister(){
    	return view('register');
    }

    public function postRegister(){
    	
    	$validator = User::validate(Request::all());

    	if($validator->passes()){

    		User::create(array(
    			'username' => Request::get('username'),
    			'email' => Request::get('email'),
    			'password' => Request::get('password')
    		));

    		return Redirect::route('login')
    							->withMessage('You have successfully registered');

    	}

    	return Redirect::route('register')
    						->withErrors($validator);

    }


    public function logout(){
    	Auth::logout();
    	return Redirect::route('login')
    						->with('message', 'You have successfully logged out!');
    }
}
