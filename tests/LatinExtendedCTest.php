<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\LatinExtendedC;

class LatinExtendedCTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new LatinExtendedC;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Latin Extended-C', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2C60', $range[0]);
		$this->assertEquals('2C7F', $range[1]);
	}
}
