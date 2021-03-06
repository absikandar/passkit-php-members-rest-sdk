<?php
/**
 * IoMetrics
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
 * IoMetrics Class Doc Comment
 *
 * @category Class
 * @description Metrics list issued, installed, uninstalled and invalidated counts.
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IoMetrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ioMetrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => 'string',
'appleWalletInstalls' => 'string',
'googlePayInstalls' => 'string',
'otherAndroidInstalls' => 'string',
'appleWalletUninstalls' => 'string',
'googlePayUninstalls' => 'string',
'otherAndroidUninstalls' => 'string',
'invalidations' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => 'uint64',
'appleWalletInstalls' => 'uint64',
'googlePayInstalls' => 'uint64',
'otherAndroidInstalls' => 'uint64',
'appleWalletUninstalls' => 'uint64',
'googlePayUninstalls' => 'uint64',
'otherAndroidUninstalls' => 'uint64',
'invalidations' => 'uint64'    ];

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
        'created' => 'created',
'appleWalletInstalls' => 'appleWalletInstalls',
'googlePayInstalls' => 'googlePayInstalls',
'otherAndroidInstalls' => 'otherAndroidInstalls',
'appleWalletUninstalls' => 'appleWalletUninstalls',
'googlePayUninstalls' => 'googlePayUninstalls',
'otherAndroidUninstalls' => 'otherAndroidUninstalls',
'invalidations' => 'invalidations'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
'appleWalletInstalls' => 'setAppleWalletInstalls',
'googlePayInstalls' => 'setGooglePayInstalls',
'otherAndroidInstalls' => 'setOtherAndroidInstalls',
'appleWalletUninstalls' => 'setAppleWalletUninstalls',
'googlePayUninstalls' => 'setGooglePayUninstalls',
'otherAndroidUninstalls' => 'setOtherAndroidUninstalls',
'invalidations' => 'setInvalidations'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
'appleWalletInstalls' => 'getAppleWalletInstalls',
'googlePayInstalls' => 'getGooglePayInstalls',
'otherAndroidInstalls' => 'getOtherAndroidInstalls',
'appleWalletUninstalls' => 'getAppleWalletUninstalls',
'googlePayUninstalls' => 'getGooglePayUninstalls',
'otherAndroidUninstalls' => 'getOtherAndroidUninstalls',
'invalidations' => 'getInvalidations'    ];

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
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['appleWalletInstalls'] = isset($data['appleWalletInstalls']) ? $data['appleWalletInstalls'] : null;
        $this->container['googlePayInstalls'] = isset($data['googlePayInstalls']) ? $data['googlePayInstalls'] : null;
        $this->container['otherAndroidInstalls'] = isset($data['otherAndroidInstalls']) ? $data['otherAndroidInstalls'] : null;
        $this->container['appleWalletUninstalls'] = isset($data['appleWalletUninstalls']) ? $data['appleWalletUninstalls'] : null;
        $this->container['googlePayUninstalls'] = isset($data['googlePayUninstalls']) ? $data['googlePayUninstalls'] : null;
        $this->container['otherAndroidUninstalls'] = isset($data['otherAndroidUninstalls']) ? $data['otherAndroidUninstalls'] : null;
        $this->container['invalidations'] = isset($data['invalidations']) ? $data['invalidations'] : null;
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
     * Gets created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string $created Pass records created.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets appleWalletInstalls
     *
     * @return string
     */
    public function getAppleWalletInstalls()
    {
        return $this->container['appleWalletInstalls'];
    }

    /**
     * Sets appleWalletInstalls
     *
     * @param string $appleWalletInstalls Number of passes installed in Apple Wallet.
     *
     * @return $this
     */
    public function setAppleWalletInstalls($appleWalletInstalls)
    {
        $this->container['appleWalletInstalls'] = $appleWalletInstalls;

        return $this;
    }

    /**
     * Gets googlePayInstalls
     *
     * @return string
     */
    public function getGooglePayInstalls()
    {
        return $this->container['googlePayInstalls'];
    }

    /**
     * Sets googlePayInstalls
     *
     * @param string $googlePayInstalls Number of passes installed in Google Pay.
     *
     * @return $this
     */
    public function setGooglePayInstalls($googlePayInstalls)
    {
        $this->container['googlePayInstalls'] = $googlePayInstalls;

        return $this;
    }

    /**
     * Gets otherAndroidInstalls
     *
     * @return string
     */
    public function getOtherAndroidInstalls()
    {
        return $this->container['otherAndroidInstalls'];
    }

    /**
     * Sets otherAndroidInstalls
     *
     * @param string $otherAndroidInstalls Number of passes installed in Android wallet apps e.g. WalletPasses.
     *
     * @return $this
     */
    public function setOtherAndroidInstalls($otherAndroidInstalls)
    {
        $this->container['otherAndroidInstalls'] = $otherAndroidInstalls;

        return $this;
    }

    /**
     * Gets appleWalletUninstalls
     *
     * @return string
     */
    public function getAppleWalletUninstalls()
    {
        return $this->container['appleWalletUninstalls'];
    }

    /**
     * Sets appleWalletUninstalls
     *
     * @param string $appleWalletUninstalls Number of passes uninstalled from Apple Wallet.
     *
     * @return $this
     */
    public function setAppleWalletUninstalls($appleWalletUninstalls)
    {
        $this->container['appleWalletUninstalls'] = $appleWalletUninstalls;

        return $this;
    }

    /**
     * Gets googlePayUninstalls
     *
     * @return string
     */
    public function getGooglePayUninstalls()
    {
        return $this->container['googlePayUninstalls'];
    }

    /**
     * Sets googlePayUninstalls
     *
     * @param string $googlePayUninstalls Number of passes uninstalled from Google Pay.
     *
     * @return $this
     */
    public function setGooglePayUninstalls($googlePayUninstalls)
    {
        $this->container['googlePayUninstalls'] = $googlePayUninstalls;

        return $this;
    }

    /**
     * Gets otherAndroidUninstalls
     *
     * @return string
     */
    public function getOtherAndroidUninstalls()
    {
        return $this->container['otherAndroidUninstalls'];
    }

    /**
     * Sets otherAndroidUninstalls
     *
     * @param string $otherAndroidUninstalls Number of passes uninstalled from Android wallet apps e.g. WalletPasses.
     *
     * @return $this
     */
    public function setOtherAndroidUninstalls($otherAndroidUninstalls)
    {
        $this->container['otherAndroidUninstalls'] = $otherAndroidUninstalls;

        return $this;
    }

    /**
     * Gets invalidations
     *
     * @return string
     */
    public function getInvalidations()
    {
        return $this->container['invalidations'];
    }

    /**
     * Sets invalidations
     *
     * @param string $invalidations Number of passes invalidated.
     *
     * @return $this
     */
    public function setInvalidations($invalidations)
    {
        $this->container['invalidations'] = $invalidations;

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
