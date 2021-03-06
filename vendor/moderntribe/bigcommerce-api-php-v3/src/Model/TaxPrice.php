<?php
/**
 * TaxPrice
 *
 * @package  BigCommerce\Api\v3
 */

/**
 * Product Pricing API
 *
 * API to provide marketing/display pricing for products, variants, and partially configured selections.
 *
 * OpenAPI spec version: master
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Model;

use \ArrayAccess;

class TaxPrice implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TaxPrice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'as_entered' => 'float',
        'entered_inclusive' => 'bool',
        'tax_exclusive' => 'float',
        'tax_inclusive' => 'float'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'as_entered' => 'as_entered',
        'entered_inclusive' => 'entered_inclusive',
        'tax_exclusive' => 'tax_exclusive',
        'tax_inclusive' => 'tax_inclusive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'as_entered' => 'setAsEntered',
        'entered_inclusive' => 'setEnteredInclusive',
        'tax_exclusive' => 'setTaxExclusive',
        'tax_inclusive' => 'setTaxInclusive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'as_entered' => 'getAsEntered',
        'entered_inclusive' => 'getEnteredInclusive',
        'tax_exclusive' => 'getTaxExclusive',
        'tax_inclusive' => 'getTaxInclusive'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = [])
    {
        $this->container['as_entered'] = array_key_exists('as_entered', $data) ? $data['as_entered'] : null;
        $this->container['entered_inclusive'] = array_key_exists('entered_inclusive', $data) ? $data['entered_inclusive'] : null;
        $this->container['tax_exclusive'] = array_key_exists('tax_exclusive', $data) ? $data['tax_exclusive'] : null;
        $this->container['tax_inclusive'] = array_key_exists('tax_inclusive', $data) ? $data['tax_inclusive'] : null;
    }

    /**
     * returns container
     * @return array
     */
    public function get()
    {
        return $this->container;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets as_entered
     * @return float
     */
    public function getAsEntered()
    {
        return $this->container['as_entered'];
    }

    /**
     * Sets as_entered
     * @param float $as_entered The price provided by the merchant as entered in their catalog/price list (may be inc or ex)
     * @return $this
     */
    public function setAsEntered($as_entered)
    {
        $this->container['as_entered'] = $as_entered;

        return $this;
    }

    /**
     * Gets entered_inclusive
     * @return bool
     */
    public function getEnteredInclusive()
    {
        return $this->container['entered_inclusive'];
    }

    /**
     * Sets entered_inclusive
     * @param bool $entered_inclusive Whether the `as_entered` price is inclusive or exclusive of tax, based on the stores tax jurisdiction
     * @return $this
     */
    public function setEnteredInclusive($entered_inclusive)
    {
        $this->container['entered_inclusive'] = $entered_inclusive;

        return $this;
    }

    /**
     * Gets tax_exclusive
     * @return float
     */
    public function getTaxExclusive()
    {
        return $this->container['tax_exclusive'];
    }

    /**
     * Sets tax_exclusive
     * @param float $tax_exclusive The estimated tax exclusive price for this product based on the provided customer group
     * @return $this
     */
    public function setTaxExclusive($tax_exclusive)
    {
        $this->container['tax_exclusive'] = $tax_exclusive;

        return $this;
    }

    /**
     * Gets tax_inclusive
     * @return float
     */
    public function getTaxInclusive()
    {
        return $this->container['tax_inclusive'];
    }

    /**
     * Sets tax_inclusive
     * @param float $tax_inclusive The estimated tax inclusive price for this product based on the provided customer group
     * @return $this
     */
    public function setTaxInclusive($tax_inclusive)
    {
        $this->container['tax_inclusive'] = $tax_inclusive;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this));
    }
}


