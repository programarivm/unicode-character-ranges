<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class SuttonSignWriting extends AbstractRange
{
	const RANGE_NAME = 'Sutton Sign Writing';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1D800',
			'1DAAF',
		];
	}
}
