<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CyrillicExtendedB;

class CyrillicExtendedBTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CyrillicExtendedB;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Cyrillic Extended-B', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('A640', $range[0]);
		$this->assertEquals('A69F', $range[1]);
	}
}
