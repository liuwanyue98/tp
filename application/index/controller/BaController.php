<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\index\model\ba;
use app\index\model\tiezi;




class baController extends Controller
{
	public function index()
	{
		// $data = Course::all();
		$data = ba::paginate(3);
		$this->assign('result', $data);
		return $this->fetch();
	}
	public function addba()
	{
		$all = ba::all();
		$this->assign('all',$all);
		return $this->fetch();
	}
	public function addb(Request $request)
	{
		$ba= new ba;
		$ba->batitle = $request->post('batitle');
		
		if ($ba->save()) {
			return '吧[ ' . $ba ->batitle. ':' . $ba->baid . ' ]新增成功';
		} else {
			return $ba->getError();
		}
	}
	
// 	public function editba($baid)
// 	{
// 		$single = ba::get($baid);
// 		$all = ba::all();
// 		$this->assign('single', $single);
// 		$this->assign('all',$all);
// 		return $this->fetch();
// 	}
// 	public function editb(Request $request,$baid)
// 	{
// 		$ba = ba::get($baid);
// 		$ba->batitle =$request->post('batitle');
// 		$ba->save();
// 		return '更新吧成功';
// 	}
}