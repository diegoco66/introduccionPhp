<?php


class Job {

    private $title;
    public $description;
    public $visible;
    public $months;

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

}