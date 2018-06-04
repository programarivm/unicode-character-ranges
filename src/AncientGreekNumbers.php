<?php

namespace UnicodeCharacterRanges;

class AncientGreekNumbers extends CharacterRange
{
	const RANGE_NAME = 'Ancient Greek Numbers';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10140',
			'1018F',
		];
	}
}
