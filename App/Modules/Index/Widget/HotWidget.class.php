<?php

Class HotWidget extends Widget {

	Public function render ($data) {
		// 将热门博文从数据库按条件读取出来分配到模版上面
		$field = array('id', 'title', 'click');
		// $blog = M('blog')->field($field)->order('click DESC')->limit(5)->select();
		// p($blog);

		// 把读出来的$blog数组循环到热门博文中
		$data['blog'] = M('blog')->field($field)->order('click DESC')->limit(5)->select();

		return $this->renderFile('', $data);


		}





}







?>