<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\OldPermic;

class OldPermicTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new OldPermic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Old Permic', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10350', $range[0]);
		$this->assertEquals('1037F', $range[1]);
	}
}
