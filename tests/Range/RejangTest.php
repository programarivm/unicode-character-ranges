<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Rejang;

class RejangTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Rejang;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Rejang', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('A930', $range[0]);
		$this->assertEquals('A95F', $range[1]);
	}
}
