<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/JavaScript" src='__PUBLIC__/Js/jquery-1.7.2.min.js'></script>
	<script type="text/JavaScript" src='__PUBLIC__/Js/common.js'></script>
	<link rel="stylesheet" href="__PUBLIC__/Css/index.css" />

</head>
<body>
<!--头部-->
	<div class='top-list-wrap'>
		<div class='top-list'>
			<ul class='l-list'>
				<li><a href="http://www.houdunwang.com" target='_blank'>后盾网</a></li>
				<li><a href="http://bbs.houdunwang.com" target='_blank'>后盾网论坛</a></li>
				<li><a href="http://study.houdunwang.com" target='_blank'>后盾学习社区</a></li>
			</ul>
			<ul class='r-list'>
				<li><a href="http://www.hdphp.com" target='_blank'>HDPHP框架</a></li>
				<li><a href="http://bbs.houdunwang.com" target='_blank'>免费视频教程</a></li>
			</ul>
		</div>
	</div>


	<div class='top-search-wrap'>
		<div class='top-search'>
			<a href="http://bbs.houdunwang.com" target='_blank' class='logo'>
				<img src="__PUBLIC__/Images/logo.png"/>
			</a>
			<div class='search-wrap'>
				<form action="" method='get'>
					<input type="text" name='keyword' class='search-content'/>
					<input type="submit" name='search' value='搜索'/>
				</form>
			</div>
		</div>
	</div>


	<div class='top-nav-wrap'>
		<ul class='nav-lv1'>
			<li class='nav-lv1-li'>
				<a href="" class='top-cate'>博客首页</a>
			</li>

			<?php
 $cate = M('cate')->order("sort")->limit(30)->select(); import('Class.Category', APP_PATH); $cate = Category::unlimitedForLayer($cate); foreach ($cate as $v) : endforeach;?>

				<li class='nav-lv1-li'>
					<a href="" class='top-cate'>PHP</a>
						<ul>		
								<li><a href="">ajax</a></li>
							
						</ul>
					
				</li>
			
		</ul>
	</div>
<!--主体-->
	<div class='main'>
		<div class='main-left'>
			<p>后盾博文</p>
			<dl>
				<dt>PHP<a href="">更多>></a></dt>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
			</dl>
			<dl>
				<dt>PHP<a href="">更多>></a></dt>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
			</dl>
			<dl>
				<dt>PHP<a href="">更多>></a></dt>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
			</dl>
			<dl>
				<dt>PHP<a href="">更多>></a></dt>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
			</dl>
			<dl>
				<dt>PHP<a href="">更多>></a></dt>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
			</dl>
			<dl>
				<dt>PHP<a href="">更多>></a></dt>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
			</dl>
			<dl>
				<dt>PHP<a href="">更多>></a></dt>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
			</dl>
		</div>
		<!--主体右侧-->
	<!--主体右侧-->
		<div class='main-right'>
			<dl>
				<dt>热门博文</dt>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>

				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>
			</dl>

			<dl>
				<dt>最发布发</dt>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>

				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>
			</dl>

			<dl>
				<dt>友情连接</dt>
				<dd>
					<a href="">后盾网</a>
				</dd>

				<dd>
					<a href="">后盾网论坛</a>
				</dd>
				<dd>
					<a href="">后盾网学习社区</a>
				</dd>
			</dl>
		</div>
	</div>
<!--底部-->
<!--底部-->
	<div class='bottom'>
		<div></div>
	</div>
</body>
</html>