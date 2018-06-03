<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\LatinExtendedB;

class LatinExtendedBTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new LatinExtendedB;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Latin Extended-B', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0180', $range[0]);
		$this->assertEquals('024F', $range[1]);
	}
}
