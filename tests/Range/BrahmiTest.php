<?php

namespace UnicodeCharacterRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Brahmi;

class BrahmiTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Brahmi;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Brahmi', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('11000', $range[0]);
		$this->assertEquals('1107F', $range[1]);
	}
}
