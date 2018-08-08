<?php
/*
 * Krish_Sample

 * @category   Krish
 * @package    Krish_Sample
 * @copyright  Copyright (c) 2018 Vishves Shah
 * @license    
 * @version    1.0.0
 */
namespace Krish\Sample\Model\Data\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Status implements OptionSourceInterface
{
    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 1, 'label' => __('Enabled')],
            ['value' => 0, 'label' => __('Disabled')]
        ];
    }
}
