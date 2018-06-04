<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\PhoneticExtensions;

class PhoneticExtensionsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new PhoneticExtensions;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Phonetic Extensions', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1D00', $range[0]);
		$this->assertEquals('1D7F', $range[1]);
	}
}
