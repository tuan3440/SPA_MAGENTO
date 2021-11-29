<?php
/**
 * Copyright © OpenTechiz, VietNam. All rights reserved.
 * See COPYING.txt for license details.
 * @package        OpenTechiz
 * @author         vuthuan <support@opentechiz.com>
 * @copyright      2021 Vu Thuan (03 2808 3090)
 */

namespace Dco\Service\Model\ResourceModel\Locator;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'locator_id';

    protected function _construct()
    {
        $this->_init('Dco\Service\Model\Locator', 'Dco\Service\Model\ResourceModel\Locator');
    }
}