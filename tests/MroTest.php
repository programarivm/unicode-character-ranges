<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Mro;

class MroTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Mro;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Mro', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('16A40', $range[0]);
		$this->assertEquals('16A6F', $range[1]);
	}
}
