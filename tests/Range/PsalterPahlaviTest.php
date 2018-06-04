<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\PsalterPahlavi;

class PsalterPahlaviTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new PsalterPahlavi;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Psalter Pahlavi', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10B80', $range[0]);
		$this->assertEquals('10BAF', $range[1]);
	}
}
