<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Khojki;

class KhojkiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Khojki;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Khojki', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('11200', $range[0]);
		$this->assertEquals('1124F', $range[1]);
	}
}
