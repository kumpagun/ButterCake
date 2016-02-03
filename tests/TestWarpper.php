<?php 

require_once 'Wrapper.php';
/**
* 
*/
class WrapperTest extends PHPUnit_Framework_TestCase {
 
    private $wrapper;
    
 
    function setUp() {
        $this->wrapper = new Wrapper();
    }
 
    function testItShouldWrapAnEmptyString() {
        $this->assertEquals('', $this->wrapper->wrap('', 5));
    }
 
    function testItDoesNotWrapAShortEnoughWord() {
    	$text = 'wordword';
    	$length = 5;
        $this->assertEquals("wordw\nord", $this->wrapper->wrap($text, $length));
    }
 
}

?>