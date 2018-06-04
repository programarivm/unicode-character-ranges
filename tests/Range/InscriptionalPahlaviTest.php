<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\InscriptionalPahlavi;

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
		$this->assertEquals('Inscriptional Pahlavi', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('10B60', $range[0]);
		$this->assertEquals('10B7F', $range[1]);
	}
}
