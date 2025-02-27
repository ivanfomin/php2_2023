<?php

namespace Models;

class User extends \profit\Models\Model
{

    protected const TABLE = 'users';

    public string $email;
    public string $phone;

}
