<?php
	require ('../smarty/Smarty.class.php');
	$smarty=new Smarty();
	//Smarty的自编口诀“五配置两方法”
	//五配置的介绍
	$smarty->left_delimiter="{"; //左定界符
	$smarty->right_delimiter="}"; //右定界符
	$smarty->setTemplateDir("tql"); //html模板的地址
	$smarty->setCompileDir("template_c"); //模板编译生成的文件
	$smarty->setCacheDir("cache"); //缓存
	//以下是开启缓存的另两个配置。因为通常不用smarty的缓存机制，所以此项为了解。
	$smarty->caching=true; //开启缓存
	$smarty->cache_lifetime=120;//缓存时间

// 	$smarty->assign('articletitle','');
// 	$arr=array('articlecontent'=>array('title'=>'smarty的学习','author'=>'小明'));
// 	$articlelist=array(
// 			array(
// 					"title"=>"第一篇文章",
// 					"author"=>"小王",
// 					"content"=>"第一篇文章该写点啥呢"
// 			),
// 			array(
// 					"title"=>"第二篇文章",
// 					"author"=>"小李",
// 					"content"=>"又写了一篇不知所云的文章"
// 			)
// 	);
// 	class My_objet {
// 		function methl($params){
// 			return $params[0].'已经'.$params[1];
// 		}
// 	}
// 	$myobj=new My_objet();
// 	$smarty->assign('myobj',$myobj);
	//$articlelist=array();
	//$smarty->assign('articlelist',$articlelist);
// 	$smarty->assign('str','abcdefg');
// 	function test($params){
// 		$p1=$params['p1'];
// 		$p2=$params['p2'];
// 		return '传入的参数1值为'.$p1.'，传入的参数2值为.'.$p2;
// 	}
// 	$smarty->registerPlugin('function', 'f_test', 'test');

	$smarty->assign('str','Hello，my name is fujingchang。How are you?');
	$smarty->display('content.tpl');

?>






