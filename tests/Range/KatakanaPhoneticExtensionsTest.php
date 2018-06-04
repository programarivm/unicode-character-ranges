<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\KatakanaPhoneticExtensions;

class KatakanaPhoneticExtensionsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new KatakanaPhoneticExtensions;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Katakana Phonetic Extensions', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('31F0', $range[0]);
		$this->assertEquals('31FF', $range[1]);
	}
}
