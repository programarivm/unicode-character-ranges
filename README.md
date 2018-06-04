## Unicode Ranges

[![Build Status](https://travis-ci.org/programarivm/unicode-ranges.svg?branch=master)](https://travis-ci.org/programarivm/unicode-ranges)
[![Packagist](https://img.shields.io/packagist/dt/programarivm/unicode-ranges.svg)](https://packagist.org/packages/programarivm/unicode-ranges)
[![License: GPL v3](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)
![Unicode Character Ranges](/resources/logo.jpg?raw=true)

Unicode character ranges (or blocks) in a friendly object-oriented way for multiple purposes. See [Unicode ranges](https://github.com/programarivm/unicode-ranges/tree/master/src/Range).

### 1. Install

Via composer:

    $ composer require programarivm/unicode-ranges

### 2. Use

### The Ranges

```php
use UnicodeRanges\Range\AlchemicalSymbols;

$alchemicalSymbols = new AlchemicalSymbols;
```

#### `count()`

Counts the number of characters in a range.

```php
$alchemicalSymbols->count();
```
#### `range()`

Returns the Unicode range in hexadecimal format.

```php
$alchemicalSymbols->range();
```
#### `chars()`

Returns an array containing the chars of that range.

```php
$alchemicalSymbols->chars();
```

See [examples](https://github.com/programarivm/unicode-ranges/tree/master/examples/ranges).

- - -

### The `Converter` class

#### `dec2unicode()`

Converts a decimal number into its Unicode character counterpart.

```php
use UnicodeRanges\Converter;

Converter::dec2unicode(12004);
```

See [examples](https://github.com/programarivm/unicode-ranges/tree/master/examples/converter).

- - -

### The `Randomizer` class

#### `char()`

Generates a random Unicode character given one or multiple Unicode ranges.

```php
use UnicodeCharacterRanges\Randomizer;
use UnicodeCharacterRanges\Range\BasicLatin;
use UnicodeCharacterRanges\Range\Tibetan;
use UnicodeCharacterRanges\Range\Cherokee;

$char = Randomizer::char([
    new BasicLatin,
    new Tibetan,
    new Cherokee,
]);

echo "Random Unicode char: $char" . PHP_EOL;
```
    Random Unicode char: Ꮉ

See [examples](https://github.com/programarivm/unicode-ranges/tree/master/examples/randomizer).

### 3. License

The GNU General Public License.

### 4. Contributions

Would you help make this library better? Contributions are welcome.

- Feel free to send a pull request
- Drop an email at info@programarivm.com with the subject "Unicode Ranges"
- Leave me a comment on [Twitter](https://twitter.com/programarivm)
- Say hello on [Google+](https://plus.google.com/+Programarivm)

Many thanks.
