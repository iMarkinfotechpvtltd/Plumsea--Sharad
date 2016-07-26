<?php 
include('../../../../wp-config.php');
global $wpdb;
$postid=$_POST['post_id'];

$result =$wpdb->get_results('SELECT ID FROM `im_posts` where `post_type`="attorneys" and `post_status` = "publish"');
$count_post= count($result);

if($count_post > 1 )
{
	
	$wpdb->query(
			$wpdb->prepare('DELETE FROM im_posts WHERE ID = %d', $postid)
		  );

?>		  
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
					while( $attorneys -> have_posts() ) : $attorneys -> the_post();
				?>
						<tr>
							 <td><?php the_title();?></td>
							 <td>	
								<input type="hidden" name="activepost" id="activepost" value="<?php echo the_ID(); ?>" />
								<a class="btn btn-default btn-view" href="<?php the_permalink();?>">View Profile</a>
								<a class="btn btn-default btn-view btn-delete" onclick="deleteFunction(<?php echo the_ID(); ?>)">Delete Profile</a>
							 </td>
						</tr> 
		        <?php  endwhile; 
				       wp_reset_query();
			    ?>
		  
         </tr>
      </table>
<?php 	  
}
else
{
	
	$wpdb->query(
			$wpdb->prepare('DELETE FROM im_posts WHERE ID = %d', $postid)
		  );
	
	?>
	
	<table class="table-site">
         <tr>
           <th colspan="2"><h2><?php the_field('list_of_attorneys_heading',9)?></h2></th>
				<tr>
					<?php echo 'There is No Profile available to be Deleted ';?>
				</tr>
		   </tr>
      </table>
	
<?php
	}
?>

  
		  
		
