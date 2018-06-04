<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Manichaean;

class ManichaeanTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Manichaean;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Manichaean', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10AC0', $range[0]);
		$this->assertEquals('10AFF', $range[1]);
	}
}
