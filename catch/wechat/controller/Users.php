<?php
/**
 * @filename Users.php
 * @date     2020/6/7
 * @project  https://github.com/yanwenwu/catch-admin
 * @document http://doc.catchadmin.com
 * @author   JaguarJack <njphper@gmail.com>
 * @copyright By CatchAdmin
 * @license  https://github.com/yanwenwu/catch-admin/blob/master/LICENSE.txt
 */
namespace catchAdmin\wechat\controller;

use catcher\base\CatchController;
use catcher\CatchResponse;
use catcher\library\WeChat;
use catcher\Utils;

class Users extends CatchController
{
    protected $user;

    public function __construct(WeChat $weChat)
    {
        $this->user = $weChat->officialAccount()->user;
    }

    /**
     * 列表
     *
     * @time 2020年06月19日
     * @param null $nextOpenid
     * @return \think\response\Json
     */
    public function index($nextOpenid = null)
    {
        $openIds = $this->user->list($nextOpenid);

        if ($openIds['count']) {
            $users = $this->user->select($openIds['data']['openid']);

            $openIds['users'] = $users;

            return CatchResponse::success($openIds);
        }

        return CatchResponse::success($openIds);
    }

    /**
     * 备注
     *
     * @time 2020年06月19日
     * @param $optionId
     * @param $remark
     * @return \think\response\Json
     */
    public function remark($optionId, $remark)
    {
        return CatchResponse::success($this->user->remark($optionId, $remark));
    }

    /**
     * 拉黑
     *
     * @time 2020年06月19日
     * @param $openId
     * @return \think\response\Json
     */
    public function block($openId)
    {
        return CatchResponse::success($this->user->block(Utils::stringToArrayBy($openId)));
    }

    /**
     * 拉黑列表
     *
     * @time 2020年06月19日
     * @param null $nextOpenid
     * @return \think\response\Json
     */
    public function blacklist($nextOpenid = null)
    {
       return CatchResponse::success($this->user->blacklist($nextOpenid));
    }

    /**
     * 取消拉黑
     *
     * @time 2020年06月19日
     * @param $openId
     * @return \think\response\Json
     */
    public function unblock($openId)
    {
        return CatchResponse::success($this->user->unblock(Utils::stringToArrayBy($openId)));
    }
}