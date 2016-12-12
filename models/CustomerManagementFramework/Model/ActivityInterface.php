<?php

namespace CustomerManagementFramework\Model;

use Carbon\Carbon;
use CustomerManagementFramework\ActivityStoreEntry\ActivityStoreEntryInterface;

interface ActivityInterface {

    /**
     * @return bool
     */
    public function cmfIsActive();

    public function cmfUpdateOnSave();

    /**
     * @return string
     */
    public function cmfGetType();

    /**
     * @return Carbon
     */
    public function cmfGetActivityDate();
    
    /**
     * @return array
     */
    public function cmfToArray();

    /**
     * @param array $data
     *
     * @return bool
     */
    public function cmfUpdateData(array $data);

    /**
     * @param array $data
     *
     * @return static
     */
    public static function cmfCreate(array $data);


    /**
     * @return CustomerInterface
     */
    public function getCustomer();

    /**
     * @param CustomerInterface $customer
     *
     * @return void
     */
    public function setCustomer($customer);

    /**
     * @param ActivityStoreEntryInterface $entry
     *
     * @return array
     */
    public static function cmfGetOverviewData(ActivityStoreEntryInterface $entry);

    /**
     * @param ActivityStoreEntryInterface $entry
     *
     * @return array
     */
    public static function cmfGetDetailviewData(ActivityStoreEntryInterface $entry);

    /**
     * @param ActivityStoreEntryInterface $entry
     *
     * @return string|bool
     */
    public static function cmfGetDetailviewTemplate(ActivityStoreEntryInterface $entry);
}