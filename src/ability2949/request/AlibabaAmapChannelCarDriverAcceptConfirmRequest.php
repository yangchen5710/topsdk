<?php
namespace Topsdk\Topapi\Ability2949\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaAmapChannelCarDriverAcceptConfirmRequest {

    /**
        高德订单号
     **/
    private $amapOrderId;

    /**
        确认类型 （CONFIRM_BIND : 接受绑单 , CLOSE_MAIN_ORDER :主单关闭）
     **/
    private $confirmType;

    /**
        请求的唯一ID
     **/
    private $traceId;

    /**
        企业来源
     **/
    private $clientSource;


    public function getAmapOrderId() : string{
        return $this->amapOrderId;
    }

    public function setAmapOrderId(string $amapOrderId){
        $this->amapOrderId = $amapOrderId;
    }

    public function getConfirmType() : string{
        return $this->confirmType;
    }

    public function setConfirmType(string $confirmType){
        $this->confirmType = $confirmType;
    }

    public function getTraceId() : string{
        return $this->traceId;
    }

    public function setTraceId(string $traceId){
        $this->traceId = $traceId;
    }

    public function getClientSource() : string{
        return $this->clientSource;
    }

    public function setClientSource(string $clientSource){
        $this->clientSource = $clientSource;
    }


    public function getApiName() : string {
        return "alibaba.amap.channel.car.driver.accept.confirm";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->amapOrderId)) {
            $requestParam["amap_order_id"] = TopUtil::convertBasic($this->amapOrderId);
        }

        if (!TopUtil::checkEmpty($this->confirmType)) {
            $requestParam["confirm_type"] = TopUtil::convertBasic($this->confirmType);
        }

        if (!TopUtil::checkEmpty($this->traceId)) {
            $requestParam["trace_id"] = TopUtil::convertBasic($this->traceId);
        }

        if (!TopUtil::checkEmpty($this->clientSource)) {
            $requestParam["client_source"] = TopUtil::convertBasic($this->clientSource);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

