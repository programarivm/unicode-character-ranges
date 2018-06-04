<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Mahajani;

class MahajaniTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Mahajani;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Mahajani', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('11150', $range[0]);
		$this->assertEquals('1117F', $range[1]);
	}
}
