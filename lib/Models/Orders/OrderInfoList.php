<?php
namespace Goletter\RakutenAPI\Models\Orders;

use ArrayAccess;
use Goletter\RakutenAPI\Models\ModelInterface;
use Goletter\RakutenAPI\ObjectSerializer;

class OrderInfoList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'OrderInfoList';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'order_id' => 'string',
        'sub_status_id' => 'int',
        'order_at' => 'string',
        'goods_price' => 'float',
        'total_price' => 'float',
        'remarks' => 'string',
        'orderer_model' => '\Goletter\RakutenAPI\Models\Orders\OrdererModel',
        'package_model_list' => '\Goletter\RakutenAPI\Models\Orders\PackagesModelList',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'order_id' => null,
        'sub_status_id' => null,
        'order_at' => null,
        'goods_price' => null,
        'total_price' => null,
        'remarks' => null,
        'orderer_model' => null,
        'package_model_list' => null,
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
        'order_id' => 'orderNumber',
        'sub_status_id' => 'subStatusId',
        'order_at' => 'orderDatetime',
        'goods_price' => 'goodsPrice',
        'total_price' => 'totalPrice',
        'remarks' => 'remarks',
        'orderer_model' => 'OrdererModel',
        'package_model_list' => 'PackageModelList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
        'sub_status_id' => 'setSubStatusId',
        'order_at' => 'setOrderAt',
        'goods_price' => 'setGoodsPrice',
        'total_price' => 'setTotalPrice',
        'remarks' => 'setRemarks',
        'orderer_model' => 'setOrdererModel',
        'package_model_list' => 'setPackageModelList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'order_number' => 'getOrderId',
        'sub_status_id' => 'getSubStatusId',
        'order_at' => 'getOrderAt',
        'goods_price' => 'getGoodsPrice',
        'total_price' => 'getTotalPrice',
        'remarks' => 'getRemarks',
        'orderer_model' => 'getOrdererModel',
        'package_model_list' => 'getPackageModelList',
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
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['sub_status_id'] = isset($data['sub_status_id']) ? $data['sub_status_id'] : null;
        $this->container['order_at'] = isset($data['order_at']) ? $data['order_at'] : null;
        $this->container['goods_price'] = isset($data['goods_price']) ? $data['goods_price'] : null;
        $this->container['total_price'] = isset($data['total_price']) ? $data['total_price'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['orderer_model'] = isset($data['orderer_model']) ? $data['orderer_model'] : null;
        $this->container['package_model_list'] = isset($data['package_model_list']) ? $data['package_model_list'] : null;
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
     * Gets order_id.
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets sub_status_id.
     *
     * @return string
     */
    public function getSubStatusId()
    {
        return $this->container['sub_status_id'];
    }

    /**
     * Sets sub_status_id.
     *
     * @return $this
     */
    public function setSubStatusId($sub_status_id)
    {
        $this->container['sub_status_id'] = $sub_status_id;

        return $this;
    }

    /**
     * Gets order_at.
     *
     * @return string
     */
    public function getOrderAt()
    {
        return $this->container['order_at'];
    }

    /**
     * Sets order_at.
     *
     * @param string $order_id an order identifier, in 3-7-7 format
     *
     * @return $this
     */
    public function setOrderAt($order_at)
    {
        $this->container['order_at'] = $order_at;

        return $this;
    }

    /**
     * Gets goods_price.
     *
     * @return string
     */
    public function getGoodsPrice()
    {
        return $this->container['goods_price'];
    }

    /**
     * Sets goods_price.
     *
     * @return $this
     */
    public function setGoodsPrice($goods_price)
    {
        $this->container['goods_price'] = $goods_price;

        return $this;
    }

    /**
     * Gets total_price.
     *
     * @return string
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price.
     *
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets remarks.
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
     * Sets remarks.
     *
     * @return $this
     */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;

        return $this;
    }

    /**
     * Gets orderer_model.
     *
     * @return string
     */
    public function getOrdererModel()
    {
        return $this->container['orderer_model'];
    }

    /**
     * Sets orderer_model.
     *
     * @return $this
     */
    public function setOrdererModel($orderer_model)
    {
        $this->container['orderer_model'] = $orderer_model;

        return $this;
    }

    /**
     * Gets package_model_list.
     *
     * @return string
     */
    public function getPackageModelList()
    {
        return $this->container['package_model_list'];
    }

    /**
     * Sets package_model_list.
     *
     * @return $this
     */
    public function setPackageModelList($package_model_list)
    {
        $this->container['package_model_list'] = $package_model_list;

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