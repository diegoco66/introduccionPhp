<?php

$job1 = new Job('PHP Developer', 'This is an awesome job!!!');
$job1->months = 39;

$job2 = new Job('Python Dev', 'This is an awesome job!!!');
$job2->months = 4;

$job3 = new Job('DevOps', 'This is an awesome job!!!');
$job3->months = 15;

$job4 = new Job('Node Dev', 'This is an awesome job!!!');
$job4->months = 6;

$job5 = new Job('Ruby', 'This is an awesome job!!!');
$job5->months = 18;

$jobs = [
    $job1,
    $job2,
    $job3,
    $job4,
    $job5
];