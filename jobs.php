<?php

$job1 = new Job();
$job1->setTitle('PHP Developer');
$job1->description = 'This is an awesome job!!!';
$job1->visible = true;
$job1->months = 39;

$job2 = new Job();
$job2->setTitle('Python Dev');
$job2->description = 'This is an awesome job!!!';
$job2->visible = false;
$job2->months = 4;

$job3 = new Job();
$job3->setTitle('DevOps');
$job3->description = 'This is an awesome job!!!';
$job3->visible = false;
$job3->months = 15;

$job4 = new Job();
$job4->setTitle('Node Dev');
$job4->description = 'This is an awesome job!!!';
$job4->visible = true;
$job4->months = 6;

$job5 = new Job();
$job5->setTitle('Ruby');
$job5->description = 'This is an awesome job!!!';
$job5->visible = true;
$job5->months = 18;

$jobs = [
    $job1,
    $job2,
    $job3,
    $job4,
    $job5
];