<?php

namespace Jh\Import\Entity;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * @author Aydin Hassan <aydin@wearejh.com>
 */
class ImportHistoryLogResource extends AbstractDb
{
    /**
     * Resource initialization
     */
    public function _construct() // @codingStandardsIgnoreLine
    {
        $this->_init('jh_import_history_log', 'id');
    }
}
