### `Converter` class

#### `dec2unicode()`

Converts a decimal number into its Unicode character counterpart.

Example:

```php
use UnicodeRanges\Converter;

$dec = 926;
$unicode = Converter::dec2unicode($dec);

echo "$dec is $unicode" . PHP_EOL;
```

Output:

```
926 is Ξ
```

See more [examples](https://github.com/programarivm/unicode-ranges/tree/master/examples/converter).
