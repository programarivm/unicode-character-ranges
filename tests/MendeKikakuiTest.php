<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\MendeKikakui;

class MendeKikakuiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MendeKikakui;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Mende Kikakui', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1E800', $range[0]);
		$this->assertEquals('1E8DF', $range[1]);
	}
}
