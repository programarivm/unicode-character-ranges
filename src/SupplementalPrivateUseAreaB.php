<?php

namespace UnicodeCharacterRanges;

class SupplementalPrivateUseAreaB extends CharacterRange
{
	const RANGE_NAME = 'Supplemental Private Use Area-B';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'100000',
			'10FFFD',
		];
	}
}
