<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\ArabicPresentationFormsB;

class ArabicPresentationFormsBTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new ArabicPresentationFormsB;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Arabic Presentation Forms-B', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('FE70', $range[0]);
		$this->assertEquals('FEFF', $range[1]);
	}
}
