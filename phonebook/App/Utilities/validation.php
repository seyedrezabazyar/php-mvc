<?php

namespace App\Utilities;

class Validation
{
    public static function is_valid_email(string $email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
            return true;
        return false;
    }

    public static function is_strong_password(string $password)
    {
        # پسورد معتبر باید حداقل ۸ حرف شامل حروف و عدد باشد
        $lengthCheck = (strlen($password) >= 8) ? 1 : 0;
        $lettersCheck = preg_match('/[a-zA-z]/', $password);
        $digitsCheck = preg_match('/\d/', $password);
        return ($lengthCheck && $lettersCheck && $digitsCheck);
    }
}
