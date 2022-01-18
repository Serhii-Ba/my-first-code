<?php

namespace Less19\Myclass;


class Control
{
    public function filter($users)
    {
        return array_filter($users, function ($user) {
            if ($user->age > 18) {
                return true;
            } else {
                return false;
            }
        });
    }
}
