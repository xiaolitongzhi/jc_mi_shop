<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="Generator" content="" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="Keywords" content="" />
		<meta name="Description" content="" />
		<title>京城</title>
		<link rel="shortcut icon" href="/home/logo/favicon.ico" />
		<link rel="stylesheet" href="/admins/lib/layui/css/layui.css">
		<link rel="icon" href="animated_favicon.gif" type="image/gif" />
		<link href="/home/css/style.css" rel="stylesheet" type="text/css" />
		<link href="/home/css/category.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="/home/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="/home/js/jquery.json.js"></script>
		<script type="text/javascript" src="/home/js/common.js"></script>
		<script type="text/javascript" src="/home/js/global.js"></script>
		<script type="text/javascript" src="/home/js/easydialog.min.js"></script>
		<script type="text/javascript" src="/home/js/compare.js"></script>
		<script type="text/javascript" src="/home/js/transport_jquery.js"></script>
		<script type="text/javascript" src="/home/js/utils.js"></script>
		<script type="text/javascript" src="/home/js/jquery.superslide.js"></script>
		<script type="text/javascript" src="/home/js/xiaomi_common.js"></script>
	</head>
	<body>
		<script type="text/javascript">
		    
		    function checkSearchForm()
		    {
		        if(document.getElementById('keyword').value)
		        {
		            return true;
		        }
		        else
		        {
		            alert("请输入搜索关键词！");
		            return false;
		        }
		    }
		    
		</script>
		<div class="site-topbar">
			<div class="container">
		    	<div class="topbar-nav">
		        	<a href="mobile"  class="snc-link snc-order">手机版</a>
		            <span class="sep">|</span>                        <a href="#"  target="_blank"  class="snc-link snc-order">MIUI</a>
		            <span class="sep">|</span>                        <a href="#"  target="_blank"  class="snc-link snc-order">米聊</a>
		            <span class="sep">|</span>                        <a href="#"  target="_blank"  class="snc-link snc-order">游戏</a>
		            <span class="sep">|</span>                        <a href="#"  target="_blank"  class="snc-link snc-order">多看阅读</a>
		            <span class="sep">|</span>                        <a href="#"  target="_blank"  class="snc-link snc-order">云服务</a>
		            <span class="sep">|</span>                        <a href="/mobile"  target="_blank"  class="snc-link snc-order">移动版商城</a>
		            <span class="sep">|</span>                        <a href="#"  class="snc-link snc-order">Select region</a>
		            <span class="sep">|</span>                        <a href="article_cat.php?id=3"  class="snc-link snc-order">网店帮助分类</a>
		            <span class="sep">|</span>                        <a href="message.php"  target="_blank"  class="snc-link snc-order">留言板</a>
		            <span class="sep">|</span>                        <a href="goods.php?id=104"  class="snc-link snc-order">会员等级商品测试</a>
		        </div>
		<div class="topbar-cart" id="ECS_CARTINFO">
			<a class="cart-mini " href="flow.php">
			<i class="layui-icon">&#xe657;</i>  
		    购物车
		    <span class="mini-cart-num J_cartNum" id="hd_cartnum">(0)</span>
		</a>
		<div id="J_miniCartList" class="cart-menu">
			    <p class="loading">购物车中还没有商品，赶紧选购吧！</p>
		</div>
		<script type="text/javascript">
			function deleteCartGoods(rec_id)
			{
				Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
			}

			/**
			 * 接收返回的信息
			 */
			function deleteCartGoodsResponse(res)
			{
			  if (res.error)
			  {
			    alert(res.err_msg);
			  }
			  else
			  {
				  $("#ECS_CARTINFO").html(res.content);
			  }
			}
		</script>         
		</div>
		<div class="topbar-info J_userInfo" id="ECS_MEMBERZONE">
		    <a class="link" href="user.php" rel="nofollow">登录</a>
		<span class="sep">|</span>
		<a class="link" href="user.php?act=register" rel="nofollow">注册</a>      
		    </div>
		    </div>
		</div>
		<div class="site-header" style="clear:both;">
			<div class="container">
		    	<div class="header-logo">
		        	<a href="index.php" title="diaoyu666"><img src="/home/picture/logo.gif" /></a>
		        </div>
		        <div class="header-nav">
		        	<ul class="nav-list">
		            	<li class="nav-category">
		                	<a class="btn-category-list" href="catalog.php" >全部商品分类</a>
		                	<div class="site-category category-hidden ">
		                    	<ul class="site-category-list clearfix" id="site-category-list">
		                            @foreach ($common_cates_data as $k=>$v)
		                            <li class="category-item ">
		                              <a class="title" href="">{{$v->classname}}<i class="layui-icon">&#xe602;</i></a>
		                                <div class="children clearfix ">
		                                    <ul class="children-list children-col-3">
		                                      @foreach($v->categoods as $key=>$val)
		                                        <!-- {{$k = $key+1}} -->
		                                        @if($k%6 == 0)
			                                        <li>
			                                              <a href="" class="link">
			                                                  <img class="thumb" src="{{$val->pic}}" width="40" height="40">
			                                                  <span>{{$val->name}}</span>
			                                               </a>
			                                         </li>
		                                          </ul>
		                                          <ul class="children-list children-col-3">
		                                            
		                                        @else
		                                         <li style="text-left;">
		                                          <a href="" class="link">
		                                              <img class="thumb" src="{{$val->pic}}" width="40" height="40">
		                                              <span>{{$val->name}}</span>
		                                            </a>
		                                        </li>
		                                        @endif
		                                      @endforeach
		                                    </ul>
		                              </div>
		                            </li>
                            		@endforeach
								</ul>
		                    </div>
		                </li>
		                 @foreach ($common_cates_data as $k=>$v)
			                <li class="nav-item">
			                  <a class="link" href="category.php?id=76"  ><span>{{$v->classname}}</span></a>
			                  <div class='item-children'>
			                      <div class="container">
			                          <ul class="children-list clearfix">
			                              @foreach($v->categoods as $key=>$val)
			                              <li class="first">
			                                  <div class="figure figure-thumb">
			                                  <a href="javascript:;">
			                                    <img src="{{$val->pic}}">
			                                    </a>
			                                  </div>
			                                  <div class="title"><a href="goods.php?id=27">{{$val->name}}</a></div>
			                                  <p class="price">{{$val->discount}}<em>元</em>元</p>
			                              </li>
			                              @endforeach
			                          </ul>
			                      </div>
			                  </div>
			                </li>
			                @endforeach
		            </ul>
		        </div>
		        <div class="header-search">
		        	<form action="search.php" method="get" id="searchForm" name="searchForm" onSubmit="return checkSearchForm()" class="search-form clearfix">
		            	<label class="hide">站内搜索</label>
		        		<input class="search-text" type="text" name="keywords" id="keyword" value="" autocomplete="off">
		        		<input type="hidden" value="k1" name="dataBi">
		        		<button type="submit" class="search-btn iconfont"><i class="layui-icon">&#xe615;</i></button>
		                                <div class="hot-words" >
		                	 <a href="search.php?keywords=%E5%B0%8F%E7%B1%B3%E6%89%8B%E7%8E%AF" target="_blank">小米手环</a>  <a href="search.php?keywords=%E8%80%B3%E6%9C%BA" target="_blank">耳机</a>  <a href="search.php?keywords=%E6%8F%92%E7%BA%BF%E6%9D%BF" target="_blank">插线板</a>                 </div>
		           	</form>
		        </div>
		    </div>
			<div id="J_navMenu" class="header-nav-menu" style="display: none;">
		    	<div class="container"></div>
		    </div>
		</div>
		<script type="text/javascript" src="/home/js/xiaomi_category.js"></script>











	<div class="site-footer">
    <div class="container">
        <div class="footer-service">
            <ul class="list-service clearfix">
                <li>
                    <a rel="nofollow" href="javascript:void(0)">
                        <i class="layui-icon">&#xe631;</i>1小时快修服务
                    </a>
                </li>
                <li>
                    <a rel="nofollow" href="javascript:void(0)">
                        <i class="layui-icon">&#xe609;</i>7天无理由退货
                    </a>
                </li>
                <li>
                    <a rel="nofollow" href="javascript:void(0)">
                        <i class="layui-icon">&#xe715;</i>15天免费换货
                    </a>
                </li>
                <li>
                    <a rel="nofollow" href="javascript:void(0)">
                        <i class="layui-icon">&#xe650;</i>满150元包邮
                    </a>
                </li>
                <li>
                    <a rel="nofollow" href="javascript:void(0)">
                        <i class="layui-icon">&#xe7ae;</i>520余家售后网点
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer-links clearfix">
	            <div class="blank"></div>
	        <dl class="col-links">
	      <dt>帮助中心</dt>
	            <dd> 
	        <a href="article.php?id=9" target="_blank" title="配送方式" rel="nofollow">配送方式</a>
	      </dd>
	            <dd> 
	        <a href="article.php?id=10" target="_blank" title="支付方式" rel="nofollow">支付方式</a>
	      </dd>
	            <dd> 
	        <a href="article.php?id=11" target="_blank" title="购物指南" rel="nofollow">购物指南</a>
	      </dd>
	       
	    </dl>
	        <dl class="col-links">
	      <dt>服务支持</dt>
	            <dd> 
	        <a href="article.php?id=21" target="_blank" title="相关下载" rel="nofollow">相关下载</a>
	      </dd>
	            <dd> 
	        <a href="article.php?id=22" target="_blank" title="自助服务" rel="nofollow">自助服务</a>
	      </dd>
	            <dd> 
	        <a href="article.php?id=23" target="_blank" title="售后政策" rel="nofollow">售后政策</a>
	      </dd>
	       
	    </dl>
	     
	     
	        <dl class="col-links">
	      <dt>小米之家</dt>
	            <dd> 
	        <a href="article.php?id=12" target="_blank" title="预约亲临到店服务" rel="nofollow">预约亲临到店服务</a>
	      </dd>
	            <dd> 
	        <a href="article.php?id=13" target="_blank" title="服务网点" rel="nofollow">服务网点</a>
	      </dd>
	            <dd> 
	        <a href="article.php?id=14" target="_blank" title="小米之家" rel="nofollow">小米之家</a>
	      </dd>
	       
	    </dl>
	     
	     
	        <dl class="col-links">
	      <dt>关于小米</dt>
	            <dd> 
	        <a href="article.php?id=24" target="_blank" title="联系小米" rel="nofollow">联系小米</a>
	      </dd>
	            <dd> 
	        <a href="article.php?id=25" target="_blank" title="加入小米" rel="nofollow">加入小米</a>
	      </dd>
	            <dd> 
	        <a href="article.php?id=26" target="_blank" title="了解小米" rel="nofollow">了解小米</a>
	      </dd>
	       
	    </dl>
	     
	     
	        <dl class="col-links">
	      <dt>关注小米</dt>
	            <dd> 
	        <a href="article.php?id=15" target="_blank" title="官方微信" rel="nofollow">官方微信</a>
	      </dd>
	            <dd> 
	        <a href="article.php?id=16" target="_blank" title="小米部落" rel="nofollow">小米部落</a>
	      </dd>
	            <dd> 
	        <a href="article.php?id=17" target="_blank" title="新浪微博" rel="nofollow">新浪微博</a>
	      </dd>
	       
	    </dl>
	            <div class="col-contact">
	                <p class="phone">183-055-198-18</p>
	                <p>周一至周日 8:00-18:00<br>（仅收市话费）</p>
	                <a rel="nofollow" class="btn btn-line-primary btn-small">
	                    <i class="layui-icon">&#xe6fc;</i>24小时在线客服
	                </a>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="site-info">
	    <div class="container">
	        <div class="logo ir">京城商城</div>
	        <div class="info-text">
	            <p class="sites">
	              <a href="#" target="_blank" title="京城商城">四骑士小组</a>
	            </p>
	            <p>
	                ©<a href='javascript:;'>京城仿小米商城</a> 北京市昌平区回龙观育荣教育 <a href='#'>歡迎來电183-055-198-18本網站由 四骑士小组www.lzyc.com 製作。</a>    
	            </p>
	        </div>
	        <div class="info-links">
	            <a href="#"><img src="/home/picture/cnnicverifyseal.png" alt="可信网站"></a>
	            <a href="#"><img src="/home/picture/szfwverifyseal.gif" alt="诚信网站"></a>
	            <a href="#"><img src="/home/picture/save.jpg" alt="网上交易保障中心"></a>
	        </div>
	    </div>
	</div>
	 
</body>
</html>

