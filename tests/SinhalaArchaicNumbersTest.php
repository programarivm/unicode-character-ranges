<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\SinhalaArchaicNumbers;

class SinhalaArchaicNumbersTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SinhalaArchaicNumbers;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Sinhala Archaic Numbers', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('111E0', $range[0]);
		$this->assertEquals('111FF', $range[1]);
	}
}
