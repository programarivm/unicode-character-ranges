<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\Khojki;

class KhojkiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Khojki;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Khojki', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('11200', $range[0]);
		$this->assertEquals('1124F', $range[1]);
	}
}
