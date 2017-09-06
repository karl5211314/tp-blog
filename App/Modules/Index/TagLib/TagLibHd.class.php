<?php

import('TagLib');
/**
 * 自定义标签库
 */

Class TagLibHd extends TagLib {
	/**
	 * $tags数组用于定义自定义标签的属性
	 * $tags数组里的第一个键是键名：要定义的标签的名称；
	 * attr是定义第一个键有哪些属性，
	 * close是定义自定义标签是闭合标签（1）、还是非闭合标签（0）,不写默认是闭合标签
	 */
	Protected $tags = array(
		'nav' => array('attr' => 'limit,order', 'close' => 1),
		'hot' => array('attr' => 'limit', 'close' => 1)
		);
	/**
	 * 定义好自定义标签的属性后就可以定义该标签如何使用了
	 * 自定义的标签名是nav，定义该标签的使用方法时，该方法的方法名必须是下划线+标签名 即_nav
	 * 该方法接受两个参数$attr、$content;attr是传递进来的属性，
	 * content是提供给闭合标签使用的，用于接受块标签里面的内容；
	 */
	Public function _nav ($attr, $content) {
		$attr = $this->parseXmlAttr($attr);
		// p($attr); //打印出来一个数组 array{[limit] => 15, [order] => sort}
		// $limit = $attr['limit'];
		// echo $limit; //打印出数组值 15
		// echo $content; //打印出标签里面的内容 你好 hello

		// 至此，知道自定义标签里面的属性$attr,内容$content后;定义成定界符、定界符前面不能有空格

		// 读取数据库 $cate = M('cate')
		$str = <<<str
<?php
	\$_nav_cate = M('cate')->order("{$attr['order']}")->limit({$attr['limit']})->select();
	import('Class.Category', APP_PATH);
	\$_nav_cate = Category::unlimitedForLayer(\$_nav_cate);
	foreach (\$_nav_cate as \$_nav_cate_v) :
		extract(\$_nav_cate_v);
		\$url = U('/c_' . \$id);
?>
str;
		$str .= $content;
		// foreach在上面开始了，在这里连等于结束掉
		$str .= '<?php endforeach;?>';
		return $str;

		}

		Public function _hot ($attr, $content) {
			$attr = $this->parseXmlAttr($attr);
			$limit = $attr['limit'];
			// php组合字符串
			$str = '<?php ';
			$str .= '$field = array("id", "title", "click");';
			$str .= '$_hot_blog = M("blog")->field($field)->limit(' . $limit . ')->order("click DESC")->select();';
			$str .= 'foreach ($_hot_blog as $_hot_value):';
			$str .= 'extract($_hot_value);';
			$str .= '$url = U("/" . $id);?>';
			$str .= $content;
			$str .= '<?php endforeach;?>';
			return $str;


		}



}