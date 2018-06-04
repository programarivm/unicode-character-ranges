<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\OlChiki;

class OlChikiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new OlChiki;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Ol Chiki', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1C50', $range[0]);
		$this->assertEquals('1C7F', $range[1]);
	}
}
