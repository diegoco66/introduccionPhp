<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {
    protected $table = 'jobs';

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