<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Syriac;

class SyriacTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Syriac;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Syriac', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0700', $range[0]);
		$this->assertEquals('074F', $range[1]);
	}
}
