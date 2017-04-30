<?php

for ($index = 0; $index < 30; $index++) {
    sleep(1);
    print "</br>TIME : " . date(DATE_ISO8601);
    ob_flush();
    flush();
}