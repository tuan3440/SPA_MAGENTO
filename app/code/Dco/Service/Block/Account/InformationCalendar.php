<?php


namespace Dco\Service\Block\Account;

use Magento\Customer\Model\SessionFactory;
use Dco\Service\Model\ResourceModel\CalendarBooking\CollectionFactory;
use Magento\Framework\View\Element\Template;
use Dco\Service\Model\ServiceFactory;
use Dco\Service\Model\LocatorFactory;
use Dco\Service\Model\Source\Hour;
use DateTime;
class InformationCalendar extends \Magento\Framework\View\Element\Template
{
    protected $session;
    protected $calendar;
    protected $service;
    protected $locator;
    protected $hour;
    public function __construct(
        SessionFactory $sessionFactory,
        CollectionFactory $collectionFactory,
        ServiceFactory $serviceFactory,
        LocatorFactory $locatorFactory,
        Hour $hour,
        Template\Context $context, array $data = [])
    {
        $this->session = $sessionFactory;
        $this->calendar = $collectionFactory;
        $this->service = $serviceFactory;
        $this->locator = $locatorFactory;
        $this->hour = $hour;
        parent::__construct($context, $data);
    }
//
    public function getCalendar()
      {
          $customerId = $this->session->create()->getCustomerId();
          $calendar = $this->calendar->create()->addFieldToFilter("customer_id", $customerId)->setOrder("created_datetime", 'desc');
          return $calendar;
      }

      public function getService($id)
      {
          $service = $this->service->create()->load($id);
          return $service;
      }

      public function getLocator($id)
      {
          $locator = $this->locator->create()->load($id);
          return $locator;
      }

    public function getSlot()
    {
        $data = [5, 5, 5, 5];
        $serviceId = $this->getServiceId();
        $locatorId = $this->getLocatorId();
        $date = $this->getDateBooking();
        $datetime = DateTime::createFromFormat("d/m/Y", $date);
        $time = $datetime->format('Y-m-d');
        $calendars = $this->calendar->create()->addFieldToFilter('service_id', $serviceId)
            ->addFieldToFilter("locator_id", $locatorId)
            ->addFieldToFilter("date", $time)
            ->addFieldToFilter("booking_status", 1);
        if ($calendars = $calendars->getItems()) {
            foreach ($calendars as $calendarItem) {
                 $data[$calendarItem['hour']] --;
            }
        }

        return $data;
    }

    public function getHourOption()
    {
        $options = $this->hour->toOptionArray();
        return $options;
    }
}
