<?php
namespace Topsdk\Topapi\Ability2949;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability2949\Request\AlibabaAmapChannelCarDriverAcceptConfirmRequest;

class Ability2949 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        确认司机接单接口
    **/
    public function alibabaAmapChannelCarDriverAcceptConfirm(AlibabaAmapChannelCarDriverAcceptConfirmRequest $request) {
        return $this->client->execute("alibaba.amap.channel.car.driver.accept.confirm", $request->toMap(), $request->toFileParamMap());
    }
}