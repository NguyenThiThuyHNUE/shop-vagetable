<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailUser extends Model
{
    protected $guarded = ['_token'];
}
