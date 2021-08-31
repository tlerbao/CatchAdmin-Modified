<?php
// +----------------------------------------------------------------------
// | UCToo [ Universal Convergence Technology ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014-2021 https://www.uctoo.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: UCToo <contact@uctoo.com>
// +----------------------------------------------------------------------

use think\migration\Seeder;

class ApiTesterSeed extends Seeder
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
       $data = array (
  0 => 
  array (
    'id' => 1,
    'api_title' => '获取类目详情',
    'api_name' => 'product/category/get',
    'category_id' => 2,
    'type' => 1,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/api/wechatopen/product/category/get',
    'methods' => 'POST',
    'auth' => NULL,
    'header' => '{"authorization":"{{authorization}}"}',
    'query' => '{"appid":"{{appid}}"}',
    'body' => '',
    'doc_url' => 'https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/cat/get_cat_list.html',
    'document' => '参考文档url',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 2,
    'status' => 1,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 0,
    'memo' => NULL,
    'created_at' => 1621484754,
    'updated_at' => 1622461634,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  1 => 
  array (
    'id' => 2,
    'api_title' => '获取品牌列表',
    'api_name' => 'product/brand/get',
    'category_id' => 2,
    'type' => 1,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/api/wechatopen/product/brand/get',
    'methods' => 'POST',
    'auth' => '',
    'header' => '{"authorization":"{{authorization}}"}',
    'query' => '{"appid":"{{appid}}"}',
    'body' => '',
    'doc_url' => 'https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/cat/get_brand.html',
    'document' => '详见文档url地址',
    'sample_data' => '无',
    'sample_result' => '返回',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 0,
    'memo' => NULL,
    'created_at' => 1621485017,
    'updated_at' => 1622378856,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  2 => 
  array (
    'id' => 3,
    'api_title' => '登录日志',
    'api_name' => '/log/login',
    'category_id' => 5,
    'type' => 2,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/log/login',
    'methods' => 'GET',
    'auth' => '',
    'header' => '{"authorization":"{{authorization}}"}',
    'query' => '',
    'body' => '',
    'doc_url' => 'http://apidoc.catchadmin.com/web/#/5?page_id=23',
    'document' => '无',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 0,
    'memo' => '',
    'created_at' => 1621598744,
    'updated_at' => 1622965477,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  3 => 
  array (
    'id' => 4,
    'api_title' => '操作日志',
    'api_name' => 'log/operate',
    'category_id' => 5,
    'type' => 2,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/log/operate',
    'methods' => 'GET',
    'auth' => '',
    'header' => '{"authorization":"{{authorization}}"}',
    'query' => '',
    'body' => '',
    'doc_url' => 'http://apidoc.catchadmin.com/web/#/5?page_id=53',
    'document' => '无',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 0,
    'memo' => '',
    'created_at' => 1621598935,
    'updated_at' => 1622965460,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  4 => 
  array (
    'id' => 5,
    'api_title' => '获取运费模板',
    'api_name' => 'product/delivery/get_freight_template',
    'category_id' => 2,
    'type' => 1,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/api/wechatopen/product/delivery/get_freight_template',
    'methods' => 'POST',
    'auth' => '',
    'header' => '{"authorization":"{{authorization}}"}',
    'query' => '{"appid":"{{appid}}"}',
    'body' => '',
    'doc_url' => 'https://developers.weixin.qq.com/doc/ministore/minishopopencomponent/API/cat/get_freight_template.html',
    'document' => '详见文档URL',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 0,
    'memo' => '',
    'created_at' => 1621599469,
    'updated_at' => 1622378826,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  5 => 
  array (
    'id' => 6,
    'api_title' => '获取店铺的商品分类',
    'api_name' => 'product/store/get_shopcat',
    'category_id' => 2,
    'type' => 1,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/api/wechatopen/product/store/get_shopcat',
    'methods' => 'POST',
    'auth' => '',
    'header' => '{"authorization":"{{authorization}}"}',
    'query' => '{"appid":"{{appid}}"}',
    'body' => '',
    'doc_url' => 'https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/store/get_shopcat.html',
    'document' => '参考文档url',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 0,
    'memo' => '',
    'created_at' => 1621762669,
    'updated_at' => 1622378816,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  6 => 
  array (
    'id' => 7,
    'api_title' => '添加商品',
    'api_name' => 'product/spu/add',
    'category_id' => 2,
    'type' => 1,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/api/wechatopen/product/spu/add',
    'methods' => 'POST',
    'auth' => '',
    'header' => '{"authorization":"{{authorization}}"}',
    'query' => '{"appid":"{{appid}}"}',
    'body' => '{
    "out_product_id": "1234566",
    "title": "任天堂 Nintendo Switch 国行续航增强版 NS家用体感游戏机掌机 便携掌上游戏机 红蓝主机",
    "sub_title": "JD自营更放心】【国行Switch，更安心的保修服务，更快的国行服务器】一台主机三种模式，游戏掌机，随时随地，一起趣玩。",
    "head_img": 
    [
        "http://img10.360buyimg.com/n1/s450x450_jfs/t1/85865/39/13611/488083/5e590a40E4bdf69c0/55c9bf645ea2b727.jpg"
    ],
    "desc_info": 
    {
        "imgs": 
        [
            "http://img10.360buyimg.com/n1/s450x450_jfs/t1/85865/39/13611/488083/5e590a40E4bdf69c0/55c9bf645ea2b727.jpg"
        ]
    },
    "brand_id": 2100000000,
    "cats": 
    [
        {
            "cat_id": 6033,
            "level": 1
        },
        {
            "cat_id": 6057,
            "level": 2
        },
        {
            "cat_id": 6091,
            "level": 3
        }
    ],
    "attrs": 
    [
        {
            "attr_key": "商品毛重",
            "attr_value": "380g"
        },
        {
            "attr_key": "商品产地",
            "attr_value": "中国大陆"
        }
    ],
    "model": "国行续航增强版",
    "express_info": 
    {
        "template_id": 5189
    },
    "skus":
    [
        {
            "out_product_id": "1234566",
            "out_sku_id": "1024",
            "thumb_img": "http://img10.360buyimg.com/n1/s450x450_jfs/t1/100778/17/13648/424215/5e590a40E2d68e774/e171d222a0c9b763.jpg",
            "sale_price": 1300,
            "market_price": 1500,
            "stock_num": 100,
            "sku_code": "A24525252",
            "barcode": "13251454",
            "sku_attrs": 
            [
                {
                    "attr_key": "选择颜色",
                    "attr_value": "红蓝主机"
                },
                {
                    "attr_key": "选择套装",
                    "attr_value": "主机+保护套"
                }
            ]
        }
    ] 
}',
    'doc_url' => 'https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/spu/add_spu.html',
    'document' => '参考文档url',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 0,
    'memo' => '',
    'created_at' => 1621764682,
    'updated_at' => 1622378805,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  7 => 
  array (
    'id' => 8,
    'api_title' => '获取商品',
    'api_name' => 'product/spu/get',
    'category_id' => 2,
    'type' => 1,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/api/wechatopen/product/spu/get',
    'methods' => 'POST',
    'auth' => '',
    'header' => '{"authorization":"{{authorization}}"}',
    'query' => '{"appid":"{{appid}}"}',
    'body' => '{\'product_id\':\'31334398\'}',
    'doc_url' => 'https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/spu/get_spu.html',
    'document' => '参考文档URL',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 0,
    'memo' => '',
    'created_at' => 1621774347,
    'updated_at' => 1622378781,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  8 => 
  array (
    'id' => 9,
    'api_title' => '获取商品列表',
    'api_name' => 'product/spu/get_list',
    'category_id' => 2,
    'type' => 1,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/api/wechatopen/product/spu/get_list',
    'methods' => 'POST',
    'auth' => '',
    'header' => '{"authorization":"{{authorization}}"}',
    'query' => '{"appid":"{{appid}}"}',
    'body' => '{"status":5}',
    'doc_url' => 'https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/spu/get_spu_list.html',
    'document' => '参考文档URL',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 0,
    'memo' => '',
    'created_at' => 1621777668,
    'updated_at' => 1622378754,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  9 => 
  array (
    'id' => 10,
    'api_title' => '搜索商品',
    'api_name' => 'product/spu/search',
    'category_id' => 2,
    'type' => 1,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/api/wechatopen/product/spu/search',
    'methods' => 'POST',
    'auth' => NULL,
    'header' => '{"authorization":"{{authorization}}"}',
    'query' => '{"appid":"{{appid}}"}',
    'body' => '{\'status\':5,\'keyword\':\'UI\',\'page\':1}',
    'doc_url' => 'https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/spu/search_spu.html',
    'document' => '参考文档url',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 1,
    'memo' => NULL,
    'created_at' => 1622000389,
    'updated_at' => 1622378719,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  10 => 
  array (
    'id' => 11,
    'api_title' => '上架商品',
    'api_name' => 'product/spu/listing',
    'category_id' => 2,
    'type' => 1,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/api/wechatopen/product/spu/listing',
    'methods' => 'POST',
    'auth' => '',
    'header' => '{"authorization":"{{authorization}}"}',
    'query' => '{"appid":"{{appid}}"}',
    'body' => '{\'product_id\':\'33541981\'}',
    'doc_url' => 'https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/spu/up_spu_listing.html',
    'document' => '参考文档URL',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 0,
    'memo' => '',
    'created_at' => 1622019456,
    'updated_at' => 1622378710,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  11 => 
  array (
    'id' => 12,
    'api_title' => '下架商品',
    'api_name' => 'product/spu/delisting',
    'category_id' => 2,
    'type' => 1,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/api/wechatopen/product/spu/delisting',
    'methods' => 'POST',
    'auth' => '',
    'header' => '{"authorization":"{{authorization}}"}',
    'query' => '{"appid":"{{appid}}"}',
    'body' => '{\'product_id\':33541981}',
    'doc_url' => 'https://developers.weixin.qq.com/miniprogram/dev/framework/ministore/minishopopencomponent/API/spu/up_spu_delisting.html',
    'document' => '参考文档URL',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 0,
    'memo' => '',
    'created_at' => 1622019791,
    'updated_at' => 1622378701,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  12 => 
  array (
    'id' => 13,
    'api_title' => 'API测试用户环境新增',
    'api_name' => 'ApiTesterUserenv/save',
    'category_id' => 5,
    'type' => 2,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/apiTesterUserenv',
    'methods' => 'POST',
    'auth' => '',
    'header' => '{"authorization":"{{authorization}}"}',
    'query' => '',
    'body' => '{\'env_name\':\'api.server.local\',\'appid\':\'wx407e\',\'project_id\':1,\'selected\':0}',
    'doc_url' => '无',
    'document' => '新增一条API测试用户环境数据',
    'sample_data' => '{\'env_name\':\'appapi.uctoo.local\',\'appid\':\'wx407e\',\'project_id\':1,\'env_json\':\'{"{{host}}":"api.server.local","{{appid}}":"wx407e","{{authorization}}":"BearereyJ0eXA"}\',\'selected\':0}',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 4,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 1,
    'memo' => '',
    'created_at' => 1622030621,
    'updated_at' => 1622965370,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  13 => 
  array (
    'id' => 14,
    'api_title' => 'API测试用户环境列表',
    'api_name' => 'apiTesterUserenv/index',
    'category_id' => 5,
    'type' => 2,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/apiTesterUserenv',
    'methods' => 'GET',
    'auth' => '',
    'header' => '{"authorization":"{{authorization}}"}',
    'query' => '{\'creator\':\'admin\'}',
    'body' => '',
    'doc_url' => '无',
    'document' => 'API测试用户环境列表。可以按用户名检索环境列表，在query部分增加creator筛选字段。',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 0,
    'memo' => '',
    'created_at' => 1622031131,
    'updated_at' => 1622965325,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  14 => 
  array (
    'id' => 15,
    'api_title' => 'API测试用户环境更新',
    'api_name' => 'apiTesterUserenv/update',
    'category_id' => 5,
    'type' => 2,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/apiTesterUserenv/3',
    'methods' => 'PUT',
    'auth' => '',
    'header' => '{"authorization":"{{authorization}}"}',
    'query' => '',
    'body' => '{\'selected\':1}',
    'doc_url' => '无',
    'document' => 'API地址：http://127.0.0.1/apiTesterUserenv/{id}
id为数据主键。body部分为要更新的字段。',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 0,
    'memo' => '',
    'created_at' => 1622033581,
    'updated_at' => 1622965309,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  15 => 
  array (
    'id' => 16,
    'api_title' => '微应用列表',
    'api_name' => 'applet/index',
    'category_id' => 5,
    'type' => 2,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/applet',
    'methods' => 'GET',
    'auth' => '',
    'header' => '{"authorization":"{{authorization}}"}',
    'query' => '{\'creator\':\'demo\'}',
    'body' => '',
    'doc_url' => '无',
    'document' => '可在query字段用creator用户名、name应用名称、appid字段进行筛选。',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 0,
    'memo' => '',
    'created_at' => 1622083381,
    'updated_at' => 1622965295,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  16 => 
  array (
    'id' => 17,
    'api_title' => '设置选中微应用',
    'api_name' => 'applet/setapplet/<id>',
    'category_id' => 5,
    'type' => 2,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/applet/setapplet/1',
    'methods' => 'GET',
    'auth' => '',
    'header' => '{"authorization":"{{authorization}}"}',
    'query' => '',
    'body' => '',
    'doc_url' => '无',
    'document' => '<id>参数为数据主键',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 0,
    'memo' => '',
    'created_at' => 1622085296,
    'updated_at' => 1622965277,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  17 => 
  array (
    'id' => 18,
    'api_title' => '获取当前选中应用',
    'api_name' => 'admin/applet/<creator_id>',
    'category_id' => 5,
    'type' => 2,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/admin/applet/1',
    'methods' => 'GET',
    'auth' => '',
    'header' => '{"authorization":"{{authorization}}"}',
    'query' => '',
    'body' => '',
    'doc_url' => '无',
    'document' => '<creator_id>参数是后台用户主键ID',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 0,
    'memo' => '',
    'created_at' => 1622097323,
    'updated_at' => 1622965263,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  18 => 
  array (
    'id' => 19,
    'api_title' => '切换API环境',
    'api_name' => 'apiTesterUserenv/selectAPIenv/<id>',
    'category_id' => 5,
    'type' => 2,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/apiTesterUserenv/selectAPIenv/1',
    'methods' => 'GET',
    'auth' => '',
    'header' => '{"authorization":"{{authorization}}"}',
    'query' => '',
    'body' => '',
    'doc_url' => '无',
    'document' => '<id>为API环境数据主键',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 0,
    'memo' => '',
    'created_at' => 1622176574,
    'updated_at' => 1622965231,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  19 => 
  array (
    'id' => 20,
    'api_title' => '帐号登录',
    'api_name' => 'login',
    'category_id' => 5,
    'type' => 2,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/login',
    'methods' => 'POST',
    'auth' => '',
    'header' => '',
    'query' => '',
    'body' => '{"email":"catch@admin.com","password":"catchadmin"}',
    'doc_url' => 'http://apidoc.catchadmin.com/web/#/5?page_id=24',
    'document' => '无',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/json; charset=utf-8',
    'env_id' => 0,
    'memo' => '',
    'created_at' => 1622429937,
    'updated_at' => 1622460840,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  20 => 
  array (
    'id' => 21,
    'api_title' => '微信扫码登录后获取后台帐号',
    'api_name' => 'wechatlogin/wechatoauth',
    'category_id' => 5,
    'type' => 2,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/wechatlogin/wechatoauth',
    'methods' => 'GET',
    'auth' => '',
    'header' => '',
    'query' => '{"code":"0712VE1"}',
    'body' => '',
    'doc_url' => 'https://developers.weixin.qq.com/doc/oplatform/Website_App/WeChat_Login/Wechat_Login.html',
    'document' => '微信扫码登录后，在跳转到的页面需要先调用此接口获取微信用户关联的后台管理员帐号列表。根据此接口返回的帐号列表信息，展示帐号名，用户可以点选登录对应帐号。如此接口返回空值，则展示用户注册后台帐号页面。
Query参数：
必填参数
code：微信扫码登录后，微信服务器通知跳转到redirect_url时添加的code参数，用于获取微信用户access_token
非必填参数
state：扫码登录时添加的随机验证字符串。前端自定义。前端自验证。

返回值：accountList 包含扫码登录后获得的 openid，access_token以及关联的后台帐号列表
',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/x-www-form-urlencoded',
    'env_id' => 0,
    'memo' => '',
    'created_at' => 1622539671,
    'updated_at' => 1622709792,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  21 => 
  array (
    'id' => 22,
    'api_title' => '扫码登录后注册用户帐号',
    'api_name' => 'wechatlogin/wechatregist',
    'category_id' => 5,
    'type' => 2,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/wechatlogin/wechatregist',
    'methods' => 'POST',
    'auth' => '',
    'header' => '',
    'query' => '',
    'body' => '{"username":"13688888888","password":"123456","email":"demo@uctoo.com","openid":"openid","access_token":"access_token"}',
    'doc_url' => '无',
    'document' => 'openid和access_token是微信扫码登录后获取到的值，用于调用帐号注册接口权限验证。
username建议采用用户手机号码并进行短信验证。
password建议校验密码复杂度。
email建议进行邮箱验证。可作为密码找回方式之一。',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/json; charset=utf-8',
    'env_id' => 0,
    'memo' => '',
    'created_at' => 1622710277,
    'updated_at' => 1622876680,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
  22 => 
  array (
    'id' => 23,
    'api_title' => '微信扫码登录后选择帐号登录',
    'api_name' => 'wechatlogin/wechatlogin',
    'category_id' => 5,
    'type' => 2,
    'appid' => '',
    'project_id' => '',
    'api_url' => '{{host}}/wechatlogin/wechatlogin',
    'methods' => 'POST',
    'auth' => '',
    'header' => '',
    'query' => '',
    'body' => '{"email":"demo@uctoo.com","openid":"openid","access_token":"access_token","password":"any"}',
    'doc_url' => '无',
    'document' => '微信扫码后，选择帐号登录。
openid和access_token是在扫码授权后，获得。
password参数必须传，可以是任意值，不做验证。',
    'sample_data' => '无',
    'sample_result' => '无',
    'sort' => 1,
    'status' => 1,
    'content_type' => 'application/json; charset=utf-8',
    'env_id' => 0,
    'memo' => '',
    'created_at' => 1622713987,
    'updated_at' => 1622876660,
    'deleted_at' => 0,
    'creator_id' => 1,
  ),
);

        foreach ($data as $item) {
            \catchAdmin\apimanager\model\ApiTester::create($item);
        }
    }
}