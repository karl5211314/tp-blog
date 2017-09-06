<?php

Class Category {
	/**
	 * 一、用递归做无限级分类 组合一维数组
	 * $cate:待处理数组
	 * $pid
	 * $level:等级
	 * $html:层级符号
	 */
	Static Public function unlimitedForLevel ($cate, $html = '--', $pid = 0, $level = 0) {
		$arr = array();
		foreach ($cate as $v) {
			if ($v['pid'] == $pid) {
						$v['level'] = $level + 1;
						$v['html'] = str_repeat($html, $level); // 打印出$level个$html;
						$arr[] = $v; // 把$v压到$arr这个数组里
						$arr = array_merge($arr, self::unlimitedForLevel($cate, $html, $v['id'], $level + 1));
			// 递归的还是这个数组$cate、填充的字符串还是$html，但是pid变成了当前$v的id号，同时level级 + 1；

			}	
		}
		// 最后一层一层的返回，返回$arr
		return $arr;
	}

	// 二、用递归组合多维数组 组合多维数组
	Static Public function unlimitedForLayer ($cate, $name = 'child', $pid = 0) {
		$arr = array();
		foreach ($cate as $v) {
			if ($v['pid'] == $pid) {
				$v[$name] = self::unlimitedForLayer($cate, $name, $v['id']);
				$arr[] = $v;
			}
		}
		return $arr;

	}

	/* 三、传递一个子级分类的id返回所有的父级分类 */
	Static Public function getParents($cate, $id) {
		$arr = array();
		foreach($cate as $v) {
			if($v['id'] == $id){
				$arr[] = $v;
				// $arr = array_merge($arr, self::getParents($cate, $v['pid']));
				$arr = array_merge(self::getParents($cate, $v['pid']), $arr);
			}

		}
	/*
		此方法找到的元素先是子级，然后是顶级，所以需要逆序
		PHP >> 字符串 >> 字符串处理函数 >> substr()
		foreach ($cate as $v) {
			$v['name'] '>>'
		}
		只需将递归调用array_merge中的两个元素调换一下位置：
		$arr = array_merge(self::getParents($cate, $v['pid']), $arr);

	*/
		return $arr;

	}


//	举例（商城中的分类层级表）
//	服装                                   家用电器
//	男装                      女装
//	T恤  西装                 衬衫    裙子
//	abc(假设是一个T恤服装品牌)

	// 四、传递一个父级分类ID返回所有子分类ID
	// $pid:父级ID
	Static Public function getChildsId($cate, $pid) {
		$arr = array();
		foreach($cate as $v) {
			if($v['pid'] == $pid){
				$arr[] = $v['id'];
				$arr = array_merge($arr,self::getChildsID($cate, $v['id']));

			}
		}
		return $arr;
	}

		/* 五、传递一个父级分类ID返回所有子分类组成的数组 */
	Static Public function getChilds($cate, $pid){
		$arr = array();
		foreach($cate as $v){
			if($v['pid'] == $pid){
				$arr[] = $v;
				$arr = array_merge($arr,self::getChilds($cate, $v['id']));
			}
		}
		return $arr;
	}





}

?>