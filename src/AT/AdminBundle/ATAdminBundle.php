<?php
/**
 * Created by PhpStorm.
 * User: remy
 * Date: 13/04/15
 * Time: 22:31
 */

namespace AT\AdminBundle;


use Symfony\Component\HttpKernel\Bundle\Bundle;

class ATAdminBundle extends Bundle
{
    public function getParent()
    {
        return "SonataAdminBundle";
    }
}