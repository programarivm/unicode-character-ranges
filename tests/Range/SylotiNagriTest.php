<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\SylotiNagri;

class SylotiNagriTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SylotiNagri;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Syloti Nagri', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('A800', $range[0]);
		$this->assertEquals('A82F', $range[1]);
	}
}
