<?php
/*
 * Krish_Sample

 * @category   Krish
 * @package    Krish_Sample
 * @copyright  Copyright (c) 2018 Vishves Shah
 * @license    
 * @version    1.0.0
 */
namespace Krish\Sample\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\Context;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Stdlib\DateTime\DateTime;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Data extends AbstractDb
{
    /**
     * @var \Magento\Framework\Stdlib\DateTime\DateTime
     */
    protected $date;

    /**
     * Data constructor.
     *
     * @param Context $context
     * @param DateTime $date
     */
    public function __construct(
        Context $context,
        DateTime $date
    ) {
        $this->date = $date;
        parent::__construct($context);
    }

    /**
     * Resource initialisation
     * @codingStandardsIgnoreStart
     */
    protected function _construct()
    {
        // @codingStandardsIgnoreEnd
        $this->_init('krish_sample_data', 'data_id');
    }

    /**
     * Before save callback
     *
     * @param AbstractModel|\Krish\Sample\Model\Data $object
     * @return \Magento\Framework\Model\ResourceModel\Db\AbstractDb
     * @codingStandardsIgnoreStart
     */
    protected function _beforeSave(AbstractModel $object)
    {
        // @codingStandardsIgnoreEnd
        $object->setUpdatedAt($this->date->gmtDate());
        if ($object->isObjectNew()) {
            $object->setCreatedAt($this->date->gmtDate());
        }
        return parent::_beforeSave($object);
    }
}
