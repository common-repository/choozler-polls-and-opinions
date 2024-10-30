<?php
/*
* Plugin Name: Choozler Polls and Opinions
* Plugin URI: https://www.choozler.com/widget
* Description: Choozler polls aren't just great-looking additions to your site--they also give your site exposure to a fast-growing opinion community. Add a little pizzazz while driving traffic to your site. Find out more at <a href="https://www.choozler.com/widget">https://www.choozler.com/widget</a>.
* Version: 1.0.0
* Author: rich@choozler.com
* Author URI: https://www.choozler.com/users/choozler
* Text Domain: choozler-polls-and-opinions
* Domain Path: /languages
* License: GPLv2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

const CHOOZLER_WIDGET_CLASS_NAME='choozler_widget'; //this must match $widget_name in choozler_processShortcode() or anywhere else widget name is used
const SOURCE_DOMAIN='https://www.choozler.com';
const JS_FILE_EXT='.min.js';

class choozler_widget extends WP_Widget {
    /** constructor -- name this the same as the class above */
    function choozler_widget() {
        parent::WP_Widget(false, $name = 'Choozler Polls and Opinions');
    }

    /** @see WP_Widget::widget -- do not rename this */
	function widget($args, $instance) {
        extract($args);
		extract($instance);

		//echo $before_widget;
		//echo $before_title . $title . $after_title;
		if ($instance['placement'] !='inline-body') {
			echo choozler_createScriptTags($this->id,$instance);
		}
		//echo $after_widget;
	}

    /** @see WP_Widget::update -- do not rename this */
    function update($new_instance, $old_instance) {	
		$instance = $old_instance;
		$instance = array_map('strip_tags', $new_instance);
        return $instance;
    }

    /** @see WP_Widget::form -- do not rename this */
    function form($instance) {
		
		extract(array_map('esc_attr', $instance));
		
		$this_id=$this->id;
		$this_id_num=choozler_parseWidgetInstanceId($this_id,'num');
		if($this_id_num=='__i__') {$unsaved=true;}
		
		//create divs for popup info
		echo '<div class="choozlerWidgetIdNum">Widget Id Number: ' . ($unsaved==true ? __('n/a') : choozler_parseWidgetInstanceId($this_id,'num')) . '</div>';
		echo '<div id="' . $this_id . '-popup" class="choozlerOptionPopup"></div>';
		echo '<div id="' . $this_id . '-popupidfinder" class="choozlerOptionPopupIdFinder"></div>';
		echo '<input type="text" id="' . $this_id . '-colorpickmaster" class="choozlerColorPickMaster" data-currentparent="na">';	

		//set up the form inputs
		choozler_createInputText($this,$instance,'title','Title','For your reference only',false);
		choozler_createInputText($this,$instance,'choozletId',choozler_makeLblRequired('Choozlet Id'),'Where to find Choozlet Id',true);
		choozler_createInputSelect($this,$instance,'placement', 'Placement', array('slide-from-left', 'slide-from-right','slide-from-bottom','inline-widget-area','inline-body'),'',true);
		choozler_createShortcodeSnippet($this_id,$this_id_num,$placement,$unsaved);
		choozler_createInputSelect($this,$instance,'status', 'Status', array('active', 'inactive'),'',false);
		echo '<div class="choozlerOptionalHeading">' . __('The following parameters are optional.<br>If left blank, we\'ll use the default values shown to the right.','choozler-polls-and-opinions') . '</div>';
		choozler_createInputSelect($this,$instance,'linkback', 'Link L<span class="choozlerLinkLove">&#10084;</span>ve',array('','yes', 'no'), 'no',true);
		choozler_createInputSelect($this,$instance,'align', 'Align',array('','left', 'middle','right'), 'left',true);
		choozler_createInputColor($this,$instance,'backgroundColor','Background Color','#f8f8f8',false);
		choozler_createInputColor($this,$instance,'borderColor','Border Color','#d5cd1b',true);
		choozler_createInputText($this,$instance,'borderSize','Border Size','2px',true);
		choozler_createInputText($this,$instance,'height','Height','inline: auto, sliders: 100%',true);
		choozler_createInputSelect($this,$instance,'mainText','Main Text', array('','title','question','both'),'title',true);
		choozler_createInputSelect($this,$instance,'maintextBold','Main Text Bold',array('','yes','no'),'yes',false);
		choozler_createInputColor($this,$instance,'maintextColor','Main Text Color','#000000',false);
		choozler_createInputText($this,$instance,'maintextLength','Main Text Length','100',true);
		choozler_createInputText($this,$instance,'maintextSize','Main Text Size','16px',false);
		choozler_createInputSelect($this,$instance,'maintextWeight','Main Text Weight',array('','fine','light','medium','heavy','heaviest'),'heavy',false);
		choozler_createInputText($this,$instance,'margin','Margin','0px 0px 0px 0px',true);
		choozler_createInputColor($this,$instance,'optiontrimBackColor','Option Trim Background Color','#00a79d',false);
		choozler_createInputColor($this,$instance,'optiontrimForeColor','Option Trim Foreground Color','#ffffff',false);
		choozler_createInputText($this,$instance,'roundedCorners','Rounded Corners','0px',true);
		choozler_createInputSelect($this,$instance,'shadow','Shadow',array('','yes','no'),'no',false);
		choozler_createInputColor($this,$instance,'shadowColor','Shadow Color','#909090',false);
		choozler_createInputSelect($this,$instance,'showImage','Show Image',array('','yes','no'),'yes',false);
		choozler_createInputSelect($this,$instance,'tabStyle','Tab Style', array('','large','medium','small'), 'large',true);
		choozler_createInputText($this,$instance,'tabPosition','Tab Position','middle',true);
		choozler_createInputColor($this,$instance,'titlebarColor','Titlebar Color','#d5cd1b',true);
		//choozler_createInputText($this,$instance,'widgetId','Widget Id','',false);
		choozler_createInputText($this,$instance,'width','Width','600px;',true);
		choozler_createInputText($this,$instance,'zIndex','Z Index','1000000',true);
	}
} // end class choozler_widget

add_action('wp_enqueue_scripts', 'choozler_add_scripts');
add_action('admin_enqueue_scripts', 'choozler_add_admin_scripts');
add_action('widgets_init', create_function('', 'return register_widget("' . CHOOZLER_WIDGET_CLASS_NAME . '");'));
add_shortcode( 'choozler-widget', 'choozler_processShortcode' );
add_filter("plugin_action_links_". plugin_basename(__FILE__), 'choozler_plugin_settings_link' );

include("functions.php");
?>