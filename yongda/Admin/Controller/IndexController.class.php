<?php
namespace Admin\Controller;
//use Think\Controller;
use Tool\AdminController;

//后台‘品’字frameset控制器
class IndexController extends AdminController{
	function head(){
		$this->display();
	}
	function left(){
		//根据用户的角色显示对应的权限
		//根据用户的sessionid信息获得其角色id
		$manager_info=D('Manager')->find(session('admin_id'));
		//var_dump($manager_info);
		$role_id=$manager_info['mg_role_id'];
		//根据$role_id获得其权限的ids
		$role_info=D('Role')->find($role_id);
		//var_dump($role_info);
		$auth_ids=$role_info['role_auth_ids'];
		//根据$auth_ids获得权限的详情
		//开放admin绝对权限
		if(session('admin_user')==='admin'){
			$auth_infoA=D('Auth')->where("auth_level=0")->select();
			$auth_infoB=D('Auth')->where("auth_level=1")->select();
		}else{
		$auth_infoA=D('Auth')->where("auth_level=0 and auth_id in ($auth_ids)")->select();
		$auth_infoB=D('Auth')->where("auth_level=1 and auth_id in ($auth_ids)")->select();
		}
		//var_dump($auth_info);
		$this->assign('auth_infoA',$auth_infoA);
		$this->assign('auth_infoB',$auth_infoB);
		$this->display();
	}
	function right(){
		$this->display();
	}
	function index(){
		$this->display();
	}
}
