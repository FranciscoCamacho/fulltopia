<!DOCTYPE html>
<html>
  <head>
    <title>post</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    
    
    <link href="resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/post/styles.css" type="text/css" rel="stylesheet"/>
    <script src="resources/scripts/jquery-1.7.1.min.js"></script>
    <script src="resources/scripts/jquery-ui-1.8.10.custom.min.js"></script>
    <script src="resources/scripts/axure/axQuery.js"></script>
    <script src="resources/scripts/axure/globals.js"></script>
    <script src="resources/scripts/axutils.js"></script>
    <script src="resources/scripts/axure/annotation.js"></script>
    <script src="resources/scripts/axure/axQuery.std.js"></script>
    <script src="resources/scripts/axure/doc.js"></script>
    <script src="data/document.js"></script>
    <script src="resources/scripts/messagecenter.js"></script>
    <script src="resources/scripts/axure/events.js"></script>
    <script src="resources/scripts/axure/action.js"></script>
    <script src="resources/scripts/axure/expr.js"></script>
    <script src="resources/scripts/axure/geometry.js"></script>
    <script src="resources/scripts/axure/flyout.js"></script>
    <script src="resources/scripts/axure/ie.js"></script>
    <script src="resources/scripts/axure/model.js"></script>
    <script src="resources/scripts/axure/repeater.js"></script>
    <script src="resources/scripts/axure/sto.js"></script>
    <script src="resources/scripts/axure/utils.temp.js"></script>
    <script src="resources/scripts/axure/variables.js"></script>
    <script src="resources/scripts/axure/drag.js"></script>
    <script src="resources/scripts/axure/move.js"></script>
    <script src="resources/scripts/axure/visibility.js"></script>
    <script src="resources/scripts/axure/style.js"></script>
    <script src="resources/scripts/axure/adaptive.js"></script>
    <script src="resources/scripts/axure/tree.js"></script>
    <script src="resources/scripts/axure/init.temp.js"></script>
    <script src="files/post/data.js"></script>
    <script src="resources/scripts/axure/legacy.js"></script>
    <script src="resources/scripts/axure/viewer.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <body>
  
  
  
<?php
  foreach ($allPostsContainer as $eachUser){
	// var_dump($eachUser->message);
		//var_dump($eachUser->post_id);
		//$u_message=$eachUser->message;
					
		echo '
		
		
		
		<div id="base" class="">
		 <div id="post_title" class="ax_text_field">
			<A>'.$eachUser->author_name.'</A>
		</div>

			
		
      <!-- Unnamed (Shape) -->
      <div id="u0" class="ax_shape">
        <img id="u0_img" class="img " src="'.$eachUser->photo_url.'"/>
        <!-- Unnamed () -->
        <div id="u1" class="text">
          <p><span>&nbsp;</span></p>
        </div>
      </div>




  





      <!-- Unnamed (Shape) -->
      <div id="u13" class="ax_paragraph">
        <img id="u13_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u14" class="text">
          <p><span>Give Points:</span></p>
        </div>
      </div>

      <!-- Unnamed (Text Field) -->
      <div id="u15" class="ax_text_field">
        <input id="u15_input" type="text" value="'.$eachUser->post_title.'" />
      </div>

      <!-- Unnamed (Text Field) -->
      <div id="u16" class="ax_text_field">
        <textarea id="u16_input" type="text" value=""/>'.$eachUser->message.'</textarea> 
      </div>
   
		
		
		

      
      
      
      
<form role="form" method="post" action="ratePosts" enctype="multipart/form-data">   
          <!-- Unnamed (Radio Button) -->
      <div id="u2" class="ax_radio_button">
        <label for="u2_input">
          <!-- Unnamed () -->
          <div id="u3" class="text">
            <p><span>Enviroment</span></p>
          </div>
        </label>
        <input id="u2_input" type="radio" value="1" name="enviroment"/>
      </div>




      <!-- Unnamed (Radio Button) -->
      <div id="u4" class="ax_radio_button">
        <label for="u4_input">
          <!-- Unnamed () -->
          <div id="u5" class="text">
            <p><span>Activism</span></p>
          </div>
        </label>
        <input id="u4_input" type="radio" value="1" name="activism"/>
      </div>




      <!-- Unnamed (Radio Button) -->
      <div id="u6" class="ax_radio_button">
        <label for="u6_input">
          <!-- Unnamed () -->
          <div id="u7" class="text">
            <p><span>Education</span></p>
          </div>
        </label>
        <input id="u6_input" type="radio" value="1" name="education"/>
      </div>



      <!-- Unnamed (Flow Shape) -->
      <div id="u9" class="ax_flow_shape">
      
				<select name="points">
				  <option value="1">1</option>
				  <option  value="2">2</option>
				  <option value="3" selected>3</option>
				  <option  value="4" >4</option>
				   <option  value="5" >5</option>
				</select>
				
        <!-- Unnamed () -->
        <div id="u10" class="text">
          <p><span>&nbsp;</span></p>
        </div>
      </div>



      <!-- Unnamed (Radio Button) -->
      <div id="u11" class="ax_radio_button">
        <label for="u11_input">
          <!-- Unnamed () -->
          <div id="u12" class="text">
            <p><span>Exchange</span></p>
          </div>
        </label>
        <input id="u11_input" type="radio" value="1" name="exchange"/>
      </div>

		      <!-- Unnamed (HTML Button) -->
      <div id="u8" class="ax_html_button">
        <input id="u8_input" type="submit" value="Submit"/>
      </div>

<input type="hidden" name="hiddenPostID" id="hiddenPostID" value="'.$eachUser->post_id.'" />

      </form> 
      
      
      

		
	 </div>	
		
		
		
		
		
		
		
		';
		
		
		
		
		
		//////
		
		for ($i=0;$i<28;$i++){
			echo '<br/>';
		}

		
	
	}
?>  
  </body>
</html>
