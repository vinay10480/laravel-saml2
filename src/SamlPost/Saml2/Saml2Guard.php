<?php

namespace SamlPost\Saml2;


use Illuminate\Contracts\Auth\Authenticatable;

class Saml2Guard implements \Illuminate\Contracts\Auth\Guard
{

    /**
     * Check if SAML user is logged in
     */
    public function check()
    {
        $isLoggedIn = session('isLoggedIn');
        return !empty($isLoggedIn) && $isLoggedIn; //TODO && $this->isValidGroup(???)
    }

    public function guest()
    {
        //TODO
    }

    public function user()
    {
        //TODO
    }

    public function id()
    {
        //TODO
    }


    public function validate(array $credentials = [])
    {
        Saml2Auth::login(URL::full());
    }

    public function setUser(Authenticatable $user)
    {
        //TODO
    }
}