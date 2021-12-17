<?php

namespace Dco\Service\Controller\Adminhtml\Locator;

use Dco\Service\Controller\Adminhtml\Locator;

class Create extends Locator
{
    public function execute()
    {
        $this->_forward('edit');
    }
}
