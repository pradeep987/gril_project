<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\user\LoginRepository;
use Validator;
use Redirect;
use Session;
use Log;
use Mail;

class Login extends Controller
{

	protected $request;

	public function rules()
	{
		return [
			'username'=>'required|min:4|max:64',
			'password'=>'required|min:4|max:12',
		];
	}

	public function messages()
	{
		return [
			'required'    => 'The :attribute must required',
			'max'         => 'The :attribute maximum :max characters',
			'min'         => 'The :attribute minimum :min  characters',
		];
	}
	public function login(LoginRepository $login_repository,Request $request)
	{
		$validator = Validator::make($request->all(),
		Login::rules(), Login::messages()
		);

		if ($validator->fails()) {
			return redirect('login')
			->withErrors($validator)
			->withInput();
		}else{
			$login_result = $login_repository->userAuthentication($request->all());
			//print_r($login_result[0]->personal_name);exit;
			if(count($login_result) > 0 && $login_result[0]->personal_name && $login_result[0]->id){
				$request->session()->put('userName', $login_result[0]->personal_name);
				$request->session()->put('userId', $login_result[0]->id);

				return Redirect::to("dashboard");
			}else{
				return redirect()->back()->with('login_errror','Invalid Login');
			}
		}
	}

	public function logout(){
		Session::flush();
		return Redirect::to('login');
	}

	public function sendForgetPwdMail(LoginRepository $login_repository, Request $request){
		$data = json_decode($request->getContent(), true);
		$coll = collect($data);

		$userName = $coll->has('forgetUserName') ? $coll->get('forgetUserName') : "";
		$user = $login_repository->sendForgetPwdMail($userName);
		if(count($user) > 0 && $user[0]->personal_name){
			if (!filter_var($userName, FILTER_VALIDATE_EMAIL) === false) {
				$subject = "Gril Forget Password";
				$body = "Hi ".$user[0]->personal_name.", <br/>";
				$body .= "your Gril password is ".$user[0]->dumy.", <br/><br/>";
				$body .= "Thanks and Regards<br/>Gril Admin";
					
				$data = array('name'=>$user[0]->personal_name);
				$mail = Mail::send([], $data, function($message) use($userName, $subject, $body) {
					$message->to($userName, 'Gril Password')->subject
					($subject)
					->setBody($body, 'text/html'); // for HTML rich messages
					$message->from('vganesan85@gmail.com','Gril Admin');
				});


				return "Success Email";
			} else {
				return "Success Mobile";
			}
		}else{
			return "Invalid User detail";
		}
	}

}
