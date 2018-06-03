<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Vai;

class VaiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Vai;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Vai', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('A500', $range[0]);
		$this->assertEquals('A63F', $range[1]);
	}
}
