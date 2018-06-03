<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\PhoneticExtensions;

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
		$this->assertEquals('Phonetic Extensions', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1D00', $range['hex'][0]);
		$this->assertEquals('1D7F', $range['hex'][1]);
		$this->assertEquals(7424, $range['dec'][0]);
		$this->assertEquals(7551, $range['dec'][1]);
	}
}
