<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Dingbats;

class DingbatsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Dingbats;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Dingbats', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2700', $range[0]);
		$this->assertEquals('27BF', $range[1]);
	}
}
