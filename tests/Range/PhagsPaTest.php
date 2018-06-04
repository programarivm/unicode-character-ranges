<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\PhagsPa;

class PhagsPaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new PhagsPa;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Phags-pa', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('A840', $range[0]);
		$this->assertEquals('A87F', $range[1]);
	}
}
