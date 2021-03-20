<?php
namespace Goletter\RakutenAPI\Api;

use Goletter\RakutenAPI\ObjectSerializer;
use Goletter\RakutenAPI\Configuration;
use Goletter\RakutenAPI\HeaderSelector;
use Goletter\RakutenAPI\Helpers\RakutenApiRequest;
use Goletter\RakutenAPI\Models\Orders\GetOrdersResponse;
use Goletter\RakutenAPI\Models\Orders\GetOrderResponse;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
 * Class OrdersApi
 * @package Goletter\YahooAPI\Api
 */
class OrdersApi
{
    use RakutenApiRequest;

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    public function __construct(Configuration $config)
    {
        $this->client = new Client();
        $this->config = $config;
        $this->headerSelector = new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param $orderTimeFrom
     * @param $orderTimeTo
     * @return mixed
     * @throws \Goletter\RakutenApi\ApiException
     */
    public function getOrders($orderTimeFrom, $orderTimeTo)
    {
        list($response) = $this->getOrdersWithHttpInfo($orderTimeFrom, $orderTimeTo);

        return $response;
    }

    /**
     * @param $orderTimeFrom
     * @param $orderTimeTo
     * @return array
     * @throws \Goletter\RakutenApi\ApiException
     */
    public function getOrdersWithHttpInfo($orderTimeFrom, $orderTimeTo)
    {
        $request = $this->getOrdersRequest($orderTimeFrom, $orderTimeTo);

        return $this->sendRequest($request, GetOrdersResponse::class);
    }

    /**
     * @param $orderTimeFrom
     * @param $orderTimeTo
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrdersRequest($orderTimeFrom, $orderTimeTo)
    {
        // query params
        if (null !== $orderTimeFrom) {
            $queryParams['OrderTimeFrom'] = ObjectSerializer::toQueryValue($orderTimeFrom);
        }

        // query params
        if (null !== $orderTimeTo) {
            $queryParams['OrderTimeTo'] = ObjectSerializer::toQueryValue($orderTimeTo);
        }

        $resourcePath = '/order/searchOrder';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $httpBody = <<<BODY
            {
                "dateType": 1,
                "startDatetime": "{$orderTimeFrom}T00:00:00+0900",
                "endDatetime": "{$orderTimeTo}T23:59:59+0900",
                "orderProgressList": [300],
                "subStatusIdList": [96867],
                "PaginationRequestModel": {
                    "requestRecordsAmount": 1000,
                    "requestPage": 1
                } 
            }
BODY;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * @param $order_id
     * @return mixed
     */
    public function getOrder($order_id)
    {
        list($response) = $this->getOrderWithHttpInfo($order_id);

        return $response;
    }

    /**
     * @param $order_id
     * @return array
     * @throws \Goletter\RakutenAPI\ApiException
     */
    public function getOrderWithHttpInfo($order_id)
    {
        $request = $this->getOrderRequest($order_id);

        return $this->sendRequest($request, GetOrderResponse::class);
    }

    /**
     * @param $order_id
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrderRequest($order_id)
    {
        // verify the required parameter 'order_id' is set
        if (null === $order_id || (is_array($order_id) && 0 === count($order_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling getOrder');
        }

        $resourcePath = '/orderInfo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        $httpBody = '';

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }
}