<?php


namespace Dco\Service\Model\ResourceModel\CalendarBooking;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init('Dco\Service\Model\CalendarBooking', 'Dco\Service\Model\ResourceModel\CalendarBooking');
    }
}

