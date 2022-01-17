<?php

namespace Less19\Myclass;

class Control
{
    public function filter($users)
    {
        array_filter($users, function($user) {
            return $user["*age"] >= 18;
        });
    }
}
