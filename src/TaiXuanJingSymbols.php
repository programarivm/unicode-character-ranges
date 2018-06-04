<?php

namespace UnicodeCharacterRanges;

class TaiXuanJingSymbols extends CharacterRange
{
	const RANGE_NAME = 'Tai Xuan Jing Symbols';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1D300',
			'1D35F',
		];
	}
}
