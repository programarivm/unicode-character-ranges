<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\SmallFormVariants;

class SmallFormVariantsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SmallFormVariants;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Small Form Variants', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('FE50', $range[0]);
		$this->assertEquals('FE6F', $range[1]);
	}
}
