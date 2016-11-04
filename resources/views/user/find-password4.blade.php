@extends('layouts.RetrievePassword')
@section('title','找回密码')
@section('main')
    <div class="main wth">
        <div class="main-title">
            <p class="title-lf1">找回密码</p>
        </div>
        <div class="main-infro">
            <div class="infro-img">
                <i class="infro-img4"></i>
            </div>
            <div class="botn-margin">
                <p class="tit1"><i></i>恭喜您！修改淘客助手登录密码成功！</p>
                <p class="tit2">请您妥善保管好密码！</p>
                <p class="tit2">为了您的账户安全，请去安全中心完善其他密码设置！</p>
                <div class="botn">
                    <a href="#"><input type="button" class="sub sub3" value="进入安全中心" ></a>
                </div>
                <p class="main-ft1">保密设置已经很完善了，先去<a href="#">淘客助手</a>首页逛逛！</p>
            </div>
        </div>
    </div>
@endsection
