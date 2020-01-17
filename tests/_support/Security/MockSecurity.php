<?php

namespace Tests\Support\Security;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Security\Security;

class MockSecurity extends Security
{
    public function CSRFSetCookie(RequestInterface $request)
    {
        $_COOKIE['csrf_cookie_name'] = $this->CSRFHash;

        return $this;
    }

    //--------------------------------------------------------------------
}