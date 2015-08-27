<?php
	$popup_express_options = get_option('_popup_express_settings');
	$popup_express_option_start = '_popup_express_general_';
	
	function pe_isset($theString){
		return isset($theString) && trim($theString) != "";
	}
	
	function pe_popup_time_delay($timeDelay){
		return pe_isset($timeDelay) && is_numeric($timeDelay) ? $timeDelay : 10000;
	}
	
	
?>        