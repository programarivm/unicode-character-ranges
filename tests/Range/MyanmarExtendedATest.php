<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\MyanmarExtendedA;

class MyanmarExtendedATest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MyanmarExtendedA;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Myanmar Extended-A', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('AA60', $range[0]);
		$this->assertEquals('AA7F', $range[1]);
	}
}
