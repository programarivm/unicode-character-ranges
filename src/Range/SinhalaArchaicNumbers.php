<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class SinhalaArchaicNumbers extends RangeAbstract
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
