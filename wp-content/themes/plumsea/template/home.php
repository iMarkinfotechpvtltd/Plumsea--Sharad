<?php
/*
 Template Name: Home
 */
?>

<?php get_header(); 

global $post;

// echo '<pre>';
// print_r($post);
// echo '</pre>';
// die;
?>

<div class="site-wrap">
  <div class="container"> 
    <div class="header-section">  
		
       <a class="logo" href="<?php echo site_url();?>"><img src="<?php echo get_option_tree('logo_image');?>" alt="Logo Image" /></a>
       
	   <h1><?php the_field('home_section_unparalled_heading',$post->ID);?></h1>
        <p><?php the_field('home_section_unparalled_content',$post->ID);?></p>
    </div>  <!--header-section close-->
  </div> <!--container-->
   
		<?php
				/*Getting  Home Banner Image */
					$Banner_image=get_post_meta($post->ID,"expert_section_banner_image",true);
					$Banner = wp_get_attachment_image_src($Banner_image, 'expert_section_banner_image_size');	
		
			if(!empty($Banner))
			{
		?>
				<div class="home-page-banner" style="background-image:url('<?php echo $url=$Banner[0]?>')">
		<?php 
			}
			else
			{
		?>		
				<div class="home-page-banner" style="background-image:url('http://placehold.it/1920x766&amp;text=No image found')">
		<?php	
			}
		?>
  <div class="container">
    <div class="counseling">
      <h3><?php the_field('home_section_expert_heading',$post->ID)?></h3>
		<p><?php the_field('home_section_expert_content',$post->ID)?></p>
      
     <!--  <a class="btn-know-more" href="#">know more</a>-->
    </div>
    
  </div> 
</div>   <!--home-page-banner Close-->
</div> <!--Site-wrap-->
<?php get_footer(); ?>