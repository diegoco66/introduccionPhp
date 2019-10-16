<?php

function printJob($job) {
    echo '<li class="work-position">';
    echo '<h5>'.$job->getTitle().'</h5>';
    echo '<p>'.$job->description.'</p>';
    echo '<p>'.getDuration($job->months).'</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
}

function getDuration($months) {
    $response = "";
    $years = floor($months /12);
    $extraMonths = $months % 12;

    if ($years > 0) {
        $response .= $years . " ";
        $response .= ($years != 1) ? " años " : " año ";
    }
    return "$response $extraMonths meses";
}