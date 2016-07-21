<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use DB;

use Illuminate\Http\Request;

class RegisterController extends Controller {

	public function register(ContactFormRequest $request)
	{
		echo ('done this');
		$data=$request->all();
		
		
			   DB::insert('insert into asa(name,email,password,year) values (?,?,?,?)',[$data['first_name'], $data['email'] , bcrypt($data['phone']) ,4]);
        
	
		return redirect('register')->with('message','REGISTRATION SUCCESSFUL');
		
	}

}
