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
	 
	 <?php 
	 //GETTING CUSTOM FIELD VALUES
				$bio_heading = get_field('bio_heading',$post->ID);
	            $bio_desc    = get_field('bio_section_description',$post->ID);
				
				$ed_heading	 = get_field('education_heading',$post->ID);
	            $ed_desc     = get_field('education_section_description',$post->ID);
				
				$adm_heading = get_field('admissions_heading',$post->ID);
				$adm_desc    = get_field('admissions_section_description',$post->ID); 
	
				$cont_heading= get_field('contact_info_heading',$post->ID);
				$cont_email  = get_field('contact_email',$post->ID);
				$cont_mobile = get_field('contact_mobile',$post->ID);          
	            $cont_faxno  = get_field('contact_faxno',$post->ID); 
		
		if(!empty($bio_heading))
		{
		?>
			 <h3><?php echo $bio_heading;?></h3>
		
		<?php
		}
		else
		{
		?>	
			 <h3>BIO:</h3>
		<?php
		}
		?>
      
       <div class="content-box">
	         
		<?php 
		
					if(!empty($bio_desc))
					{
						echo $bio_desc;
					}
					else
					{
						echo 'NO BIO RECORD AVAILABLE';
					
					}
					
		 if(!empty($ed_heading && $ed_desc))
		 {
		 ?>
			  <h4><?php echo $ed_heading;?></h4>
			
         <?php          echo $ed_desc;
		 }
		 else
		 {
		?>
			   <h4>Education:</h4>
		 <?php
				echo 'NO EDUCATION RECORD AVAILABLE ';
		 }
		

		 if(!empty($adm_heading && $adm_desc))
		 {
		 ?>
			  <h4><?php echo $adm_heading;?></h4>
			
         <?php          echo $adm_desc;
		 }
		 else
		 {
		?>
			   <h4>Admissions:</h4>
		 <?php
				echo 'NO ADMISSIONS RECORD AVAILABLE ';
		 }
		 
		 
		 if(!empty($cont_heading)) 
		 {
		?>
			 <h4><?php the_field('contact_info_heading',$post->ID);?></h4>
		 <?php
		 }
		 else
		 {
		?>
			 <h4>Contact Info:</h4>
		 <?php
		 }
		 
		 if(!empty($cont_email))
		 {
		?>	 
			<div class="mail-d"><span class="glyphicon glyphicon-envelope"></span> 
				<a href="mailto:<?php echo $cont_email;?>"><?php echo $cont_email;?></a>
			</div>
		 <?php
		 }
		 else
		 {
		 ?>	 
			<div class="mail-d"><span class="glyphicon glyphicon-envelope"></span> 
				<a href="mailto:<?php echo $cont_email;?>">NO EMAIL AVAILABLE</a>
			</div>
		 <?php
		 }
		
        
         
		 if(!empty($cont_mobile))
		 {
		?>	 
			<div class="mail-d"><span class="fa-mobile"></span>
			<a href="tel:+<?php echo $cont_mobile;?>">v: <?php echo $cont_mobile;?></a>
			</div>
		 <?php
		 }
		 else
		 {
		 ?>	 
			<div class="mail-d"><span class="fa-mobile"></span>
			<a href="tel:+<?php echo $cont_mobile;?>">v: NO MOBILE NO. AVAILABLE </a>
			</div>
		 <?php
		 }
		
		
		if(!empty($cont_faxno))
		 {
		?>	 
			 <div class="mail-d"><span class="fa-fax"></span>f: <?php echo $cont_faxno;?></div>
		 <?php
		 }
		 else
		 {
		 ?>	 
			 <div class="mail-d"><span class="fa-fax"></span>f: NO FAX NO. AVAILABLE</div>
		 <?php
		 }
		?>
       
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