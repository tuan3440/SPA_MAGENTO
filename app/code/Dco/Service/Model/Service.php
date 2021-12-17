<?php

namespace Dco\Service\Model;

use Dco\Service\Api\Data\ServiceInterface;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class Service extends AbstractModel implements IdentityInterface
{
    const CACHE_TAG = 'spa_service';

    protected function _construct()
    {
        $this->_init('Dco\Service\Model\ResourceModel\Service');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];

    }
}
