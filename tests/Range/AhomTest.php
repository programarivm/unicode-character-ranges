<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Ahom;

class AhomTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Ahom;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Ahom', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('11700', $range[0]);
		$this->assertEquals('1173F', $range[1]);
	}
}
