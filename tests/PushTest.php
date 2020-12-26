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
use ShaoZeMing\GeTui\Facade\GeTui;
use ShaoZeMing\GeTui\GeTuiService;


class PushTest extends TestCase
{
    protected $instance;

    public function testPush()
    {
        $this->instance = new GeTuiService();

        $client = [
            0 => [
//                'deviceid' => '22ea1bf2c898308109e8baf3f09e6185',
//                'deviceid' => 'ae76ee3fac63f6886ae0284e0b27f9f2',
                'deviceid' => '3e3c03d161dd0ab8651df19e7b2b6e65',
                'client' => 'client_1',
            ],
            2 => [
//                'deviceid' => '37367d5104559087c0e4dec7b3d6717a',
                'deviceid' => '454ebd43c24aa91e0b670be890552b62',
                'client' => 'client_2',
            ],
            3 => [
                'deviceid' => '454ebd43c24aa91e0b670be890552b62',
                'client' => 'client_3',
            ]
        ];
        try {
            $key = 3;
            $deviceId = $client[$key]['deviceid'];
            $app =  $client[$key]['client'];
            $message = '{
                "title":"您收到一条新的资讯分享！",
                "deviceid":"ae76ee3fac63f6886ae0284e0b27f9f2",
                "client":"client_1",
                "data":{
                "tip_id":559,
                "title":"您收到一条新的资讯分享！",
                "content":"您收到一条新的资讯分享！",
                "is_ring":false,
                "is_vibrate":false
                }
            }';
            $message = json_decode($message,true);
            $data = $message['data'] ?? '';
            $push = 'smart';
            $Message = [
                "title" => isset($data['title']) ? $data['title'] : '',
                "content" => isset($data['content']) ? $data['content'] : '',
                "push" => $push,
                "event" => '',
                "silent" => '',
                "is_ring" => isset($data['is_ring']) ? $data['is_ring'] : 1,
                "is_vibrate" => isset($data['is_vibrate']) ? $data['is_vibrate'] : 1,
                "data" => $data,
            ];
            $getuiResponse = $this->instance->toClient($app)->push($deviceId, $Message);
            echo json_encode($getuiResponse);
        } catch (\Exception $e) {
            $err = "Error : 错误：" . $e->getMessage();
            echo $err . PHP_EOL;

        }
    }
}
