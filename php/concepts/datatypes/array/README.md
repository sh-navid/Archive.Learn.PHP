# PHP
## Datatype
### [Array](https://www.php.net/manual/en/ref.array.php)
- [ ] TODO: CHECKOUT EVERY FUNCTION IN THIS THREAD
- Types
    - Indexed
    - Associative 
    - Multidimensional
### Functions
- Sort
    - [`sort()`](array-sort.php)
        >> ASC sort
    - [`rsort()`](array-sort.php)
        >> DESC sort
    - [`asort()`](array-sort.php)
        >> ASC sort + index association
    - [`arsort()`](array-sort.php)
        >> DESC sort + index association
    - [`ksort()`](array-sort.php)
        >> ASC key sort
    - [`krsort()`](array-sort.php)
        >> DESC key sort
    - [`natsort()`](array-sort.php)
        >> sort with natural order
    - [`natcasesort()`](array-sort.php)
        >> sort with natural order ignore-case
    - [`array_multisort()`](array-multisort.php) ***
- Math
    - [`array_product()`](array-math.php)
    - [`array_sum()`](array-math.php)
- Cursor 
    - [`current()`](array-each.php)
        - [`next()`](array-each.php)
        - [`prev()`](array-each.php)
        - [`each()`](array-each.php)
        - [`reset()`](array-each.php)
        - [`end()`](array-each.php)
- Key
    - [`array_keys()`](array-key-value.php)
    - [`array_key_first()`](array-key-first-last.php)
    - [`array_key_last()`](array-key-first-last.php)
    - [`array_key_exists()`](array-key-first-last.php)
        - [`key_exists()`] (array-key-first-last.php)
- Value
    - [`array_values()`](array-key-value.php)
    - [`list()`](array-list.php)
        >> Unpack variables
- Other
    - [`array()`](array-output.php)
    - [`count()`](array-count.php)
        - `sizeof()`
    - [`array_change_key_case()`](array-change-case.php)
    - [`array_chunk()`](array-chuck.php)
    - [`array_combine()`](array-combine.php)
    - [`array_diff()`](array-diff.php)
        - [`array_diff_key()`](array-diff.php)
    - [`array_flip()`](array-flip.php)
    - [`array_pad()`](array-pad.php)
    - [`array_pop()`](array-push-pop.php)
        - [`array_shift()`](array-push-pop.php)
    - [`array_push()`](array-push-pop.php)
        - [`array_unshift()`](array-push-pop.php)
    - [`array_rand()`](array-func.php)
        >> Like py choice
    - [`array_reverse()`](array-func.php)
    - [`array_reduce()`](array-reduce.php)
    - [`array_walk()`](array-walk.php)
        - `array_walk_recursive()` ***
            >> To use with deeper arrays like array in array
    - [`array_replace()`](array-replace.php)
        - `array_replace_recursive()` ***
    - [`array_slice()`](array-slice.php)
        - [`array_splice()`](array-slice.php)
    - [`array_unique()`](array-uq.php)
        >> Remove duplicates
    - [`in_array()`](array-in.php)
    - [`range()`](array-range.php)
    - [`shuffle()`](array-shuffle.php)
    - [`array_map()`](array-map.php)
    - [`array_fill()`](array-fill.php)
        - [`array_fill_keys()`](array-fill.php)
    - `array_filter()` ***
    - `array_intersect()` ***
    - `array_is_list()` ***
    - `array_merge()` ***
        - `array_merge_recursive()` ***
    - `array_search()` ***