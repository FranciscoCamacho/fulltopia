<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">


	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	
	
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
 	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
 	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
 	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
 	<link rel="shortcut icon" href="img/favicon.png">
    
    
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/home/styles.css" type="text/css" rel="stylesheet"/>
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
    <script src="files/home/data.js"></script>
    <script src="resources/scripts/axure/legacy.js"></script>
    <script src="resources/scripts/axure/viewer.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
    
    
    <script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>
    
    
    
    
  </head>
  <body>
  
  
  
<!-- 
  <h5>Hello, <?php echo $Name; ?></h5>
<h6>Exchange: <?php echo $exchange; ?> | 
Point: <?php echo $points; ?> | 
Knowledge Circulation: <?php echo $knowledge_circulation; ?> | 
Communitarianism: <?php echo $communitarianism; ?> |
Ecology: <?php echo $ecology; ?></h6>
 -->
  

  
  
  
    <div id="base" class="">
    
    
    <div id='userName' >
    	<?php echo ucfirst($Name); ?>
    </div>
    
    

      <!-- Unnamed (Shape) -->
      <div id="u0" class="ax_shape">
        <img id="u0_img" class="img " src="logo.jpg"/>
        <!-- Unnamed () -->
        <div id="u1" class="text">
          <p><span>&nbsp;</span></p>
        </div>
      </div>

      <!-- Unnamed (Flow Shape) -->
      <div id="u2" class="ax_flow_shape">
     
        <form class="form-horizontal" role="form" method="post" action="seach_profile">
        	<div class="form-group">
							 
							<div class="col-sm-9">
								<input type="text" name="seach_profile_Key" class="form-control" id="" />
							</div>
								<button type="submit" class="btn btn-info">Search</button>			
			</div>
        </form>













        <!-- Unnamed () -->
        <div id="u3" class="text">
          <p><span>&nbsp;</span></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u4" class="ax_shape">
        <img id="u4_img" class="img " src="<?php echo $profile_pic; ?>"/>
        <!-- Unnamed () -->
        <div id="u5" class="text">
          <p><span>&nbsp;</span></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u6" class="ax_shape">
        <img id="u6_img" class="img " src="<?php echo 'images/scale/scale'.$points.'.png'; ?>"/>
        <!-- Unnamed () -->
        <div id="u7" class="text">
          <p><span>&nbsp;</span></p>
        </div>
      </div>

      <!-- Unnamed (HTML Button) -->
<!-- 
      <div id="u8" class="ax_html_button">
        <input id="u8_input" type="submit" value="Submit"/>
      </div>
 -->

      <!-- Unnamed (Flow Shape) -->
      <div id="u9" class="ax_flow_shape">
       <iframe  frameBorder="0" src="http://localhost/laraveltest/fulltopia/public/user_posts" width="530" height="557" scrolling="yes" onload='javascript:resizeIframe(this);'></iframe>
        <!-- Unnamed () -->
        <div id="u10" class="text">
          <p><span>&nbsp;</span></p>
        </div>
      </div>

      <!-- Unnamed (Flow Shape) -->
      <div id="u11" class="ax_flow_shape">
		<!--         <img id="u11_img" class="img " src="images/home/u9.png"/> -->
        <iframe  frameBorder="0" src="http://localhost/laraveltest/fulltopia/public/user_posts_submit" width="530" height="557"></iframe>
        
        <!-- Unnamed () -->
        <div id="u12" class="text">
          <p><span>&nbsp;</span></p>
        </div>
      </div>

      <!-- Unnamed (Flow Shape) -->
      <div id="u13" class="ax_flow_shape">
      <a href="http://www.w3schools.com/"><img id="u13_img" class="img " src="images/home/u13.png"/></a>
        <!-- Unnamed () -->
        <div id="u14" class="text">
          <p><span>&nbsp;</span></p>
        </div>
      </div>

      <!-- Unnamed (Flow Shape) -->
      <div id="u15" class="ax_flow_shape">
        <a href="http://www.w3schools.com/"><img id="u13_img" class="img " src="images/home/u15.png"/></a>
        <!-- Unnamed () -->
        <div id="u16" class="text">
          <p><span>&nbsp;</span></p>
        </div>
      </div>

      <!-- Unnamed (Flow Shape) -->
<!-- 
      <div id="u17" class="ax_flow_shape">
        <a href="http://www.w3schools.com/"><img id="u13_img" class="img " src="images/home/u17.png"/></a>
        <!~~ Unnamed () ~~>
        <div id="u18" class="text">
          <p><span>&nbsp;</span></p>
        </div>
      </div>
 -->

      <!-- Unnamed (Flow Shape) -->
      <div id="u19" class="ax_flow_shape">
        <a href="http://localhost/laraveltest/francisco/public/profile"><img id="u13_img" class="img " src="images/home/u19.png"/></a>
        <!-- Unnamed () -->
        <div id="u20" class="text">
          <p><span>&nbsp;</span></p>
        </div>
      </div>

      <!-- Unnamed (Flow Shape) -->
      <div id="u21" class="ax_flow_shape">
        <a href="http://www.w3schools.com/"><img id="u13_img" class="img " src="images/home/u21.png"/></a>
        <!-- Unnamed () -->
        <div id="u22" class="text">
          <p><span>&nbsp;</span></p>
        </div>
      </div>

      <!-- Unnamed (Flow Shape) -->
      <div id="u23" class="ax_flow_shape">
        <a href="http://www.w3schools.com/"><img id="u13_img" class="img " src="images/home/u23.png"/></a>
        <!-- Unnamed () -->
        <div id="u24" class="text">
          <p><span>&nbsp;</span></p>
        </div>
      </div>
    </div>
  </body>
</html>
