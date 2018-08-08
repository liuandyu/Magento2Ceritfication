<?php
/*
 * Krish_Sample

 * @category   Krish
 * @package    Krish_Sample
 * @copyright  Copyright (c) 2018 Vishves Shah
 * @license    
 * @version    1.0.0
 */
namespace Krish\Sample\Model\ResourceModel\Data;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     * @codingStandardsIgnoreStart
     */
    protected $_idFieldName = 'data_id';

    /**
     * Collection initialisation
     */
    protected function _construct()
    {
        // @codingStandardsIgnoreEnd
        $this->_init('Krish\Sample\Model\Data', 'Krish\Sample\Model\ResourceModel\Data');
    }
}
