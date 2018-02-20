<?php
/*
 * APIBuzonesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace APIBuzonesLib;

use APIBuzonesLib\Controllers;

/**
 * APIBuzonesLib client class
 */
class APIBuzonesClient
{
    /**
     * Singleton access to Messages controller
     * @return Controllers\MessagesController The *Singleton* instance
     */
    public function getMessages()
    {
        return Controllers\MessagesController::getInstance();
    }
    /**
     * Singleton access to Grupos controller
     * @return Controllers\GruposController The *Singleton* instance
     */
    public function getGrupos()
    {
        return Controllers\GruposController::getInstance();
    }
    /**
     * Singleton access to Boxes controller
     * @return Controllers\BoxesController The *Singleton* instance
     */
    public function getBoxes()
    {
        return Controllers\BoxesController::getInstance();
    }
    /**
     * Singleton access to Applications controller
     * @return Controllers\ApplicationsController The *Singleton* instance
     */
    public function getApplications()
    {
        return Controllers\ApplicationsController::getInstance();
    }
}
