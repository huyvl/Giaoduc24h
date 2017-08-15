<?php
/**
 * Created by PhpStorm.
 * User: anhcong
 * Date: 2/25/17
 * Time: 11:10 PM
 */

namespace app\Helpers;

class Module
{
    public static function all()
    {
        $all = [
            ['slug' => 'dashboard', 'show' => true, 'title' => 'Trang chủ', 'url' => 'admin', 'icon' => 'icon-home', 'permission' => []],
            ['slug' => 'booking', 'show' => true, 'title' => 'Đăng ký', 'url' => 'admin/booking', 'icon' => 'icon-layers', 'permission' => ['booking-list', 'booking-create', 'booking-edit', 'booking-delete']],
            ['slug' => 'user', 'show' => true, 'title' => 'Người dùng', 'url' => 'admin/user', 'icon' => 'icon-user', 'permission' => ['user-list', 'user-create', 'user-edit', 'user-delete']],
            ['slug' => 'role', 'show' => true, 'title' => 'Phân quyền', 'url' => 'admin/role', 'icon' => 'icon-layers', 'permission' => ['role-list', 'role-create', 'role-edit', 'role-delete']],
        ];

        return $all;
    }
}
