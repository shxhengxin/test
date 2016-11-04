<?php
namespace app\tool\tests\htdocs;
class Yar{
    public static function taobao($api = '',$url = '')
    {
        $client = new \Yar_Client($api);
        $json = [
            'url' => $url,
        ];
        $json = json_encode($json);
        return $client->some_method($json);
    }
}
