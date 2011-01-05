<?php

require_once 'PHPUnit/Framework.php';

require_once dirname(__FILE__) . '/../complexNumber.php';

/**
 * Test class for ComplexNumber.
 * Generated by PHPUnit on 2011-01-02 at 13:43:44.
 */
class ComplexNumberTest extends PHPUnit_Framework_TestCase {

	/**
	 * @var ComplexNumber
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {
		$this->object = new ComplexNumber(1, 2);
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown() {

	}

	/**
	 */
	public function testMultiplyBy() {
		$number = new ComplexNumber(3, 4);
	 	$result = $this->object->multiplyBy($number);
		 $expected = new ComplexNumber(-5, 10);
		 $this->assertEquals($expected, $result);
	}

	/**
	 * @todo Implement testSquare().
	 */
	public function testSquare() {
	 	$result = $this->object->square();
		$expected = new ComplexNumber(-3, 4);
		$this->assertEquals($expected, $result);
	}

	public function testAddition() {
		$number = new ComplexNumber(3, 4);
	 	$result = $this->object->add($number);
		$expected = new ComplexNumber(4, 6);
		$this->assertEquals($expected, $result);
	}

}

?>
