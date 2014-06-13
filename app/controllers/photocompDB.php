<?php


class photocompDB extends BaseController{
	
		public function login(){
		//$mypassword = 'desmond';
		//$hashpassword = Hash::make('secret');
		//print '<br />'.$mypassword.' '.$hashpassword;
		// print DB::getName();
		/**$results = DB::select("SELECT * FROM users");
		print_r($results);
		
		*/
		//DB::insert('insert into users (user_name, user_pass) values (?, ?)', array('Desmond', '1234'));
		
			//$name=Input::get('user_name');
		
			//$pass=Input::get('user_pass');
			//echo $pass;
		
		
			//$hashedPW= Hash::make($pass);
			//echo Hash::make('ABCD');
		
			//$email=Input::get('user_email');
			//$sex=Input::get('user_sex');
			//$birth=Input::get('user_birth');
		
			//DB::insert('insert into users (user_name, user_pass) values (?, ?)', array($name, $hashedPW));
		
		
	
		//	$a = 'Desmond';
		//	$b = 'ABCD';
		//	$b=Hash::make($b);
		
		
			$name =	Input::get('email');
			$hashedPW = Hash::make(Input::get('password'));
			//DB::insert('insert into users (email, password) values (?, ?)', array($name, $hashedPW));	
			$is_auth = Auth::validate(array('email' => Input::get('email'), 'password' => Input::get('password')));
			//print "<br />eval: ".var_export(($is_auth),true);
			
			
			
			if ($is_auth)
			{
				//echo 'Logined';
				
				//$results = DB::select('select * from users where email = ?', array('desmond'));
				//$result = mysql_query("SELECT email,password FROM users WHERE email = $name");
				
				
				//if (!$results) {
  			 		// echo 'Could not run query: ' . mysql_error();
   					 //exit;
				//}
				
				$user = DB::table('users')->where('email', $name)->first();

				//var_dump($user->password);
				//var_dump($user->exchange);
				//var_dump($user->points);
				//var_dump($user->knowledge_circulation);
				//var_dump($user->communitarianism);
				//var_dump($user->ecology);
				
		
// 				return Response::json(array(
// 					'Name' => $user->email,
// 					'password' => $user->password,
// 					'exchange' => $user->exchange,
// 					'points' => $user->points,
// 					'knowledge_circulation' => $user->knowledge_circulation,
// 					'communitarianism' =>$user->communitarianism,
// 					'ecology' => $user->ecology
// 					),
// 					200
// 				);

				//Session::put('Name', $user->email);
				
				$this->updateAllUserData(
					$user->user_id,
					$user->email,
					$user->exchange, 
					$user->points,
					$user->knowledge_circulation,
					$user->communitarianism,
					$user->ecology,
					$user->profile_pic
				);
				
				//return View::make('HomePage')->array('name' => 'Taylor');	
				return View::make('home', array('Name' => $user->email,
													'password' => $user->password,
													'exchange' => $user->exchange,
													'points' => $user->points,
													'knowledge_circulation' => $user->knowledge_circulation,
													'communitarianism' =>$user->communitarianism,
													'ecology' => $user->ecology,
													'profile_pic' => $user->profile_pic
				));
				

				
			}else{
				echo 'login fail';
				return Redirect::intended('LoginPage');
			}

	
			//photocompDB::table('admin')－>insert('insert into admin(email) values (?)', array('hello@gmail.com'));	
			//photocompDB::create(array('title'=>Input::get('title'),
			//							'body'=>Input::get('body'));
		}
	
	public function homepage_submit(){
		return Redirect::intended('http://www.google.com');

	}

	public function jsonOutput(){

		return Response::json(array(
			'error' => false,
			'urls' => 'ddfdsaf',
			'Name' => 'Desmond'
			),
			200
		);
	}
	
	
	
	
	
	public function signUp(){
	
	$name =	Input::get('email');
	$hashedPW = Hash::make(Input::get('password'));

	$maxUserID=DB::table('users')->MAX('user_id');
	$maxUserID=$maxUserID+1;


	$existUser = DB::table('users')->where('email', $name)->first();

	// var_dump($existUser);


	// echo '<br/>';


	// if($existUser!==NULL){
	// 	echo '<br/>'.$existUser->email;
	// }else{
	// 	echo '<br/>'.'No user';

	// }
	

		if($existUser!=NULL){
				if (Input::hasFile('myprofilePic'))
				{
					if (Input::file('myprofilePic')->isValid())
					{
						$file = Input::file('myprofilePic');
						$extension = $file->getClientOriginalExtension();
						$fileName=$maxUserID.'.'.$extension;
						$photo_url='post/profile_pic/'.$fileName;
						$result=Input::file('myprofilePic')->move('post/profile_pic', $fileName);

					DB::insert('insert into users (email, password, profile_pic) values (?, ?,?)', array($name, $hashedPW,$photo_url));	
					return Redirect::intended('LoginPage');
					}


				}else{
					//echo 'Error!';	
					$photo_url='';
					return Redirect::intended('signUp');
				}
		}else{
			return Redirect::intended('signUp');
		}
			
	
	}
	
	
	
	///////////////////////
	
	
	
	public function getAllUserData(){

			return array(
			'user_id'=>Session::get('userID'),
			'name'=>Session::get('name'),
			'exchange'=>Session::get('exchange'),
			'points'=>Session::get('points'),
			'knowledge_circulation'=>Session::get('knowledge_circulation'),
			'communitarianism'=>Session::get('communitarianism'),
			'ecology'=>Session::get('ecology'),
			'profile_pic'=>Session::get('profile_pic')
			);
			
			
			//return array('name' => 'Tom', 'exchange'=>'xxxxxxxxx');
			
	}
		
		
	public function updateAllUserData($user_id,$name,$exchange,$points,$knowledge_circulation,$communitarianism,$ecology,$profile_pic){
			Session::put('userID', $user_id);
			Session::put('name', $name);
			Session::put('exchange', $exchange);
			Session::put('points', $points);
			Session::put('knowledge_circulation', $knowledge_circulation);
			Session::put('communitarianism', $communitarianism);
			Session::put('ecology', $ecology);
			Session::put('profile_pic', $profile_pic);			
		}


	public function search(){
	
			$name=NULL;
			$name =	Input::get('seach_profile_Key');
			
			if($name!=NULL){
				$user = DB::table('users')->where('email', $name)->first();
				$myData=array();
				$myData= $this->getAllUserData();
				$my_profile_pic=$myData["profile_pic"];
	
				return View:: make('profile' , array('Name' => $user->email,
														'userID' => $user->user_id,
														'password' => $user->password,
														'exchange' => $user->exchange,
														'points' => $user->points,
														'knowledge_circulation' => $user->knowledge_circulation,
														'communitarianism' =>$user->communitarianism,
														'ecology' => $user->ecology,
														'profile_pic' => $user->profile_pic,
														'my_profile_pic' => $my_profile_pic
													
												));

				
				
		
		}else{
			return Redirect::intended('login');
		
		}
	}
		
}




	
		