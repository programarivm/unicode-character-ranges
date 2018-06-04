<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\LinearBIdeograms;

class LinearBIdeogramsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new LinearBIdeograms;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Linear B Ideograms', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10080', $range[0]);
		$this->assertEquals('100FF', $range[1]);
	}
}
