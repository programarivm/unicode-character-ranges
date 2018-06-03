<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\ControlPictures;

class ControlPicturesTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new ControlPictures;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Control Pictures', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2400', $range[0]);
		$this->assertEquals('243F', $range[1]);
	}
}
