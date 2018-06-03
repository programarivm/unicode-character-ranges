<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Sundanese;

class SundaneseTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Sundanese;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Sundanese', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1B80', $range['hex'][0]);
		$this->assertEquals('1BBF', $range['hex'][1]);
		$this->assertEquals(7040, $range['dec'][0]);
		$this->assertEquals(7103, $range['dec'][1]);
	}
}
