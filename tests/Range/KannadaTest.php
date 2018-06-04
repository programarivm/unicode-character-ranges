<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Kannada;

class KannadaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Kannada;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Kannada', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0C80', $range[0]);
		$this->assertEquals('0CFF', $range[1]);
	}
}
