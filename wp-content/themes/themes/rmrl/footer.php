<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=container div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 */
?>



	<div class="row2">
    
        <div class="row2inner">
        
            <div class="sidebar4">
            	
                <h2>Events</h2>
                <p style="padding-bottom:20px;">Showcasing Tamil heritage through lectures, exhibitions, , seminars.</p>
                
            	<div class="sidebar4-inner1">
				
					<?php //ec3_get_calendar(); ?>
                
                </div>
            
            	<div class="sidebar4-inner2"><?php //ec3_get_events(5); ?></div>
              
            	<br class="clearfloat" />
            
            <!-- end .sidebar4 --></div>
              
            <div class="sidebar5">
            	
                <div class="footer-sidebar-div" style="width:360px; margin:0 auto;"> 
                    <?php
                        $page_id1 = 238;
                        $page_data1 = get_page( $page_id1 );
                        $content1 = apply_filters('the_content', $page_data1->post_content);
                        echo $content1; // Output Content
                    ?>
				</div>
            	
                <div class="footer-sidebar-div" style="width:360px; margin:0 auto; background:none; padding-top:15px;">
                    
                
                <h2>Visitors' Impressions</h2>
                
                
    	
    <div id="testimonials-slider">
        <!-- start Basic Jquery Slider -->
                    
                    <ul class="bjqs">
        
                        <li>
						
							<?php 
                                $page_id = 62;
                                $page_data = get_page( $page_id );
                                $content = apply_filters('the_content', $page_data->post_content);
                                echo $content; // Output Content
                            ?>
                            
                        </li>
        
                        <li>
						
							<?php 
                                $page_id = 64;
                                $page_data = get_page( $page_id );
                                $content = apply_filters('the_content', $page_data->post_content);
                                echo $content; // Output Content
                            ?>
                            
                        </li>
        
                        <li>
						
							<?php 
                                $page_id = 66;
                                $page_data = get_page( $page_id );
                                $content = apply_filters('the_content', $page_data->post_content);
                                echo $content; // Output Content
                            ?>
                            
                        </li>
        
                        <li>
						
							<?php 
                                $page_id = 68;
                                $page_data = get_page( $page_id );
                                $content = apply_filters('the_content', $page_data->post_content);
                                echo $content; // Output Content
                            ?>
                            
                        </li>
        
                        <li>
						
							<?php 
                                $page_id = 70;
                                $page_data = get_page( $page_id );
                                $content = apply_filters('the_content', $page_data->post_content);
                                echo $content; // Output Content
                            ?>
                            
                        </li>
        
                        <li>
						
							<?php 
                                $page_id = 72;
                                $page_data = get_page( $page_id );
                                $content = apply_filters('the_content', $page_data->post_content);
                                echo $content; // Output Content
                            ?>
                            
                        </li>
        
                        <li>
						
							<?php 
                                $page_id = 74;
                                $page_data = get_page( $page_id );
                                $content = apply_filters('the_content', $page_data->post_content);
                                echo $content; // Output Content
                            ?>
                            
                        </li>
        
                        <li>
						
							<?php 
                                $page_id = 76;
                                $page_data = get_page( $page_id );
                                $content = apply_filters('the_content', $page_data->post_content);
                                echo $content; // Output Content
                            ?>
                            
                        </li>
        
                        <li>
						
							<?php 
                                $page_id = 79;
                                $page_data = get_page( $page_id );
                                $content = apply_filters('the_content', $page_data->post_content);
                                echo $content; // Output Content
                            ?>
                            
                        </li>
        
                        <li>
						
							<?php 
                                $page_id = 81;
                                $page_data = get_page( $page_id );
                                $content = apply_filters('the_content', $page_data->post_content);
                                echo $content; // Output Content
                            ?>
                            
                        </li>
        
                        <li>
						
							<?php 
                                $page_id = 83;
                                $page_data = get_page( $page_id );
                                $content = apply_filters('the_content', $page_data->post_content);
                                echo $content; // Output Content
                            ?>
                            
                        </li>
        
                        <li>
						
							<?php 
                                $page_id = 85;
                                $page_data = get_page( $page_id );
                                $content = apply_filters('the_content', $page_data->post_content);
                                echo $content; // Output Content
                            ?>
                            
                        </li>
            
                    </ul>
        <!-- end Basic jQuery Slider -->
      </div>
      <!-- End outer wrapper -->

        
    <!-- Load jQuery and the plug-in -->
    <script src="https://www.rmrl.in/wp-content/themes/rmrl/scripts/jquery-1.6.2.min.js"></script>
    <script src="https://www.rmrl.in/wp-content/themes/rmrl/scripts/basic-jquery-slider.js"></script>
    
    <!--  Attach the plug-in to the slider parent element and adjust the settings as required -->
    <script>
      $(document).ready(function() {
        
        $('#banner').bjqs({
          'animation' : 'fade',
          'width' : '100%',
          'height' : 484
        });
        
        $('#services-slider').bjqs({
          'animation' : 'fade',
          'width' : 320,
          'height' : 160
        });
        
        $('#services-slider-sidebar').bjqs({
          'animation' : 'fade',
          'width' : 284,
          'height' : 220
        });
        
        $('#testimonials-slider').bjqs({
          'animation' : 'fade',
          'width' : 360,
          'height' : 165
        });
        
      });
    </script>
				</div>
                
            <!-- end .sidebar5 --></div>
              
            <br class="clearfloat" />
          
        </div>
    	
        <div class="newsscroller">
        	<div class="newsscroller-inner">
                <div style="float:left; width:90px; font-size:11px; color:#666; line-height:35px; padding-top:5px; padding-left:10px;"><strong>IN THE NEWS</strong></div>
                
                <div class="marquee" id="mycrawler">
                    <?php
                        $page_id = 110;
                        $page_data = get_page( $page_id );
                        $content = apply_filters('the_content', $page_data->post_content);
                        echo $content; // Output Content
                    ?>
                </div>
            </div>
        </div>

      <script type="text/javascript">

		marqueeInit({
		
		  uniqueid: 'mycrawler',
		
		  style: {
		
			'padding': '0px',
		
			'width': '700px',
		
			'margin': '0'
		
		  },
		
		  inc: 0, //speed - pixel increment for each iteration of this marquee's movement
		
		  mouse: 'pause', //mouseover behavior ('pause' 'cursor driven' or false)
		
		  moveatleast: 4,
		
		  neutral: 150,
		
		  savedirection: true
		
		});
		
	</script>

        
    </div>
    <div style="position:absolute;filter:alpha(opacity=0);opacity:0.001;z-index:10;">
<a href="https://www.highpowerlaserpointer.com/">high power laser pointer</a>
<a href="https://www.highpowerlaserpointer.com/cate/blue-laser-pointers/">blue laser pointer</a>
<a href="https://www.laserpointermall.com/">high power laser pointer</a>
<a href="https://www.laserpointermall.com/category/laser-pointers/blue-laser-pointers/">blue laser pointers</a>
<a href="https://www.laserpointeronsale.com/category/green-laser-pointers/">green laser pointers</a>
<a href="https://www.bestlaserpointerpen.com/">best laser pointer</a>
<a href="https://www.luxurytime24.com/">luxurytime24.com</a>
</div>

<div class="footer">
    
    <div class="footerinner">
    	<p>© 
			
			  <SCRIPT language=Javascript>
				var now = new Date();
				document.write(getFullYear(now));
				function getFullYear(d){	
					var y = d.getYear();
					if (y < 1000) y += 1900;
					return y;
				}
			  </SCRIPT> 
              
       	    RMRL. All reserved.   |   Privacy Policy   |   Terms of Service   |   Copyright Policy</p>
    </div>

<!-- end .footer --></div>
  
  <div class="social"><a href="https://www.facebook.com/rmrl.in" target="_blank" class="fblink">Facebook</a></div>
  
  <script type="text/javascript">
/* <![CDATA[ */
jQuery(document).ready( function($) {
	$('div.innermenu > ul > li:first-child').addClass('first-item');
	$('div.innermenu > ul > li:last-child').addClass('last-item');
	$('div.innermenu2 > ul > li:first-child').addClass('first-item');
	$('div.innermenu2 > ul > li:last-child').addClass('last-item');
} );
/* ]]> */
</script>


  <script type="text/javascript"> Cufon.now(); </script>
    
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
							