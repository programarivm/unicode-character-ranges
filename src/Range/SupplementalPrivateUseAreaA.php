<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class SupplementalPrivateUseAreaA extends AbstractRange
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
