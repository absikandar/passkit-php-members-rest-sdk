<?php
/**
 * IoMetadata
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
 * IoMetadata Class Doc Comment
 *
 * @category Class
 * @description Additional data relating to the pass. Metadata can be provided with a create pass request. The only writeable field is UTM. All other fields are system generated.
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IoMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ioMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => '\PkIo\Model\IoStatus',
'lifecycleEvents' => '\PkIo\Model\IoLifecycleEvents[]',
'utm' => '\PkIo\Model\IoUTM',
'altId' => 'string',
'issueIpAddress' => 'string',
'installIpAddress' => 'string',
'renderLocation' => '\PkIo\Model\IoMetaLocation',
'renderIpAddress' => 'string',
'installUserAgent' => 'string',
'renderUserAgent' => 'string',
'installDeviceAttributes' => '\PkIo\Model\IoDeviceAttributes[]',
'renderDeviceAttributes' => '\PkIo\Model\IoDeviceAttributes[]',
'issueAt' => '\DateTime',
'renderedAt' => '\DateTime',
'firstInstalledAt' => '\DateTime',
'lastInstalledAt' => '\DateTime',
'firstUninstalledAt' => '\DateTime',
'lastUninstalledAt' => '\DateTime',
'invalidatedAt' => '\DateTime',
'lastUpdatedAt' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
'lifecycleEvents' => null,
'utm' => null,
'altId' => null,
'issueIpAddress' => null,
'installIpAddress' => null,
'renderLocation' => null,
'renderIpAddress' => null,
'installUserAgent' => null,
'renderUserAgent' => null,
'installDeviceAttributes' => null,
'renderDeviceAttributes' => null,
'issueAt' => 'date-time',
'renderedAt' => 'date-time',
'firstInstalledAt' => 'date-time',
'lastInstalledAt' => 'date-time',
'firstUninstalledAt' => 'date-time',
'lastUninstalledAt' => 'date-time',
'invalidatedAt' => 'date-time',
'lastUpdatedAt' => 'date-time'    ];

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
        'status' => 'status',
'lifecycleEvents' => 'lifecycleEvents',
'utm' => 'utm',
'altId' => 'altId',
'issueIpAddress' => 'issueIpAddress',
'installIpAddress' => 'installIpAddress',
'renderLocation' => 'renderLocation',
'renderIpAddress' => 'renderIpAddress',
'installUserAgent' => 'installUserAgent',
'renderUserAgent' => 'renderUserAgent',
'installDeviceAttributes' => 'installDeviceAttributes',
'renderDeviceAttributes' => 'renderDeviceAttributes',
'issueAt' => 'issueAt',
'renderedAt' => 'renderedAt',
'firstInstalledAt' => 'firstInstalledAt',
'lastInstalledAt' => 'lastInstalledAt',
'firstUninstalledAt' => 'firstUninstalledAt',
'lastUninstalledAt' => 'lastUninstalledAt',
'invalidatedAt' => 'invalidatedAt',
'lastUpdatedAt' => 'lastUpdatedAt'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
'lifecycleEvents' => 'setLifecycleEvents',
'utm' => 'setUtm',
'altId' => 'setAltId',
'issueIpAddress' => 'setIssueIpAddress',
'installIpAddress' => 'setInstallIpAddress',
'renderLocation' => 'setRenderLocation',
'renderIpAddress' => 'setRenderIpAddress',
'installUserAgent' => 'setInstallUserAgent',
'renderUserAgent' => 'setRenderUserAgent',
'installDeviceAttributes' => 'setInstallDeviceAttributes',
'renderDeviceAttributes' => 'setRenderDeviceAttributes',
'issueAt' => 'setIssueAt',
'renderedAt' => 'setRenderedAt',
'firstInstalledAt' => 'setFirstInstalledAt',
'lastInstalledAt' => 'setLastInstalledAt',
'firstUninstalledAt' => 'setFirstUninstalledAt',
'lastUninstalledAt' => 'setLastUninstalledAt',
'invalidatedAt' => 'setInvalidatedAt',
'lastUpdatedAt' => 'setLastUpdatedAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
'lifecycleEvents' => 'getLifecycleEvents',
'utm' => 'getUtm',
'altId' => 'getAltId',
'issueIpAddress' => 'getIssueIpAddress',
'installIpAddress' => 'getInstallIpAddress',
'renderLocation' => 'getRenderLocation',
'renderIpAddress' => 'getRenderIpAddress',
'installUserAgent' => 'getInstallUserAgent',
'renderUserAgent' => 'getRenderUserAgent',
'installDeviceAttributes' => 'getInstallDeviceAttributes',
'renderDeviceAttributes' => 'getRenderDeviceAttributes',
'issueAt' => 'getIssueAt',
'renderedAt' => 'getRenderedAt',
'firstInstalledAt' => 'getFirstInstalledAt',
'lastInstalledAt' => 'getLastInstalledAt',
'firstUninstalledAt' => 'getFirstUninstalledAt',
'lastUninstalledAt' => 'getLastUninstalledAt',
'invalidatedAt' => 'getInvalidatedAt',
'lastUpdatedAt' => 'getLastUpdatedAt'    ];

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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['lifecycleEvents'] = isset($data['lifecycleEvents']) ? $data['lifecycleEvents'] : null;
        $this->container['utm'] = isset($data['utm']) ? $data['utm'] : null;
        $this->container['altId'] = isset($data['altId']) ? $data['altId'] : null;
        $this->container['issueIpAddress'] = isset($data['issueIpAddress']) ? $data['issueIpAddress'] : null;
        $this->container['installIpAddress'] = isset($data['installIpAddress']) ? $data['installIpAddress'] : null;
        $this->container['renderLocation'] = isset($data['renderLocation']) ? $data['renderLocation'] : null;
        $this->container['renderIpAddress'] = isset($data['renderIpAddress']) ? $data['renderIpAddress'] : null;
        $this->container['installUserAgent'] = isset($data['installUserAgent']) ? $data['installUserAgent'] : null;
        $this->container['renderUserAgent'] = isset($data['renderUserAgent']) ? $data['renderUserAgent'] : null;
        $this->container['installDeviceAttributes'] = isset($data['installDeviceAttributes']) ? $data['installDeviceAttributes'] : null;
        $this->container['renderDeviceAttributes'] = isset($data['renderDeviceAttributes']) ? $data['renderDeviceAttributes'] : null;
        $this->container['issueAt'] = isset($data['issueAt']) ? $data['issueAt'] : null;
        $this->container['renderedAt'] = isset($data['renderedAt']) ? $data['renderedAt'] : null;
        $this->container['firstInstalledAt'] = isset($data['firstInstalledAt']) ? $data['firstInstalledAt'] : null;
        $this->container['lastInstalledAt'] = isset($data['lastInstalledAt']) ? $data['lastInstalledAt'] : null;
        $this->container['firstUninstalledAt'] = isset($data['firstUninstalledAt']) ? $data['firstUninstalledAt'] : null;
        $this->container['lastUninstalledAt'] = isset($data['lastUninstalledAt']) ? $data['lastUninstalledAt'] : null;
        $this->container['invalidatedAt'] = isset($data['invalidatedAt']) ? $data['invalidatedAt'] : null;
        $this->container['lastUpdatedAt'] = isset($data['lastUpdatedAt']) ? $data['lastUpdatedAt'] : null;
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
     * Gets status
     *
     * @return \PkIo\Model\IoStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \PkIo\Model\IoStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets lifecycleEvents
     *
     * @return \PkIo\Model\IoLifecycleEvents[]
     */
    public function getLifecycleEvents()
    {
        return $this->container['lifecycleEvents'];
    }

    /**
     * Sets lifecycleEvents
     *
     * @param \PkIo\Model\IoLifecycleEvents[] $lifecycleEvents Events that the pass has attained. Not Writable.
     *
     * @return $this
     */
    public function setLifecycleEvents($lifecycleEvents)
    {
        $this->container['lifecycleEvents'] = $lifecycleEvents;

        return $this;
    }

    /**
     * Gets utm
     *
     * @return \PkIo\Model\IoUTM
     */
    public function getUtm()
    {
        return $this->container['utm'];
    }

    /**
     * Sets utm
     *
     * @param \PkIo\Model\IoUTM $utm utm
     *
     * @return $this
     */
    public function setUtm($utm)
    {
        $this->container['utm'] = $utm;

        return $this;
    }

    /**
     * Gets altId
     *
     * @return string
     */
    public function getAltId()
    {
        return $this->container['altId'];
    }

    /**
     * Sets altId
     *
     * @param string $altId altId
     *
     * @return $this
     */
    public function setAltId($altId)
    {
        $this->container['altId'] = $altId;

        return $this;
    }

    /**
     * Gets issueIpAddress
     *
     * @return string
     */
    public function getIssueIpAddress()
    {
        return $this->container['issueIpAddress'];
    }

    /**
     * Sets issueIpAddress
     *
     * @param string $issueIpAddress issueIpAddress
     *
     * @return $this
     */
    public function setIssueIpAddress($issueIpAddress)
    {
        $this->container['issueIpAddress'] = $issueIpAddress;

        return $this;
    }

    /**
     * Gets installIpAddress
     *
     * @return string
     */
    public function getInstallIpAddress()
    {
        return $this->container['installIpAddress'];
    }

    /**
     * Sets installIpAddress
     *
     * @param string $installIpAddress IP address of the device where the pass was installed on. Not Writeable.
     *
     * @return $this
     */
    public function setInstallIpAddress($installIpAddress)
    {
        $this->container['installIpAddress'] = $installIpAddress;

        return $this;
    }

    /**
     * Gets renderLocation
     *
     * @return \PkIo\Model\IoMetaLocation
     */
    public function getRenderLocation()
    {
        return $this->container['renderLocation'];
    }

    /**
     * Sets renderLocation
     *
     * @param \PkIo\Model\IoMetaLocation $renderLocation renderLocation
     *
     * @return $this
     */
    public function setRenderLocation($renderLocation)
    {
        $this->container['renderLocation'] = $renderLocation;

        return $this;
    }

    /**
     * Gets renderIpAddress
     *
     * @return string
     */
    public function getRenderIpAddress()
    {
        return $this->container['renderIpAddress'];
    }

    /**
     * Sets renderIpAddress
     *
     * @param string $renderIpAddress IP address of the device where the pass landing page was rendered on. Not Writeable.
     *
     * @return $this
     */
    public function setRenderIpAddress($renderIpAddress)
    {
        $this->container['renderIpAddress'] = $renderIpAddress;

        return $this;
    }

    /**
     * Gets installUserAgent
     *
     * @return string
     */
    public function getInstallUserAgent()
    {
        return $this->container['installUserAgent'];
    }

    /**
     * Sets installUserAgent
     *
     * @param string $installUserAgent User agent provided by the Wallet Application. Not Writable.
     *
     * @return $this
     */
    public function setInstallUserAgent($installUserAgent)
    {
        $this->container['installUserAgent'] = $installUserAgent;

        return $this;
    }

    /**
     * Gets renderUserAgent
     *
     * @return string
     */
    public function getRenderUserAgent()
    {
        return $this->container['renderUserAgent'];
    }

    /**
     * Sets renderUserAgent
     *
     * @param string $renderUserAgent User agent where the landing page was rendered on. Not Writable.
     *
     * @return $this
     */
    public function setRenderUserAgent($renderUserAgent)
    {
        $this->container['renderUserAgent'] = $renderUserAgent;

        return $this;
    }

    /**
     * Gets installDeviceAttributes
     *
     * @return \PkIo\Model\IoDeviceAttributes[]
     */
    public function getInstallDeviceAttributes()
    {
        return $this->container['installDeviceAttributes'];
    }

    /**
     * Sets installDeviceAttributes
     *
     * @param \PkIo\Model\IoDeviceAttributes[] $installDeviceAttributes User agent provided by the Wallet Application. Not Writable.
     *
     * @return $this
     */
    public function setInstallDeviceAttributes($installDeviceAttributes)
    {
        $this->container['installDeviceAttributes'] = $installDeviceAttributes;

        return $this;
    }

    /**
     * Gets renderDeviceAttributes
     *
     * @return \PkIo\Model\IoDeviceAttributes[]
     */
    public function getRenderDeviceAttributes()
    {
        return $this->container['renderDeviceAttributes'];
    }

    /**
     * Sets renderDeviceAttributes
     *
     * @param \PkIo\Model\IoDeviceAttributes[] $renderDeviceAttributes User agent where the landing page was rendered on. Not Writable.
     *
     * @return $this
     */
    public function setRenderDeviceAttributes($renderDeviceAttributes)
    {
        $this->container['renderDeviceAttributes'] = $renderDeviceAttributes;

        return $this;
    }

    /**
     * Gets issueAt
     *
     * @return \DateTime
     */
    public function getIssueAt()
    {
        return $this->container['issueAt'];
    }

    /**
     * Sets issueAt
     *
     * @param \DateTime $issueAt Date the pass record was created. Not Writable.
     *
     * @return $this
     */
    public function setIssueAt($issueAt)
    {
        $this->container['issueAt'] = $issueAt;

        return $this;
    }

    /**
     * Gets renderedAt
     *
     * @return \DateTime
     */
    public function getRenderedAt()
    {
        return $this->container['renderedAt'];
    }

    /**
     * Sets renderedAt
     *
     * @param \DateTime $renderedAt Date the pass was first displayed to the user to install. Not Writable.
     *
     * @return $this
     */
    public function setRenderedAt($renderedAt)
    {
        $this->container['renderedAt'] = $renderedAt;

        return $this;
    }

    /**
     * Gets firstInstalledAt
     *
     * @return \DateTime
     */
    public function getFirstInstalledAt()
    {
        return $this->container['firstInstalledAt'];
    }

    /**
     * Sets firstInstalledAt
     *
     * @param \DateTime $firstInstalledAt Date the pass was first installed in a mobile wallet. Not Writable.
     *
     * @return $this
     */
    public function setFirstInstalledAt($firstInstalledAt)
    {
        $this->container['firstInstalledAt'] = $firstInstalledAt;

        return $this;
    }

    /**
     * Gets lastInstalledAt
     *
     * @return \DateTime
     */
    public function getLastInstalledAt()
    {
        return $this->container['lastInstalledAt'];
    }

    /**
     * Sets lastInstalledAt
     *
     * @param \DateTime $lastInstalledAt Date the pass was last installed in a mobile wallet. For Apple devices, this will update each time the device registers a new token. Not Writable.
     *
     * @return $this
     */
    public function setLastInstalledAt($lastInstalledAt)
    {
        $this->container['lastInstalledAt'] = $lastInstalledAt;

        return $this;
    }

    /**
     * Gets firstUninstalledAt
     *
     * @return \DateTime
     */
    public function getFirstUninstalledAt()
    {
        return $this->container['firstUninstalledAt'];
    }

    /**
     * Sets firstUninstalledAt
     *
     * @param \DateTime $firstUninstalledAt Date the pass was first uninstalled from a mobile wallet.  For Apple devices, this represents either the time notifications were disabled, or when the pass was removed from the wallet as it is not possible to distinguish the two events. Not Writable.
     *
     * @return $this
     */
    public function setFirstUninstalledAt($firstUninstalledAt)
    {
        $this->container['firstUninstalledAt'] = $firstUninstalledAt;

        return $this;
    }

    /**
     * Gets lastUninstalledAt
     *
     * @return \DateTime
     */
    public function getLastUninstalledAt()
    {
        return $this->container['lastUninstalledAt'];
    }

    /**
     * Sets lastUninstalledAt
     *
     * @param \DateTime $lastUninstalledAt Date the pass was last uninstalled from a mobile wallet. Not Writable.
     *
     * @return $this
     */
    public function setLastUninstalledAt($lastUninstalledAt)
    {
        $this->container['lastUninstalledAt'] = $lastUninstalledAt;

        return $this;
    }

    /**
     * Gets invalidatedAt
     *
     * @return \DateTime
     */
    public function getInvalidatedAt()
    {
        return $this->container['invalidatedAt'];
    }

    /**
     * Sets invalidatedAt
     *
     * @param \DateTime $invalidatedAt Date the pass was invalidated. Not Writable.
     *
     * @return $this
     */
    public function setInvalidatedAt($invalidatedAt)
    {
        $this->container['invalidatedAt'] = $invalidatedAt;

        return $this;
    }

    /**
     * Gets lastUpdatedAt
     *
     * @return \DateTime
     */
    public function getLastUpdatedAt()
    {
        return $this->container['lastUpdatedAt'];
    }

    /**
     * Sets lastUpdatedAt
     *
     * @param \DateTime $lastUpdatedAt Date the pass record was last updated. Can be used for segmenting passes based 'last visit', or 'last-purchase'. Not Writable.
     *
     * @return $this
     */
    public function setLastUpdatedAt($lastUpdatedAt)
    {
        $this->container['lastUpdatedAt'] = $lastUpdatedAt;

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
