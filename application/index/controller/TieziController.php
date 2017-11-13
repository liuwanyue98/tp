<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use app\index\model\tiezi;
use app\index\model\ba;
use app\index\model\User;



class TieziController extends Controller
{
	
	public function index($id)
	{
		// $data = Classes::all();
		$data = Tiezi::paginate(3);
		$data = Tiezi::where('baid',$id)
			->select();

		$this->assign('result', $data);
		return $this->fetch();
	}

	public function tiez($id)
	{
		// $data = Classes::all();
		$data = Tiezi::paginate(3);
		$data = Tiezi::where('baid',$id)
			->select();

		$this->assign('data', $data);
		return $this->fetch();
	}
	// public function tz($id)
	// {
	// 	// $data = Classes::all();
	// 	$data = Tiezi::paginate(3);
	// 	$data = Tiezi::where('baid',$id)
	// 		->select();

	// 	$this->assign('result', $data);
	// 	return $this->fetch();
	// }

	public function addtiezi()
	{
		$all = ba::all();
		$this->assign('all',$all);
		return $this->fetch();
	}
	
	public function addt(Request $request)
	{
		$tiezi = new tiezi;
		$tiezi->tietitle = $request->post('tietitle');
		// $tiezi->ptie = $request->post('ptie');
		// $tiezi->quotetie = $request->post('quotetie');
		$tiezi->tiedate = $request->post('tiedate');
		$tiezi->tieconcent = $request->post('tieconcent');
		$tiezi->baid = $request->post('baid');
		if ($tiezi->save()) {
			echo '帖子 ' . ':' .$tiezi->tietitle.   ' 新增成功';
           echo '<br><br>';
			echo '<a href="/tie/1">返回上一页</a><br>';
		} else {
			echo $tiezi->getError();
			echo '<a href="/tie/1">返回上一页</a><br>';
		}
	}

// public function tz($id)
// 	{	$data = Tiezi::where('baid',$id)
// 			->select();
// 		$data = tiezi::all();
		
// 		$this->assign('data', $data);
// 		return $this->fetch();
// 	}

	// public function reply(Request $request)
	// {
	// 	$tiezi = new tiezi;
	// 	$tiezi->tieconcent = $request->post('tieconcent');
	// 	$tiezi->ptie = $request->post('ptie');
	// 	$tiezi->quotetie = $request->post('quotetie');
	// 	$tiezi->tiedate = $request-> data('Y-m-d H:i:s');
	// 	$tiezi->baid = $request->post('baid');
	// 	if ($ptie->save()) {
	// 		return '帖子[ ' . $tiezi->tietitle. $tiezi->tieconcent.$tiezi->tieptie. $tiezi->quotetie.$tiezi->tiedate.':' . $tiezi->tieid . ' ]新增成功';
	// 	} else {
	// 		return $tiezi->getError();
	// 	}
	}








	// public function edittieconcent($tieid)
	// {
	// 	$single = Tiezi::get($id);
	
	// 	$all = Tiezi::all();
	// 	$this->assign('single', $single);
	// 	$this->assign('all',$all);
	// 	return $this->fetch();
	// }
	// public function editt(Request $request,$tieid)
	// {
	// 	$tiezi = Tiezi::get($tieid);
	// 	$tiezi->tietitle =$request->post('tietitle');
	// 	$tiezi->tieconcent = $request->post('tieconcent');
	// 	$tiezi->baid =$request->post('baid');
	// 	$tiezi->save();
	// 	return '更新帖子成功';
	// }

// 	public function deletec($id)
// 	{
// 		$classes = Classes::get($id);
// 		if ($classes) {
// 			$classes->delete();
// 			return '删除班级成功';
// 		} else {
// 			return '删除的班级不存在';
// 		}
// 	}
// 	public function editclasses($id)
// 	{
// 		$single = Classes::get($id);
// 		$all = Teacher::all(['ttype'=>1]);
// 		$this->assign('single', $single);
// 		$this->assign('all',$all);
// 		return $this->fetch();
// 	}
// 	public function editc(Request $request,$id)
// 	{
// 		$classes = Classes::get($id);
// 		$classes->year =$request->post('year');
// 		$classes->major =$request->post('major');
// 		$classes->subclass =$request->post('subclass');
// 		$classes->teacher_id =$request->post('teacher_id');
// 		$classes->save();
// 		return '更新班级成功';
// 	}
// }