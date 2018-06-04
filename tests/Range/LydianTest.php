<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Lydian;

class LydianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Lydian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Lydian', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10920', $range[0]);
		$this->assertEquals('1093F', $range[1]);
	}
}
