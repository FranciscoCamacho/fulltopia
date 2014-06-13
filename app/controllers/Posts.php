<?php


class Posts extends BaseController{
	
		public function submitPost(){
		//$mypassword = 'desmond';
		//$hashpassword = Hash::make('secret');
		//print '<br />'.$mypassword.' '.$hashpassword;
		// print DB::getName();
		//$results = DB::select("SELECT * FROM users");
		//print_r($results);

			$author_id=Session::get('userID');
			
			//$receiver=Input::get('??????');
			$message=Input::get('post_message');
			$author_name=Session::get('name');		
			
			$post_submit_date=date('Y/m/d h:i:s', time());
			echo $post_submit_date;
			//$maxPhotoID = DB::select('select MAX(post_id)from posts');

			$maxPhotoID=DB::table('posts_DB')->MAX('post_id');
			$maxPhotoID=$maxPhotoID+1;
			$postTitle=Input::get('post_title');
			
			if (Input::hasFile('test'))
			{
				if (Input::file('test')->isValid())
				{
					 $file = Input::file('test');
					 $extension = $file->getClientOriginalExtension();
					 $fileName=$maxPhotoID.'.'.$extension;

					 $photo_url='post/post_photos/'.$fileName;
					// $result=Input::file('test')->move('post/post_photos', $fileName);
					/////
					//$img = Input::file('test');
					$success = Resizer::open($file)
					->resize(480 ,260, 'auto' )
					->save( 'post/post_photos/'.$fileName , 90 );
 
					// move uploaded file to public/uploads
					//Input::upload('test', 'post/post_photos/', $filename);

				}

			}else{
				//echo 'Error!';	
				$photo_url='';
			}

			
			
		


			//echo $status;
			$status=0;	
				

		if($message!=NULL && $author_name!=NULL&&$postTitle!=NULL){
			DB::insert('insert into posts_DB (author_id,
											author_name,
											photo_url,
											message,
											status,
											post_submit_date,
											post_title
											)
					 values (?,?,?,?,?,?,?)', array($author_id,
					 							$author_name,	
					 							$photo_url,
					 							$message,
					 							$status,
					 							$post_submit_date,
					 							$postTitle
					 ));			
			
		
		}
			
			
			echo 'All are OK!';
			
			return Redirect::intended('user_posts_submit');

		
 	}
	
		public function fetchPosts(){
		
		$postsContainer=array();
		$postsContainer = DB::table('posts_DB')->orderBy('post_id', 'desc')->get();

		//$this->checkRatedPostsByUsers($eachPost->post_id);
		
		$var;
		$check=true;
		
		$ratedArray=array();
		
		foreach($postsContainer as $eachPost){
		
			$var=$eachPost->post_id;
			//echo $var.'<br/>';
			
				$check=$this->checkRatedPostsByUsers($var);
				$ratedArray[$var]=$check;
		}
			return View:: make('user_posts')->with('allPostsContainer', $postsContainer)->with('ratedPostArray',$ratedArray);

		}
	
	
	
	
			public function ratePost(){ 
					//////////
			$enviroment=Input::get('enviroment')."";
			$activism=Input::get('activism')."";
			$exchange=Input::get('exchange')."";
			$education=Input::get('education')."";
			$points=Input::get('points');
			
			if($enviroment==null){
				$enviroment=0;
			}
			if($activism==null){
				$activism=0;
			}
			if($exchange==null){
				$exchange=0;
			}
			if($education==null){
				$education=0;
			}
			
			$postID=Input::get('hiddenPostID');
			
						
			$status=$enviroment.$activism.$exchange.$education;
			$status=(int)$status;
	
			//echo $status;
			//echo $postID;
			
			$recordString = DB::table('posts_DB')->where('post_id', $postID)->first();
			$recordString->points=$points+$recordString->points;
			
			DB::table('posts_DB')->where('post_id', $postID)->update(array('status' => $status,'points' => $recordString->points));
			$this->updateRatedPostsByUsers($postID);
			
			return Redirect::intended('user_posts');
			
			}

			public function updateRatedPostsByUsers($postID){ 
				
					$author_id=Session::get('userID');	
					//echo $author_id;
			
					$recordString = DB::table('posts_DB')->where('post_id', $postID)->first();
					//$recordString = DB::table('posts_DB')->where('post_id', $postID)->get();
					//echo $recordString->user_rated;
					$recordString->user_rated=$recordString->user_rated.'.'.$author_id;
					//echo '<br/>';
					//echo $recordString->user_rated;
					DB::table('posts_DB')->where('post_id', $postID)->update(array('user_rated' => $recordString->user_rated));

			}
			
			
			public function checkRatedPostsByUsers($postID){ 
			
					$countOfRat=0;
				
					//$author_id=Session::get('userID');	
					//echo $author_id;
			
					$recordString = DB::table('posts_DB')->where('post_id', $postID)->first();
					//$recordString = DB::table('posts_DB')->where('post_id', $postID)->get();
					//echo $recordString->user_rated;
					//$recordString->user_rated=$recordString->user_rated.'.'.$author_id;
					//echo '<br/>';
					//echo $recordString->user_rated;
					
					
					$subStringArray = explode('.', $recordString->user_rated);
					$author_id=Session::get('userID');
					$userIsRated=false;
					
					
					
					foreach($subStringArray as $item){
					
						if($item==$author_id){
							$userIsRated=true;
						}
					}
					
					
				
					return $userIsRated;
					//return true;
			}
			
			
			
			
	
}





















	
		