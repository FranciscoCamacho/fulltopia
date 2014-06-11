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
					$result=Input::file('test')->move('post/post_photos', $fileName);
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


		
		return View:: make('user_posts')->with('allPostsContainer', $postsContainer);

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
			
			DB::table('posts_DB')->where('post_id', $postID)->update(array('status' => $status,'points' => $points ));
			return Redirect::intended('user_posts');
			
			}
	
	
	
	
	
			public function updateRatedPostsByUsers($postID){ 
				$author_id=Session::get('userID');	
				
				
				$ratedUsers = DB::table('posts_DB')->orderBy('post_id', 'desc')->get();
				
					$str = (string)($author_id);
					
					$str=$str.'.';
					$result= substr($str,0,strrpos($str,'_'));
					
					
			DB::table('posts_DB')->where('post_id', $postID)->update(array('user_rated' => $XXXX));
			
			
			
			}
	
}





















	
		