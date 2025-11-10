<?php

stream_set_blocking(STDIN, false);

do {
    echo rand(10000, 99999);
    $key = ord(fgetc(STDIN));
} while ($key != 10);

