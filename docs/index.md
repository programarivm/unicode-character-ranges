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

#### `name()`

Gets the name of the Unicode range.

```php
$name = $alchemicalSymbols->name();
```

#### `count()`

Counts the number of characters in a range.

```php
$count = $alchemicalSymbols->count();
```
#### `range()`

Returns the Unicode range in hexadecimal format.

```php
$range = $alchemicalSymbols->range();
```
#### `chars()`

Returns an array containing the chars of that range.

```php
$chars = $alchemicalSymbols->chars();
```

See more [examples](https://github.com/programarivm/unicode-ranges/tree/master/tests/Range).

### Documentation

For further information please read the [Documentation](https://unicode-ranges.readthedocs.io/en/latest/).

### License

The GNU General Public License.

### Contributions

Would you help make this library better? Contributions are welcome.

- Feel free to send a pull request
- Drop an email at info@programarivm.com with the subject "Unicode Ranges"
- Leave me a comment on [Twitter](https://twitter.com/programarivm)
- Say hello on [Google+](https://plus.google.com/+Programarivm)

Many thanks.
