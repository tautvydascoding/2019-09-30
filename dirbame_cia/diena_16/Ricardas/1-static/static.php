<?php
// function test() {
//     static $a = 0;
//     echo $a;
//     $a++;
// }

// test();
// test();
// test();

function test2() {
    static $count = 0;
    $count++;
    if($count < 10) {
        echo $count;
        test2();
    }
}

test2();