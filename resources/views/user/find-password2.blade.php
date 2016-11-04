@extends('layouts.RetrievePassword')
@section('title','找回密码')
@section('fin-password_js')
@parent
<script src="{{ asset('js/find-password2.js') }}"></script>
@endsection
@section('main')
    <div class="main wth">
        <div class="main-title">
            <p class="title-lf1">找回密码</p>
        </div>
        <div class="main-infro infro-height">
            <div class="infro-img">
                <i class="infro-img2"></i>
            </div>
            <p class="phone-text">淘客助手已向您的手机<span>185****5371</span>发送了短信验证码，请及时查看！</p>
            <div class="content-landing themargin">
                <form action="" method="post" id="register">
                    <ul>
                        <li  id="verify_display">
                            <label class="normal fl">短信验证码：</label>
                            <input class="normal-input code-input fl" id="code" name="code" type="text" placeholder="验证码">
                            <button>点击获取验证码</button>
                            <div class="error-box fl" id="code_warn">
                                <p class="tip"></p>
                            </div>
                        </li>
                        <li>
                            <label class="normal fl"></label>
                            <div class="botn">
                                <input type="submit" class="sub" value="确 定" >
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
@endsection