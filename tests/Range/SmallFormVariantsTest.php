<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\SmallFormVariants;

class SmallFormVariantsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SmallFormVariants;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Small Form Variants', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('FE50', $range[0]);
		$this->assertEquals('FE6F', $range[1]);
	}
}
