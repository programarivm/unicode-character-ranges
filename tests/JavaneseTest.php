<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Javanese;

class JavaneseTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Javanese;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Javanese', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('A980', $range[0]);
		$this->assertEquals('A9DF', $range[1]);
	}
}
