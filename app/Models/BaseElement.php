<?php

class BaseElement {
    //Con la palabra reservada protected podemos acceder a esta variable solo desde su propia clase o desde
    //Las clases que heredan de esta.
    protected $title;
    public $description;
    public $visible = true;
    public $months;

    public function __construct($title, $description) {
        $this->setTitle($title);
        $this->description = $description;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        if ($title == "") {
            $this->title = "N/A";
        } else {
            $this->title = $title;
        }
    }

    public function getDurationAsString() {
        $response = "";
        $years = floor($this->months /12);
        $extraMonths = $this->months % 12;

        if ($years > 0) {
            $response .= $years . " ";
            $response .= ($years != 1) ? " años " : " año ";
        }
        return "$response $extraMonths meses";
    }
}