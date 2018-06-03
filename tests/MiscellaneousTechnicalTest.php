<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\MiscellaneousTechnical;

class MiscellaneousTechnicalTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MiscellaneousTechnical;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Miscellaneous Technical', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2300', $range['hex'][0]);
		$this->assertEquals('23FF', $range['hex'][1]);
		$this->assertEquals(8960, $range['dec'][0]);
		$this->assertEquals(9215, $range['dec'][1]);
	}
}
