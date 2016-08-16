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
      
       <h1><?php the_field('aboutus_section_heading',$post->ID);?></h1>
		<p><?php the_field('aboutus_section_content',$post->ID);?></p>
    </header>  <!--header-section close-->
    
    <section class="attorneys">
      <table class="table-site">
         <tr>
           <th colspan="2"><h2><?php the_field('list_of_attorneys_heading',$post->ID);?></h2></th>
		   
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

<?php get_footer(); ?>