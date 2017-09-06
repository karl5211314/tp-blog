<?php

Class CategoryAction extends CommonAction {
	// 分类列表视图
	Public function index () {
	// 引入递归类
		import('Class.Category', APP_PATH);
		$cate = M('cate')->order('sort ASC')->select();

		// 一、递归做无限级分类
		// $this->cate = Category::unlimitedForLevel($cate, '&nbsp;&nbsp;--');
		$cate = Category::unlimitedForLevel($cate, '&nbsp;&nbsp;└--');

		// 二、递归组合多维数组
		// $cate = Category::unlimitedforLayer($cate, 'cate');

		/* 三、传递一个子级分类的id，返回所有的顶级 */
		// $cate = Category::getParents($cate,12);

		/* 四、传递一个父级分类ID返回所有子分类ID */
		// $cate = Category::getChildsId($cate, 4);

		/* 五、传递一个父级分类ID返回所有子分类组成的数组 */
		// $cate = Category::getChilds($cate, 4);
		p($cate);
	
		// $this->cate = $cate;
		// $this->assign('cate', $cate)->display();

		/* 显示视图 */
		// $this->display();
	}
	// 添加分类视图
	Public function addCate () {



		// $pid = isset($_GET['pid']) ? $_GET['pid'] : 0; //此行等价于下面的I方法
		$this->pid = I('pid', 0, 'intval');
		// 第一参数pid：自动到$_GET里面取pid，
		// 第二个参数0：pid有值就取pid的值，如果没有，就取0，
		// 第三个参数intval：使用intval函数将值转为整形
		$this->display();
	}
	// 添加分类表单处理
	Public function runAddCate () {
		if(M('cate')->add($_POST)) {
			$this->success('添加成功', U(GROUP_NAME . '/Category/index'));
		} else {
			$this->error('添加失败');
		}
	}

		// 排序
	Public function sortCate () {
			// p($_POST);
		$db = M('cate');
		foreach ($_POST as $id => $sort) {
			$db->where(array('id' => $id))->setField('sort', $sort);
		}
		// 排序后跳转到index
		$this->redirect(GROUP_NAME . '/Category/index');

		}




}



?>