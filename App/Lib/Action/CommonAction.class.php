<?php

Class CommonAction extends Action {

	Public function _initialize () {
		// 如果输入的用户id不存在，就跳转到登录页面
		if (!isset($_SESSION['uid'])) {
			$this->redirect(GROUP_NAME . '/Login/index');
		}



	}





}





?>