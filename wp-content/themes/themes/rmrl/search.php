<?php
/**
 * The template for displaying Search Results pages.
 *
 */

get_header(); ?>


    
<div class="container">
  <div class="row1inner">
    <div class="contentcontainer" role="main">

<?php if ( have_posts() ) : ?>
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
				<div id="post-0" class="post no-results not-found">
					<h2 class="entry-title"><?php _e( 'Nothing Found', 'twentyten' ); ?></h2>
					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-0 -->
<?php endif; ?>

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
        
        <div class="sidebar-div" style="height:250px;">
            	<h2>Services</h2>
                
                <div id="slider1">
                    
                    <ul>
                        
                        <li>
						
							<?php 
                                $page_id = 12;
                                $page_data = get_page( $page_id );
                                $content = apply_filters('the_excerpt', $page_data->post_excerpt);
                                $title = apply_filters('the_title', $page_data->post_title);
                                $permalink = get_permalink($page_id);
                            ?>
                                <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                <td width="70" align="left" valign="top"><img src="<?php echo get_post_meta($page_id, 'icon_img', $single=true) ?>" border="0"></td>
                                <td valign="top">
									<?php
                                        echo '<p><strong>'.$title.'</strong></p>';
                                        echo $content;
                                        echo '<p align="right"><a href="'.$permalink.'">More...</a></p>'; // Output Content
                                    ?>
                                </td>
                                </tr>
                                </table>
                
                		</li>
            
                        <li>
						
							<?php 
                                $page_id = 31;
                                $page_data = get_page( $page_id );
                                $content = apply_filters('the_excerpt', $page_data->post_excerpt);
                                $title = apply_filters('the_title', $page_data->post_title);
                                $permalink = get_permalink($page_id);
                            ?>
                                <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                <td width="70" align="left" valign="top"><img src="<?php echo get_post_meta($page_id, 'icon_img', $single=true) ?>" border="0"></td>
                                <td valign="top">
									<?php
                                        echo '<p><strong>'.$title.'</strong></p>';
                                        echo $content;
                                        echo '<p align="right"><a href="'.$permalink.'">More...</a></p>'; // Output Content
                                    ?>
                                </td>
                                </tr>
                                </table>
                                
                		</li>
            
                        <li>
						
							<?php 
                                $page_id = 33;
                                $page_data = get_page( $page_id );
                                $content = apply_filters('the_excerpt', $page_data->post_excerpt);
                                $title = apply_filters('the_title', $page_data->post_title);
                                $permalink = get_permalink($page_id);
                            ?>
                                <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                <td width="70" align="left" valign="top"><img src="<?php echo get_post_meta($page_id, 'icon_img', $single=true) ?>" border="0"></td>
                                <td valign="top">
									<?php
                                        echo '<p><strong>'.$title.'</strong></p>';
                                        echo $content;
                                        echo '<p align="right"><a href="'.$permalink.'">More...</a></p>'; // Output Content
                                    ?>
                                </td>
                                </tr>
                                </table>
                
                		</li>
            
                    </ul>
                    
                </div>
                    
                
            		
                <div class="sliderbutton" id="slideleft1" onclick="slideshow1.move(-1)"></div>
                <div class="sliderbutton" id="slideright1" onclick="slideshow1.move(1)"></div>
            	
                    
                <ul id="pagination1" class="pagination">
            
                    <li onclick="slideshow1.pos(0)"></li>
            
                    <li onclick="slideshow1.pos(1)"></li>
            
                    <li onclick="slideshow1.pos(2)"></li>
                        
                </ul>
                
       </div>
        
        <div class="sidebar-div" style="height:270px; background:none;">
                
                <h2>Testimonials</h2>
                <div id="slider2">
                
                    <ul>
        
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
                    
                </div>
        
        
                <div class="sliderbutton" id="slideleft2" onclick="slideshow2.move(-1)"></div>
                <div class="sliderbutton" id="slideright2" onclick="slideshow2.move(1)"></div>
        
                <ul id="pagination2" class="pagination">
        
                    <li onclick="slideshow2.pos(0)"></li>
        
                    <li onclick="slideshow2.pos(1)"></li>
        
                    <li onclick="slideshow2.pos(2)"></li>
        
                    <li onclick="slideshow2.pos(3)"></li>
        
                    <li onclick="slideshow2.pos(4)"></li>
        
                    <li onclick="slideshow2.pos(5)"></li>
        
                    <li onclick="slideshow2.pos(6)"></li>
        
                    <li onclick="slideshow2.pos(7)"></li>
        
                    <li onclick="slideshow2.pos(8)"></li>
        
                    <li onclick="slideshow2.pos(9)"></li>
        
                    <li onclick="slideshow2.pos(10)"></li>
        
                    <li onclick="slideshow2.pos(11)"></li>
        
                </ul>
                
       </div>
        
      <!-- end .sidebar3 --></div>
    <br class="clearfloat" />
    
    </div>
    
    
  <!-- end .container --></div>
            
<?php get_footer(); ?>