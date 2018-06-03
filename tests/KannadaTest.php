<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Kannada;

class KannadaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Kannada;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Kannada', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0C80', $range['hex'][0]);
		$this->assertEquals('0CFF', $range['hex'][1]);
		$this->assertEquals(3200, $range['dec'][0]);
		$this->assertEquals(3327, $range['dec'][1]);
	}
}
