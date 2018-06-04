<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\ControlPictures;

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
		$this->assertEquals('Control Pictures', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('2400', $range[0]);
		$this->assertEquals('243F', $range[1]);
	}
}
