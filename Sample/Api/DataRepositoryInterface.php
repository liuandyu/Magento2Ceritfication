<?php
/*
 * Krish_Sample

 * @category   Krish
 * @package    Krish_Sample
 * @copyright  Copyright (c) 2018 Vishves Shah
 * @license    
 * @version    1.0.0
 */
namespace Krish\Sample\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Krish\Sample\Api\Data\DataInterface;

interface DataRepositoryInterface
{

    /**
     * @param DataInterface $data
     * @return mixed
     */
    public function save(DataInterface $data);


    /**
     * @param $dataId
     * @return mixed
     */
    public function getById($dataId);

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return \Krish\Sample\Api\Data\DataSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(SearchCriteriaInterface $searchCriteria);

    /**
     * @param DataInterface $data
     * @return mixed
     */
    public function delete(DataInterface $data);

    /**
     * @param $dataId
     * @return mixed
     */
    public function deleteById($dataId);
}
