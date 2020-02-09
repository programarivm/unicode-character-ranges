<?php

namespace UnicodeRanges;

abstract class AbstractRange
{
	protected $name;

	protected $range;

	protected $count;

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
}
