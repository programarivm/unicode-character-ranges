<?php

namespace UnicodeRanges;

use UnicodeRanges\Converter;

abstract class AbstractRange
{
	protected $name;

	protected $range;

	protected $count;

	protected $chars = [];

	public function name()
	{
		return $this->name;
	}

	public function range()
	{
		return $this->range;
	}

	public function count()
	{
		return (hexdec($this->range[1]) - hexdec($this->range[0])) + 1;
	}

	public function chars()
	{
		$from = hexdec($this->range[0]);
		$to = hexdec($this->range[1]);

		for ($i = $from; $i <= $to; $i++) {
			$this->chars[] = Converter::dec2unicode($i);
		}

		return $this->chars;
	}
}
