<?php

namespace UnicodeRanges;

use UnicodeRanges\Converter;
use UnicodeRanges\Utils\Multibyte;

/**
 * Analyzer class.
 *
 * @author Jordi Bassagañas <info@programarivm.com>
 * @link https://programarivm.com
 * @license GNU GPL
 */
class Analyzer
{
	const N_FREQ_UNICODE_RANGES = 10;

	/**
     * Text to be analyzed.
     *
     * @var string
     */
	protected $text;

	/**
     * Unicode ranges frequency -- number of times that the unicode ranges appear in the text.
     *
     * Example:
     *
     *      Array
     *      (
     *         [Basic Latin] => 25
     *         [Cyrillic] => 14
     *         [CJK Unified Ideographs] => 12
     *         [Arabic] => 9
     *         [Hangul Syllables] => 5
     *         [Hiragana] => 3
	 *          ...
     *      )
     *
     * @var array
     */
	protected $freq;

	/**
     * Constructor.
     *
     * @param string $text
     */
	public function __construct(string $text)
	{
		$this->text = $text;
	}

	/**
     * The most frequent unicode ranges in the text.
     *
     * @return array
     * @throws \InvalidArgumentException
     */
	public function freq(): array
	{
		$converter = new Converter();
		$chars = Multibyte::strSplit($this->text);
		foreach ($chars as $char) {
			$unicodeRange = $converter->unicode2range($char);
			empty($this->freq[$unicodeRange->name()])
				? $this->freq[$unicodeRange->name()] = 1
				: $this->freq[$unicodeRange->name()] += 1;
		}
		arsort($this->freq);

		return array_slice($this->freq, 0, self::N_FREQ_UNICODE_RANGES);
	}

	/**
     * The most frequent unicode range in the text.
     *
     * @return \UnicodeRanges\AbstractRange
     * @throws \InvalidArgumentException
     */
	public function mostFreq(): string
	{
		return key(array_slice($this->freq(), 0, 1));
	}
}
