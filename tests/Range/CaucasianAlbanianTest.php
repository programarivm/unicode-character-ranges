<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\CaucasianAlbanian;

class CaucasianAlbanianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CaucasianAlbanian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Caucasian Albanian', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10530', $range[0]);
		$this->assertEquals('1056F', $range[1]);
	}
}
