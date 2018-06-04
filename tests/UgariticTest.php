<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Ugaritic;

class UgariticTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Ugaritic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Ugaritic', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10380', $range[0]);
		$this->assertEquals('1039F', $range[1]);
	}
}
