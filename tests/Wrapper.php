<?php

/**
* 
*/
class Wrapper
{
	
	function wrap($text, $length) 
	{
		if (strlen($text) > $length)
			return substr ($text, 0, $length) . "\n" . $this->wrap(substr($text, $length), $length);
    	return $text;
	}
}

?>