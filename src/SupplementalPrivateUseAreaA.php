<?php

namespace UnicodeCharacterRanges;

class SupplementalPrivateUseAreaA extends CharacterRange
{
	const RANGE_NAME = 'Supplemental Private Use Area-A';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'F0000',
			'FFFFD',
		];
	}
}
