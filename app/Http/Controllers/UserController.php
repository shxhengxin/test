<?php

namespace App\Http\Controllers;

use App\tool\tests\htdocs\Yar;
use Illuminate\Http\Request;


class UserController extends Controller
{
  public function yar()
  {
      /*
       *@api 请求地址
       * @url 商品地址
       */
      $api = 'http://localhost/laravel/app/tool/tests/htdocs/server.php';
      $url = 'https://item.taobao.com/item.htm?spm=a217m.8005144.302989.8.nh7uGu&id=540619900441';
      echo Yar::taobao($api,$url);
  }
}
