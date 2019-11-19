<?php


namespace App\Controllers;

use Respect\Validation\Validator as v;

use App\Models\User;

class UsersController extends BaseController {

    public function getAddUserAction($request) {
        $responseMessage = null;
        if ($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();
            $userValidator = v::key('username', v::stringType()->notEmpty())
                ->key('password', v::stringType()->notEmpty());

            $encryptedPassword = password_hash($postData['password'], PASSWORD_DEFAULT);

            try {
                $userValidator->assert($postData);
                $postData = $request->getParsedBody();

                $user = new User();
                $user->username = $postData['username'];
                $user->password = $encryptedPassword;
                $user->save();

                $responseMessage = 'Saved';
            } catch (\Exception $e) {
                $responseMessage = $e->getMessage();
            }
        }

        return $this->renderHTML('addUser.twig', array('responseMessage' => $responseMessage));
    }

}