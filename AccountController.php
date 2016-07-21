<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;

class AccountController extends Controller {

	public function login(Request $request)
	{
		
	   
		 $data=$request->all();
		 $email=$data['email'];
		 $phone=$data['phone'];
		 $data1 =  DB::select('select * from asa where email = ?', [$email]);

		 foreach ($data1 as $user) {
         $username=$user->name;
}
		 
		 if (Auth::attempt(['email' => $email, 'password' => $phone]))
        {
			 
			 $request->session()->put('username',$username);
             return redirect('/lifeline')->with('username',$username);
	  
            
		
        }else
		{
			return $phone;
			
			
		}
		
		
		
		
	
	}
}


