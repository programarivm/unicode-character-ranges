<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\OldItalic;

class OldItalicTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new OldItalic;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Old Italic', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10300', $range[0]);
		$this->assertEquals('1032F', $range[1]);
	}
}
