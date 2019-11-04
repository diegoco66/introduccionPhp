<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {
    protected $table = 'projects';

    public function getDurationAsString() {
        $response = "";
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;

        if ($years > 0) {
            $response .= $years . " ";
            $response .= ($years != 1) ? " años " : " año ";
        }
        return "Project duration: $response $extraMonths meses";
    }
}