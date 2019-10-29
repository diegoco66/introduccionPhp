<?php

require_once 'app/Models/Printable.php';

function printElement(Printable $job) {
    echo '<li class="work-position">';
    echo '<h5>'.$job->getTitle().'</h5>';
    echo '<p>'.$job->getDescription().'</p>';
    echo '<p>'.$job->getDurationAsString().'</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
}