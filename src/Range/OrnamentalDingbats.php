<?php

namespace UnicodeRanges\Range;

class OrnamentalDingbats extends RangeAbstract
{
	const RANGE_NAME = 'Ornamental Dingbats';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1F650',
			'1F67F',
		];
	}
}
