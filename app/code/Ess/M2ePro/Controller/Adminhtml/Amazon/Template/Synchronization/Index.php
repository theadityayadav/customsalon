<?php

namespace Ess\M2ePro\Controller\Adminhtml\Amazon\Template\Synchronization;

use Ess\M2ePro\Controller\Adminhtml\Amazon\Template;

class Index extends Template
{
    public function execute()
    {
        return $this->_redirect('*/amazon_template/index');
    }
}