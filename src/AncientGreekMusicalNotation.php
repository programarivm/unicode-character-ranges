<?php

namespace UnicodeCharacterRanges;

class AncientGreekMusicalNotation extends CharacterRange
{
	const RANGE_NAME = 'Ancient Greek Musical Notation';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1D200',
			'1D24F',
		];
	}
}
