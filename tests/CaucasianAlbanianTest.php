<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\CaucasianAlbanian;

class CaucasianAlbanianTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new CaucasianAlbanian;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Caucasian Albanian', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('10530', $range[0]);
		$this->assertEquals('1056F', $range[1]);
	}
}
