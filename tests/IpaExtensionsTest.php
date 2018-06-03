<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\IpaExtensions;

class IpaExtensionsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new IpaExtensions;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('IPA Extensions', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('0250', $range[0]);
		$this->assertEquals('02AF', $range[1]);
	}
}
