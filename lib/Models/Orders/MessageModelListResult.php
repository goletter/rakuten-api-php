<?php
namespace Goletter\RakutenAPI\Models\Orders;

use ArrayAccess;
use Goletter\RakutenAPI\Models\ModelInterface;
use Goletter\RakutenAPI\ObjectSerializer;
/**
 * MessageModelListResult Class Doc Comment.
 *

 * @description A list of orders.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class MessageModelListResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'MessageModelListResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'message_type' => 'string',
        'message_code' => 'string',
        'message' => 'string',
        'order_number' => 'string',
        'data_number' => 'int',
        'shipping_detail_id' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'message_type' => null,
        'message_code' => null,
        'message' => null,
        'order_number' => null,
        'data_number' => null,
        'shipping_detail_id' => null,
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
        'message_type' => 'messageType',
        'message_code' => 'messageCode',
        'message' => 'message',
        'order_number' => 'orderNumber',
        'data_number' => 'dataNumber',
        'shipping_detail_id' => 'shippingDetailId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'message_type' => 'setMessageType',
        'message_code' => 'setMessageCode',
        'message' => 'setMessage',
        'order_number' => 'setOrderNumber',
        'data_number' => 'setDataNumber',
        'shipping_detail_id' => 'setShippingDetailId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'message_type' => 'getMessageType',
        'message_code' => 'getMessageCode',
        'message' => 'getMessage',
        'order_number' => 'getOrderNumber',
        'data_number' => 'getDataNumber',
        'shipping_detail_id' => 'getShippingDetailId',
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
        $this->container['message_type'] = isset($data['message_type']) ? $data['message_type'] : null;
        $this->container['message_code'] = isset($data['message_code']) ? $data['message_code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['data_number'] = isset($data['data_number']) ? $data['data_number'] : null;
        $this->container['shipping_detail_id'] = isset($data['shipping_detail_id']) ? $data['shipping_detail_id'] : null;
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
     * Gets code.
     *
     * @return string
     */
    public function getMessageCode()
    {
        return $this->container['message_code'];
    }

    /**
     * Sets code.
     *
     * @param string $code an error code that identifies the type of error that occurred
     *
     * @return $this
     */
    public function setMessageCode($messageCode)
    {
        $this->container['message_code'] = $messageCode;

        return $this;
    }

    /**
     * Gets message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message.
     *
     * @param string $message a message that describes the error condition in a human-readable form
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets messageType.
     *
     * @return string
     */
    public function getMessageType()
    {
        return $this->container['message_type'];
    }

    /**
     * Sets messageType.
     *
     * @param string $details additional details that can help the caller understand or fix the issue
     *
     * @return $this
     */
    public function setMessageType($messageType)
    {
        $this->container['message_type'] = $messageType;

        return $this;
    }

    /**
     * Gets OrderNumber.
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets OrderNumber.
     *
     * @return $this
     */
    public function setOrderNumber($orderNumber)
    {
        $this->container['order_number'] = $orderNumber;

        return $this;
    }

    /**
     * Gets DataNumber.
     *
     * @return string
     */
    public function getDataNumber()
    {
        return $this->container['data_number'];
    }

    /**
     * Sets DataNumber.
     *
     * @return $this
     */
    public function setDataNumber($dataNumber)
    {
        $this->container['data_number'] = $dataNumber;

        return $this;
    }

    /**
     * Gets ShippingDetailId.
     *
     * @return string
     */
    public function getShippingDetailId()
    {
        return $this->container['shipping_detail_id'];
    }

    /**
     * Sets ShippingDetailId.
     *
     * @return $this
     */
    public function setShippingDetailId($shippingDetailId)
    {
        $this->container['shipping_detail_id'] = $shippingDetailId;

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