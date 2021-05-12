<?php
namespace Goletter\RakutenAPI\Models\Orders;

use ArrayAccess;
use Goletter\RakutenAPI\Models\ModelInterface;
use Goletter\RakutenAPI\ObjectSerializer;
/**
 * OrdererModel Class Doc Comment.
 *

 * @description A list of orders.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class OrdererModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'OrdererModel';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'zip_code1' => 'string',
        'zip_code2' => 'string',
        'prefecture' => 'string',
        'city' => 'string',
        'sub_address' => 'string',
        'family_name' => 'string',
        'first_name' => 'string',
        'email_address' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'zip_code1' => null,
        'zip_code2' => null,
        'prefecture' => null,
        'city' => null,
        'sub_address' => null,
        'family_name' => null,
        'first_name' => null,
        'email_address' => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'zip_code1' => 'zipCode1',
        'zip_code2' => 'zipCode2',
        'prefecture' => 'prefecture',
        'city' => 'city',
        'sub_address' => 'subAddress',
        'family_name' => 'familyName',
        'first_name' => 'firstName',
        'email_address' => 'emailAddress',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'zip_code1' => 'setZipCode1',
        'zip_code2' => 'setZipCode2',
        'prefecture' => 'setPrefecture',
        'city' => 'setCity',
        'sub_address' => 'setSubAddress',
        'family_name' => 'setFamilyName',
        'first_name' => 'setFirstName',
        'email_address' => 'setEmailAddress',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'zip_code1' => 'getZipCode1',
        'zip_code2' => 'getZipCode2',
        'prefecture' => 'getPrefecture',
        'city' => 'getCity',
        'sub_address' => 'getSubAddress',
        'family_name' => 'getFamilyName',
        'first_name' => 'getFirstName',
        'email_address' => 'getEmailAddress',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['zip_code1'] = isset($data['zip_code1']) ? $data['zip_code1'] : null;
        $this->container['zip_code2'] = isset($data['zip_code2']) ? $data['zip_code2'] : null;
        $this->container['prefecture'] = isset($data['prefecture']) ? $data['prefecture'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['sub_address'] = isset($data['sub_address']) ? $data['sub_address'] : null;
        $this->container['family_name'] = isset($data['family_name']) ? $data['family_name'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
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
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * @return mixed
     */
    public function getZipCode1()
    {
        return $this->container['zip_code1'];
    }

    /**
     * @param $zip_code1
     * @return $this
     */
    public function setZipCode1($zip_code1)
    {
        $this->container['zip_code1'] = $zip_code1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getZipCode2()
    {
        return $this->container['zip_code2'];
    }

    /**
     * @param $zip_code2
     * @return $this
     */
    public function setZipCode2($zip_code2)
    {
        $this->container['zip_code2'] = $zip_code2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrefecture()
    {
        return $this->container['prefecture'];
    }

    /**
     * @param $prefecture
     * @return $this
     */
    public function setPrefecture($prefecture)
    {
        $this->container['prefecture'] = $prefecture;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * @param $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubAddress()
    {
        return $this->container['sub_address'];
    }

    /**
     * @param $sub_address
     * @return $this
     */
    public function setSubAddress($sub_address)
    {
        $this->container['sub_address'] = $sub_address;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * @param $family_name
     * @return $this
     */
    public function setFamilyName($family_name)
    {
        $this->container['family_name'] = $family_name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * @param $first_name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * @param $email_address
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
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
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
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