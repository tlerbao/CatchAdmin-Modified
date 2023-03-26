<?php
// +----------------------------------------------------------------------
// | CatchAdmin [Just Like ～ ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017~{$year} http://catchadmin.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( https://github.com/yanwenwu/catch-admin/blob/master/LICENSE.txt )
// +----------------------------------------------------------------------
// | Author: JaguarJack [ njphper@gmail.com ]
// +----------------------------------------------------------------------

use think\migration\Seeder;

class PermissionsMenusSeed extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        \catcher\Utils::importTreeData($this->getPermissions(), 'permissions', 'parent_id');
    }

    protected function getPermissions()
    {
       return array (
  0 => 
  array (
    'id' => 1,
    'permission_name' => '权限',
    'parent_id' => 0,
    'level' => '',
    'route' => '/permission',
    'icon' => 'Stamp',
    'module' => 'permissions',
    'permission_mark' => 'permission',
    'component' => 'layout',
    'redirect' => '/permission/user',
    'type' => 1,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 100,
    'creator_id' => 1,
    'created_at' => 1587461455,
    'updated_at' => 1678757959,
    'deleted_at' => 0,
  ),
  1 => 
  array (
    'id' => 2,
    'permission_name' => '用户管理',
    'parent_id' => 1,
    'level' => '1',
    'route' => '/permission/user',
    'icon' => 'Avatar',
    'module' => 'permissions',
    'permission_mark' => 'user',
    'component' => '/permission/user/index',
    'redirect' => '',
    'type' => 1,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 10,
    'creator_id' => 1,
    'created_at' => 1587461597,
    'updated_at' => 1678757959,
    'deleted_at' => 0,
  ),
  2 => 
  array (
    'id' => 3,
    'permission_name' => '列表',
    'parent_id' => 2,
    'level' => '1-2',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'user@index',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587461647,
    'updated_at' => 1678519018,
    'deleted_at' => 0,
  ),
  3 => 
  array (
    'id' => 4,
    'permission_name' => '创建',
    'parent_id' => 2,
    'level' => '1-2',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'user@create',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587461696,
    'updated_at' => 1678459848,
    'deleted_at' => 0,
  ),
  4 => 
  array (
    'id' => 5,
    'permission_name' => '保存',
    'parent_id' => 2,
    'level' => '1-2',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'user@save',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587461721,
    'updated_at' => 1678459848,
    'deleted_at' => 0,
  ),
  5 => 
  array (
    'id' => 6,
    'permission_name' => '查看',
    'parent_id' => 2,
    'level' => '1-2',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'user@edit',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587461742,
    'updated_at' => 1678459848,
    'deleted_at' => 0,
  ),
  6 => 
  array (
    'id' => 7,
    'permission_name' => '更新',
    'parent_id' => 2,
    'level' => '1-2',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'user@update',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587461762,
    'updated_at' => 1678459848,
    'deleted_at' => 0,
  ),
  7 => 
  array (
    'id' => 8,
    'permission_name' => '删除',
    'parent_id' => 2,
    'level' => '1-2',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'user@delete',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587461841,
    'updated_at' => 1678459848,
    'deleted_at' => 0,
  ),
  8 => 
  array (
    'id' => 9,
    'permission_name' => '禁用',
    'parent_id' => 2,
    'level' => '1-2',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'user@switchStatus',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587461876,
    'updated_at' => 1678459848,
    'deleted_at' => 0,
  ),
  9 => 
  array (
    'id' => 10,
    'permission_name' => '恢复',
    'parent_id' => 2,
    'level' => '1-2',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'user@recover',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587461901,
    'updated_at' => 1678459848,
    'deleted_at' => 0,
  ),
  10 => 
  array (
    'id' => 11,
    'permission_name' => '角色管理',
    'parent_id' => 1,
    'level' => '1',
    'route' => '/permission/role',
    'icon' => 'Coffee',
    'module' => 'permissions',
    'permission_mark' => 'role',
    'component' => '/permission/role/index',
    'redirect' => '',
    'type' => 1,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 9,
    'creator_id' => 1,
    'created_at' => 1587461939,
    'updated_at' => 1678757959,
    'deleted_at' => 0,
  ),
  11 => 
  array (
    'id' => 12,
    'permission_name' => '列表',
    'parent_id' => 11,
    'level' => '1-11',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'role@index',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587461984,
    'updated_at' => 1678414340,
    'deleted_at' => 0,
  ),
  12 => 
  array (
    'id' => 13,
    'permission_name' => '创建',
    'parent_id' => 11,
    'level' => '1-11',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'role@create',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462007,
    'updated_at' => 1678414340,
    'deleted_at' => 0,
  ),
  13 => 
  array (
    'id' => 14,
    'permission_name' => '保存',
    'parent_id' => 11,
    'level' => '1-11',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'role@save',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462021,
    'updated_at' => 1678414340,
    'deleted_at' => 0,
  ),
  14 => 
  array (
    'id' => 15,
    'permission_name' => '查看',
    'parent_id' => 11,
    'level' => '1-11',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'role@edit',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462040,
    'updated_at' => 1678414340,
    'deleted_at' => 0,
  ),
  15 => 
  array (
    'id' => 16,
    'permission_name' => '更新',
    'parent_id' => 11,
    'level' => '1-11',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'role@update',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462058,
    'updated_at' => 1678414340,
    'deleted_at' => 0,
  ),
  16 => 
  array (
    'id' => 17,
    'permission_name' => '删除',
    'parent_id' => 11,
    'level' => '1-11',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'role@delete',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462070,
    'updated_at' => 1678414340,
    'deleted_at' => 0,
  ),
  17 => 
  array (
    'id' => 18,
    'permission_name' => '权限获取',
    'parent_id' => 11,
    'level' => '1-11',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'role@getPermissions',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462094,
    'updated_at' => 1678414340,
    'deleted_at' => 0,
  ),
  18 => 
  array (
    'id' => 19,
    'permission_name' => '菜单管理',
    'parent_id' => 1,
    'level' => '1',
    'route' => '/permission/rule',
    'icon' => 'Menu',
    'module' => 'permissions',
    'permission_mark' => 'permission',
    'component' => '/permission/rule/index',
    'redirect' => '',
    'type' => 1,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 8,
    'creator_id' => 1,
    'created_at' => 1587462147,
    'updated_at' => 1678757959,
    'deleted_at' => 0,
  ),
  19 => 
  array (
    'id' => 20,
    'permission_name' => '列表',
    'parent_id' => 19,
    'level' => '1-19',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'permission@index',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462205,
    'updated_at' => 1678415669,
    'deleted_at' => 0,
  ),
  20 => 
  array (
    'id' => 21,
    'permission_name' => '创建',
    'parent_id' => 19,
    'level' => '1-19',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'permission@create',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462232,
    'updated_at' => 1678415669,
    'deleted_at' => 0,
  ),
  21 => 
  array (
    'id' => 22,
    'permission_name' => '保存',
    'parent_id' => 19,
    'level' => '1-19',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'permission@save',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462250,
    'updated_at' => 1678415669,
    'deleted_at' => 0,
  ),
  22 => 
  array (
    'id' => 23,
    'permission_name' => '禁用/启用',
    'parent_id' => 19,
    'level' => '1-19',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'permission@show',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462273,
    'updated_at' => 1678415669,
    'deleted_at' => 0,
  ),
  23 => 
  array (
    'id' => 24,
    'permission_name' => '更新',
    'parent_id' => 19,
    'level' => '1-19',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'permission@update',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462284,
    'updated_at' => 1678415669,
    'deleted_at' => 0,
  ),
  24 => 
  array (
    'id' => 25,
    'permission_name' => '删除',
    'parent_id' => 19,
    'level' => '1-19',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'permission@delete',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462296,
    'updated_at' => 1678415669,
    'deleted_at' => 0,
  ),
  25 => 
  array (
    'id' => 26,
    'permission_name' => '权限方法',
    'parent_id' => 19,
    'level' => '1-19',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'permission@getMethods',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1599221913,
    'updated_at' => 1678415669,
    'deleted_at' => 0,
  ),
  26 => 
  array (
    'id' => 27,
    'permission_name' => '部门管理',
    'parent_id' => 1,
    'level' => '1',
    'route' => '/permission/department',
    'icon' => 'Monitor',
    'module' => 'permissions',
    'permission_mark' => 'departments',
    'component' => '/permission/department/index',
    'redirect' => '',
    'type' => 1,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 7,
    'creator_id' => 1,
    'created_at' => 1587462488,
    'updated_at' => 1678757959,
    'deleted_at' => 0,
  ),
  27 => 
  array (
    'id' => 28,
    'permission_name' => '列表',
    'parent_id' => 27,
    'level' => '1-27',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'department@index',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462529,
    'updated_at' => 1678459482,
    'deleted_at' => 0,
  ),
  28 => 
  array (
    'id' => 29,
    'permission_name' => '保存',
    'parent_id' => 27,
    'level' => '1-27',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'department@save',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462548,
    'updated_at' => 1678459482,
    'deleted_at' => 0,
  ),
  29 => 
  array (
    'id' => 30,
    'permission_name' => '更新',
    'parent_id' => 27,
    'level' => '1-27',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'department@update',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462579,
    'updated_at' => 1678459482,
    'deleted_at' => 0,
  ),
  30 => 
  array (
    'id' => 31,
    'permission_name' => '删除',
    'parent_id' => 27,
    'level' => '1-27',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'department@delete',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462592,
    'updated_at' => 1678459482,
    'deleted_at' => 0,
  ),
  31 => 
  array (
    'id' => 32,
    'permission_name' => '岗位管理',
    'parent_id' => 1,
    'level' => '1',
    'route' => '/permission/job',
    'icon' => 'Trophy',
    'module' => 'permissions',
    'permission_mark' => 'job',
    'component' => '/permission/job/index',
    'redirect' => '',
    'type' => 1,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462707,
    'updated_at' => 1678757959,
    'deleted_at' => 0,
  ),
  32 => 
  array (
    'id' => 33,
    'permission_name' => '列表',
    'parent_id' => 32,
    'level' => '1-32',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'job@indexs',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462757,
    'updated_at' => 1678458610,
    'deleted_at' => 0,
  ),
  33 => 
  array (
    'id' => 34,
    'permission_name' => '保存',
    'parent_id' => 32,
    'level' => '1-32',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'job@save',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462774,
    'updated_at' => 1678458610,
    'deleted_at' => 0,
  ),
  34 => 
  array (
    'id' => 35,
    'permission_name' => '更新',
    'parent_id' => 32,
    'level' => '1-32',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'job@update',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462785,
    'updated_at' => 1678458610,
    'deleted_at' => 0,
  ),
  35 => 
  array (
    'id' => 36,
    'permission_name' => '删除',
    'parent_id' => 32,
    'level' => '1-32',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'job@delete',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462794,
    'updated_at' => 1678458610,
    'deleted_at' => 0,
  ),
  36 => 
  array (
    'id' => 37,
    'permission_name' => '获取全部',
    'parent_id' => 32,
    'level' => '1-32',
    'route' => '',
    'icon' => '',
    'module' => 'permissions',
    'permission_mark' => 'job@getAll',
    'component' => '',
    'redirect' => '',
    'type' => 2,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1587462818,
    'updated_at' => 1678458610,
    'deleted_at' => 0,
  ),
);
    }
}
