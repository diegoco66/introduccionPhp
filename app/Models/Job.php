<?php

require_once 'BaseElement.php';

class Job extends BaseElement {

    public function __construct($title, $description) {
        $newTitle = 'Job: ' . $title;
        parent::__construct($newTitle, $description);
    }

    public function getDurationAsString()
    {
        $response = "";
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;

        if ($years > 0) {
            $response .= $years . " ";
            $response .= ($years != 1) ? " años " : " año ";
        }
        return "Job duration: $response $extraMonths meses";
    }
}