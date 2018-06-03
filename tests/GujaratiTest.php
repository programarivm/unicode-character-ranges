<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Gujarati;

class GujaratiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Gujarati;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Gujarati', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0A80', $range[0]);
		$this->assertEquals('0AFF', $range[1]);
	}
}
