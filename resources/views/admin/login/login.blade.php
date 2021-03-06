<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>京城后台管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/admins/css/font.css">
    <link rel="stylesheet" href="/admins/css/xadmin.css">
    <link rel="stylesheet" href="/admins/css/swiper.min.css">
    <link rel="stylesheet" href="/admins/lib/layui/css/layui.css">
    <script type="text/javascript" src="/admins/js/jquery.min.js"></script>
    <script type="text/javascript" src="/admins/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/admins/js/swiper.jquery.min.js"></script>
    <script src="/admins/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/admins/js/xadmin.js"></script>

    <style type="text/css">
    .pagination li{
        width:35px;
        height:25px;
        line-height:25px; 
        border:1px solid #ddd;
        border-radius:5px;
        float:left; 
        margin:3px;  
        text-align:center;    
    }
    .pagination li:hover{
        background:#5B604E; 
    }
    .pagination {
        width:500px; 
        margin:auto;
        padding-left:15%;    
    }
    .pagination span{
            position: relative;
            padding: 5px 14px;
            margin-left:-0.5px; 
            line-height: 1.42857143;
            color: #fff;
            text-decoration: none;
            background-color:#6D5C43;
            border-radius:5px; 
    }
    </style>
</head>
<body>
<div class="login-logo"><h1>京城后台登陆</h1></div>
    @if (session('success'))
         <script type="text/javascript">
            layui.use('layer', function(){
                var layer = layui.layer;
                layer.msg("{{session('success')}}");
            });
        </script>
    @endif
    @if (session('error'))
        <script type="text/javascript">
            layui.use('layer', function(){
                var layer = layui.layer;
                layer.msg("{{session('error')}}");
            }); 
        </script>
    @endif
    @section('content')
    
    
    @show

    <div class="login-box">

        <!-- 后台首页登录界面 -->
        <form class="layui-form layui-form-pane" action="{{ url('admin/login/check') }}" method="post">
              {{ csrf_field() }}
            <div style="width:100%;height:15px;"></div>
            <label class="login-title" for="username">帐号</label>
            <div class="layui-form-item" >
                <label class="layui-form-label login-form"><i class="iconfont"></i></label>
                <div class="layui-input-inline login-inline">
                  <input type="text" name="username" lay-verify="required"  value="{{ old('username') }}" placeholder="请输入你的帐号" autocomplete="off" class="layui-input" >
                </div>
            </div>

            <label class="login-title" for="password">密码</label>
            <div class="layui-form-item">
                <label class="layui-form-label login-form"><i class="iconfont"></i></label>
                <div class="layui-input-inline login-inline">
                  <input type="password" name="password" lay-verify="required" placeholder="请输入你的密码" autocomplete="off" class="layui-input" >
                </div>

            </div>
            <label class="login-title" for="password">验证码</label>
            <div class="layui-form-item">
                <div class="layui-form-label login-form" style="maigin:0px;padding:0px;"><img src="{{captcha_src()}}" onclick="rand_code(this)" title="点击更换"></div>
                <!-- <label class="layui-form-label login-form"></label> -->
                <div class="layui-input-inline login-inline">
                <input type="text" class="enter-item code-enter-item layui-input" name="captcha" maxlength="5" placeholder="验证码">
                  <!-- <input type="password" name="password" lay-verify="required" placeholder="请输入你的密码" autocomplete="off" class="layui-input" > -->
                </div>
            </div>

            <div class="login-title" style="text-align: center;">
                <button class="btn btn-warning pull-right" lay-submit="" lay-filter="login" style="width:35%" type="submit">登录</button> 
                <!-- <div class="forgot"><a href="{{ url('admin/login/change') }}" class="forgot">忘记帐号或者密码</a></div>   -->

            </div>
        </form>
          <script type="text/javascript">
                          function rand_code(obj){
                            obj.src = obj.src+'?a='+Math.random();  
                          }
                        </script>

                        @if (count($errors) > 0)
                         @foreach ($errors->all() as $error)
                         <script type="text/javascript">
                      
                             layui.use('layer', function(){
                                  var layer = layui.layer;
                                  layer.msg('{{ $error }}');
                                }); 
                         </script>  
                        @endforeach
                        @endif
        <!-- 后台登录结束 -->
    </div>
        <div class="bg-changer">
        <div class="swiper-container changer-list">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="item" src="/admins/images/a.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admins/images/b.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admins/images/c.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admins/images/d.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admins/images/e.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admins/images/f.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admins/images/g.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admins/images/h.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admins/images/i.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admins/images/j.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/admins/images/k.jpg" alt=""></div>
                <div class="swiper-slide"><span class="reset">初始化</span></div>
            </div>
        </div>
        <div class="bg-out"></div>
        <div id="changer-set"><i class="iconfont">&#xe696;</i></div>   
    </div>

    

</body>
</html>
