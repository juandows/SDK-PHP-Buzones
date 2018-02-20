<?php
/*
 * APIBuzonesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace APIBuzonesLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class CrearUnMensajeRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var bool $leido public property
     */
    public $leido;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $borrado public property
     */
    public $borrado;

    /**
     * @todo Write general description for this property
     * @required
     * @var \APIBuzonesLib\Models\Data14 $data public property
     */
    public $data;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $expireAt public property
     */
    public $expireAt;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool   $leido    Initialization value for $this->leido
     * @param bool   $borrado  Initialization value for $this->borrado
     * @param Data14 $data     Initialization value for $this->data
     * @param string $expireAt Initialization value for $this->expireAt
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->leido    = func_get_arg(0);
            $this->borrado  = func_get_arg(1);
            $this->data     = func_get_arg(2);
            $this->expireAt = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['leido']    = $this->leido;
        $json['borrado']  = $this->borrado;
        $json['data']     = $this->data;
        $json['expireAt'] = $this->expireAt;

        return $json;
    }
}
