<?php
namespace NethServer\Module;
/**
 * Implementation of Fail2Ban
 */
class Fail2Ban extends \Nethgui\Controller\TabsController
{
    protected function initializeAttributes(\Nethgui\Module\ModuleAttributesInterface $base)
    {
        return \Nethgui\Module\SimpleModuleAttributesProvider::extendModuleAttributes($base, 'Security', 50);
    }
    public function initialize()
    {
        parent::initialize();
        $this->loadChildrenDirectory();
    }
}
