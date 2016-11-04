<?php
error_reporting(-1);
include "../../taobao/TopSdk.php";
class API {
    /**
     * the doc info will be generated automatically into service info page.
     * @params 
     * @return
     */
    public function some_method($parameter='', $option = "foo") {
        $parameter = json_decode($parameter);
        $url = $this->tao($parameter->url);
        return $this->client_can_not_see($url);
    }
     public function tao($url = ''){

        $c = new \TopClient;
        $c->appkey = "23514562";
        $c->secretKey = "e2f81ff813bea88ca256f73ab8556eee";
        $req = new \WirelessShareTpwdCreateRequest;
        $tpwd_param = new \IsvTpwdInfo;
        $tpwd_param->text="超值活动，惊喜活动多多";
        $tpwd_param->url=$url;
        $tpwd_param->user_id="24234234234";
        $req->setTpwdParam(json_encode($tpwd_param));
        $resp = $c->execute($req);
        return $resp;
    }

    protected function client_can_not_see($url) {
       return $json = json_encode($url);
    }
}

$service = new Yar_Server(new API());
$service->handle();
