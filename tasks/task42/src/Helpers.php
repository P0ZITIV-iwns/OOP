<?php

namespace App\Helpers;

use App\Guest;
use App\User;

function getGreeting($user)
{
    if ($user instanceof Guest) {
        return "Nice to meet you {$user->getName()}!";
    } elseif ($user instanceof User) {
        return "Hello {$user->getName()}!";
    }
}
