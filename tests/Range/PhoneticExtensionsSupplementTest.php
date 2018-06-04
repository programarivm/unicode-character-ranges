<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\PhoneticExtensionsSupplement;

class PhoneticExtensionsSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new PhoneticExtensionsSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Phonetic Extensions Supplement', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1D80', $range[0]);
		$this->assertEquals('1DBF', $range[1]);
	}
}
