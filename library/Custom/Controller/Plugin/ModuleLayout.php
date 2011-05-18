<?php
class Custom_Controller_Plugin_ModuleLayout extends Zend_Layout_Controller_Plugin_Layout
{
    public function preDispatch(Zend_Controller_Request_Abstract $request)
    {
        $this->getLayout()->setLayoutPath(
            Zend_Controller_Front::getInstance()
                ->getModuleDirectory($request->getModuleName()) . '/views/layouts'
        );
        $this->getLayout()->setLayout('default');
    }
}