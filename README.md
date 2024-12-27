# PHP Loose Comparison Pitfall

This repository demonstrates a common, yet subtle, error in PHP programming related to loose comparisons.  Loose comparison (`==`) in PHP can lead to unexpected results due to automatic type juggling.  This example highlights the problem and offers a solution using strict comparison (`===`).

## The Problem
PHP's loose comparison operator (`==`) performs type coercion before comparison. This means that if the operands are of different types, PHP attempts to convert them to a common type before checking for equality. This often leads to unintended behavior, particularly when comparing strings and integers.

## The Solution
To avoid these unexpected results, always use strict comparison (`===`) when you need to ensure both type and value are identical.  Strict comparison does not perform type juggling, making the comparison more predictable and reliable.

## How to Run
1. Clone the repository.
2. Run `bug.php` to see the unexpected behavior of loose comparison.
3. Run `bugSolution.php` to see the corrected behavior using strict comparison.
