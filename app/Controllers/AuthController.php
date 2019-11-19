<?php

namespace App\Controllers;

use App\Models\User;
use Zend\Diactoros\Response\RedirectResponse;

class AuthController extends BaseController {

    public function getLogin() {
        return $this->renderHTML('login.twig');
    }

    public function postLogin($request) {
        $postData = $request->getParsedBody();
        $responseMessage = null;

        $user = User::where('username', $postData['username'])->first();

        if ($user) {
            if (password_verify($postData['password'], $user->password)) {
                $_SESSION['userId'] = $user->id;
                return new RedirectResponse('/introduccionPhp/admin');
            } else {
                $responseMessage = 'Bad credentials';
            }
        } else {
            $responseMessage = 'Bad credentials';
        }

        return $this->renderHTML('login.twig', [
           'responseMessage' => $responseMessage
        ]);
    }

    public function getLogout() {
        unset($_SESSION['userId']);
        return new RedirectResponse('/introduccionPhp/login');
    }
}