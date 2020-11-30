<?php
/**
 *  TestSms.php
 *
 * @author szm19920426@gmail.com
 * $Id: TestSms.php 2017-08-17 上午10:08 $
 */

namespace ShaoZeMing\GeTui\Test;
require_once dirname(__FILE__) . '/../src/getui/IGt.Push.php';

use PHPUnit\Framework\TestCase;
use ShaoZeMing\GeTui\GeTuiService;


class PushTest extends TestCase
{
    protected $instance;


    public function testPush()
    {
        $this->instance = new GeTuiService();
//        var_dump($this->instance);
        $client = [
            0 => [
                'deviceid' => '3e3c03d161dd0ab8651df19e7b2b6e65',
//                'deviceid' => 'd36e539cfa33005947a83e4d61bd6ea7',
                'client' => 'client_1',
            ],
            3 => [
                'deviceid' => 'bf4200ff65f9a0dc1e79e3468b99edbb',
                'client' => 'client_3',
            ]
        ];
        try {
//            $deviceId = 'bf4200ff65f9a0dc1e79e3468b99edbb';
            $key = 0;
            $deviceId = $client[$key]['deviceid'];
            $app =  $client[$key]['client'];
            $title = '噪音好大啊，啊，啊，啊啊，'; // 标题
            $content = '你好呀您负责的的工单已经追加元';
            // 推送类型（外推：outer、内推：inner、智能推送：smart）
            $push = "smart";
            // 事件名称（APP根据此参数决定执行哪些功能）
            $event = "";
            // 内推时，是否给用户展示提示信息（比如强制用户退出就不会展示提示信息）
            $silent = false;
            // 推送数据，附加的业务数据
            $data = [
                'tip_id' => 9,
            ];

            $Message = [
                "title" => $title,
                "content" => $content,
                "push" => $push,
                "event" => $event,
                "silent" => $silent,
                "data" => $data,
            ];
//            $getuiResponse =Getui::push($deviceId, $data);
            $getuiResponse = $this->instance->toClient($app)->push($deviceId, $Message);
//            $getuiResponse = $this->instance->pushToApp( $data);
            echo json_encode($getuiResponse);
//            $this->assertContains('ok',$getuiResponse,'不成功');

//            return $getuiResponse;
        } catch (\Exception $e) {


            $err = "Error : 错误：" . $e->getMessage();
            echo $err . PHP_EOL;

        }
    }
}
