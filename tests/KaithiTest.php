<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Kaithi;

class KaithiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Kaithi;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Kaithi', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('11080', $range[0]);
		$this->assertEquals('110CF', $range[1]);
	}
}
