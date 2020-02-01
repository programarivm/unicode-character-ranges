<?php

namespace UnicodeRanges\Utils;

class Multibyte
{
	public static function strSplit(string $string): array
	{
		$string = preg_replace('!\s+!', ' ', $string);
		$string = str_replace (' ', '', $string);

		return preg_split('/(?<!^)(?!$)/u', $string);
	}

	public static function strMatches(string $string1, string $string2): int
	{
		$array1 = self::arrSort(self::strSplit($string1));
		$array2 = self::arrSort(self::strSplit($string2));

		return $this->arrMatches($array1, $array2);
	}

	public static function arrMatches(array $array1, array $array2)
	{
		$matches = [];
		foreach ($array1 as $key => $val) {
			if (array_key_exists($key, $array2)) {
				$array1[$key] >= $array2[$key] ? $matches[$key] = $array2[$key] : $matches[$key] = $array1[$key];
			};
		}

		return array_sum($matches);
	}

	public static function arrSort(array $array): array
	{
		$converter = new Converter();
		$items = [];
		foreach ($array as $char) {
			$dec = $converter->unicode2dec($char);
			!array_key_exists($dec, $items) ? $items[$dec] = 1 : $items[$dec] += 1;
		}
		ksort($items);

		return $items;
	}
}
