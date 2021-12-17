<?php


namespace Dco\Service\Controller\Adminhtml\Calendar;


use Dco\Service\Controller\Adminhtml\Calendar;
use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

class Index extends Calendar
{

    /**
     * @return Page
     */
    public function execute()
    {
        /** @var Page $resultPage */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Dco_Service::booking_calendar');
        $resultPage->addBreadcrumb(__('Booking'), __('Booking'));
        $resultPage->addBreadcrumb(__('Booking Calendar'), __('Booking Calendar'));
        $resultPage->getConfig()->getTitle()->prepend(__('Booking Calendar'));

        return $resultPage;
    }
}
