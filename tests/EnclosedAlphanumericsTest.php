<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\EnclosedAlphanumerics;

class EnclosedAlphanumericsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new EnclosedAlphanumerics;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Enclosed Alphanumerics', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2460', $range[0]);
		$this->assertEquals('24FF', $range[1]);
	}
}
