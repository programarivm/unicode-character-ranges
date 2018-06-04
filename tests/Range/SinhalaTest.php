<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Sinhala;

class SinhalaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Sinhala;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Sinhala', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0D80', $range[0]);
		$this->assertEquals('0DFF', $range[1]);
	}
}
