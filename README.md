Wandu Fastelper
===

[![Latest Stable Version](https://poser.pugx.org/wandu/fastelper/v/stable.svg)](https://packagist.org/packages/wandu/fastelper)
[![Latest Unstable Version](https://poser.pugx.org/wandu/fastelper/v/unstable.svg)](https://packagist.org/packages/wandu/fastelper)
[![Total Downloads](https://poser.pugx.org/wandu/fastelper/downloads.svg)](https://packagist.org/packages/wandu/fastelper)
[![License](https://poser.pugx.org/wandu/fastelper/license.svg)](https://packagist.org/packages/wandu/fastelper)

Fast Helper Assembly.

## Array

**array_unique_intersect**

run `php benchmarkes/array_unique_intersect.php` file.
first one is `array_values(array_intersect(($x, $y))`. second one is `array_unique_intersect`(in Fastelper).

```
Memory Usage : 1.25Mb
Memory Peak : 1.25Mb
Run Time : 3s
Result
...

Memory Usage : 1.75Mb
Memory Peak : 1.75Mb
Run Time : 397ms
Result
...
```

**array_unique_union**

run `php benchmarkes/array_unique_union.php` file.
first one is `array_unique(array_merge($x, $y))`. second one is `array_unique_union`(in Fastelper).

```
Memory Usage : 1024.00Kb
Memory Peak : 1024.00Kb
Run Time : 18ms
Result
...

Memory Usage : 1024.00Kb
Memory Peak : 1024.00Kb
Run Time : 9ms
Result
...
```

## Contribute

- https://github.com/koojunho (`array_flip` idea)
