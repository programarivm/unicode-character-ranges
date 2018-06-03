<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\KayahLi;

class KayahLiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new KayahLi;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Kayah Li', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('A900', $range[0]);
		$this->assertEquals('A92F', $range[1]);
	}
}
