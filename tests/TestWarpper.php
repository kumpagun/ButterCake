<?php 

require_once 'Wrapper.php';
/**
* 
*/
class WrapperTest extends PHPUnit_frameword_TestCase
{
	
	function testDoesNotWrapAShorterThanMaxCharsWord()
	{
		# code...
		$wrappper = new Wrapper();
		assertEquals('word', $wrappper->wrap('word', 5));
	}
}

?>