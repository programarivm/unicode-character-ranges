<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Lao;

class LaoTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Lao;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Lao', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0E80', $range[0]);
		$this->assertEquals('0EFF', $range[1]);
	}
}
