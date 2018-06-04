## Unicode Character Ranges

[![Build Status](https://travis-ci.org/programarivm/unicode-character-ranges.svg?branch=master)](https://travis-ci.org/programarivm/unicode-character-ranges)
[![Packagist](https://img.shields.io/packagist/dt/programarivm/unicode-character-ranges.svg)](https://packagist.org/packages/programarivm/unicode-character-ranges)
[![License: GPL v3](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)
![Unicode Character Ranges](/resources/logo.jpg?raw=true)

Unicode character ranges (or blocks) in a friendly object-oriented way for multiple purposes.

See [Unicode character ranges](https://github.com/programarivm/unicode-character-ranges/tree/master/src).

### 1. Install

Via composer:

    $ composer require programarivm/unicode-character-ranges

### 2. Example

See how [Random Unicode](https://github.com/programarivm/random-unicode) uses Unicode Character Ranges.

```php
use RandomUnicode\Randomizer;
use UnicodeCharacterRanges\BasicLatin;
use UnicodeCharacterRanges\Tibetan;
use UnicodeCharacterRanges\Cherokee;

$char = Randomizer::char([
    new BasicLatin,
    new Tibetan,
    new Cherokee,
]);

echo "Random Unicode char: $char" . PHP_EOL;
```

    Random Unicode char: Ꮉ

### 3. TODO

- Add more Unicode ranges

### 4. License

The GNU General Public License.

### 5. Contributions

Would you help make this library better? Contributions are welcome.

- Feel free to send a pull request
- Drop an email at info@programarivm.com with the subject "Unicode Character Ranges"
- Leave me a comment on [Twitter](https://twitter.com/programarivm)
- Say hello on [Google+](https://plus.google.com/+Programarivm)

Many thanks.
