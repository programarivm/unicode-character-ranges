<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\ArabicExtendedA;

class ArabicExtendedATest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new ArabicExtendedA;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Arabic Extended-A', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('08A0', $range['hex'][0]);
		$this->assertEquals('08FF', $range['hex'][1]);
		$this->assertEquals(2208, $range['dec'][0]);
		$this->assertEquals(2303, $range['dec'][1]);
	}
}
