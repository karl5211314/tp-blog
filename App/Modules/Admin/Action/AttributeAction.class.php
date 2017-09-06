<?php

Class AttributeAction extends CommonAction {

	// 属性列表
	Public function index(){
		/*
		// 读取attr数据库表中的所有数据、再赋给$attr
		$attr = M('attr')->select();
*/
		// 读取attr数据库表中的所有数据、再赋给$attr，并分配出去
		$this->attr = M('attr')->select();
		$this->display();
	}
	// 添加属性视图
	Public function addAttr () {
		$this->display();



	}
	// 添加属性表单处理
	Public function runAddAttr () {
		// 实例化一个普通模型、然后插入数据
		if(M('attr')->add($_POST)) {
			$this->success('添加成功', U(GROUP_NAME . '/Attribute/index'));
		} else {
			$this->error('添加失败');
		}

	}

}








?>