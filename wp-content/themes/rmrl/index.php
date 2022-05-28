<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>

<div class="mainbanner">
    	
    <div id="banner">
        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
          <li>
			  	<div class="content" id="slide1">
               		<div class="slidecenter">
                        <div class="slideinner">
                            <?php 
								$page_id = 2;
								$page_data = get_page( $page_id );
								$content = apply_filters('the_content', $page_data->post_content);
								echo $content; // Output Content
							?>
                        </div>
                     </div>
			   </div>
          </li>
          <li>
			  	<div class="content" id="slide2">
               		<div class="slidecenter">
                        <div class="slideinner">
                            <?php 
								$page_id = 7;
								$page_data = get_page( $page_id );
								$content = apply_filters('the_content', $page_data->post_content);
								echo $content; // Output Content
							?>
                        </div>
                     </div>
			   </div>
          </li>
          <li>
			  	<div class="content" id="slide3">
               		<div class="slidecenter">
                        <div class="slideinner">
                            <?php 
								$page_id = 9;
								$page_data = get_page( $page_id );
								$content = apply_filters('the_content', $page_data->post_content);
								echo $content; // Output Content
							?>
                        </div>
                     </div>
			   </div>
          </li>
          <li>
			  	<div class="content" id="slide4">
               		<div class="slidecenter">
                        <div class="slideinner">
                            <?php 
								$page_id = 49;
								$page_data = get_page( $page_id );
								$content = apply_filters('the_content', $page_data->post_content);
								echo $content; // Output Content
							?>
                        </div>
                     </div>
			   </div>
          </li>
        </ul>
        <!-- end Basic jQuery Slider -->
      </div>
      <!-- End outer wrapper -->
</div>


<div class="container">

	<div class="row1">
    
        <div class="row1inner">
        
            <div class="sidebar1">
            	<h2>Catalogue</h2>
                <?php 
					$page_id = 58;
					$page_data = get_page( $page_id );
					$content = apply_filters('the_content', $page_data->post_content);
					echo $content; // Output Content
				?>
            <!-- end .sidebar1 --></div>
              
            <div class="sidebar2">
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
                                <!--<img src="<?php echo get_post_meta($page_id, 'icon_img', $single=true) ?>" border="0" align="left" style="margin:5px 15px; margin-bottom:80px;">-->
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
                                <!--<img src="<?php echo get_post_meta($page_id, 'icon_img', $single=true) ?>" border="0" align="left" style="margin:5px 15px; margin-bottom:80px;">-->
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
                                <!--<img src="<?php echo get_post_meta($page_id, 'icon_img', $single=true) ?>" border="0" align="left" style="margin:5px 15px; margin-bottom:80px;">-->
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
				
            <!-- end .sidebar2 --></div>
              
            <div class="sidebar3" style="height:212px;">
				<?php 
					$page_id1 = 38;
					$page_data1 = get_page( $page_id1 );
					$content1 = apply_filters('the_content', $page_data1->post_excerpt);
					$heading1 = apply_filters('the_title', $page_data1->post_title);
                    $permalink1 = get_permalink($page_id1);
					echo "<h2>".$heading1."</h2>";
					echo $content1; // Output Content
                    echo '<p align="right"><a href="'.$permalink1.'">More...</a></p>';
				?>
            <!-- end .sidebar3 --></div>
              
            <br class="clearfloat" />
          
        </div>
    
    </div>
    
<!-- end .container --></div>

<?php get_footer(); ?>