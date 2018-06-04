<?php

namespace UnicodeCharacterRanges\Range;

class SupplementalPrivateUseAreaA extends RangeAbstract
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
