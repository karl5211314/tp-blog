<?php
/**
 * 首页
 */
Class IndexAction extends Action {

	Public function index () {
		if (!$list = S('index_list')) {
			echo 111111;
			// 取出所有顶级分类的id
			$list = M('cate')->where(array('pid' => 0))->order('sort')->select();
			// 取出每一个顶级分类下的所有子分类
			import('Class.Category', APP_PATH);
			// 先取出整个分类$cate
			$cate = M('cate')->order('sort')->select();
			$db = M('blog');
			$field = array('id', 'title', 'time');
			foreach ($list as $k => $v) {
				$cids = Category::getChildsId($cate, $v['id']);
				$cids[] = $v['id'];
				// 打印出按顶级分类排序、包含顶级分类id和子分类id、的二维数组
				// p($cids);
				$where = array('cid' => array('IN', $cids));
				// 组合出以各顶级分类和其子分类blog内容为数组单元的数组来
				$list[$k]['blog'] = $db->field($field)->where($where)->order('time DESC')->select();
				// $topCate[$k]['blog'] = M('blog')->field(array('id', 'title', 'time'))->where(array('cid' => array('IN', $cids)))->select();
			}
			S('index_list', $list, 10); // 生成缓存文件函数
		}	
		
		$this->cate = $list;
		$this->display();
	}
}
?>