<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\BlockElements;

class BlockElementsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new BlockElements;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Block Elements', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2580', $range[0]);
		$this->assertEquals('259F', $range[1]);
	}
}
