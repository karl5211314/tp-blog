<?php
/**
 * 后台登录控制器
 */
	Class LoginAction extends Action {
	
	// 登录页面视图
		Public function index () {
			$this->display();
		}

		//登录表单操作
		Public function login () {
			// p($_POST);
			if (!IS_POST) halt('页面不存在');

			if (I('code', '', 'strtolower') != session('verify')) $this->error('验证码错误');
		
			$db = M('user');
			$user = $db->where(array('username' => I('username')))->find();
			// p($user);
			if(!$user || $user['password'] != I('password', '', 'md5')) {
				$this->error('账号或密码错误');
			}
			// 到这里 说明验证已经通过

			// 更新最后一次登录时间与IP
			$data = array(
				'id' => $user['id'],
				'logintime' => time(),
				'loginip' => get_client_ip()
				);
			$db->save($data);

			session('uid', $user['id']);
			session('username', $user['username']);
			session('logintime', date('Y-m-d H:i:s', $user['logintime']));
			session('loginip', $user['loginip']);

			// p($_SESSION);
			redirect(__GROUP__);
		}



		Public function verify() {
			// 通过TP的import函数引入个人类库
			import('class.Image', APP_PATH);
			// Image::buildImageVerify();
			Image::verify();
		}

	}








?>