# DDumper
This package has 4 helpers for dump your variables in case of debugging.
As a plus, 2 of this helpers dumps your variables in expanded mode.


## Requirements ##
- PHP Version >= 7.1
- Symfony VarDumper >= 4.3


## Installation ##
The recommended way to install DDumper is through [Composer](http://getcomposer.org/):

```json
{
    "require": {
        "ricardoper/ddumper": "^1.0"
    }
}
```


## Helpers:
+ `d($var1, $var2, ...)` - Dump vars in colapsed mode by default
+ `dd($var1, $var2, ...)` - Dump & die vars in colapsed mode by default
+ `de($var1, $var2, ...)` - Dump vars in expanded mode by default
+ `dde($var1, $var2, ...)` - Dump & die vars in expanded mode by default

**NOTE:** In `de()` and `dde()` helpers, all nodes, subnodes and childs will be showed expanded when rendered.


## Examples ##

#### dd()
```php
<?php dd(true, 1234, 'string', [
    'key1' => 'val1',
    'key2' => [
        'l1_key1' => 'l1_val1',
        'l1_key2' => 'l1_val2',
        'l1_key3' => [
             'l2_key1' => 'l2_val1',
             'l2_key2' => 'l2_val2',
         ],
    ],
]);

```
![dd](https://raw.githubusercontent.com/ricardoper/ddumper/master/static/dd.png)


#### dde()
```php
<?php dde(true, 1234, 'string', [
    'key1' => 'val1',
    'key2' => [
        'l1_key1' => 'l1_val1',
        'l1_key2' => 'l1_val2',
        'l1_key3' => [
             'l2_key1' => 'l2_val1',
             'l2_key2' => 'l2_val2',
         ],
    ],
]);

```
![dd](https://raw.githubusercontent.com/ricardoper/ddumper/master/static/dde.png)


## License ##
Released under the MIT License.
