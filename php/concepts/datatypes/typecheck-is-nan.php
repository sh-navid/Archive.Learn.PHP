<?php

echo var_dump(is_nan(12));
// bool(false)

echo var_dump(is_nan(12e12));
// bool(false)

echo var_dump(is_nan(acos(12)));
// bool(true)




echo var_dump(is_finite(12));
// bool(true)

echo var_dump(is_infinite(12));
// bool(false)

echo var_dump(is_infinite(PHP_FLOAT_MAX * 1000));
// bool(true)