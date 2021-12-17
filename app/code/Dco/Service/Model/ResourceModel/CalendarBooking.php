<?php


namespace Dco\Service\Model\ResourceModel;


class CalendarBooking extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('calendar_booking', 'id');
    }
}

