<!--<?php
//include"adminlogcheck.php"; 
?>
<html>
<head>
<title>SocialNet</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />    
</head>
<body>
<div class="content">
      <div class="content_bg">
	  <div class="mainbar">	  
<CENTER><br><br>
<h1>COMPOSE</h1><br>
<form name='compose' action='msg.php' method='post'>
<table align='center'>
<tr><td><th align='right' valign='middle'>Roll Number:</th></td><td><input type='text' name='roll_no' id='roll_no'></td></tr>
</table>
<br>
<textarea cols='40' rows='10' type='text' name='message' id='message'></textarea>
<h3>Write your Text above</h3>
<input type='submit' value='Send Message' style="background-color:green; color:#ffffff; padding:4px; font-weight: bold;">
</div>
<?php //include"adminsidebar.php"; ?>
        <div class="clr"></div>
      </div>
</div>

</body>
</html> -->
<?php include"adminlogcheck.php"; ?>

<html>
<head>
<title>SocialNet</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
  <div class="main_resize">
   <div class="header">
      <div class="logo">
        <h1><a href="#"><span>Received Messages</span> </a></h1>
      </div>
	  </div>
<div class="content">
      <div class="content_bg">
        <div class="mainbar">
		<div class="article">   
            
		    <CENTER>
<h1>COMPOSE</h1><br>
<form name='compose' action='msg.php' method='post'>
<table align='center'>
<tr><td><th align='right' valign='middle'>Roll Number:</th></td><td><input type='text' name='roll_no' id='roll_no'></td></tr>
</table>
<br>
<textarea cols='40' rows='10' type='text' name='message' id='message'></textarea>
<h3>Write your Text above</h3>
<input type='submit' value='Send Message' style="background-color:green; color:#ffffff; padding:4px; font-weight: bold;">
</div>
        
            <div class="clr"></div>
			
			 <div class="clr"></div>
          </div>
        </div>
		
        <?php include "adminsidebar.php"; ?> 
        <div class="clr"></div>
      </div>
    </div>
</div>	
</div>
</body>
</html>

