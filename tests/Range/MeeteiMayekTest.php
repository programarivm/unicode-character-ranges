<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\MeeteiMayek;

class MeeteiMayekTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MeeteiMayek;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Meetei Mayek', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('ABC0', $range[0]);
		$this->assertEquals('ABFF', $range[1]);
	}
}
