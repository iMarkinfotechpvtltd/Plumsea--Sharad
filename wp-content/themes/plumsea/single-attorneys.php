<?php get_header();

global $post;

// echo '<pre>';

// print_r($post);

// echo '</pre>';

// die;
?>



<div class="container"> 
    <header class="header-section">  
	
       <a class="logo" href="<?php echo site_url();?>"><img src="<?php echo get_option_tree('logo_image');?>" alt="Logo Image" /></a>
      
       <h1><?php echo $post->post_title;?></h1>
       <p><?php the_field('of_counsel_section',$post->ID)?></p>
    </header>  <!--header-section close-->
  </div> 
  
  <div class="container">   
     <section class="biography">
       <h3><?php the_field('bio_heading',$post->ID);?></h3>
       <div class="content-box">
	   
			<?php the_field('bio_section_description',$post->ID);?>
         
         <h4><?php the_field('education_heading',$post->ID);?></h4>
         
			<?php the_field('education_section_description',$post->ID);?>
        
        
        <h4><?php the_field('admissions_heading',$post->ID);?></h4>
			<?php the_field('admissions_section_description',$post->ID);?>
         
         
         <h4><?php the_field('contact_info_heading',$post->ID);?></h4>
         
         <div class="mail-d"><span class="glyphicon glyphicon-envelope"></span> 
			<a href="mailto:<?php the_field('contact_email',$post->ID);?>"><?php the_field('contact_email',$post->ID);?></a>
		</div>
         <div class="mail-d"><span class="fa-mobile"></span>
			<a href="tel:+<?php the_field('contact_mobile',$post->ID);?>">v: <?php the_field('contact_mobile',$post->ID);?></a>
		</div>
         <div class="mail-d"><span class="fa-fax"></span>f: <?php the_field('contact_faxno',$post->ID);?></div>
        
          <div class="profile0">
            <div class="img-div">
			
			<?php 
				if ( has_post_thumbnail() ) 
				{
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'profile_image_size' );
			?>
						<img src="<?php echo $image[0]; ?>" alt="Profile_image"/>
            <?php
                } 
				else 
				{
			?>
					<img src="http://placehold.it/197x195&amp;text=No image found" alt="<?php the_title(); ?>" />
            <?php 
			    } 
			?> 
			
            </div>
           <h4><?php echo $post->post_title;?></h4>
           <p><?php the_field('of_counsel_section',$post->ID)?></p>
          </div> <!--profile0-->
        
       </div>
     </section>
    
  </div> <!--container-->
  <br>
  <br>
  <br>
  <br>
  <br> 


<?php get_footer();?>