The solution is to always use strict comparison (`===`) instead of loose comparison (`==`) when comparing values in PHP.  Strict comparison checks both the value and the type of the operands, preventing the type juggling that can lead to unexpected results. 

```php
<?php
$a = '10';
$b = 10;
if ($a === $b) {
  echo "Values are equal (strict comparison)";
} else {
  echo "Values are not equal (strict comparison)";
}
?>
```
By using strict comparison, you eliminate the potential for type juggling errors and ensure that your code behaves as expected.