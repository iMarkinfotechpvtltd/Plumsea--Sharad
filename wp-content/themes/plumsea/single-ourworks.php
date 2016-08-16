<?php get_header();

global $post;

// echo '<pre>';

// print_r($post);

// echo '</pre>';

// die;
?>  

<style>
.Formsubject {
    display: none;
}


</style>
<script>
jQuery(document).ready(function() {
	var product_name=jQuery('#post_title').val();
	jQuery('.btn-primary').click(function()
	{
		jQuery("input[name='Formsubject']").val(product_name);
	});	 
    	
});
</script>
<input type="hidden" id="post_title" value="<?php echo $post->post_title;?>" />
  <div class="container contact-width"> 
    <header class="header-section">
	
        <a class="logo" href="<?php echo site_url();?>"><img src="<?php echo get_option_tree('logo_image');?>" alt="Logo Image" /></a>
      
       <h1><?php echo $post->post_title;?></h1>
      <p><?php echo $post->post_content;?></p>
 
    </header>  <!--header-section close-->
    
  <section class="footwear"> 
     <div class="row"> 
       <div class="col-xs-12">
	   <?php
				/*Getting  footwear Image 1 */
					$foot_image1=get_post_meta($post->ID,'patent_number-1_image',true);
					$foot1 = wp_get_attachment_image_src($foot_image1, 'ourwork_internal_image_size');						
		if(!empty($foot1))
			{
		?>
				<img src="<?php echo $url= $foot1[0]?>" alt="<?php the_title(); ?>" />
		<?php
			}
			else
			{
		?>	
				<img src="http://i.imgur.com/VXkhhR6.png" alt="<?php the_title(); ?>" />
		<?php	
			}
		
			  $patent1_heading=get_field('patent_number-1_heading',$post->ID);
		      if(!empty($patent1_heading))
			  {
		?>
       
        <div class="pattent-number"><p><?php the_field('patent_number-1_heading',$post->ID);?></p></div>
					
					<?php
              }//end if
              			
						//getting content						
					     $patent_number1=get_field('patent_number-1_description',$post->ID);
						 if(!empty($patent_number1))
						 {
							 echo $patent_number1;
						 }
					?> 
       </div>
       
       <div class="col-xs-12">
        <?php
				/*Getting  footwear Image 2 */
					$foot_image2=get_post_meta($post->ID,'patent_number-2_image',true);
					$foot2 = wp_get_attachment_image_src($foot_image2, 'ourwork_internal_image_size');						
		
		if(!empty($foot2))
			{
		?>
				<img src="<?php echo $url= $foot2[0]?>" alt="<?php the_title(); ?>" />
		<?php
			}
			else
			{
		?>	
				<img src="http://i.imgur.com/VXkhhR6.png " alt="<?php the_title(); ?>" />
		<?php	
			}
			
			 $patent2_heading=get_field('patent_number-2_heading',$post->ID);
		      if(!empty($patent2_heading))
			  {
		?>
				<div class="pattent-number"><p><?php the_field('patent_number-2_heading',$post->ID);?></p></div>
        
					<?php 
			  }//end if
					
					     //getting content
					     $patent_number2=get_field('patent_number-2_description',$post->ID);
						 if(!empty($patent_number2))
						 {
							 echo $patent_number2;
						 }
					?> 
               
       </div>
       
       <div class="col-xs-12">
	   
	   <?php
				/*Getting  footwear Image 2 */
					$foot_image3=get_post_meta($post->ID,'patent_number-3_image',true);
					$foot3 = wp_get_attachment_image_src($foot_image3, 'ourwork_internal_image_size');						
			if(!empty($foot3))
			{
		?>
				<img src="<?php echo $url= $foot3[0]?>" alt="<?php the_title(); ?>" />
		<?php
			}
			else
			{
		?>	
				<img src="http://i.imgur.com/VXkhhR6.png" alt="<?php the_title(); ?>" />
		<?php	
			}
		
			
			  $patent3_heading=get_field('patent_number-3_heading',$post->ID);
		      if(!empty($patent3_heading))
			  {
		?>
				<div class="pattent-number"><p><?php the_field('patent_number-3_heading',$post->ID);?></p></div>
        
			      <?php
			  }//end if	

                 //getting content 			  
					 $patent_number3=get_field('patent_number-3_description',$post->ID);
					 if(!empty($patent_number3))
					 {
						 echo $patent_number3;
					 }
					?> 
               
       </div>
	   
		<!--<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
				Enquire Now
		</button>-->
	   
	   
     </div> 
	 
	
	 
  </section>   
  </div> <!--container-->
  
<?php get_footer();?>