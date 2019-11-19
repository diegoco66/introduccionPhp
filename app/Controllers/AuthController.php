<?php

namespace App\Controllers;

use App\Models\User;

class AuthController extends BaseController {

    public function getLogin() {
        return $this->renderHTML('login.twig');
    }

    public function postLogin($request) {
        $postData = $request->getParsedBody();

        $user = User::where('username', $postData['username'])->first();

        if ($user) {
            if (password_verify($postData['password'], $user->password)) {
                echo 'Correct';
            } else {
                echo 'Wrong';
            }
        } else {
            echo 'Not found';
        }
    }
}