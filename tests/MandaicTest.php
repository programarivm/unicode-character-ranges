<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Mandaic;

class MandaicTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Mandaic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Mandaic', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0840', $range['hex'][0]);
		$this->assertEquals('085F', $range['hex'][1]);
		$this->assertEquals(2112, $range['dec'][0]);
		$this->assertEquals(2143, $range['dec'][1]);
	}
}
