<?php

	function get_CSRF_token(){
		return = md5(uniqid(rand(), TRUE));
	}

?>
