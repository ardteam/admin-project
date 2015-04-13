<?php
/**
 * Created by PhpStorm.
 * User: remy
 * Date: 13/04/15
 * Time: 22:56
 */

namespace AT\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin as BaseAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\FormBuilder;

class Admin extends BaseAdmin
{
    protected $mode = null;

    /**
     * @param FormBuilder $formBuilder
     */
    public function defineFormBuilder(FormBuilder $formBuilder)
    {
        $mapper = new FormMapper($this->getFormContractor(), $formBuilder, $this);

        if($this->getMode()) {
            $method = "configure" . ucwords($this->getMode()) . "Fields";
            if(method_exists($this, $method)) {
                $this->{$method}($mapper);
            }
        } else {
            $this->configureFormFields($mapper);
        }

        foreach ($this->getExtensions() as $extension) {
            $extension->configureFormFields($mapper);
        }

        $this->attachInlineValidator();
    }

    /**
     * @return mixed
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param mixed $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }
}