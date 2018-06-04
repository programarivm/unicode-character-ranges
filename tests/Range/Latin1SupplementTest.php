<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Latin1Supplement;

class Latin1SupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Latin1Supplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Latin-1 Supplement', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0080', $range[0]);
		$this->assertEquals('00FF', $range[1]);
	}
}
