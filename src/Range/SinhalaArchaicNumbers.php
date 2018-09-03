<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class SinhalaArchaicNumbers extends AbstractRange
{
	const RANGE_NAME = 'Sinhala Archaic Numbers';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'111E0',
			'111FF',
		];
	}
}
