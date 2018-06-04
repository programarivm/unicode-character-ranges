<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\InscriptionalParthian;

class InscriptionalParthianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new InscriptionalParthian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Inscriptional Parthian', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10B40', $range[0]);
		$this->assertEquals('10B5F', $range[1]);
	}
}
