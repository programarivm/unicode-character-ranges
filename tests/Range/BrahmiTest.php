<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Brahmi;

class BrahmiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Brahmi;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Brahmi', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('11000', $range[0]);
		$this->assertEquals('1107F', $range[1]);
	}
}
