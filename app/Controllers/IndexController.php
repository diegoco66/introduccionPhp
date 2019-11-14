<?php

namespace App\Controllers;

use App\Models\{Job, Project};

class IndexController extends BaseController {

    public function indexAction() {
        $lastName = 'Correa';
        $name = "Diego $lastName";//Esto se puede hacer solo cuando es comilla doble
        $limitMonths = 12;
        $tabla = <<<EOP
            <table border="1">
                <thead>
                    <tr>
                        <th>Hola</th>
                        <th>$lastName</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                    </tr>
                </tbody>
            </table>
        EOP;
        //La sintaxis de arriba es de la forma Heredoc, y corresponde a una forma de comilla doble pero permitiendo múltiples líneas

        $jobs = Job::all();
        $projects = Project::all();

        return $this->renderHTML('index.twig', array(
            'name' => $name,
            'limitMonths' => $limitMonths,
            'tabla' => $tabla,
            'jobs' => $jobs,
            'projects' => $projects
        ));
    }
}
