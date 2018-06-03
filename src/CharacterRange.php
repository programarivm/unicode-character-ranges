<?php

namespace UnicodeCharacterRanges;

abstract class CharacterRange
{
	protected $name;

	protected $range;

	public function getName()
	{
		return $this->name;
	}

	public function getRange()
	{
		return $this->range;
	}
}
