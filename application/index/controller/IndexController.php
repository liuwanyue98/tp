<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\ba;


class IndexController extends Controller
{
	public function index()
	{
		$data = ba::all();
		$this->assign('result', $data);
		return $this->fetch();
	}
	
}
