<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Miao;

class MiaoTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Miao;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Miao', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('16F00', $range[0]);
		$this->assertEquals('16F9F', $range[1]);
	}
}
