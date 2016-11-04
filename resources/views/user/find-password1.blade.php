@extends('layouts.RetrievePassword')
@section('title','找回密码')
@section('fin-password_js')
	@parent
	<script src="{{ asset('js/find-password1.js') }}"></script>
@endsection
@section('main')
	<div class="main wth">
		<div class="main-title">
			<p class="title-lf1">找回密码</p>
		</div>
		<div class="main-infro">
			<div class="infro-img">
				<i class="infro-img1"></i>
			</div>
			<p class="infro-mgc">忘记账号？试试您的常用手机号码找回密码</p>
			<div class="content-landing">
				<form action="" method="post" id="register">
					{{ csrf_field() }}
					<ul>
						<li class="clearfix" id="emailMatch_list">
							<label class="normal fl">手机号码：</label>
							<input class="normal-input fl" type="text" id="phone" name="phone" onsubmit="return check()"/>
							<div class="error-box fl" id="email_warn">
								<strong class="error" style="display:none"></strong>
								<p class="tip">请输入手机号码</p>
							</div>
						</li>
						<li>
							<label class="normal fl"></label>
							<div class="botn">
								<input type="submit" class="sub" value="下一步" >
							</div>
						</li>
					</ul>
				</form>
				<script type="text/javascript">
					function check(){
						$.post("{{url('retrieve')}}",{mobile:$("#phone").val()},function (data) {
							var result = $.parseJSON(data);
							var phone = result[0]['phone'];
							alert(pone);
						});
						/*$.ajax({
							url:'retrieve',
							type:'POST',
							dateType:'json',
							data:{
								mobile:$("#phone").val(),
							},
							success:function(data){
								if(data.success){
									console.log(data.phone);
								}else{
									console.log(data.phone);
								}
							},
							error:function(jqXHR){
								console.log(jqXHR.status);
							}
						});*/
					}
				</script>
			</div>
		</div>
	</div>

@endsection