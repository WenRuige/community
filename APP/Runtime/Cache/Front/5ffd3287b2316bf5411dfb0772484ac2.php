<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-CN" /> 



<script type="text/javascript" src="__PUBLIC__/js/jquery1.4.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/bioV4.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.lazyload.mini.js"></script>
<title>哈尔滨理工大学社团</title>
<meta name="Keywords" content="投资机构"/>
<meta name="Description" content="投资机构。"/>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/style/basic.css"/>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/style/tzjg_list.css"/>
<script type="text/javascript" src="__PUBLIC__/js/function.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/tzjg_list.js"></script>
<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="101204451" charset="utf-8"></script>
<script type="text/javascript">
var paras = {};
QC.api("get_user_info", paras)
	.success(function(s){
	
		var name=s.data.nickname;
		var year=s.data.year;
		var city=s.data.city
		var sex =s.data.gender
		var img=s.data.figureurl_qq_2
		
				$.post('__APP__/Front/Show/do_login',{name:name,year:year,city:city,sex:sex,img:img},function(json){		
					});
					
	})
	.error(function(f){
		//alert("获取用户信息失败！");
	})
	.complete(function(c){
		//alert("获取用户信息完成！");
		
	});
</script>
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG.js?v=20130220"></script>
<script type="text/javascript">
DD_belatedPNG.fix('img,.ie6png');
</script>
<![endif]--> 
<!--<p><img src="http://q.qlogo.cn/qqapp/100330589/EF8919CB3F4C8C339E83777B1AAF1185/100"/></p>-->
</head>
<body>
                    
<script type="text/javascript">
	QC.Login({
		btnId:"qqLoginBtn"	//插入按钮的节点id
	});
</script>
	<script type="text/javascript" src="__PUBLIC__/js/borsertocss.js"> </script><!-- 判断在IE9以下浏览器中根据像素的不同而设置的样式 -->	
    
   
  <!--头部代码开始-->
   
    <div class="navbar navbar-fixed-top" style="_position: relative;_z-index: 10000;">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<div class="nav-collapse">
					<ul class="nav" id="navID">
						<li class=""><a href="__APP__/Front/Index/index.html"><b>首页</b></a></li>
						<li class=""><a href="__APP__/Front/Club/index.html"><b>社团</b></a></li>
						<!--<li class="active"><a href="tzjg_list.html"><b>投资机构</b></a></li>
						<li class=""><a href="xm_write.html"><b>项目发布</b></a></li>--->
					</ul>
				</div><!--/.nav-collapse -->
				<ul class="nav pull-right login-none nav-tips">
		<li class="ie6png divider-vertical" style="_width: 30px;_height: 40px;_background: url(__PUBLIC__/images/icons.png) no-repeat 10px -106px;"><a class="dropdown-toggle clearfix" href="__APP__/Home/Login/" style="padding: 7px 5px;"><img class="logo-before pull-left" src="__PUBLIC__/images/avatar-icon.png" /></a></li>
	</ul>
<div class="popup-div tips-div" style="position: absolute;z-index: 10000001;display: none;"></div>
			

<ul class="nav pull-right pl-20 myul">
  
    <span class="login" id="qqLoginBtn"></span>
	<a></a>
	
</ul>

<style>
#qqLoginBtn {
padding-top: 8px;
float:right;
}
</style>
			</div>
		</div>
	</div>
	
    <div class="top-div">
	<div class="container clearfix">
		
       <div class="span3 logo-div logo-img" >
        <a href="#" title="医疗器械创新网"><img src="__PUBLIC__/images/logo.jpg" width=600px;class="ie6png" style="display: block;"/></a>
       </div>
		
        <div class="span11 pull-right top-ad" style="position: relative;_float: right;_height: 80px;_overflow: hidden;">
		
		<a href="javascript:;" class="pull-left" target="_blank" rel="nofollow">
        <img alt="" src="__PUBLIC__/images/1.jpg" style="width: 100%; display: block;"/></a>
        
         <a href="javascript:;" class="pull-left" style="display:none;" target="_blank">
        <img alt="" src="__PUBLIC__/images/img2.jpg" style="width: 100%; display: block;"/></a>

	 <div class="slides-icon-ad slides-ad-point" style="position: absolute;right:60px;">
				<a href="javascript:void(0);" class="icon-css-on ie6png">&nbsp;</a>
				<a href="javascript:void(0);" class="icon-css ie6png">&nbsp;</a>	 
			</div>
            
		</div>
	</div>
</div>
    
	


<!--头部代码结束-->


	<div class="hr tp-div-nexthr" style="margin-top: 0;margin-bottom: 0;padding: 0;"></div>
	<div class="container pb-15">
	<!-- Example row of columns -->
	<div class="row">
		<div class="span12">
		
		
		
		
		
		<div class="label-div t-20 border-all">
					<div class="l-15">
						<h3 class="label-title border-b b-15 small clearfix" style="padding-bottom: 14px;">
							<a href="javascript:;" title="创新项目" class="pull-left r-10">社团活动</a>
							<span class="pull-left">
									            				<!--<a href="javascript:;" title="分类" class="pull-left">分类</a>
	            					            				<a href="javascript:;" title="分类" class="pull-left">分类</a>
	            					            				<a href="javascript:;" title="分类" class="pull-left">分类</a>
	            					            				<a href="javascript:;" title="分类" class="pull-left">分类</a>
	            					            				<a href="javascript:;" title="分类" class="pull-left">分类</a>
																<a href="javascript:;" title="分类" class="pull-left">分类</a>
	            					            				<a href="javascript:;" title="分类" class="pull-left">分类</a>
	            					            				<a href="javascript:;" title="分类" class="pull-left">分类</a>--->
	            					            				 
	            											</span>
							<!--<a href="/news.html" title="更多" class="more-add ie6png pull-right">&nbsp;</a>-->
						</h3>
					</div>
<div class="label-main">
    <div class="news-slides b-15 l-15">
        <div class="slides-list slides-banner">
		<?php if(is_array($banner)): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="slides-css" style="display:block;">
              <a target="_blank" href="javascript:;" title="标题标题"  rel="bookmark" >
                 <img src="/bbs/Public/Uploads/<?php echo ($vo["picture"]); ?>" height=200px>
              </a>
         </div><?php endforeach; endif; else: echo "" ;endif; ?>
        
            
          
                                                              
     
              <!--轮播图的小按钮-->
              <div class="slides-icon slides-banner-point">
                     <a href="javascript:void(0);" class="icon-css-on ie6png">&nbsp;</a>
                     <a href="javascript:void(0);" class="icon-css ie6png">&nbsp;</a>
                    
                     
             </div>
             <!--轮播图的小按钮结束-->
             
</div>
                                
				
                <!--第一组新闻开始-->				
	<!--<div class="slides-title slides-banner-title" style="display:block">
                    <div class="intro">
                    <h1 class="t-15"><a href="javascript:;" title="标题" rel="bookmark" target="_blank">123456</a></h1>
                    </div>
                    
    
     </div>-->
           <!--第一组新闻结束-->
         
       <!--第二组新闻结束-->                         
	 <!--  <div class="slides-title slides-banner-title" style="display:none;">
               <div class="intro">
                 <h1 class="t-15"><a href="javascript:;" title="标题标题标题标题" rel="bookmark" target="_blank">标题标题标题标题标题标题2222222</a></h1>
                                </div>
    <div class="clearfix t-10 related-news" style="height:45px; overflow:hidden; position:relative;">
       <a class="pr-5 fc333 ie6png" href="javascript:;" rel="bookmark" title="标题" target="_blank">标题标题标题标题标题1</a>
       <a class="pr-5 fc333 ie6png" href="javascript:;" rel="bookmark" title="标题" target="_blank">标题标题标题标题1</a>
      
                         </div>                  
                                                                   
       </div>-->
       <!--第二组新闻结束-->
   
       
       
            
<script type="text/javascript">
$(function(){
	var Interval_control = '';
	var current_index = 0;
	$(".slides-banner .slides-css").hide();
	$(".slides-banner .slides-css:first").show();
	$(".slides-banner-title").hide();
	$(".slides-banner-title:first").show();
   
	show_pic = function(index){
		$(".slides-css").each(function(i){
			$(this).hide();       
			if(i == index)
			{
				$(this).show();       
			}              
		});
	};

	show_content = function(index){
		$(".slides-banner-title").each(function(i){
			$(this).hide();
			if(i == index)
			{
				$(this).show();
			}
		});
	};

	show_point = function(index){
		$(".slides-banner-point a").each(function(i){
			if($(this).hasClass("icon-css-on"))
			{
				$(this).removeClass("icon-css-on");
				$(this).addClass("icon-css");
			}
			if(i == index)
			{
				if($(this).hasClass("icon-css"))
				{
				   
					$(this).removeClass("icon-css");
				}
				$(this).addClass("icon-css-on");
			}
		});
	   
	};
   
	slides = function(){
		$(".slides-icon a").each(function(index){
			$(this).click(function(){
				current_index = index;
				show_point(index);
				show_content(current_index);
				show_pic(current_index);
			});                             
		});
	};
	slides();
   
	Interval_control = setInterval(
			function(){
				show_point(current_index);
				show_content(current_index);
				show_pic(current_index);
			   
				if (current_index == ($(".slides-banner .slides-css a").length - 1))
				{
					current_index = -1;
				}
			   
				current_index ++;
			}
			,
			8000
		);//设置自动切换函数

	//当触发mouseenter事件时，取消正在执行的自动切换方法，触发mouseouter事件时重新设置自动切换
	$(".slides-banner .slides-css,.slides-banner-title").mouseenter(function() {
		clearInterval(Interval_control);//停止自动切换
	}).mouseleave(function() {
		Interval_control = setInterval(
				function(){
					show_point(current_index);
					show_content(current_index);
					show_pic(current_index);
				   
					if (current_index == ($(".slides-banner .slides-css a").length - 1))
					{
						current_index = -1;
					}
				   
					current_index ++;
				}
				,
				8000
			);//设置自动切换函数
	   
	});
});
</script>
        </div>
        
	<!--图文解说开始-->
   
	  
      <!--第一个开始-->
     <!-- <div class="news-list b-30 clearfix">
        <div class="spanm3 pull-left" style="padding-top:7px;">
            <a href="javascript:;" rel="bookmark" title="标题" style="display: block;" target="_blank">
            <img src="images/y.jpg"/>
            </a>
        </div>
		<div class="offsetindex3 intro">
			 <h1><a href="javascript:;" title="标题标题标题" rel="bookmark" target="_blank">标题标题标题标题标题标题标题标题</a></h1>
		     <p class="t-5 fc666" style=" margin-bottom:0px;">标题标题标标题标题标题标题标题标题题标题标题标题标题标题标题题标题标题标题标题标题。</p>
             <div class="myxm"><span><a href="">北京</a></span>  <span class="two"><a href="">项目分类</a></span>   2013/03/02</div>
			<div class="clearfix">
				<a class="follow-btn pr-10 ie6png news-follow-btn" href="javascript:void(0);" title="1人关注	2人分享	3人评论" data-id="104423" data-type="news">6人</a>
							<a class="read-btn ie6png" href="javascript:void(0);" title="370次阅读">370次</a>
			 </div>
		</div>
	</div>-->
												
     <!--第一个结束--> 
     
     
     
    
    

                                             
      
											
<script type="text/javascript">
	/**
	$(".news-follow-btn").bind('mouseover', function(){
		if(!$(this).attr("title"))
		{
			var obj_id = $(this).attr("data-id");
			var obj_type = $(this).attr("type-id");
			//Ajax请求数据
			$(this).attr("title",'2人分享	6人评论	12人关注');
		}
	});**/
	</script>
		</div>
	</div>
		
		
		
		
    
       <!--搜索-->
       
       
	  <!-- <div class="clearfix">
         <images/icons>
				<div class="pull-left classifyDIV pt-10 my1D6597">投资机构 <span><a href="javascript:;">点击此处认证投资人身份</a>，可获得项目更多的信息,享受我们的服务</span></div>
				
                <div class="pull-right t-20 classifySearch" style="position: relative;">
                  <form action="" method="get" style="margin:0px; padding:0px;">
					<input id="search-input" type="text" class="search-input pull-left span4" value=""/>
					<a href="javascript:void(0);" title="搜索" class="search-btn-css pull-left search-btn"></a>
                  </form>
				</div>
		 </div>	--->					
          <!--搜索结束-->  
      <!-- <div class="mmdata"><a href="javascript:;">点击此处认证投资人身份</a>， 可获得项目更多的信息,享受我们的服务</div>-->  
          
    <!--投资机构--> 
    <!-- <div class="mylistshow b-20 t-20" id="mmlistshow2">
  <div class="more"><img id="mmmore" src="__PUBLIC__/images/more_.jpg" alt="hide"/></div>  
  <dl class="mydllist">
  <dd>动漫前沿</dd>     
  <dd class="selected"><span class="ml"></span><span class="mm"><a href="">全部</a></span><span class="mr"></span></dd>
  <dd><span class="ml"></span><span class="mm"><a href="">舰队collection</a><i>15</i></span><span class="mr"></span></dd>
  
  
  </dl>
  <div class="mmclear"></div>       
  </div>-->
     
    <!--投资结构结束-->
          
   <!--关注领域-->       
 <!-- <div class="mylistshow b-20" id="mmlistshow">
  <div class="downjiao"><img src="__PUBLIC__/images/downjiao.jpg"  alt="hide" /></div>  
  <dl class="mydllist">
  <dd>关注领域：</dd>    
  <dd class="selected"><span class="ml"></span><span class="mm"><a href="">全部</a></span><span class="mr"></span></dd>
  <dd><span class="ml"></span><span class="mm"><a href="">舰队collection</a><i>15</i></span><span class="mr"></span></dd>
  
  
  </dl>
       
  <div class="mmclear"></div>       
  </div>-->
 <!--关注领域结束-->        
          <BR>
            
 <!--列表开始-->     
 <script>
 function love($id){
			//alert(1);
					//$tid=$("#tid").val();
					$.post('__APP__/Home/Index/love',{id:$id},function(json){
					
						
					});
					
							//document.getElementById($id).innerHTML="";

							
					//alert($name);
				
					
					
				}
				 function click($id){
			//alert(1);
					//$tid=$("#tid").val();
					$.post('__APP__/Home/Index/click',{id:$id},function(json){
					
						
					});
					
							//document.getElementById($id).innerHTML="";

							
					//alert($name);
				
					
					
				}
 </script>
                         
    <!--第一个-->     
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="label-div b-30 border-all pb-20 pt-5" style="position: relative; padding-left: 0;">
   
      <div class="pl-20" style="margin-left: 1px;margin-top: 3px;">
      	<a class="fc1D6597" title="研究" href="javascript:;"><?php echo ($vo["cname"]); ?></a>
      </div>
      
	  <div class="news-list">
      
	 <div class="clearfix none-768 pl-20" style="position: absolute;top: 0;right: 15px;">																								    
			<a class="tags-box l-10 fc999 pull-left" title="关键字" href="javascript:;"><?php echo ($vo["keywords"]); ?></a>
	 </div>

	<div class="clearfix pt-3">
		  <div class="index-news-img spanm3 pull-left pt-5">
						<a href="javascript:;" title="标题标题标题" target="_blank" rel="bookmark">
                        <img class="lazyloadimg"  alt="标题标题标题标题标题标题" src="/bbs/Public/Uploads/<?php echo ($vo["picture"]); ?>"/></a>
		 </div>
  	<div class="offset3 intro">
		<h1>
        <a title="标题标题标题标题" target="_blank" href="javascript:;"><?php echo ($vo["title"]); ?></a>
        </h1>
	  
      <div class="clearfix" style="height: 22px;margin-top: 0px;">
			<div class="pull-left myxx">	
           
            
            <i class="m"><a href="javascript:;" target="_blank">上传时间</a></i>   
            <i class="m">[ <?php echo ($vo["logintime"]); ?> ]</i>
			
        </div>
		
	
		
            
          <div class="pull-right">
			<a class="follow-btn pr-10 ie6png" href="" id="<?php echo ($vo["id"]); ?>" onclick="love(<?php echo ($vo["id"]); ?>);" title="0人关注	0人分享	3人评论" data-id="104417" data-type="news"><?php echo ($vo["click"]); ?></a>
			<a class="read-btn ie6png" href=""  onclick="click(<?php echo ($vo["id"]); ?>)"title="277次阅读"></a>
		 </div>
	</div>
	<p class="t-1"><?php echo ($vo["text"]); ?></p>
    
         <div class="clearfix">
        <a href="__APP__/Front/Shownews/index/id/<?php echo ($vo["id"]); ?>" title="阅读全文" target="_blank" rel="bookmark" class="read-all pull-left">阅读全文</a></div>
         </div>
    </div>
  </div>
</div><?php endforeach; endif; else: echo "" ;endif; ?>
    <!--第一个结束-->      
    
     



 <tr>        
 </tr>
 </table>
 

    
  <!--列表结束-->         
            
 <div class="result page">
<div class="pagination center pagination-large pt-20">
<ul id="yw1" class="yiiPager">

<li class="page"><a href=""><?php echo ($page); ?></a></li>


</ul>		    </div>
</div>
		
		</div>
        
      
      <!--右侧代码-->  
       <div class="span4">
			
        
            
           <div class="label-div t-20 border-all">
		<div class="l-15"><h3 style="padding-bottom: 14px;" class="label-title border-b b-20 small clearfix">关注我们</h3></div>
				<div class="l-15 home-other clearfix">
					<a target="_blank" class="home-sina" title="新浪微博" href="http://weibo.com/3642854252/"><img style="width: 20%;max-width: 36px;display: inline-block;" src="__PUBLIC__/images/sina.png" alt="新浪微博"></a>
					<a target="_blank" class="home-qq" title="腾讯微博" href="http://t.qq.com/shengwu___tansuo"><img style="width: 20%;max-width: 36px;display: inline-block;" src="__PUBLIC__/images/qq.png" alt="腾讯微博"></a>
					<a target="_blank" class="home-renren" title="人人网" href="http://www.renren.com/600991382"><img style="width: 20%;max-width: 36px;display: inline-block;" src="__PUBLIC__/images/rr.png" alt="人人网"></a>
				  <a style="margin-right: 0;" target="_blank" class="home-linkin" title="LinkedIn" href="http://cn.linkedin.com/pub/bio-discover/38/4b6/a27"><img style="width: 20%;max-width: 36px;display: inline-block;" src="__PUBLIC__/images/in.png" alt="LinkedIn"></a>
				</div>
				<!--<div class="l-15 t-20"><img src="images/mm.png"></div>--->
				<p style="margin-bottom: 0;" class="l-15 t-5 fc999">扫描微信，随时获得最新资讯</p>
			</div>
            
            
            
             <div class="label-div t-20 border-all">
				<div class="l-15">
               		 <h3 class="label-title border-b b-15 small clearfix" style="padding-bottom: 14px;">通知公告</h3>
                </div>
				<div class="label-main tody-hot l-15" >
					<ul>
					  <li><a href="" >标题标题标题标题标题标题题</a></li>
                      <li><a href="" >标题标题标题标题标题标题题</a></li>
                 
					</ul>
				</div>
			</div>
            
            
            
             <div class="label-div t-20 border-all">
				<div class="l-15">
               		 <h3 class="label-title border-b b-15 small clearfix" style="padding-bottom: 14px;">最多评论</h3>
                </div>
				<div class="label-main tody-hot l-15" >
					<ul>
					  <li><a href="" >标题标题标题标题标题标题题</a></li>
                      <li><a href="" >标题标题标题标题标题标题题</a></li>
                  
					</ul>
				</div>
			</div>
            
          
             
            
	 
            
		</div>
	</div>
</div>

<!--右侧代码结束-->


<!-- /container -->

  <div class="container">
 
 	<div class="hr"></div>
    
    </div>
  
<!-- /container -->

</div>
    
 
<div class="footer">
		 
			<!--<p class="fc999 b-5 footer-info">致力于前沿生物科技和成功商业模式的传播</p>-->
			<div class="clearfix" style="background:#EDEDED;">
				
                <!--<p class="fc999 pull-left footer-info">Copyright © 2013 生物探索网站<span class="l-20">苏ICP备11025281号</span></p>-->
				
                <ul class="about-ul">
				
				
					<li><a title="广告投放" href="javascript:;" class="fc666" target="_blank">广告投放</a></li>
					<li><span>|</span></li>
					<li><a title="广告投放" href="javascript:;" class="fc666" target="_blank">广告投放</a></li>
					<li><span>|</span></li>
					<li><a title="广告投放" href="javascript:;" class="fc666" target="_blank">广告投放</a></li>
					<li><span>|</span></li>
					
					<li><a title="企业服务" href="javascript:;" class="fc666" target="_blank">企业服务</a></li>
					<li><span>|</span></li>
					<li><a title="公司博客" href="javascript:;" class="fc666" target="_blank" >公司博客</a></li>
					<li><span>|</span></li>
					<li><a title="加入我们" href="javascript:;" class="fc666" target="_blank">加入我们</a></li>
					<li><span>|</span></li>
					<li><a title="服务协议" href="javascript:;" class="fc666" target="_blank">服务协议</a></li>
					<li><span>|</span></li>
                     <li id="zk_btn" class="ie6png down-class">
                   	 <a title="友情链接" href="javascript:void(0);" class="fc666">友情链接</a>
                    </li>
				    <div class="clear"></div>
				</ul>
			</div>
    
    <div class="friend-link border-all t-20 b-20">
	<center>
		<ul class="clearfix">
		
		<li><a title="企业服务" href="javascript:;" class="fc666" target="_blank">哈尔滨理工大学荣成校区</a></li>
			<li><span>|</span></li>
		<li><a title="企业服务" href="javascript:;" class="fc666" target="_blank">哈尔滨理工大学</a></li>
		
	</ul>
	</center>
</div>
  <script type="text/javascript">
	$(document).ready(function(){
		var flag = 0;
		$(".friend-link").hide();
		//Down
		$("#zk_btn").click(function(){
			if(flag == 0){
				$(".friend-link").slideDown(400); 
				$(this).removeClass('down-class');
				$(this).addClass('up-class');
				$("html,body").animate({scrollTop:($(".friend-link").offset().top+2000)},600);
				flag = 1;
			}else{
				$(".friend-link").slideUp(400);  
				$(this).removeClass('up-class');
				$(this).addClass('down-class'); 
				flag = 0;
			}
		});
	});
</script>
<p>Copyright ©2015　备888888888号 哈尔滨理工大学(荣成校区)</p>

    
		</div> 

 


<script type="text/javascript">
//回到顶部
backToTop('body');
</script>
</body>
</html>