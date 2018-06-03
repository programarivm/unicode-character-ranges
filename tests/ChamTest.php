<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Cham;

class ChamTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Cham;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Cham', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('AA00', $range[0]);
		$this->assertEquals('AA5F', $range[1]);
	}
}
