<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\VedicExtensions;

class VedicExtensionsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new VedicExtensions;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Vedic Extensions', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1CD0', $range['hex'][0]);
		$this->assertEquals('1CFF', $range['hex'][1]);
		$this->assertEquals(7376, $range['dec'][0]);
		$this->assertEquals(7423, $range['dec'][1]);
	}
}
