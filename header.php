<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
      
      <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
      
      <title>   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

 
      <link rel="stylesheet" href="https://use.typekit.net/orx4gxu.css">
      <link rel="stylesheet" href="style.css" /><?php wp_head(); ?>
  </head>
    
    
    
    
  <body>
      <header class="container-fluid herobg">

      <nav class="navbar navbar-inverse container-fluid navedge">
          
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        
<!--      <a class="navbar-brand" href="#">WebSiteName</a>-->
        <img class="logo" src="images/logo.jpg">
        
    </div>
      
      
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="visit.html">Visit</a></li>
        <li><a href="#">What's new</a></li>
        <li><a href="#">Support</a></li>
      </ul>
     
    </div>
  </div>
</nav>

      
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            
            
        <h1> Batavia Shipwreck Gallery </h1>
        <img class="blood" src="images/blood.png">
   </div> <!--col-->
            
               <div class="col-md-6"> 
                   
               </div> <!--col-->

                        
            </div><!--row-->
    </div><!--containter-->
      
      </header>