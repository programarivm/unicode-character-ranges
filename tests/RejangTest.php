<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Rejang;

class RejangTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Rejang;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Rejang', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('A930', $range[0]);
		$this->assertEquals('A95F', $range[1]);
	}
}
