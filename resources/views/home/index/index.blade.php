<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta name="Generator" content="" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="Keywords" content="" />
        <meta name="Description" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <title>京城</title>
        <link rel="shortcut icon" href="/home/logo/favicon.ico" />
        <link href="/home/css/style.css" rel="stylesheet" type="text/css" />
        <link href="/home/css/index.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="/admins/lib/layui/css/layui.css">
        <script type="text/javascript" src="/home/js/common.js"></script>
        <script type="text/javascript" src="/home/js/index.js"></script>
        <script type="text/javascript" src="/home/js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="/home/js/jquery.json.js"></script>
        <script type="text/javascript" src="/home/js/transport_jquery.js"></script>
        <script type="text/javascript" src="/home/js/utils.js"></script>
        <script type="text/javascript" src="/home/js/jquery.superslide.js"></script>
        <script type="text/javascript" src="/home/js/xiaomi_common.js"></script>
    </head>
    <body>
        <script type="text/javascript">
    
    <!--
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
    -->
    
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
    </script>         </div>
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
                      <a class="btn-category-list" href="catalog.php" style="display:none;">全部商品分类</a>
                      <div class="site-category ">
                          <ul class="site-category-list clearfix" id="site-category-list">
                            @foreach ($cates as $k=>$v)
                            <li class="category-item">
                              <a class="title" href="category.php?id=76">{{$v->classname}}<i class="layui-icon">&#xe602;</i></a>
                                <div class="children clearfix">
                                    <ul class="children-list">   
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
                @foreach ($cates as $k=>$v)
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
            <button type="submit" class="search-btn iconfont"><i class="layui-icon">&#xe615;</i> </button>
              <div class="hot-words" >
                <a href="search.php?keywords=%E5%B0%8F%E7%B1%B3%E6%89%8B%E7%8E%AF" target="_blank">小米手环</a>  
                <a href="search.php?keywords=%E8%80%B3%E6%9C%BA" target="_blank">耳机</a>  
                <a href="search.php?keywords=%E6%8F%92%E7%BA%BF%E6%9D%BF" target="_blank">插线板</a>                 
              </div>
          </form>
        </div>
 
    </div>
	<div id="J_navMenu" class="header-nav-menu" style="display: none;">
    	<div class="container"></div>
    </div>
</div>
 
<script type="text/javascript" src="/home/js/xiaomi_index.js"></script><div class="home-hero-container container">
	<div class="home-hero">
    <div class="home-hero-slider">
			
			<div id="J_homeSlider" class="xm-slider" style="overflow:hidden;">
      	<div class="xm-slider-container">
          	<div class="xm-slider-control">
                  @foreach ($slids as $k=>$v)
                  <div class="slide xm-slider-slide">
                      <a target="_blank" href="{{$v['surl']}}">
                          <img src="{{$v['simg']}}"/>
                      </a>
                  </div>
                  @endforeach
            </div>
          </div>
          <a class="xm-slider-previous xm-slider-navigation icon-slides icon-slides-prev prev" href="#" style="display:none;">上一张</a>
      	<a class="xm-slider-next xm-slider-navigation icon-slides icon-slides-next next" href="#" style="display: none;">下一张</a>
          <ul class="xm-slider-pagination">
              @foreach ($slids as $k=>$v)
          	  <li class="xm-slider-pagination-item">
                  <a href="javascript:;" class="active">1</a>
              </li>
              @endforeach
          </ul>
      </div>
    </div>    
        <div class="home-hero-sub row">
            <div  style="border:1px solid blue;width:234px;height:170px;margin-left:12px;float:left">
                公告区域 
            </div>
            <div class="span16" style="float:left;">
  	           <ul class="home-promo-list clearfix">
                  @foreach ($recommend1 as $k=>$v)
                  <li class="first" style="margin-left:9px;">
                    <a href='#' target='_blank'>
                      <img src='{{$v->rimg}}' width='316' height='170' border='0' />
                    </a>
                  </li>
                  @endforeach
               </ul>
            </div>
        </div>
        
    </div>
    <div class="home-star-goods xm-carousel-container">
    	
<div class="xm-plain-box J_starGoodsCarousel">
	<div class="box-hd">
    	<h2 class="title">
			小米明星单品
        </h2>
        <div class="more">
        	<div class="xm-controls xm-controls-line-small xm-carousel-controls">
            	<a class="control control-prev iconfont" href="javascript: void(0);"><</a>
				<a class="control control-next iconfont" href="javascript: void(0);">></a>
            </div>
        </div>
    </div>
    <div class="box-bd">
    	<div class="xm-carousel-wrapper J_carouselWrap">
        	<ul class="xm-carousel-list xm-carousel-col-5-list goods-list rainbow-list clearfix J_carouselList">
            	      @foreach ($recommend2 as $k=>$v)
                    <li class="rainbow-item-1">
                    	<a class="thumb" href="goods.php?id=27" target="_blank">
                        	<img src="{{$v->rimg}}" />
                        </a>
                        <h3 class="title">
                        	<a href="#" target="_blank">{{$v->goodrecommend['name']}}</a>
                        </h3>
                        <p class="desc">{{$v->goodrecommend['intro']}}</p>
                    </li>
                    @endforeach
            </ul>
        </div>
    </div>
</div>
 
 
    </div>
</div>
<div class="page-main home-main">
	<div class="container">
	 
<div class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded">
	
	<div class="box-hd">
        <h2 class="title">小米手机</h2>
        <div class="more J_brickNav">
            <a class="more-link" href="category.php?id=80" style=" display:inline-block;">
                查看全部<i class="layui-icon">&#xe602;</i>
            </a>
            <ul class="tab-list J_brickTabSwitch">
            	<li class="tab-active">热门</li>
              @foreach ($scate as $k=>$v)
            	<li>{{$v->classname}}</li>
              @endforeach
            </ul>
        </div>
    </div>
    <div class="box-bd J_brickBd">
    	<div class="row">
        	<div class="span4 span-first">
                <ul class="brick-promo-list clearfix">
                    <li class="brick-item brick-item-l">
                      <a target="_blank" href="#"> <img src="/home/picture/shouji.jpg" width="234" height="614"/></a>
                    </li>
                </ul>
          </div>
            <div class="span16">
            	<ul class="brick-list clearfix">
                @foreach ($sgood as $k=>$v)
                <li class="brick-item brick-item-m">
                      <div class="figure figure-img">
                          <a href="goods.php?id=35">
                              <img src="{{$v->pic}}" width="160" height="160">
                          </a>
                      </div>
                      <h3 class="title">
                          <a href="goods.php?id=35">{{$v->name}}</a>
                      </h3>
                      <p class="desc"></p>
                      <p class="price">
                          {{$v->discount}}<em>元</em></p>
                      <p class="rank">{{$v->name}}</p>
                </li>
                @endforeach
              </ul>
            	<ul class="brick-list clearfix">
                  @foreach ($scate[0]->categoods as $k=>$v)
                  <li class="brick-item brick-item-m">
                      <div class="figure figure-img">
                          <a href="goods.php?id=67">
                              <img src="{{$v->pic}}" width="160" height="160" alt="">
                          </a>
                      </div>
                      <h3 class="title">
                          <a href="goods.php?id=67">{{$v->name}}</a>
                      </h3>
                      <p class="desc"></p>
                      <p class="price">
                          {{$v->discount}}<em>元</em></p>
                      <p class="rank">{{$v->name}}</p>
                  </li>
                  @endforeach
              </ul>
              <ul class="brick-list clearfix">
                  @foreach ($scate[1]->categoods as $k=>$v)
                  <li class="brick-item brick-item-m">
                      <div class="figure figure-img">
                          <a href="goods.php?id=33">
                              <img src="{{$v->pic}}" width="160" height="160" alt="">
                          </a>
                      </div>
                      <h3 class="title">
                          <a href="goods.php?id=33">{{$v->name}}</a>
                      </h3>
                      <p class="desc">{{$v->intro}}</p>
                      <p class="price">
                          {{$v->discount}}<em>元</em></p>
                      <p class="rank">{{$v->name}}</p>
                  </li>
                @endforeach
              </ul>                                                                                                                                                                                                                                                                                                                                   </div>
        </div>
    </div>
</div>
<div class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded">
	<div class="box-hd">
        <h2 class="title">智能家电</h2>
        <div class="more J_brickNav">
            <a class="more-link" href="category.php?id=101" style=" display:inline-block;">
                查看全部<i class="layui-icon">&#xe602;</i>
            </a>
            <ul class="tab-list J_brickTabSwitch">
            	<li class="tab-active">热门</li>
            </ul>
        </div>
    </div>
    
    <div class="box-bd J_brickBd">
    	<div class="row">
        	<div class="span4 span-first">
                <ul class="brick-promo-list clearfix">
                    <li class="brick-item brick-item-m">
                      <a target="_blank" href="#"><img src="/home/picture/jiadian1.jpg" width="234" height="300"/></a>                    
                    </li>
                    <li class="brick-item brick-item-m">
                      <a target="_blank" href="#"><img src="/home/picture/jiadian2.jpg" width="234" height="300"/></a>                     
                    </li>
                </ul>   
            </div>
            <div class="span16">
            	<ul class="brick-list clearfix">
                  @foreach($jgood as $k=>$v)
                  <li class="brick-item brick-item-m">
                      <div class="figure figure-img">
                          <a href="goods.php?id=38">
                              <img src="{{$v->pic}}" width="160" height="160" alt="小米活塞耳机 炫彩版">
                          </a>
                      </div>
                      <h3 class="title">
                          <a href="goods.php?id=38">{{$v->name}}</a>
                      </h3>
                      <p class="desc">{{$v->intro}}</p>
                      <p class="price">
                          {{$v->discount}}<em>元</em></p>
                      <p class="rank">7人评价</p>
                      <div class="review-wrapper">
                          <a href="javascript:void(0)">
                              <span class="review"> 跟女神版超配的。颜值高。</span>
                              <span class="author"> 来自于 匿名用户 的评价 </span>
                          </a>
                      </div>
                  </li>
                  @endforeach
              </ul>
            </div>
        </div>
    </div>
</div>
<div class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded">
	<div class="box-hd">
        <h2 class="title">小米平板 笔记本</h2>
        <div class="more J_brickNav">
            <a class="more-link" href="category.php?id=94" style=" display:inline-block;">
                查看全部<i class="layui-icon">&#xe602;</i>
            </a>
            <ul class="tab-list J_brickTabSwitch">
            	<li class="tab-active">热门</li>
            </ul>
        </div>
    </div>
    
    <div class="box-bd J_brickBd">
    	<div class="row">
        	<div class="span4 span-first">
                <ul class="brick-promo-list clearfix">
                   <li class="brick-item brick-item-m">
                      <a target="_blank" href="affiche.php?ad_id=17&amp;uri=http%3A%2F%2Fwww.ecshop119.com"> <img src="/home/picture/jhphc.jpg" width="234" height="300"/> </a>                     
                    </li>
                    <li class="brick-item brick-item-m">
                        <a target="_blank" href="affiche.php?ad_id=18&amp;uri=http%3A%2F%2Fwww.ecshop119.com"> <img src="/home/picture/xqej.jpg" width="234" height="300"/> </a>                     
                    </li>
                </ul>
                
            </div>
            <div class="span16">
            
            	
            	<ul class="brick-list clearfix">
                @foreach ($pgood as $k=>$v)
                  <li class="brick-item brick-item-m">
                      <div class="figure figure-img">
                          <a href="goods.php?id=44">
                              <img src="{{$v->pic}}" width="160" height="160">
                          </a>
                      </div>
                      <h3 class="title">
                          <a href="goods.php?id=44">{{$v->name}}</a>
                      </h3>
                      <p class="desc">{{$v->intro}}</p>
                      <p class="price">
                          {{$v->discount}}<em>元</em></p>
                      <p class="rank">0人评价</p>
                  </li>
                @endforeach
            </ul>                                                                                             </div>
        </div>
    </div>
</div><div class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded">
	
	<div class="box-hd">
        <h2 class="title">小米生活方式</h2>
        <div class="more J_brickNav">
            <a class="more-link" href="category.php?id=118" style=" display:inline-block;">
                查看全部<i class="layui-icon">&#xe602;</i>
            </a>
            <ul class="tab-list J_brickTabSwitch">
            	<li class="tab-active">热门</li>
            </ul>
        </div>
    </div>
    
    <div class="box-bd J_brickBd">
    	<div class="row">
        	<div class="span4 span-first">
                <ul class="brick-promo-list clearfix">
                  <li class="brick-item brick-item-m">
                      <a target="_blank" href=""> <img src="/home/picture/xdd.jpg" width="234" height="300"/> </a>                     
                  </li>
                  <li class="brick-item brick-item-m">
                      <a target="_blank" href=""> <img src="/home/picture/lsh.jpg" width="234" height="300"/> </a>                     
                  </li>
                </ul>   
            </div>
            <div class="span16">
            	<ul class="brick-list clearfix">
                @foreach ($shgood as $k=>$v)
                  <li class="brick-item brick-item-m">
                      <div class="figure figure-img">
                          <a href="goods.php?id=94">
                              <img src="{{$v->pic}}" width="160" height="160" alt="猫的秘密">
                          </a>
                      </div>
                      <h3 class="title">
                          <a href="goods.php?id=94">{{$v->name}}</a>
                      </h3>
                      <p class="desc">{{$v->intro}}</p>
                      <p class="price">
                          {{$v->discount}}<em>元</em>                      </p>
                      <p class="rank">1人评价</p>
                      <div class="review-wrapper">
                          <a href="javascript:void(0)">
                              <span class="review"> 猫儿很可爱，女朋友戴上萌萌哒</span>
                              <span class="author"> 来自于 vip 的评价 </span>
                          </a>
                      </div>
                  </li>
                @endforeach
              </ul>                                                                                                                                                      </div>
        </div>
    </div>
</div>
      <div class="home-star-goods recommend-for-you">
      
<div class="xm-plain-box">
	<div class="box-hd">
    	<h2 class="title">
			为你推荐
        </h2>
        <div class="more">
        	<div class="xm-controls xm-controls-line-small xm-carousel-controls">
            	<a class="control control-prev iconfont" href="javascript: void(0);"><</a>
				<a class="control control-next iconfont" href="javascript: void(0);">></a>
            </div>
        </div>
    </div>
    <div class="box-bd">
    	<div class="xm-carousel-wrapper J_carouselWrap">
        	<ul class="xm-carousel-list xm-carousel-col-5-list goods-list rainbow-list clearfix J_carouselList">
        	@foreach ($recommend3 as $k=>$v)
            <li>
                	<a class="thumb" href="goods.php?id=27" target="_blank">
                    	<img src="{{$v->rimg}}" />
                    </a>
                    <h3 class="title">
                    	<a href="goods.php?id=27" target="_blank">{{$v->goodrecommend['name']}}</a>
                    </h3>
                    <p class="price">{{$v->goodrecommend['price']}}<em>元</em></p>
            </li>
          @endforeach
          </ul>
        </div>
    </div>
</div>
 
 
      </div>
      
      <div id="hot-comment" class="home-review-box xm-plain-box J_itemBox J_reviewBox is-visible">
		  <div class="box-hd">
	<h2 class="title">热评产品</h2>
</div>
<div class="box-bd J_brickBd">
	<ul class="review-list clearfix">
    	            	<li class="review-item review-item-first">
        	<div class="figure figure-img"><a href="goods.php?id=45"><img src="/home/picture/45_thumb_g_1437092199733.jpg" width="296" height="220" alt="小米活塞耳机标准版"></a></div>
            <p class="review"><a href="goods.php?id=45">dsad</a></p>
            <p class="author">来自于 匿名用户 的评价</p>
            <div class="info">
            	<h3 class="title"><a href="goods.php?id=45">小米活塞耳机标准版</a></h3>
                <span class="sep">|</span>
                <p class="price">89.00</p>
            </div>
        </li>
                            	<li class="review-item">
        	<div class="figure figure-img"><a href="goods.php?id=45"><img src="/home/picture/45_thumb_g_1437092199733.jpg" width="296" height="220" alt="小米活塞耳机标准版"></a></div>
            <p class="review"><a href="goods.php?id=45">dddd</a></p>
            <p class="author">来自于 匿名用户 的评价</p>
            <div class="info">
            	<h3 class="title"><a href="goods.php?id=45">小米活塞耳机标准版</a></h3>
                <span class="sep">|</span>
                <p class="price">89.00</p>
            </div>
        </li>
                            	<li class="review-item">
        	<div class="figure figure-img"><a href="goods.php?id=93"><img src="/home/picture/93_thumb_g_1441056767939.jpg" width="296" height="220" alt="小米百变随身杯"></a></div>
            <p class="review"><a href="goods.php?id=93">刚买就掉地上了，但是质量很坚固，没有摔坏</a></p>
            <p class="author">来自于 vip 的评价</p>
            <div class="info">
            	<h3 class="title"><a href="goods.php?id=93">小米百变随身杯</a></h3>
                <span class="sep">|</span>
                <p class="price">39.00</p>
            </div>
        </li>
                            	<li class="review-item">
        	<div class="figure figure-img"><a href="goods.php?id=39"><img src="/home/picture/39_thumb_g_1437082747983.jpg" width="296" height="220" alt="小米水质TDS检测笔"></a></div>
            <p class="review"><a href="goods.php?id=39">方便实用</a></p>
            <p class="author">来自于 vip 的评价</p>
            <div class="info">
            	<h3 class="title"><a href="goods.php?id=39">小米水质TDS检测笔</a></h3>
                <span class="sep">|</span>
                <p class="price">39.00</p>
            </div>
        </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul>
</div>
 
      </div>
      
    </div>
</div>
<div id="J_modalVideo" class="modal modal-video fade modal-hide">
	<div class="modal-hd">
    	<h3 class="title"></h3>
        <a class="close"><i class="iconfont"></i></a>
    </div>
    <div class="modal-bd">
    	<iframe width="880" height="536" src="/home/" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

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
                <p class="phone">15105955077</p>
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
              <a href="http://www.ecshop119.com" target="_blank" title="京城商城">四骑士小组</a>
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

