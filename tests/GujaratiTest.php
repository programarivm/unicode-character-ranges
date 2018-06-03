<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Gujarati;

class GujaratiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Gujarati;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Gujarati', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0A80', $range['hex'][0]);
		$this->assertEquals('0AFF', $range['hex'][1]);
		$this->assertEquals(2688, $range['dec'][0]);
		$this->assertEquals(2815, $range['dec'][1]);
	}
}
