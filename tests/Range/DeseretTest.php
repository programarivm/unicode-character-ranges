<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Deseret;

class DeseretTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Deseret;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Deseret', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10400', $range[0]);
		$this->assertEquals('1044F', $range[1]);
	}
}
