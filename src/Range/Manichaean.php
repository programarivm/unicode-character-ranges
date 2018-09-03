<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Manichaean extends AbstractRange
{
	const RANGE_NAME = 'Manichaean';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10AC0',
			'10AFF',
		];
	}
}
