<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Deseret;

class DeseretTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Deseret;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Deseret', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10400', $range[0]);
		$this->assertEquals('1044F', $range[1]);
	}
}
