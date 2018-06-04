<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\AlphabeticPresentationForms;

class AlphabeticPresentationFormsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new AlphabeticPresentationForms;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Alphabetic Presentation Forms', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('FB00', $range[0]);
		$this->assertEquals('FB4F', $range[1]);
	}
}
