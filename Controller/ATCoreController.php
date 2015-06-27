<?php
/**
 * Created by PhpStorm.
 * User: remy
 * Date: 18/04/15
 * Time: 00:47
 */

namespace AT\AdminBundle\Controller;


class ATCoreController extends \Sonata\AdminBundle\Controller\CoreController
{

    public function getRequest()
    {
        return $this->container->get("request");
    }
}