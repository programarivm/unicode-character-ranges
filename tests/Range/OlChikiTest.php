<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\OlChiki;

class OlChikiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new OlChiki;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Ol Chiki', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1C50', $range[0]);
		$this->assertEquals('1C7F', $range[1]);
	}
}
