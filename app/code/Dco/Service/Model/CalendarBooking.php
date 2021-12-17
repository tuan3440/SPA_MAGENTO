<?php


namespace Dco\Service\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class CalendarBooking extends AbstractModel implements IdentityInterface
{

    const CACHE_TAG = 'calendar_booking';
    protected function _construct()
    {
        $this->_init('Dco\Service\Model\ResourceModel\CalendarBooking');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
