<?php


namespace Dco\Service\Model\ResourceModel\Locator;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'locator_id';

    protected function _construct()
    {
        $this->_init('Dco\Service\Model\Locator', 'Dco\Service\Model\ResourceModel\Locator');
    }
}
