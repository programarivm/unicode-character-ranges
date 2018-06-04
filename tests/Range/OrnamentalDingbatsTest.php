<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\OrnamentalDingbats;

class OrnamentalDingbatsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new OrnamentalDingbats;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Ornamental Dingbats', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1F650', $range[0]);
		$this->assertEquals('1F67F', $range[1]);
	}
}
