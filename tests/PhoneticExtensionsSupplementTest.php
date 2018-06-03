<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\PhoneticExtensionsSupplement;

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
		$this->assertEquals('Phonetic Extensions Supplement', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1D80', $range[0]);
		$this->assertEquals('1DBF', $range[1]);
	}
}
