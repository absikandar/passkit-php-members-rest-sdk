<?php
/**
 * IoEmailConfiguration
 *
 * PHP version 5
 *
 * @category Class
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PassKit Members API
 *
 * The PassKit Members API lets you manage your membership programs and passes for Apple Wallet and Google Pay.
 *
 * OpenAPI spec version: 1.0-rc
 * Contact: support@passkit.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.19
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace PkIo\Model;

use \ArrayAccess;
use \PkIo\ObjectSerializer;

/**
 * IoEmailConfiguration Class Doc Comment
 *
 * @category Class
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IoEmailConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ioEmailConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'emailFrom' => 'string',
'emailFromName' => 'string',
'emailFromVerifiedForSending' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'emailFrom' => null,
'emailFromName' => null,
'emailFromVerifiedForSending' => 'boolean'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'emailFrom' => 'emailFrom',
'emailFromName' => 'emailFromName',
'emailFromVerifiedForSending' => 'EmailFromVerifiedForSending'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'emailFrom' => 'setEmailFrom',
'emailFromName' => 'setEmailFromName',
'emailFromVerifiedForSending' => 'setEmailFromVerifiedForSending'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'emailFrom' => 'getEmailFrom',
'emailFromName' => 'getEmailFromName',
'emailFromVerifiedForSending' => 'getEmailFromVerifiedForSending'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['emailFrom'] = isset($data['emailFrom']) ? $data['emailFrom'] : null;
        $this->container['emailFromName'] = isset($data['emailFromName']) ? $data['emailFromName'] : null;
        $this->container['emailFromVerifiedForSending'] = isset($data['emailFromVerifiedForSending']) ? $data['emailFromVerifiedForSending'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets emailFrom
     *
     * @return string
     */
    public function getEmailFrom()
    {
        return $this->container['emailFrom'];
    }

    /**
     * Sets emailFrom
     *
     * @param string $emailFrom Sender's email address.
     *
     * @return $this
     */
    public function setEmailFrom($emailFrom)
    {
        $this->container['emailFrom'] = $emailFrom;

        return $this;
    }

    /**
     * Gets emailFromName
     *
     * @return string
     */
    public function getEmailFromName()
    {
        return $this->container['emailFromName'];
    }

    /**
     * Sets emailFromName
     *
     * @param string $emailFromName Sender's company / organization name.
     *
     * @return $this
     */
    public function setEmailFromName($emailFromName)
    {
        $this->container['emailFromName'] = $emailFromName;

        return $this;
    }

    /**
     * Gets emailFromVerifiedForSending
     *
     * @return bool
     */
    public function getEmailFromVerifiedForSending()
    {
        return $this->container['emailFromVerifiedForSending'];
    }

    /**
     * Sets emailFromVerifiedForSending
     *
     * @param bool $emailFromVerifiedForSending emailFromVerifiedForSending
     *
     * @return $this
     */
    public function setEmailFromVerifiedForSending($emailFromVerifiedForSending)
    {
        $this->container['emailFromVerifiedForSending'] = $emailFromVerifiedForSending;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
