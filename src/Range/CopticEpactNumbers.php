<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class CopticEpactNumbers extends AbstractRange
{
	const RANGE_NAME = 'Coptic Epact Numbers';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'102E0',
			'102FF',
		];
	}
}
