<?php
/*
 Template Name: OurWork 
 */
?>

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
      
      <h1><?php the_field('our_work_heading',$post->ID);?></h1>
		  <?php the_field('our_work_description',$post->ID);?>
      
    </header>  <!--header-section close-->
    
     <section class="work-section">
       <div class="row">
	   <?php 
				$args=array
				(
						'post_type'      =>'ourworks',
						'posts_per_page' => -1,
						'order'          => 'ASC',
				);
				$i=0;
				$ourwork = new WP_Query($args);
			
	            while( $ourwork -> have_posts() ) : $ourwork -> the_post();
	      ?>
					
				<div class="col-xs-12 col-sm-6">
			 
				<?php the_post_thumbnail('ourwork_image_size');?>	
				  <div class="mid-caption">
					   <a href="<?php the_permalink(); ?>"><h3><?php the_title();?></h3></a>
					   <a href="<?php the_permalink(); ?>"><h2><?php the_field('percentage_section',$ourwork->ID);?></h2></a>
					   <a href="<?php the_permalink(); ?>"><p><?php the_field('allowance_rate_section',$ourwork->ID);?></p></a>
				  </div> 
				  <div class="hover-overlay"></div>
			   </div> <!--col-xs-12 col-sm-6 close-->
					 
		 <?php 
				$i++;
				if($i%2==0)
				{
				?>
					</div>
					</section> <!--work-section-->
					
					<section class="work-section">
					<div class="row">
				
                <?php				
				}
				endwhile; 
				wp_reset_query();
		 ?>
       
       </div>
     </section> <!--work-section-->
     
  </div> <!--container-->

<?php get_footer(); ?>