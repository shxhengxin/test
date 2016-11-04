$(document).ready(function() {
// 在键盘按下并释放及提交后验证提交表单
    $("#register").validate({
       rules: {
          phone: {
            required: true,
            phone_value: ''
          },
          password: {
            required: true,
            minlength:6,
            maxlength:16
          },
          code: {
            required: true,
            minlength:4,
            maxlength:4
          },
          agree:"required"
        },
        messages: {
          phone: {
            required: "手机号码不能为空",
          },          
          code: {
            required: "请输入验证码",
            minlength:"验证码输入错误",
            maxlength:"验证码输入错误"
          },
          password: {
            required: "请输入密码",
            minlength:"6-16个数字、字母或符号，字母区分大小写",
            maxlength:"6-16个数字、字母或符号，字母区分大小写"
          }
        },
        focusCleanup: true,
        
        onfocusin: function(element){
            $(element).addClass('active');
            $(element).parent().find('strong').hide(); 
            $(element).parent().find('.tip').css("color","#666").show();   
        },
        onfocusout: function(element) {
            $(element).parent().find('.tip').show();
            $(element).parent().find('strong').show();
            if($(element).valid()){
                $(element).parent().find('strong').removeClass('error');
                $(element).parent().find('strong').addClass('ok');
                $(element).parent().find('.tip').hide();
            }
            else{
                $(element).parent().find('strong').removeClass('ok');
                $(element).parent().find('strong').addClass('error');
                $(element).removeClass('active');
                $(element).addClass('error_box');
                $(element).parent().find('.tip').css("color","#ff464e").show();
            }
            
        },
        errorPlacement: function(error, element) {
            $(element).parent().find('.tip').html("");  
            $(element).parent().find('.tip').append(error).css("color","#ff464e").show();
            $(element).removeClass('active');
            $(element).addClass('error_box');
            $(element).parent().find('strong').show();
            $(element).parent().find('strong').removeClass('ok');
            $(element).parent().find('strong').addClass('error');
        }
    });
});