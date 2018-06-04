<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\CombiningDiacriticalMarksExtended;

class CombiningDiacriticalMarksExtendedTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CombiningDiacriticalMarksExtended;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Combining Diacritical Marks Extended', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1AB0', $range[0]);
		$this->assertEquals('1AFF', $range[1]);
	}
}
