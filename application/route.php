<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    'tiezi' => 'index/tiezi/index',
    // 'class/deletec/:id' => 'index/classes/deletec',
    'tiezi/addt' => 'index/tiezi/addt',
    'lll/addTiezi' => 'index/tiezi/addTiezi',
    'tiezi/edittiezi/:tieid' => 'index/tiezi/edittiezi',
    'tiezi/editt/:tieid' => 'index/tiezi/editt',

     'ba/:id'=>'index/index/ba',
    'ba/addb' => 'index/ba/addb',
    'ba/addba' => 'index/ba/addba',
    'ba/editb/:baid' => 'index/ba/editb',
    'ba/editba/:baid' => 'index/ba/editba',

    'login' => 'index/index/login',
    'logindo'=>'index/index/logindo',

    'logout' => 'index/index/logout',

    'regist' => 'index/index/regist',
    'registdo' => 'index/index/registdo',
    'zy'=>'index/index/zy',
    'zhuye'=>'index/index/zhuye',
    'tz'=>'index/index/tz',
    'tieconcent/:id'=>'index/index/tiecontent',
    'tconcent/:id'=>'index/index/tconcent',

    'tie/:id'=>'index/tiezi/index',
    'tiezi/:id'=>'index/tiezi/index',
    'tiez/:id'=>'index/tiezi/tiez',

    // 'course' => 'index/course/index',
    // 'courses/deleteco/:id' => 'index/courses/deleteco',
    // 'courses/addcourse' => 'index/course/addcourse',
    // 'courses/addco' => 'index/course/addco',
    // 'courses/editcourse/:id' => 'index/course/editcourse',
    // 'courses/editco/:id' => 'index/course/editco',

    // 'teacher' => 'index/teacher/index',
    // 'teachers/deletet/:id' => 'index/teacher/deletet',
    // 'teachers/addteacher' => 'index/teacher/addteacher',
    // 'teachers/addt' => 'index/teacher/addt',
    // 'teachers/editteacher/:id' => 'index/teacher/editteacher',
    // 'teachers/editt/:id' => 'index/teacher/editt',

];
