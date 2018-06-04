<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\VerticalForms;

class VerticalFormsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new VerticalForms;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Vertical Forms', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('FE10', $range[0]);
		$this->assertEquals('FE1F', $range[1]);
	}
}
