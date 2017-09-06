<?php
// echo 111;

Class BlogRelationModel extends RelationModel {

	Protected $tableName = 'blog';

	Protected $_link = array( //用于定义关联哪些表的数组
		'attr' => array(
			'mapping_type' => MANY_TO_MANY, //定义博客表和属性表是什么对应关系 多对多
			'mapping_name' => 'attr',//指定要关联的模型的名称
			'foreign_key' => 'bid', //外键；attr和blog的关连键（看中间表hd_blog_attr中哪个id是属于blog外表的；）
			'relation_foreign_key' => 'aid',//指中间表里边哪个外键是用来保存关联内表attr的id的
			'relation_table' => 'hd_blog_attr',
			),
		'cate' => array(
			// 'mapping_type' => HAS_MANY // 一对多的关联关系
			
			//因为我们把blog博文表当作主表来关联附表cate分类表，所以表的对应关系要改成多对一
			'mapping_type' => BELONGS_TO, // BLONGS_TO和HAS_MAMY是反过来的关系，是多对一的关系；用多的一边关联一的一边；
			// HAS_ONE:一对一的关联关系
			'foreign_key' => 'cid',
			'mapping_fields' => 'name', //cate数组中只显示name字段

			// 'as_fields' => 'name' //将cate数组中的name拿出来作为大数组中一部分

			// 防止大数组中name字段重名，可以在name后加上:cate
			'as_fields' => 'name:cate'
			)

		);

	Public function getBlogs ($type = 0) {
		$field = array('del');
		$where = array('del' => $type);
		return $this->field($field, true)->where($where)->relation(true)->select();
	}


}











?>