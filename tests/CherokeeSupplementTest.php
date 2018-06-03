<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CherokeeSupplement;

class CherokeeSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CherokeeSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Cherokee Supplement', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('AB70', $range[0]);
		$this->assertEquals('ABBF', $range[1]);
	}
}
