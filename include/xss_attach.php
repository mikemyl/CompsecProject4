<?php
	function escape_chars($string){
		if(!isset($string)){
			return " ";
		}
		else{
			$string = str_replace ( '&', "&amp;", $string );
    	$string = str_replace ( '<', "&lt;", $string );
    	$string = str_replace ( '>', "&gt;", $string );
    	$string = str_replace ( '"', " &quot;", $string );
    	$string = str_replace ( '\'', " &#x27;", $string );
    	$string = str_replace ( '/', "&#x2F;", $string );
			return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
		}
	}
?>
