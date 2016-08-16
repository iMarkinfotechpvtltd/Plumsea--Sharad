<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="footer-nav">
 <div class="container">
   <div class="navigation">
        <ul>
		<!--START CODE USE FOR GETTING FOOTER MENU-->
		<?php

			$defaults = array(
			'theme_location'  => '',
			'menu'            => 'Footer_menu',
			'container'       => '',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'menu',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '%3$s',
			'depth'           => 0,
			'walker'          => ''
			);

			wp_nav_menu( $defaults );
	?>
	<!--END OF CODE USE FOR GETTING FOOTER MENU-->
	  </ul>
	  
   </div>  
 </div>   
 
<div class="copy-right">
   <p>© COPYRIGHT <?php echo date('Y')?>  <?php echo get_option_tree('footer_copyright_section');?> <span class="barnding">Powered By: <a target="_blank" href="https://www.imarkinfotech.com">iMark <span>I</span>nfotech</a></span></p>

</div> <!--copy-right-->
 </div>

 
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>

	
	
<!--****************************** START SCRIPT ADD BY DEVELOPER ***************************************--> 

<!--START CODE USE FOR ADD INTERNAL-PAGE CLASS TO ALL PAGES EXCLUDE HOME PAGE-->
<script type="text/javascript">
    jQuery(document).ready(function(){
       
            //var pageURL = jQuery(location).attr("href");
			//var pageName=jQuery(location).attr('pathname'); 
			var pathArray = window.location.pathname.split( '/' );
			var secondLevelLocation = pathArray[2];
		
			if(secondLevelLocation!='')
			{
				jQuery('.footer-nav').addClass('internal-page');
			}
					
    });
</script>
<!--END OF CODE USE FOR ADD INTERNAL-PAGE CLASS TO ALL PAGES EXCLUDE HOME PAGE-->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Enquire Form</h4>
      </div>
	  
	  
	  <?php echo do_shortcode( '[contact-form-7 id="123" title="Enquire Form"]' ); ?>
      
	  <!--<div class="modal-body">
        <input type="text"  id="name" name="name"   placeholder="Enter Name" ></br>
		<input type="email" id="email" name="email" placeholder="Enter Email"></br>
		<input type="tel"   id="phone" placeholder="phone_no"  placeholder="Enter Phone Number"></br>
		<textarea  name="msg_box" placeholder="Enter Message"></textarea>
		
      </div>-->
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>-->
      </div>
    </div>
  </div>
</div>


<!--************************************ Start Script use for enter Alphabets only in (Name) Text box********************-->
<script type="text/javascript">
jQuery(document).ready(function(){
jQuery.noConflict();
   jQuery("input[name='Name']").keypress(function(event){
       var inputValue = event.which;
       // allow letters and whitespaces only.
       if((inputValue > 33 && inputValue < 64) || (inputValue > 90 && inputValue < 97 ) || (inputValue > 123 && inputValue < 126)
&& (inputValue != 32)){
           event.preventDefault();
       }
   });
});
</script>

<!--************************************ End of Script use for enter Alphabets only in (Name) Text box********************-->


<!--**************************** Start Script use for enter number only in (PhoneNumber) Text box ********************-->

<script type="text/javascript">

jQuery(document).ready(function() {
  jQuery("input[name='Contact']").keydown(function (e) {
      // Allow: backspace, delete, tab, escape, enter and .
      if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
           // Allow: Ctrl+A, Command+A
          (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
           // Allow: home, end, left, right, down, up
          (e.keyCode >= 35 && e.keyCode <= 40)) {
               // let it happen, don't do anything
               return;
      }
      // Ensure that it is a number and stop the keypress
      if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
          e.preventDefault();
      }
  });
});

</script>

<script>

jQuery('.btn-form').click(function(){
	
   setTimeout(function(){ jQuery('.wpcf7-validation-errors').fadeOut('slow'); }, 7000);
   setTimeout(function(){ jQuery('.wpcf7-mail-sent-ok').fadeOut('slow'); }, 7000);
});
</script>

<!--**************************** End of Script use for enter number only in (PhoneNumber) Text box ********************-->


<!--************************************ Start Script use for enter Alphabets only in (Name) Text box********************-->
<script type="text/javascript">
jQuery(document).ready(function(){
jQuery.noConflict();
   jQuery("input[name='Name']").keypress(function(event){
       var inputValue = event.which;
       // allow letters and whitespaces only.
       if((inputValue > 33 && inputValue < 64) || (inputValue > 90 && inputValue < 97 ) || (inputValue > 123 && inputValue < 126)
&& (inputValue != 32)){
           event.preventDefault();
       }
   });
});
</script>

<!--************************************ End of Script use for enter Alphabets only in (Name) Text box********************-->

<!--**************************** Start Script use for enter number only in (PhoneNumber) Text box ********************-->

<script type="text/javascript">

jQuery(document).ready(function() {
  jQuery("input[name='Contact']").keydown(function (e) {
      // Allow: backspace, delete, tab, escape, enter and .
      if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
           // Allow: Ctrl+A, Command+A
          (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
           // Allow: home, end, left, right, down, up
          (e.keyCode >= 35 && e.keyCode <= 40)) {
               // let it happen, don't do anything
               return;
      }
      // Ensure that it is a number and stop the keypress
      if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
          e.preventDefault();
      }
  });
});

</script>

<!--**************************** End of Script use for enter number only in (PhoneNumber) Text box ********************-->

<!--************************************ END OF SCRIPT ADD BY DEVELOPER **************************************-->  
<?php wp_footer(); ?>
</body>
</html>
