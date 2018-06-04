<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\VariationSelectors;

class VariationSelectorsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new VariationSelectors;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Variation Selectors', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('FE00', $range[0]);
		$this->assertEquals('FE0F', $range[1]);
	}
}
