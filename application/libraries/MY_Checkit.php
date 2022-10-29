<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Checkit {

    public function validateEmail(string $email = null)
    {

        if(is_null($email))
        {
            return false;
        }

        return (!preg_match(
            "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email))
                    ? FALSE : TRUE;

    }

}