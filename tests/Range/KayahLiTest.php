<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\KayahLi;

class KayahLiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new KayahLi;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Kayah Li', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('A900', $range[0]);
		$this->assertEquals('A92F', $range[1]);
	}
}
