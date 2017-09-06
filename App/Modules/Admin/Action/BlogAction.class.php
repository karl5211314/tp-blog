<?php

Class BlogAction extends CommonAction {

	// 博文列表
	Public function index () {
		$this->blog =  D('BlogRelation')->getBlogs();
		$this->display();
	}

	// 删除到回收站/还原
	Public function toTrach () {
		$type = (int) $_GET['type'];
		$msg = $type ? '删除' : '还原';
		$update = array(
			'id' => (int) $_GET['id'],
			'del' => $type
			);
		//方法二 M('blog')->where(array('id' => (int) $_GET['id']))->save($update);
	//方法三 M('blog')->where(array('id' => (int) $_GET['id']))->setField('del', 1);
		
		if (M('blog')->save($update)) {
			$this->success($msg . '成功', U(GROUP_NAME . '/Blog/index'));
		} else {
			$this->error($msg . '失败');
		}
	}

	// 回收站
	Public function trach () {
		// D('BlogRelation')相当于new BlogRelationModel()这个类；new后返回的是当前对象的引用地址,引用地址可以relation(true);当前对象的引用地址放到其它类里面就又变成了$this;
		// D('BlogRelation');
		// $db = new BlogRelationModel();
		// $db->relation(true);
		$this->blog = D('BlogRelation')->getBlogs(1);
		// 回收站与博文列表使用同一模板
		$this->display('index');
		
	}

	// 彻底删除
	Public function delete() {
		$id = (int) $_GET['id'];
		/*
		TP的多对多关联模型删除数据，3.1.3还是有问题，不能用
		D('BlogRelation')->relation('attr')->delete($id);
*/
		if (M('blog')->delete($id)) {
			M('blog_attr')->where(array('bid' => $id))->delete();
			$this->success('删除成功', U(GROUP_NAME . '/Blog/trach'));
		} else {
			$this->error('删除失败');
		}
	}

	// 添加博文视图
	Public function blog () {
		/* 所属分类 */
		import('Class.Category', APP_PATH);
		// 把'所属分类'实例化成模型，把模型中数据按sort字段排序，然后查出来
		$cate = M('cate')->order('sort')->select();
		// 用递归方法组合所属分类、并分配给视图显示($this->)
		$this->cate = Category::unlimitedForLevel($cate);

		/* 博文属性 */
		$this->attr = M('attr')->select();
		p($attr);

		$this->display();
	}
	// 添加博文表单处理
	Public function addBlog () {
		// D('BlogRelation'); // 查看外层Lib中的Model是否是公用的，如果输出111，则说明BlogRelation这个类被载入进来了
		$data = array(
			'title' => $_POST['title'],
			'content' => $_POST['content'],
			'summary' =>$_POST['summary'],
			'time' => time(),
			'click' => (int) $_POST['click'],
			'cid' => (int) $_POST['cid']
			);

/*
	TP多对多模型插入失败，有漏洞、不可用
		if (isset($_POST['aid'])) { // 假如走到这里，说明博文有选中属性
			$data['attr'] = array(); //本行代码可以不写，
			foreach ($_POST['aid'] as $v) {
				$data['attr'][] = $v;
			}
		}
		// p($data); //打印出组合的数据
		D('BlogRelation')->relation(true)->add($data);
*/

		if($bid = M('blog')->add($data)) {
			if(isset($_POST['aid'])) {
				$sql = 'INSERT INTO `' . C('DB_PREFIX') . 'blog_attr` (bid, aid) VALUES';
				foreach($_POST['aid'] as $v) {
					$sql .= '(' . $bid . ',' . $v . '),';
				}
				$sql = rtrim($sql, ',');
				M('blog_attr')->query($sql); // 发送出组合好的sql语句；
			}
			$this->success('添加成功', U(GROUP_NAME . '/Blog/index'));
		} else {
			$this->error('添加失败');
		}

		// $this->display(); //查看发生的sql就要显示一个模板；
	}	
}







?>