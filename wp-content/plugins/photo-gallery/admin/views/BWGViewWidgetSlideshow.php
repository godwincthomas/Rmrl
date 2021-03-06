<?php

class BWGViewWidgetSlideshow extends BWGControllerWidgetSlideshow {
  ////////////////////////////////////////////////////////////////////////////////////////
  // Events                                                                             //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constants                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Variables                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  private $model;

  ////////////////////////////////////////////////////////////////////////////////////////
  // Constructor & Destructor                                                           //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function __construct($model) {
    $this->model = $model;
  }
  ////////////////////////////////////////////////////////////////////////////////////////
  // Public Methods                                                                     //
  ////////////////////////////////////////////////////////////////////////////////////////

  public function display() {
  }

  function widget($args, $instance) {
    extract($args);
    $title = $instance['title'];
    $gallery_id = (isset($instance['gallery_id']) ? $instance['gallery_id'] : 0);
    $width = (isset($instance['width']) ? $instance['width'] : 200);
    $height = (isset($instance['height']) ? $instance['height'] : 200);
    $effect = (isset($instance['effect']) ? $instance['effect'] : "fade");
    $interval = (isset($instance['interval']) ? $instance['interval'] : 5);
    $shuffle = (isset($instance['shuffle']) ? $instance['shuffle'] : 0);
    $theme_id = (isset($instance['theme_id']) ? $instance['theme_id'] : 0);
    // Before widget.
    echo $before_widget;
    // Title of widget.
    if ($title) {
      echo $before_title . $title . $after_title;
    }
    // Widget output.
    if ($id) {
      require_once(WD_BWG_DIR . '/frontend/controllers/BWGControllerSlideshow.php');
      $controller_class = 'BWGControllerSlideshow';
      $controller = new $controller_class();
      global $bwg;
      $params = array (
        'from' => 'widget',
        'gallery_type' => 'slideshow',
        'gallery_id' => $gallery_id,
        'width' => $width, 
        'height' => $height, 
        'effect' => $effect, 
        'interval' => $interval, 
        'shuffle' => $shuffle,
        'theme_id' => $theme_id);
      $controller->execute($params, 1, $bwg);
      $bwg++;
    }
    // After widget.
    echo $after_widget;
  }
  
  // Widget Control Panel.
  function form($instance, $id_title, $name_title, $id_gallery_id, $name_gallery_id, $id_width, $name_width, $id_height, $name_height, $id_effect, $name_effect, $id_interval, $name_interval, $id_shuffle, $name_shuffle, $id_theme_id, $name_theme_id) {
    $defaults = array(
      'title' => 'Photo Gallery Slideshow',
      'gallery_id' => 0,
      'width' => 200,
      'height' => 200,
      'effect' => 'fade',
      'interval' => 5,
      'shuffle' => 0,
      'theme_id' => 0,
    );
    $slideshow_effects = array(
      'none' => 'None',
      'cubeH' => 'Cube Horizontal',
      'fade' => 'Fade',
      'sliceV' => 'Slice Vertical',
      'scaleOut' => 'Scale Out',
      'blindH' => 'Blind Horizontal',
    );
    $instance = wp_parse_args((array) $instance, $defaults);
    $gallery_rows = $this->model->get_gallery_rows_data();
    $theme_rows = $this->model->get_theme_rows_data();
    ?>
    <p>
      <label for="<?php echo $id_title; ?>">Title:</label>
      <input class="widefat" id="<?php echo $id_title; ?>" name="<?php echo $name_title; ?>'" type="text" value="<?php echo $instance['title']; ?>"/>
    </p>    
    <p>
      <select name="<?php echo $name_gallery_id; ?>" id="<?php echo $id_gallery_id; ?>" class="widefat">
        <option value="0">Select Gallery</option>
        <?php
        foreach ($gallery_rows as $gallery_row) {
          ?>
          <option value="<?php echo $gallery_row->id; ?>" <?php echo (($instance['gallery_id'] == $gallery_row->id) ? 'selected="selected"' : ''); ?>><?php echo $gallery_row->name; ?></option>
          <?php
        }
        ?>
      </select>
    </p>
    <p>
      <label for="<?php echo $id_width; ?>">Dimensions:</label>
      <input class="widefat" style="width:25%;" id="<?php echo $id_width; ?>" name="<?php echo $name_width; ?>'" type="text" value="<?php echo $instance['width']; ?>"/> x 
      <input class="widefat" style="width:25%;" id="<?php echo $id_height; ?>" name="<?php echo $name_height; ?>'" type="text" value="<?php echo $instance['height']; ?>"/> px
    </p>
    <p>
      <label for="<?php echo $id_effect; ?>">Slideshow Effect:</label>
      <select name="<?php echo $name_effect; ?>" id="<?php echo $id_effect; ?>" class="widefat">        
        <?php
        foreach ($slideshow_effects as $key => $slideshow_effect) {
          ?>
          <option value="<?php echo $key; ?>" <?php if ($instance['effect'] == $key) echo 'selected="selected"'; ?>><?php echo $slideshow_effect; ?></option>
          <?php
        }
        ?>
      </select>
    </p>
    <p>
      <label for="<?php echo $id_interval; ?>">Time interval:</label>
      <input class="widefat" style="width:25%;" id="<?php echo $id_interval; ?>" name="<?php echo $name_interval; ?>'" type="text" value="<?php echo $instance['interval']; ?>" /> sec.
    </p>
    <p>
      <label>Enable shuffle:</label>
      <input type="radio" name="<?php echo $name_shuffle; ?>" id="<?php echo $id_shuffle . "_1"; ?>" value="1" <?php if ($instance['shuffle']) echo 'checked="checked"'; ?> /><label for="<?php echo $id_shuffle . "_1"; ?>">Yes</label>
      <input type="radio" name="<?php echo $name_shuffle; ?>" id="<?php echo $id_shuffle . "_0"; ?>" value="0" <?php if (!$instance['shuffle']) echo 'checked="checked"'; ?> /><label for="<?php echo $id_shuffle . "_0"; ?>">No</label>     
    </p>
    <p>
      <select name="<?php echo $name_theme_id; ?>" id="<?php echo $id_theme_id; ?>" class="widefat" <?php echo (get_option("wd_bwg_theme_version") ? 'title="This option is disabled in free version."  disabled="disabled"' : ''); ?>>
        <?php
        foreach ($theme_rows as $theme_row) {
          ?>
          <option value="<?php echo $theme_row->id; ?>" <?php echo (($instance['theme_id'] == $theme_row->id || $theme_row->default_theme == 1) ? 'selected="selected"' : ''); ?>><?php echo $theme_row->name; ?></option>
          <?php
        }
        ?>
      </select>
    </p> 
    <?php
  }
  
  ////////////////////////////////////////////////////////////////////////////////////////
  // Getters & Setters                                                                  //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Private Methods                                                                    //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Listeners                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
}