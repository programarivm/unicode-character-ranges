<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\OldItalic;

class OldItalicTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new OldItalic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Old Italic', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10300', $range[0]);
		$this->assertEquals('1032F', $range[1]);
	}
}
