<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\BamumSupplement;

class BamumSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new BamumSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Bamum Supplement', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('16800', $range[0]);
		$this->assertEquals('16A3F', $range[1]);
	}
}
