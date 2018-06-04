<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\InscriptionalPahlavi;

class InscriptionalPahlaviTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new InscriptionalPahlavi;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Inscriptional Pahlavi', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10B60', $range[0]);
		$this->assertEquals('10B7F', $range[1]);
	}
}
