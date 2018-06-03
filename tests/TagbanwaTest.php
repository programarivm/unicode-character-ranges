<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Tagbanwa;

class TagbanwaTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Tagbanwa;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Tagbanwa', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1760', $range[0]);
		$this->assertEquals('177F', $range[1]);
	}
}
