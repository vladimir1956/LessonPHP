<?php

namespace App\Models;

trait HasEmailTrait
{
    public $email;
    public function getEmail()
    {
        return $this->email;
    }
}