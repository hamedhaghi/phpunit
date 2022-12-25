<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Auth;
use App\Request;

class LoginController extends BaseController
{
    public function login(Request $request): bool
    {
        if ((new Auth())->attempt($request->get('email'), $request->get('password'))) {
            //go to panel
            return true;
        }

        //redirect back
        return false;
    }
}