<?php
/**
 * NetworkSettings
 *
 * PHP version 7.1
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Docker Engine API
 *
 * The Engine API is an HTTP API served by Docker Engine. It is the API the Docker client uses to communicate with the Engine, so everything the Docker client can do can be done with the API.  Most of the client's commands map directly to API endpoints (e.g. `docker ps` is `GET /containers/json`). The notable exception is running containers, which consists of several API calls.  # Errors  The API uses standard HTTP status codes to indicate the success or failure of the API call. The body of the response will be JSON in the following format:  ``` {   \"message\": \"page not found\" } ```  # Versioning  The API is usually changed in each release, so API calls are versioned to ensure that clients don't break. To lock to a specific version of the API, you prefix the URL with its version, for example, call `/v1.30/info` to use the v1.30 version of the `/info` endpoint. If the API version specified in the URL is not supported by the daemon, a HTTP `400 Bad Request` error message is returned.  If you omit the version-prefix, the current version of the API (v1.40) is used. For example, calling `/info` is the same as calling `/v1.40/info`. Using the API without a version-prefix is deprecated and will be removed in a future release.  Engine releases in the near future should support this version of the API, so your client will continue to work even if it is talking to a newer Engine.  The API uses an open schema model, which means server may add extra properties to responses. Likewise, the server will ignore any extra query parameters and request body properties. When you write clients, you need to ignore additional properties in responses to ensure they do not break when talking to newer daemons.   # Authentication  Authentication for registries is handled client side. The client has to send authentication details to various endpoints that need to communicate with registries, such as `POST /images/(name)/push`. These are sent as `X-Registry-Auth` header as a Base64 encoded (JSON) string with the following structure:  ``` {   \"username\": \"string\",   \"password\": \"string\",   \"email\": \"string\",   \"serveraddress\": \"string\" } ```  The `serveraddress` is a domain/IP without a protocol. Throughout this structure, double quotes are required.  If you have already got an identity token from the [`/auth` endpoint](#operation/SystemAuth), you can just pass this instead of credentials:  ``` {   \"identitytoken\": \"9cbaf023786cd7...\" } ```
 *
 * The version of the OpenAPI document: 1.40
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * NetworkSettings Class Doc Comment
 *
 * @category Class
 * @description NetworkSettings exposes the network settings in the API
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NetworkSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NetworkSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bridge' => 'string',
        'sandbox_id' => 'string',
        'hairpin_mode' => 'bool',
        'link_local_i_pv6_address' => 'string',
        'link_local_i_pv6_prefix_len' => 'int',
        'ports' => 'map[string,\OpenAPI\Client\Model\PortBinding[]]',
        'sandbox_key' => 'string',
        'secondary_ip_addresses' => '\OpenAPI\Client\Model\Address[]',
        'secondary_i_pv6_addresses' => '\OpenAPI\Client\Model\Address[]',
        'endpoint_id' => 'string',
        'gateway' => 'string',
        'global_i_pv6_address' => 'string',
        'global_i_pv6_prefix_len' => 'int',
        'ip_address' => 'string',
        'ip_prefix_len' => 'int',
        'i_pv6_gateway' => 'string',
        'mac_address' => 'string',
        'networks' => 'map[string,\OpenAPI\Client\Model\EndpointSettings]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'bridge' => null,
        'sandbox_id' => null,
        'hairpin_mode' => null,
        'link_local_i_pv6_address' => null,
        'link_local_i_pv6_prefix_len' => null,
        'ports' => null,
        'sandbox_key' => null,
        'secondary_ip_addresses' => null,
        'secondary_i_pv6_addresses' => null,
        'endpoint_id' => null,
        'gateway' => null,
        'global_i_pv6_address' => null,
        'global_i_pv6_prefix_len' => null,
        'ip_address' => null,
        'ip_prefix_len' => null,
        'i_pv6_gateway' => null,
        'mac_address' => null,
        'networks' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'bridge' => 'Bridge',
        'sandbox_id' => 'SandboxID',
        'hairpin_mode' => 'HairpinMode',
        'link_local_i_pv6_address' => 'LinkLocalIPv6Address',
        'link_local_i_pv6_prefix_len' => 'LinkLocalIPv6PrefixLen',
        'ports' => 'Ports',
        'sandbox_key' => 'SandboxKey',
        'secondary_ip_addresses' => 'SecondaryIPAddresses',
        'secondary_i_pv6_addresses' => 'SecondaryIPv6Addresses',
        'endpoint_id' => 'EndpointID',
        'gateway' => 'Gateway',
        'global_i_pv6_address' => 'GlobalIPv6Address',
        'global_i_pv6_prefix_len' => 'GlobalIPv6PrefixLen',
        'ip_address' => 'IPAddress',
        'ip_prefix_len' => 'IPPrefixLen',
        'i_pv6_gateway' => 'IPv6Gateway',
        'mac_address' => 'MacAddress',
        'networks' => 'Networks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bridge' => 'setBridge',
        'sandbox_id' => 'setSandboxId',
        'hairpin_mode' => 'setHairpinMode',
        'link_local_i_pv6_address' => 'setLinkLocalIPv6Address',
        'link_local_i_pv6_prefix_len' => 'setLinkLocalIPv6PrefixLen',
        'ports' => 'setPorts',
        'sandbox_key' => 'setSandboxKey',
        'secondary_ip_addresses' => 'setSecondaryIpAddresses',
        'secondary_i_pv6_addresses' => 'setSecondaryIPv6Addresses',
        'endpoint_id' => 'setEndpointId',
        'gateway' => 'setGateway',
        'global_i_pv6_address' => 'setGlobalIPv6Address',
        'global_i_pv6_prefix_len' => 'setGlobalIPv6PrefixLen',
        'ip_address' => 'setIpAddress',
        'ip_prefix_len' => 'setIpPrefixLen',
        'i_pv6_gateway' => 'setIPv6Gateway',
        'mac_address' => 'setMacAddress',
        'networks' => 'setNetworks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bridge' => 'getBridge',
        'sandbox_id' => 'getSandboxId',
        'hairpin_mode' => 'getHairpinMode',
        'link_local_i_pv6_address' => 'getLinkLocalIPv6Address',
        'link_local_i_pv6_prefix_len' => 'getLinkLocalIPv6PrefixLen',
        'ports' => 'getPorts',
        'sandbox_key' => 'getSandboxKey',
        'secondary_ip_addresses' => 'getSecondaryIpAddresses',
        'secondary_i_pv6_addresses' => 'getSecondaryIPv6Addresses',
        'endpoint_id' => 'getEndpointId',
        'gateway' => 'getGateway',
        'global_i_pv6_address' => 'getGlobalIPv6Address',
        'global_i_pv6_prefix_len' => 'getGlobalIPv6PrefixLen',
        'ip_address' => 'getIpAddress',
        'ip_prefix_len' => 'getIpPrefixLen',
        'i_pv6_gateway' => 'getIPv6Gateway',
        'mac_address' => 'getMacAddress',
        'networks' => 'getNetworks'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['bridge'] = isset($data['bridge']) ? $data['bridge'] : null;
        $this->container['sandbox_id'] = isset($data['sandbox_id']) ? $data['sandbox_id'] : null;
        $this->container['hairpin_mode'] = isset($data['hairpin_mode']) ? $data['hairpin_mode'] : null;
        $this->container['link_local_i_pv6_address'] = isset($data['link_local_i_pv6_address']) ? $data['link_local_i_pv6_address'] : null;
        $this->container['link_local_i_pv6_prefix_len'] = isset($data['link_local_i_pv6_prefix_len']) ? $data['link_local_i_pv6_prefix_len'] : null;
        $this->container['ports'] = isset($data['ports']) ? $data['ports'] : null;
        $this->container['sandbox_key'] = isset($data['sandbox_key']) ? $data['sandbox_key'] : null;
        $this->container['secondary_ip_addresses'] = isset($data['secondary_ip_addresses']) ? $data['secondary_ip_addresses'] : null;
        $this->container['secondary_i_pv6_addresses'] = isset($data['secondary_i_pv6_addresses']) ? $data['secondary_i_pv6_addresses'] : null;
        $this->container['endpoint_id'] = isset($data['endpoint_id']) ? $data['endpoint_id'] : null;
        $this->container['gateway'] = isset($data['gateway']) ? $data['gateway'] : null;
        $this->container['global_i_pv6_address'] = isset($data['global_i_pv6_address']) ? $data['global_i_pv6_address'] : null;
        $this->container['global_i_pv6_prefix_len'] = isset($data['global_i_pv6_prefix_len']) ? $data['global_i_pv6_prefix_len'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['ip_prefix_len'] = isset($data['ip_prefix_len']) ? $data['ip_prefix_len'] : null;
        $this->container['i_pv6_gateway'] = isset($data['i_pv6_gateway']) ? $data['i_pv6_gateway'] : null;
        $this->container['mac_address'] = isset($data['mac_address']) ? $data['mac_address'] : null;
        $this->container['networks'] = isset($data['networks']) ? $data['networks'] : null;
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
     * Gets bridge
     *
     * @return string|null
     */
    public function getBridge()
    {
        return $this->container['bridge'];
    }

    /**
     * Sets bridge
     *
     * @param string|null $bridge Name of the network'a bridge (for example, `docker0`).
     *
     * @return $this
     */
    public function setBridge($bridge)
    {
        $this->container['bridge'] = $bridge;

        return $this;
    }

    /**
     * Gets sandbox_id
     *
     * @return string|null
     */
    public function getSandboxId()
    {
        return $this->container['sandbox_id'];
    }

    /**
     * Sets sandbox_id
     *
     * @param string|null $sandbox_id SandboxID uniquely represents a container's network stack.
     *
     * @return $this
     */
    public function setSandboxId($sandbox_id)
    {
        $this->container['sandbox_id'] = $sandbox_id;

        return $this;
    }

    /**
     * Gets hairpin_mode
     *
     * @return bool|null
     */
    public function getHairpinMode()
    {
        return $this->container['hairpin_mode'];
    }

    /**
     * Sets hairpin_mode
     *
     * @param bool|null $hairpin_mode Indicates if hairpin NAT should be enabled on the virtual interface.
     *
     * @return $this
     */
    public function setHairpinMode($hairpin_mode)
    {
        $this->container['hairpin_mode'] = $hairpin_mode;

        return $this;
    }

    /**
     * Gets link_local_i_pv6_address
     *
     * @return string|null
     */
    public function getLinkLocalIPv6Address()
    {
        return $this->container['link_local_i_pv6_address'];
    }

    /**
     * Sets link_local_i_pv6_address
     *
     * @param string|null $link_local_i_pv6_address IPv6 unicast address using the link-local prefix.
     *
     * @return $this
     */
    public function setLinkLocalIPv6Address($link_local_i_pv6_address)
    {
        $this->container['link_local_i_pv6_address'] = $link_local_i_pv6_address;

        return $this;
    }

    /**
     * Gets link_local_i_pv6_prefix_len
     *
     * @return int|null
     */
    public function getLinkLocalIPv6PrefixLen()
    {
        return $this->container['link_local_i_pv6_prefix_len'];
    }

    /**
     * Sets link_local_i_pv6_prefix_len
     *
     * @param int|null $link_local_i_pv6_prefix_len Prefix length of the IPv6 unicast address.
     *
     * @return $this
     */
    public function setLinkLocalIPv6PrefixLen($link_local_i_pv6_prefix_len)
    {
        $this->container['link_local_i_pv6_prefix_len'] = $link_local_i_pv6_prefix_len;

        return $this;
    }

    /**
     * Gets ports
     *
     * @return map[string,\OpenAPI\Client\Model\PortBinding[]]|null
     */
    public function getPorts()
    {
        return $this->container['ports'];
    }

    /**
     * Sets ports
     *
     * @param map[string,\OpenAPI\Client\Model\PortBinding[]]|null $ports PortMap describes the mapping of container ports to host ports, using the container's port-number and protocol as key in the format `<port>/<protocol>`, for example, `80/udp`.  If a container's port is mapped for multiple protocols, separate entries are added to the mapping table.
     *
     * @return $this
     */
    public function setPorts($ports)
    {
        $this->container['ports'] = $ports;

        return $this;
    }

    /**
     * Gets sandbox_key
     *
     * @return string|null
     */
    public function getSandboxKey()
    {
        return $this->container['sandbox_key'];
    }

    /**
     * Sets sandbox_key
     *
     * @param string|null $sandbox_key SandboxKey identifies the sandbox
     *
     * @return $this
     */
    public function setSandboxKey($sandbox_key)
    {
        $this->container['sandbox_key'] = $sandbox_key;

        return $this;
    }

    /**
     * Gets secondary_ip_addresses
     *
     * @return \OpenAPI\Client\Model\Address[]|null
     */
    public function getSecondaryIpAddresses()
    {
        return $this->container['secondary_ip_addresses'];
    }

    /**
     * Sets secondary_ip_addresses
     *
     * @param \OpenAPI\Client\Model\Address[]|null $secondary_ip_addresses 
     *
     * @return $this
     */
    public function setSecondaryIpAddresses($secondary_ip_addresses)
    {
        $this->container['secondary_ip_addresses'] = $secondary_ip_addresses;

        return $this;
    }

    /**
     * Gets secondary_i_pv6_addresses
     *
     * @return \OpenAPI\Client\Model\Address[]|null
     */
    public function getSecondaryIPv6Addresses()
    {
        return $this->container['secondary_i_pv6_addresses'];
    }

    /**
     * Sets secondary_i_pv6_addresses
     *
     * @param \OpenAPI\Client\Model\Address[]|null $secondary_i_pv6_addresses 
     *
     * @return $this
     */
    public function setSecondaryIPv6Addresses($secondary_i_pv6_addresses)
    {
        $this->container['secondary_i_pv6_addresses'] = $secondary_i_pv6_addresses;

        return $this;
    }

    /**
     * Gets endpoint_id
     *
     * @return string|null
     */
    public function getEndpointId()
    {
        return $this->container['endpoint_id'];
    }

    /**
     * Sets endpoint_id
     *
     * @param string|null $endpoint_id EndpointID uniquely represents a service endpoint in a Sandbox.  <p><br /></p>  > **Deprecated**: This field is only propagated when attached to the > default \"bridge\" network. Use the information from the \"bridge\" > network inside the `Networks` map instead, which contains the same > information. This field was deprecated in Docker 1.9 and is scheduled > to be removed in Docker 17.12.0
     *
     * @return $this
     */
    public function setEndpointId($endpoint_id)
    {
        $this->container['endpoint_id'] = $endpoint_id;

        return $this;
    }

    /**
     * Gets gateway
     *
     * @return string|null
     */
    public function getGateway()
    {
        return $this->container['gateway'];
    }

    /**
     * Sets gateway
     *
     * @param string|null $gateway Gateway address for the default \"bridge\" network.  <p><br /></p>  > **Deprecated**: This field is only propagated when attached to the > default \"bridge\" network. Use the information from the \"bridge\" > network inside the `Networks` map instead, which contains the same > information. This field was deprecated in Docker 1.9 and is scheduled > to be removed in Docker 17.12.0
     *
     * @return $this
     */
    public function setGateway($gateway)
    {
        $this->container['gateway'] = $gateway;

        return $this;
    }

    /**
     * Gets global_i_pv6_address
     *
     * @return string|null
     */
    public function getGlobalIPv6Address()
    {
        return $this->container['global_i_pv6_address'];
    }

    /**
     * Sets global_i_pv6_address
     *
     * @param string|null $global_i_pv6_address Global IPv6 address for the default \"bridge\" network.  <p><br /></p>  > **Deprecated**: This field is only propagated when attached to the > default \"bridge\" network. Use the information from the \"bridge\" > network inside the `Networks` map instead, which contains the same > information. This field was deprecated in Docker 1.9 and is scheduled > to be removed in Docker 17.12.0
     *
     * @return $this
     */
    public function setGlobalIPv6Address($global_i_pv6_address)
    {
        $this->container['global_i_pv6_address'] = $global_i_pv6_address;

        return $this;
    }

    /**
     * Gets global_i_pv6_prefix_len
     *
     * @return int|null
     */
    public function getGlobalIPv6PrefixLen()
    {
        return $this->container['global_i_pv6_prefix_len'];
    }

    /**
     * Sets global_i_pv6_prefix_len
     *
     * @param int|null $global_i_pv6_prefix_len Mask length of the global IPv6 address.  <p><br /></p>  > **Deprecated**: This field is only propagated when attached to the > default \"bridge\" network. Use the information from the \"bridge\" > network inside the `Networks` map instead, which contains the same > information. This field was deprecated in Docker 1.9 and is scheduled > to be removed in Docker 17.12.0
     *
     * @return $this
     */
    public function setGlobalIPv6PrefixLen($global_i_pv6_prefix_len)
    {
        $this->container['global_i_pv6_prefix_len'] = $global_i_pv6_prefix_len;

        return $this;
    }

    /**
     * Gets ip_address
     *
     * @return string|null
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string|null $ip_address IPv4 address for the default \"bridge\" network.  <p><br /></p>  > **Deprecated**: This field is only propagated when attached to the > default \"bridge\" network. Use the information from the \"bridge\" > network inside the `Networks` map instead, which contains the same > information. This field was deprecated in Docker 1.9 and is scheduled > to be removed in Docker 17.12.0
     *
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets ip_prefix_len
     *
     * @return int|null
     */
    public function getIpPrefixLen()
    {
        return $this->container['ip_prefix_len'];
    }

    /**
     * Sets ip_prefix_len
     *
     * @param int|null $ip_prefix_len Mask length of the IPv4 address.  <p><br /></p>  > **Deprecated**: This field is only propagated when attached to the > default \"bridge\" network. Use the information from the \"bridge\" > network inside the `Networks` map instead, which contains the same > information. This field was deprecated in Docker 1.9 and is scheduled > to be removed in Docker 17.12.0
     *
     * @return $this
     */
    public function setIpPrefixLen($ip_prefix_len)
    {
        $this->container['ip_prefix_len'] = $ip_prefix_len;

        return $this;
    }

    /**
     * Gets i_pv6_gateway
     *
     * @return string|null
     */
    public function getIPv6Gateway()
    {
        return $this->container['i_pv6_gateway'];
    }

    /**
     * Sets i_pv6_gateway
     *
     * @param string|null $i_pv6_gateway IPv6 gateway address for this network.  <p><br /></p>  > **Deprecated**: This field is only propagated when attached to the > default \"bridge\" network. Use the information from the \"bridge\" > network inside the `Networks` map instead, which contains the same > information. This field was deprecated in Docker 1.9 and is scheduled > to be removed in Docker 17.12.0
     *
     * @return $this
     */
    public function setIPv6Gateway($i_pv6_gateway)
    {
        $this->container['i_pv6_gateway'] = $i_pv6_gateway;

        return $this;
    }

    /**
     * Gets mac_address
     *
     * @return string|null
     */
    public function getMacAddress()
    {
        return $this->container['mac_address'];
    }

    /**
     * Sets mac_address
     *
     * @param string|null $mac_address MAC address for the container on the default \"bridge\" network.  <p><br /></p>  > **Deprecated**: This field is only propagated when attached to the > default \"bridge\" network. Use the information from the \"bridge\" > network inside the `Networks` map instead, which contains the same > information. This field was deprecated in Docker 1.9 and is scheduled > to be removed in Docker 17.12.0
     *
     * @return $this
     */
    public function setMacAddress($mac_address)
    {
        $this->container['mac_address'] = $mac_address;

        return $this;
    }

    /**
     * Gets networks
     *
     * @return map[string,\OpenAPI\Client\Model\EndpointSettings]|null
     */
    public function getNetworks()
    {
        return $this->container['networks'];
    }

    /**
     * Sets networks
     *
     * @param map[string,\OpenAPI\Client\Model\EndpointSettings]|null $networks Information about all networks that the container is connected to.
     *
     * @return $this
     */
    public function setNetworks($networks)
    {
        $this->container['networks'] = $networks;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


