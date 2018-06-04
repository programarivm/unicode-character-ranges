<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Duployan;

class DuployanTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Duployan;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Duployan', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1BC00', $range[0]);
		$this->assertEquals('1BC9F', $range[1]);
	}
}
