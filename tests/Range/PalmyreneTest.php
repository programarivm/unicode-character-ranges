<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Palmyrene;

class PalmyreneTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Palmyrene;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Palmyrene', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10860', $range[0]);
		$this->assertEquals('1087F', $range[1]);
	}
}
