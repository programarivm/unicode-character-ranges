<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\EarlyDynasticCuneiform;

class EarlyDynasticCuneiformTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new EarlyDynasticCuneiform;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Early Dynastic Cuneiform', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('12480', $range[0]);
		$this->assertEquals('1254F', $range[1]);
	}
}
