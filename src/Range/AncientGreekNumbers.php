<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class AncientGreekNumbers extends AbstractRange
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
