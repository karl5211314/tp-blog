<?php

return array(
	//应用自动载入路径;
	// @符代表当前应用项目、代表当前Index项目;
	// @.TagLib:自动载入TagLib文件夹下的文件;
	'APP_AUTOLOAD_PATH' => '@.TagLib',
	// 传入自己标签库的名称，并在前面加上Cx;
	// Cx代表TP的核心标签库（如<foreach>、<if><else/>、<switch>标签等等）,TP里面的核心标签都是Cx核心库里面有的，如果不加Cx这些标签就用不了；
	'TAGLIB_BUILD_IN' => 'Cx,Hd',

	// 开启静态缓存
	'HTML_CACHE_ON' => true,
	'HTML_CACHE_RULES' =>array(
		'Show:index' => array('{:module}_{:action}_{id}', 0)
		)
	);