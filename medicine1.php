
<?php
session_start();
if($_SESSION['username'] == "")
{
	 header("location:index.php");
} 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Medicine Information</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/styles2.css" rel="stylesheet" type="text/css" />
<!--<title>Simple Sign Up Form by PremiumFreeibes.eu</title>-->

<link rel="stylesheet" type="text/css" href="./css/style1.css">
<style>
body
{
background-color:#d0e4fe;
background-image:url('images/background.jpg');
}
</style>
</head>

<body>


	
<!--<div id="container">
  <div id="header">
<div id="container" >
		<ul id="nav">
		<li><a href="index.html">Home</a></li>
		<li><a href="upload.html">Upload</a></li>
		<li><a href="sign_in.html">Sign In</a></li>
		<li><a href="sign_up.html">Sign Up</a></li>
		<li><a href="about.html">About</a></li>
	</ul>
</div>-->
  <!--  <ul class="menu">
      <li class="btn_1"><a href="#">lucky</a></li>
      <li class="line"></li>
      <li class="btn_2"><a href="#">keluuuu</a></li>
      <li class="line"></li>
      <li class="btn_3"><a href="#">akash agarwal</a></li>
      <li class="line"></li>
      <li class="btn_4"><a href="#">our team</a></li>
      <li class="line"></li>
      <li class="btn_5"><a href="#">contacts</a></li>
    </ul>
    <img src="images/logo.jpg" alt="" name="logo" width="244" height="52" id="logo"/> </div>-->
  <div id="content">
    <div id="leftPan">
      <div id="signup-form">
        
        <!--BEGIN #subscribe-inner -->
       <div id="signup-inner">
          <h2>Medicine details<br/> </h2>

        <!--	<div class="clearfix" id="header">
        	
       		<img id="signup-icon" src="./images/signup.png" alt="" />-->
                   
            
            </div>
		<!--	<p>Please complete the fields below, ensuring you use a valid email address as you will be sent a validation code which you will need the first time you login to the site.</p>-->

            
            <form id="send" action="medicine.php" method="post">
            	
                

		<p>
                <label for="name">Name</label>
                <input id="name" type="int" name="name" value="" />
                </p>
		<p>


		<p>
                <label for="rate">Rate</label>
                <input id="rate" type="int" name="rate" value="" />
                </p>
		
		

 		<p>	
		<label for="sample_number">sample_number</label>
                <input id="sample_number" type="text" name="sample_number" value="" />
                </p>

		<p>
                <label for="expiry_date">Expiry_date(YY-MM-DD)</label>
                <input id="expiry_date" type="date" name="expiry_date" value="" />
                </p>
		
                
                
        <!--        <p>
                <label for="website">Website</label>
                <input id="website" type="text" name="website" value="http://" />
                </p>
                
                <p>

                <label for="phone">Phone</label>
                <input id="phone" type="text" name="phone" value="" />
                </p>
                
                <p>
                <label for="country">Country</label>
                <input id="Country" type="text" name="country" value="" />
                </p>-->
                
                
          <!--      <p>
                <label for="profile">Tell Something about song</label>
                <textarea name="profile" id="profile" cols="3" rows="3"></textarea>

                </p>-->
                
                <p>

                <button id="submit" type="submit">Submit</button>
                </p>
                
            </form>
            
		
            </div>
        
        <!--END #signup-inner -->
        </div>
        
    <!--END #signup-form -->   
    </div>

    </div>
    <div id="rightPan">
      <div id="news">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p><a href="#">s</a></p>
      </div>
      <div id="shows">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div>
    </div>

    <div class="clear" id="end"></div>

  </div>



 <!-- <div align=center id="footer">
    <p><a href="#">HOME PAGE</a> | <a href="#">ABOUT</a> | <a href="#">PLAYLIST</a> | <a href="#">OUR TEAM</a> | <a href="#">CONTACTS</a><br/>
      Copyright &copy; Your Company Name | Design by <a href="http://freshtemplates.com/">Website Templates</a></p>
  </div>-->
</div>
</body>
</html>
