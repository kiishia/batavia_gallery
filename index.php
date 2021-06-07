<?php get_header(); /* Tells WordPress to include header.php */ ?><section class="container-fluid aboutbg">
      
      <div class="container">
          
          
          
         
          
          <div class="col-md-6 text-center">
<?php get_header(); /* Tells WordPress to include header.php */ ?>
     <section class="container-fluid aboutbg text-center">
        <div class="container">
            
        
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=10');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
            <div><p class="about-text"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>    
    	
 <div class="blocker"></div>
            
      </div><!--  container-->
    </section>

              
              <img class="img-responsive book" src="images/book%20now.JPG">
              
                </div>
       
              <div class="col-md-6">
              <img class="img-responsive" src="images/gallery.JPG">
              
            
          
          </div>
       </div>
      
      </section>
  
      
<!--      NEW SECTION-->
      
      
      
      <section class="container-fluid bottom">
      <div class="container">
        
              
          
              <h3>What's on WA Shipwrecks</h3>
              
             
<!--          div class row ending-->
          
          
<!--
          <div class="col-md-6">
        <img class="img-responsive" src="images/tours.jpg">
              
          </div>
          
              
          <div class="col-md-6">
              <p class="tour">Make the most of your visit to the WA Shipwrecks Museum with a free tour.</p>

<p class="tour">Bookings are essential and can be made by calling 1300 134 081 or emailing reception@museum.wa.gov.au </p>

<p class="tour">Site accessibility information can be found on the main WA Shipwrecks Museum page.</p>
             
              
              <h4>School trips and tours</h4>
              
          </div>


-->
          
<?php $post_id = 5357;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4><?php echo $queried_post->post_title; ?></h4>
          <p class="tour"><?php echo $queried_post->post_excerpt; ?></p>
<?php echo '<a class="readmore" href="'.get_permalink($queried_post).'"><br>CONTINUE READING</a>';?>                       
   
          
          
          
          
          </div>
<!--          container ending -->
      
      </section><?php get_footer(); /* Tells WordPress to include footer.php */ ?>