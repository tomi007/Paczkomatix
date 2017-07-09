<?php

interface ActiveRecord{

    /**
     * @param $id
     * @return Obcject / Exception on error
     */
    static function load($id);

    /**
     * @return Array of Objects / Exception on error
     */
    static function loadAll();

    /**
     * @return Actualized object / Exception on error
     */
    function update();

    /**
     * @return Inserted Object / Exception on error
     */
    function save();

    /**
     * @return true / Exception on error
     */
    function delete();




}