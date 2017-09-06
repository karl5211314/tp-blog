<?php


	Class SystemAction extends CommonAction {
		Public function verify () {

			$this->display();

		}
		Public function updateVerify () {
			// echo APP_PATH; 			  // ./App/
			// echo APP_PATH . '/Conf/';  // ./App//Conf/
			// echo CONF_PATH;            // ./App/Conf/

			// F方法将数据写入文件
			if (F('verify', $_POST, CONF_PATH)) {
				$this->success('修改成功', U(GROUP_NAME . '/System/verify'));
			} else {
				$this->error('修改失败，请修改' . CONF_PATH . 'verify.php权限');
			}
		}

	}






?>