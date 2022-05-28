<?php
/**
 * The Template for displaying all single posts.
 *
 */

get_header(); ?>


    
<div class="container">
  <div class="row1inner">
    <div class="contentcontainer">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <h1 class="entry-title"><?php the_title(); ?></h1>

					

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

					
				</div><!-- #post-## -->

<?php endwhile; // end of the loop. ?>
          
		</div>
      <!-- end .contentcontainer --></div>
      <div class="sidebar3">
        
        <div class="sidebar-div">
        
        	<h2>Catalogue</h2>
            <?php 
				$page_id = 58;
				$page_data = get_page( $page_id );
				$content = apply_filters('the_content', $page_data->post_content);
				echo $content; // Output Content
			?>
                
       </div>
        
        <div class="sidebar-div" style="height:290px;">
            	<h2>Services</h2>
                
                
    	
    <div id="services-slider">
        <!-- start Basic Jquery Slider -->
                    
                    <ul class="bjqs">
                        
                        <li>
						
							<?php 
                                $page_id = 12;
                                $page_data = get_page( $page_id );
                                $content = apply_filters('the_excerpt', $page_data->post_excerpt);
                                $title = apply_filters('the_title', $page_data->post_title);
                                $permalink = get_permalink($page_id);
                            ?>
                                <img src="<?php echo get_post_meta($page_id, 'icon_img', $single=true) ?>" border="0" align="left" style="margin:5px 15px; margin-bottom:80px;">
                            <?php
                                echo '<p><strong>'.$title.'</strong></p>';
                                echo $content;
                                echo '<p align="right"><a href="'.$permalink.'">More...</a></p>'; // Output Content
                            ?>
                
                		</li>
            
                        <li>
						
							<?php 
                                $page_id = 31;
                                $page_data = get_page( $page_id );
                                $content = apply_filters('the_excerpt', $page_data->post_excerpt);
                                $title = apply_filters('the_title', $page_data->post_title);
                                $permalink = get_permalink($page_id);
                            ?>
                                <img src="<?php echo get_post_meta($page_id, 'icon_img', $single=true) ?>" border="0" align="left" style="margin:5px 15px; margin-bottom:80px;">
                            <?php
                                echo '<p><strong>'.$title.'</strong></p>';
                                echo $content;
                                echo '<p align="right"><a href="'.$permalink.'">More...</a></p>'; // Output Content
                            ?>
                
                		</li>
            
                        <li>
						
							<?php 
                                $page_id = 33;
                                $page_data = get_page( $page_id );
                                $content = apply_filters('the_excerpt', $page_data->post_excerpt);
                                $title = apply_filters('the_title', $page_data->post_title);
                                $permalink = get_permalink($page_id);
                            ?>
                                <img src="<?php echo get_post_meta($page_id, 'icon_img', $single=true) ?>" border="0" align="left" style="margin:5px 15px; margin-bottom:100px;">
                            <?php
                                echo '<p><strong>'.$title.'</strong></p>';
                                echo $content;
                                echo '<p align="right"><a href="'.$permalink.'">More...</a></p>'; // Output Content
                            ?>
                
                		</li>
            
                    </ul>
        <!-- end Basic jQuery Slider -->
      </div>
      <!-- End outer wrapper -->
                
       </div>
        
        <div class="sidebar-div" style="height:290px; background:none;">
                
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
        
      <!-- end .sidebar3 --></div>
    
    </div>
    
    
  <!-- end .container --></div>
  


        
    <!-- Load jQuery and the plug-in -->
    <script src="https://www.rmrl.in/wp-content/themes/rmrl/scripts/jquery-1.6.2.min.js"></script>
    <script src="https://www.rmrl.in/wp-content/themes/rmrl/scripts/basic-jquery-slider.js"></script>
    
    <!--  Attach the plug-in to the slider parent element and adjust the settings as required -->
    <script>
      $(document).ready(function() {
        
        $('#services-slider').bjqs({
          'animation' : 'fade',
          'width' : 284,
          'height' : 220
        });
        
        $('#testimonials-slider').bjqs({
          'animation' : 'fade',
          'width' : 284,
          'height' : 230
        });
        
      });
    </script>
    
    <br class="clearfloat" />
            
<?php get_footer(); ?>