<?php

namespace Denis303\CodeIgniter\BBCode\Config;

use Denis303\CodeIgniter\BBCode\Libraries\BBCodeService;

class Services extends \CodeIgniter\Config\BaseService
{

    public static function bbcode($getShared = true)
    {
        if (!$getShared)
        {
            return new BBCodeService;
        }

        return static::getSharedInstance(__FUNCTION__);
    }

}