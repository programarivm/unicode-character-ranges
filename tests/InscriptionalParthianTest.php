<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\InscriptionalParthian;

class InscriptionalParthianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new InscriptionalParthian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Inscriptional Parthian', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10B40', $range[0]);
		$this->assertEquals('10B5F', $range[1]);
	}
}
