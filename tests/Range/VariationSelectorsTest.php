<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\VariationSelectors;

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
		$this->assertEquals('Variation Selectors', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('FE00', $range[0]);
		$this->assertEquals('FE0F', $range[1]);
	}
}
