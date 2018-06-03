<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\ArabicSupplement;

class ArabicSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new ArabicSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Arabic Supplement', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0750', $range[0]);
		$this->assertEquals('077F', $range[1]);
	}
}
