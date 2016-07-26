<?php
/*
 Template Name: AboutUs 
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
      
       <h1><?php the_field('aboutus_section_heading',9)?></h1>
		<p><?php the_field('aboutus_section_content',9)?></p>
    </header>  <!--header-section close-->
    
	<!-- SHOW SUCCESS MESSAGE -->
			<div id="msg_success" class="alert alert-success" style="display:none">
				<strong>Success!</strong> The Attorney Profile has been deleted successfully .
			</div>
	 <!-- END OF SHOW SUCCESS MESSAGE -->
	
    <section class="attorneys">
      <table class="table-site">
         <tr>
           <th colspan="2"><h2><?php the_field('list_of_attorneys_heading',9)?></h2></th>
		   
		      <?php 
					$args=array
					(
							'post_type'      =>'attorneys',
							'posts_per_page' => -1,
							'order'          => 'ASC',
					);
					$attorneys = new WP_Query($args);
					
					if(!empty($attorneys -> have_posts()))
					{
					while( $attorneys -> have_posts() ) : $attorneys -> the_post();
				?>
						<tr>
							 <td><?php the_title();?></td>
							 <td>	
								<a class="btn btn-default btn-view" href="<?php the_permalink();?>">View Profile</a>
							 </td>
						</tr> 
		        <?php  
					endwhile; 
					wp_reset_query();
					}//end of if
					else
					{
					?>	
						<tr>
							<td><?php echo 'NO PROFILE AVAILABLE';?></td>
		                </tr>
					<?php
					}
			    ?>
		  
         </tr>
      </table>
    </section> <!--attorneys Close-->
  </div> <!--container-->

  
  
<script>
function deleteFunction(post_id) 
{
	alert(post_id);
	var loader='<div id="loader" class="overlay-loader"><img src="<?php echo  get_template_directory_uri(); ?>/images/loader.gif" ></div>'; 
	jQuery('.table-site').empty().append(loader);
	jQuery.ajax({
		type: "POST",
		url:"<?php bloginfo('template_url'); ?>/ajax/delete_profile.php",
		data:{post_id:post_id,format:'raw'}, 
		success:function(resp){
			if( resp !="")
			{ 
				jQuery('#msg_success').show();
				jQuery('.attorneys').empty().append(resp);
				
				setTimeout(function() { // this will automatically close the alert and remove this if the users doesnt close it in 10 secs
				jQuery('#msg_success').hide();

				}, 10000);
			} 
			else
			{
				jQuery('.attorneys').empty().append(resp);
			}
			
		}
    });
}
</script>


<?php get_footer(); ?>