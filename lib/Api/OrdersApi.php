<?php
namespace Goletter\RakutenAPI\Api;

use Goletter\RakutenAPI\Configuration;
use Goletter\RakutenAPI\HeaderSelector;
use Goletter\RakutenAPI\Helpers\RakutenApiRequest;
use Goletter\RakutenAPI\Models\Orders\GetOrdersResponse;
use Goletter\RakutenAPI\Models\Orders\GetOrderResponse;
use Goletter\RakutenAPI\Models\Orders\UpdateOrderSubStatusResponse;
use Goletter\RakutenAPI\Models\Orders\UpdateOrderShippingResponse;
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
     * 获取乐天待发货订单号列表
     * @param $orderTimeFrom
     * @param $orderTimeTo
     * @return mixed
     * @throws \Goletter\RakutenApi\ApiException
     */
    public function getOrders($startDatetime, $endDatetime, $orderProgressList = null)
    {
        list($response) = $this->getOrdersWithHttpInfo($startDatetime, $endDatetime, $orderProgressList);

        return $response;
    }

    /**
     * @param $orderTimeFrom
     * @param $orderTimeTo
     * @return array
     * @throws \Goletter\RakutenApi\ApiException
     */
    protected function getOrdersWithHttpInfo($startDatetime, $endDatetime, $orderProgressList = null)
    {
        $request = $this->getOrdersRequest($startDatetime, $endDatetime, $orderProgressList);

        return $this->sendRequest($request, GetOrdersResponse::class);
    }

    /**
     * @param $orderTimeFrom
     * @param $orderTimeTo
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrdersRequest($startDatetime, $endDatetime, $orderProgressList = null)
    {
        $resourcePath = '/order/searchOrder';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        $httpBody = [
            'dateType' => 1,
            'startDatetime' => "{$startDatetime}T00:00:00+0900",
            'endDatetime' => "{$endDatetime}T23:59:59+0900",
            'orderProgressList' => $orderProgressList,
            'PaginationRequestModel' => [
                "requestRecordsAmount" => 1000,
                "requestPage" => 1
            ]
        ];
        $httpBody = json_encode($httpBody);

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * 获取订单详情
     * @param $order_id
     * @return mixed
     */
    public function getOrder($order_id)
    {
        list($response) = $this->getOrderWithHttpInfo($order_id);

        return $response;
    }

    /**
     * @param $order_ids
     * @return array
     * @throws \Goletter\RakutenAPI\ApiException
     */
    protected function getOrderWithHttpInfo($order_ids)
    {
        $request = $this->getOrderRequest($order_ids);

        return $this->sendRequest($request, GetOrderResponse::class);
    }

    /**
     * @param $order_ids
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrderRequest($order_ids)
    {
        // verify the required parameter 'order_id' is set
        if (null === $order_ids || (is_array($order_ids) && 0 === count($order_ids))) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling getOrder');
        }

        $resourcePath = '/order/getOrder';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        $httpBody = ['orderNumberList' => $order_ids];
        $httpBody = json_encode($httpBody);

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * 更新乐天订单状态为「发货完成」
     * @param $order_ids
     * @param $subStatusId
     * @return array
     * @throws \Goletter\RakutenAPI\ApiException
     */
    public function updateOrderSubStatusWithHttpInfo($order_ids, $subStatusId)
    {
        $request = $this->updateOrderSubStatus($order_ids, $subStatusId);

        return $this->sendRequest($request, UpdateOrderSubStatusResponse::class);
    }

    /**
     * @param $order_ids
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateOrderSubStatus($order_ids, $subStatusId)
    {
        // verify the required parameter 'order_id' is set
        if (null === $order_ids || (is_array($order_ids) && 0 === count($order_ids))) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling getOrder');
        }

        $resourcePath = '/order/updateOrderSubStatus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        $httpBody = ['subStatusId' => $subStatusId, 'orderNumberList' => $order_ids];
        $httpBody = json_encode($httpBody);

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * 更新乐天订单物流信息，发货完成
     * @param $orderId
     * @param $basketId
     * @param $deliveryCompany
     * @param $shippingNumber
     * @param $shippingDate
     * @return array
     * @throws \Goletter\RakutenAPI\ApiException
     */
    public function updateOrderShippingWithHttpInfo($orderId, $basketId, $deliveryCompany, $shippingNumber, $shippingDate)
    {
        $request = $this->updateOrderShipping($orderId, $basketId, $deliveryCompany, $shippingNumber, $shippingDate);

        return $this->sendRequest($request, UpdateOrderShippingResponse::class);
    }

    /**
     * @param $orderId
     * @param $basketId
     * @param $deliveryCompany
     * @param $shippingNumber
     * @param $shippingDate
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateOrderShipping($orderId, $basketId, $deliveryCompany, $shippingNumber, $shippingDate)
    {
        // verify the required parameter 'order_id' is set
        if (null === $orderId || (is_array($orderId) && 0 === count($orderId))) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling getOrder');
        }

        // verify the required parameter 'basket_id' is set
        if (null === $basketId || (is_array($basketId) && 0 === count($basketId))) {
            throw new \InvalidArgumentException('Missing the required parameter $basket_id when calling getOrder');
        }

        // verify the required parameter 'deliveryCompany' is set
        if (null === $deliveryCompany || (is_array($deliveryCompany) && 0 === count($deliveryCompany))) {
            throw new \InvalidArgumentException('Missing the required parameter');
        }

        // verify the required parameter 'shippingNumber' is set
        if (null === $shippingNumber || (is_array($shippingNumber) && 0 === count($shippingNumber))) {
            throw new \InvalidArgumentException('Missing the required parameter');
        }

        // verify the required parameter 'shippingDate' is set
        if (null === $shippingDate || (is_array($shippingDate) && 0 === count($shippingDate))) {
            throw new \InvalidArgumentException('Missing the required parameter');
        }

        $resourcePath = '/order/updateOrderShipping';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        $httpBody = [
            'orderNumber' => $orderId,
            'BasketidModelList' => [
                'basketId' => $basketId,
                'ShippingModelList' => [
                    'deliveryCompany' => $deliveryCompany,
                    'shippingNumber' => $shippingNumber,
                    'shippingDate' => $shippingDate,
                ]
            ],
        ];
        $httpBody = json_encode($httpBody);

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }
}