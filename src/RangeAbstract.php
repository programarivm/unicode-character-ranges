<?php

namespace UnicodeCharacterRanges;

abstract class RangeAbstract
{
	protected $name;

	protected $range;

	protected $chars = [];

	public function getName()
	{
		return $this->name;
	}

	public function getRange()
	{
		return $this->range;
	}

	public function getChars()
	{

	}
}
