<?php
function choozler_createInputText($pthis,$instance,$fld,$lbl,$def,$pop) {
	//$pthis=$this, $instance=$instance, $fld=field name, $lbl=label text, $def=defualt value, $pop=popup boolean
	$fldid=$pthis->get_field_id($fld);
	$fldname=$pthis->get_field_name($fld);
	echo '<p>';
	choozler_createInputLabel($pthis,$fldid,$fld,$lbl,$def,$pop);
	echo '<input class="widefat" id="' . $fldid . '" name="' . $fldname . '" type="text" value="' . $instance[$fld] . '" /></p>';
}

function choozler_createInputColor($pthis,$instance,$fld,$lbl,$def,$pop) {
	//$pthis=$this, $instance=$instance, $fld=field name, $lbl=label text, $def=defualt value, $pop=popup boolean
	$fldid=$pthis->get_field_id($fld);
	$fldname=$pthis->get_field_name($fld);

	//echo '<p>';
	choozler_createInputLabel($pthis,$fldid,$fld,$lbl,$def,$pop);
	if($instance[$fld]==''){$initcolor=$def;} else {$initcolor=$instance[$fld];}
	echo '<div class="chCPickerOuterWrap">';
	echo '<input class="widefat choozlerColorPick" id="' . $fldid . '" name="' . $fldname . '" type="text" value="' . $instance[$fld] . '" />';
	echo '<div class="chCPickerInnerWrap">';
	
		//duplicate of spectrum dropdown. create one instance of dropdown and use the below non-functional dropdowns just for visual until real dropdown is moved into place.
		echo '<div class="sp-replacer-chz" data-wid="' . $pthis->id . '">';
		echo '<div class="sp-preview-chz">';
		echo '<div class="sp-preview-inner-chz" style="background-color:' . $initcolor . '"></div>';
		echo '</div>';
		echo '<div class="sp-dd-chz">&#9660;</div>';
		echo '</div>';

	echo '</div>';
	echo '</div>';
	echo '</p>';
}

function choozler_createInputSelect($pthis,$instance,$fld,$lbl,$opts,$def,$pop) {
	//$pthis=$this, $instance=$instance, $fld=field name, $lbl=label text, $opts=array of options, $def=defualt value, $pop=popup boolean
	$fldid=$pthis->get_field_id($fld);
	$fldname=$pthis->get_field_name($fld);
	if ($instance[$fld]=='' || is_null($instance[$fld])){$selected='';} else {$selected=$instance[$fld];};

	echo '<p>';
	choozler_createInputLabel($pthis,$fldid,$fld,$lbl,$def,$pop);
	echo '<select class="widefat choozlerInputSelect" id="' . $fldid . '" name="' . $fldname . '" data-wid="' . $pthis->id . '">';
	foreach($opts as $key => $optval){
		echo '<option value="' . $optval . '"';
		if ($selected==$optval){echo ' selected';};
		echo '>' . __($optval,'choozler-polls-and-opinions') . '</option>'; 
	}
	echo '</select></p>';
}

function choozler_createInputLabel($pthis,$fldid,$fld,$lbl,$def,$pop) {
	if ($fld!='linkback'){$lbl=__($lbl,'choozler-polls-and-opinions');}//dont translate linklove because of heart
	echo '<label style="display:inline-block;" for="' . $fldid . '">' . $lbl . '</label>';
	if ($pop) {echo '<span data-fld="' . $fld .'" data-wid="' . $pthis->id . '" class="choozlerOptionInfoIcon" id="' . $fldid . '-popup">i</span>';}
	if($fld=='choozletId'){
		echo '<span class="choozlerFindChoozletId choozlerOptionDefaultValLink" data-fld="' . $fld .'" data-wid="' . $pthis->id . '">' . $def . '</span>';
	}else{
		echo '<span class="choozlerOptionDefaultVal">' . $def . '</span>';
	};
}

function choozler_makeLblRequired($lbl){
	return '<span class="choozlerLabelRequired">' . __($lbl,'choozler-polls-and-opinions') . '</span>&nbsp;<span class="choozlerOptionRequired">' . __('required','choozler-polls-and-opinions') . '</span>';
}

function choozler_createShortcodeSnippet($this_id,$this_id_num,$placement,$unsaved) {
	if($unsaved) {
		$shortcode_msg='';
		$shortcode_val='<span class="choozlerShortCodeSave">' . __('Please save the widget. Then, we can generate code to be placed in the body of your web page.','choozler-polls-and-opinions') . '</span>';
	} else {
		$shortcode_msg=__('Paste the Shortcode below into the body of your page','choozler-polls-and-opinions');
		$shortcode_val='[choozler-widget id="' . $this_id_num . '"]';
	}

	if($placement=='inline-body') {
		$shortcode_class_hide="";
	} else {
		$shortcode_class_hide=' choozlerDisplayNone';
	};

	echo '<div id="' . $this_id . '-shortcode-wrap" class="choozlerShortCodeWrap' . $shortcode_class_hide . '">';
	echo '<div class="choozlerShortCodeMsg">' . $shortcode_msg . '</div>';
	echo '<div class="choozlerShortCodeVal">' . $shortcode_val . '</div>';
	echo '</div>';
}

function choozler_add_scripts() {
	$qs_date=date(Ymd);
	wp_register_script('widget_functions', SOURCE_DOMAIN . '/js/widget_functions' . JS_FILE_EXT, false, $qs_date, false);
	wp_enqueue_script('widget_functions');
	wp_enqueue_style('widget_css', SOURCE_DOMAIN . '/css/widget.css', false, $qs_date, 'all');
}

function choozler_add_admin_scripts() {
	$qs_date=date(Ymd);
	wp_register_script('spectrum', SOURCE_DOMAIN . '/js/spectrum' . JS_FILE_EXT, true, $qs_date, false);
	wp_enqueue_script('spectrum');
	
	wp_register_script('spectrum_helper', SOURCE_DOMAIN . '/js/spectrum_helper.js', true, $qs_date, true);
	wp_enqueue_script('spectrum_helper');
	
	wp_enqueue_style('spectrum', SOURCE_DOMAIN . '/css/spectrum.css', false, $qs_date, 'all');

	wp_register_script('admin_functions', plugins_url( 'admin_functions.js', __FILE__ ), true, $qs_date, true);
	wp_enqueue_script('admin_functions');
	wp_enqueue_style('wp_admin', plugins_url( 'admin.css', __FILE__ ), false, $qs_date, 'all');
}

// Add settings link on plugin page
function choozler_plugin_settings_link($links) { 
  $settings_link = '<a href="options-general.php?page=choozler-polls-and-opinions.php">Settings</a>'; 
  array_unshift($links, $settings_link); 
  return $links; 
}
 
function choozler_processShortcode( $atts ){
	//processes the shortcode from the page body
	$a = shortcode_atts( array(
		'id' => 'default', //we are passing in only the number part of the widget instance so it cleaner from a user perspective
		'attr_2' => 'default',
	), $atts );

	//since we passed in only the number, we will use the const CHOOZLER_WIDGET_CLASS_NAME
	//if we were using the full widget id in the shortcode, the below would parse the name and number
	//choozler_parseWidgetInstanceId(a['id'],'name');
	//choozler_parseWidgetInstanceId(a['id'],'num');
	//but we arent, so use this:
	$widget_name=CHOOZLER_WIDGET_CLASS_NAME;
	$widget_num=$a['id'];

	$widget_instances = get_option('widget_' . $widget_name);
	$widget_data = $widget_instances[$widget_num];
	
	if ($widget_data['placement'] =='inline-body') {
		return choozler_createScriptTags($widget_name . '-' . $widget_num,$widget_data);
	}
}

function choozler_createScriptTags($widget_id, $widget_instance ){
	extract($widget_instance);
	$widget_div_id=$widget_id . '_' . $placement . '_' . $choozletId;
	
	$str='<div id="' . $widget_div_id . '">' . PHP_EOL;
	if($linkback=="yes"){
		$str=$str . '<a href="' . SOURCE_DOMAIN . '/wchoozlets/' . $choozletId . '" title="Opinions at Choozler.com">Opinions at Choozler.com</a>' . PHP_EOL;
	}
	$str=$str . '</div>' . PHP_EOL . '<script type="text/javascript">' . PHP_EOL . 'clearChoozletVars();';
	$str=$str . 'widgetId="' . $widget_div_id . '";';
	if($status=='inactive'){$str=$str . 'status="inactive";';}

	foreach( $widget_instance as $key => $val ){
		if ($val !== '' && $key != 'title' && $key != 'status') {
			$str=$str . $key . '="' . $val . '";';
		}
	}
	$str=$str . 'platform="wp";getChoozlet();' . PHP_EOL . '</script>';
	return $str;
}

function choozler_parseWidgetInstanceId($inst_id,$ret) {
	//take the widget instance id and return either the name part or the number part
	//$inst_id=widget instance name, $ret=return either name or num part
	$id_array=explode('-', $inst_id);
	$widget_num=$id_array[count($id_array)-1];
	$widget_name=str_replace('-' . $widget_num, '', $inst_id);
	if($ret=='num'){return $widget_num;};
	if($ret=='name'){return $widget_name;};
}
?>