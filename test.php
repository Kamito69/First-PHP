<?php
$companies = [
    'TFO' => [
        'revenue' => [
            '2021' => 1000,
            '2022' => 1001,
        ],
        'profit' => [
            '2021' => 10,
            '2022' => 12,
        ],
    ],
    'FPT' => [
        'revenue' => [
            '2021' => 100000,
            '2022' => 100001,
        ],
        'profit' => [
            '2021' => 1010,
            '2022' => 1200,
        ],
    ]
];
array_reduce($companies, function($key, $comp){
    array_reduce($comp, function($key2, $value){
        echo array_sum($value)."<br>";
    });
});

foreach($companies as $key => $value){
    foreach($value as $key1 => $value2){
        echo array_sum($value2)."<br>";
    }
}