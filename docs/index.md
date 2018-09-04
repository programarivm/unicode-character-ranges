## Unicode Ranges

[![Build Status](https://travis-ci.org/programarivm/unicode-ranges.svg?branch=master)](https://travis-ci.org/programarivm/unicode-ranges)
[![Documentation Status](https://readthedocs.org/projects/unicode-ranges/badge/?version=latest)](https://unicode-ranges.readthedocs.io/en/latest/?badge=latest)
[![License: GPL v3](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)
![Unicode Character Ranges](/resources/logo.jpg?raw=true)

Unicode character ranges (or blocks) in a friendly object-oriented way for multiple purposes. See [Unicode ranges](https://github.com/programarivm/unicode-ranges/tree/master/src/Range).

### Install

Via composer:

    $ composer require programarivm/unicode-ranges

### Example

Here is an example showing how to use `AlchemicalSymbols`.

```php
<?php
use UnicodeRanges\Range\AlchemicalSymbols;

$alchemicalSymbols = new AlchemicalSymbols;

echo "Name: {$alchemicalSymbols->name()}".PHP_EOL;
echo "Total: {$alchemicalSymbols->count()}".PHP_EOL;
echo "Range: {$alchemicalSymbols->range()[0]}-{$alchemicalSymbols->range()[1]}".PHP_EOL;
echo 'Characters: '.PHP_EOL;
print_r($alchemicalSymbols->chars());
```
Output:
```
Name: Alchemical Symbols
Total: 128
Range: 1F700-1F77F
Characters:
Array
(
    [0] => 🜀
    [1] => 🜁
    [2] => 🜂
    [3] => 🜃
    [4] => 🜄
    [5] => 🜅
    [6] => 🜆
    [7] => 🜇
    ...
```

### Documentation

For further information please read the [Documentation](https://unicode-ranges.readthedocs.io/en/latest/).

### Frequency Analysis of Unicode Ranges

Here is another example:

[ babylon/tests/unit/UnicodeTest.php
](https://github.com/programarivm/babylon/blob/master/tests/unit/UnicodeTest.php)

```php
namespace Babylon\Tests\Unit\Unit;

use Babylon\Unicode;
use PHPUnit\Framework\TestCase;

class UnicodeTest extends TestCase
{
    /**
     * @test
     */
    public function freq()
    {
        $text = '律絕諸篇俱宇宙古今مليارات في мале,тъйжалнопе hola que tal como 토마토쥬스 estas tu hoy この平安朝の';
        $expected = [
            'Basic Latin' => 25,
            'Cyrillic' => 14,
            'CJK Unified Ideographs' => 12,
            'Arabic' => 9,
            'Hangul Syllables' => 5,
            'Hiragana' => 3,
        ];

        $this->assertEquals($expected, (new Unicode($text))->freq());
    }

    /**
     * @test
     */
    public function most_freq()
    {
        $text = '律絕諸篇俱宇宙古今مليارات في мале,тъйжалнопе hola que tal como 토마토쥬스 estas tu hoy この平安朝の';

        $this->assertEquals('Basic Latin', (new Unicode($text))->mostFreq());
    }
}
```

[ babylon/src/Unicode.php
](https://github.com/programarivm/babylon/blob/master/src/Unicode.php)

```php
namespace Babylon;

use Babylon;
use UnicodeRanges\Converter;

/**
 * Unicode class.
 *
 * @author Jordi Bassagañas <info@programarivm.com>
 * @link https://programarivm.com
 * @license MIT
 */
class Unicode
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
		$chars = $this->mbStrSplit($this->text);
		foreach ($chars as $char) {
			$unicodeRange = Converter::unicode2range($char);
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

	/**
     * Converts a multibyte string into an array of chars.
     *
     * @return array
     */
	private function mbStrSplit(string $text): array
	{
		$text = preg_replace('!\s+!', ' ', $text);
		$text = str_replace (' ', '', $text);

		return preg_split('/(?<!^)(?!$)/u', $text);
	}
}

```
### License

The GNU General Public License.

### Contributions

Would you help make this library better? Contributions are welcome.

- Feel free to send a pull request
- Drop an email at info@programarivm.com with the subject "Unicode Ranges"
- Leave me a comment on [Twitter](https://twitter.com/programarivm)
- Say hello on [Google+](https://plus.google.com/+Programarivm)

Many thanks.
