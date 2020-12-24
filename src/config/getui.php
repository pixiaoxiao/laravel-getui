<?php
return [
    // APP_EVN
    'app_env' => 1 == 'production' ? 'production' : 'development',

    // The default default_client name which configured in `development` or `production` section
    'default_client' => 'client_1',


    'development' => [
        'client_1' => [
            'gt_appid' => 'gvSuN0kKJZAO6AFwCSKBG1',
            'gt_appkey' => 'hI9udDuGbq96L2wLjHuZh6',
            'gt_appsecret' => 'o49n6Md3UH99B1sNA94jP',
            'gt_mastersecret' => 'CbHH0p6W9fAqxDjdU10Ft1',
            'gt_package' => 'com.hikvision.community',
            'gt_domainurl' => 'http://sdk.open.api.igexin.com/apiex.htm',
        ],
        'client_2' => [
            'gt_appid' => 'WkHYMDuY459KwO7ueyVW23',
            'gt_appkey' => 'REiygIio8Y7XMZbMGmFwB4',
            'gt_appsecret' => 'x5RKkgRtPn7GgEksYDIIL4',
            'gt_mastersecret' => 'eA4pFs0WTs7n6CX2WDyU72',
            'gt_package' => 'com.hikvision.community_manage',
            'gt_domainurl' => 'http://sdk.open.api.igexin.com/apiex.htm',
        ],
        'client_3' => [
            'gt_appid' => 'fFz61ykceoAoC62epwnnc',
            'gt_appkey' => '9QiBRiutr28djOTYmdRFs4',
            'gt_appsecret' => 'eoqiuwnnIq75nrbKGKzfj4',
            'gt_mastersecret' => 'qvBOoUbEkl7eOExAvm3LF8',
            'gt_package' => 'com.woniujie.pp',
            'gt_domainurl' => 'http://sdk.open.api.igexin.com/apiex.htm',
        ],
        'client_4' => [
            'gt_appid' => 'IC4DNfYqX07BdA09mi0be4',
            'gt_appkey' => 'oLjfEmGCOh6InCyB6uZ498',
            'gt_appsecret' => 'xtKXAD8PjW5oH6Lcq5pAU8',
            'gt_mastersecret' => 'hEJ3m4SFdT7dzWrImg30Q8',
            'gt_package' => 'com.woniujie.pp',
            'gt_domainurl' => 'http://sdk.open.api.igexin.com/apiex.htm',
        ],
        // other client_3   ......
    ],
    'production' => [
        'client_1' => [
            'gt_appid' => '87klYMPe1o515SCcbx7Co5',
            'gt_appkey' => 'dd9XpsgHff89DJgUgvW6L8',
            'gt_appsecret' => 'aKMLyeXLCc8hFpjcuf8gW8',
            'gt_mastersecret' => 'zx85PndZVf8Q1M1Iv9dEy3',
            'gt_domainurl' => 'http://sdk.open.api.igexin.com/apiex.htm',
        ],
        'client_2' => [
            'gt_appid' => '87klYMPe1o515SCcbx7Co5',
            'gt_appkey' => 'dd9XpsgHff89DJgUgvW6L8',
            'gt_appsecret' => 'aKMLyeXLCc8hFpjcuf8gW8',
            'gt_mastersecret' => 'zx85PndZVf8Q1M1Iv9dEy3',
            'gt_domainurl' => 'http://sdk.open.api.igexin.com/apiex.htm',
        ],

        // other client_3   ......

    ],
];
