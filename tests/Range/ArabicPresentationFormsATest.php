<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\ArabicPresentationFormsA;

class ArabicPresentationFormsATest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new ArabicPresentationFormsA;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Arabic Presentation Forms-A', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('FB50', $range[0]);
		$this->assertEquals('FDFF', $range[1]);
	}
}
