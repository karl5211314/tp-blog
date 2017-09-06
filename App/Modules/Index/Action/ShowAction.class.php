<?php



Class ShowAction extends Action {

	Public function index () {
		$id = (int) $_GET['id'];

		// M('blog')->where(array('id' => $id))->setInc('click'); // 点击数自增

		// $blog = M('blog')->field(array('title', 'time', 'click', 'content'))->where(array('id' => $id))->find();
		$where = array('id' => $id);
		$field = array('id', 'title', 'time', 'content', 'cid');
		// $blog = M('blog')->field($field)->where($where)->find();
		// $blog = M('blog')->field($field)->find($where);
		$this->blog = M('blog')->field($field)->find($id);
		$cid = $this->blog['cid'];
		import('Class.Category', APP_PATH);
 
		$cate = M('cate')->order('sort')->select();
		$this->parent = Category::getParents($cate, $cid);
		// M('blog')->where(array('id' => $id))->setInc('click'); 放到上面去是为了，让博文展示中点击数和右边热门博文的点击数一致。
		$this->display(); 
	}
 
	Public function clickNum() {
		$id = (int) $_GET['id'];
		$where = array('id' => $id);
		$click = M('blog')->where($where)->getField('click');
		M('blog')->where($where)->setInc('click'); // 点击数自增
		echo 'document.write(' . $click . ')';
	}

}




?>