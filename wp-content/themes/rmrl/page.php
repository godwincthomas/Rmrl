<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 */

get_header(); ?>


    
<div class="container">
  <div class="row1inner">
    <div class="contentcontainer">
      
      <?php	
		$parent_page = get_top_parent_page_id($post->ID);
		$parentpage_data = get_page( $parent_page );
		$parenttitle = apply_filters('the_title', $parentpage_data->post_title);
			echo '<h1>'.$parenttitle.'</h1>';
			
		if ($parent_page=="99"||$parent_page=="105"||$parent_page=="136"||$parent_page=="144"||$parent_page=="36") {
			
	  ?>
            
            <div class="innermenu">

                <ul>
                    <?php wp_list_pages("child_of=$parent_page&sort_column=menu_order&title_li="); ?>
                </ul>
			
      		</div>
	  
      <?php
	  
		};
		
	  ?>
      
      <div class="pagecontent">
					
                    
            <?php
			$immdparent = get_page($page_id);
			$immdparentid = $immdparent->post_parent;
			if ($immdparentid=="147"||$page_id=="147") {
			?>        
            <div class="innermenu2">

                <ul>
                    <?php wp_list_pages("child_of=147&sort_column=menu_order&title_li="); ?>
                </ul>
			
      		</div>
            <?php
			};
			?>
      
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); 
		  
		  if ($parent_page=="99"||$parent_page=="105"||$parent_page=="136"||$parent_page=="144"||$parent_page=="36") {
			  
			  ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
			  
               <?php
	  
				};
				
			  ?>
                    <div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

<?php endwhile; ?>
          
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
                
                
    	
    <div id="services-slider-sidebar">
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
                                <!--<img src="<?php echo get_post_meta($page_id, 'icon_img', $single=true) ?>" border="0" align="left" style="margin:5px 15px; margin-bottom:100px;">-->
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
        
        <div class="sidebar-div" style="background:none;">
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
        </div>
      <!-- End outer wrapper -->
        
      <!-- end .sidebar3 --></div>
    
    </div>
    
    
  <!-- end .container --></div>
 
    
    <br class="clearfloat" />
<?php get_footer(); ?>