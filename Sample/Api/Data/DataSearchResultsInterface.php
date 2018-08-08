<?php
/*
 * Krish_Sample

 * @category   Krish
 * @package    Krish_Sample
 * @copyright  Copyright (c) 2018 Vishves Shah
 * @license    
 * @version    1.0.0
 */
namespace Krish\Sample\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface DataSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get data list.
     *
     * @return \Krish\Sample\Api\Data\DataInterface[]
     */
    public function getItems();

    /**
     * Set data list.
     *
     * @param \Krish\Sample\Api\Data\DataInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
