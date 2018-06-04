<?php

namespace UnicodeCharacterRanges;

class CopticEpactNumbers extends CharacterRange
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
