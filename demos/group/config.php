<?php

$conf = [
    "default" => [
        // 扩展服务器WEB地址，用以加载静态文件的根目录
        "plugin_http_domain" => "http://192.168.3.43:5206",

        // 用户在客户端访问站点的地址
        "site_address" => "192.168.3.43:2022",

        // PluginApiServer
        "plugin_id" => 11, //plugin id, 请在管理平台 -> 扩展管理 -> 点击对应扩展获取
        "plugin_auth_key" => "XkYCEM5nFusJoe1g",
        "plugin_api_host" => "192.168.3.43",    // 对应启动服务器时的 -Dhttp.address 参数
        "plugin_api_port" => 8280,  // 对应启动服务器时的 -Dhttp.port 参数

        "game_expire_time" => 60, // 过期时间，如果超过这个时间获胜者没有开局，则所有人均可开局。

        "db_path" => '/akaxin/guessNum/db',

        // 一定要设置此值！！！设置成一个随机字符串，比如：012f214526b489a18f2c1a1f3523a041
        // 因为sqlite是个单体文件，要防止脱裤
        "db_safe_prefix" => "guess_num",
    ],
];
function getConf($configName) {
    global $conf;
    return isset($conf[$configName]) ? $conf[$configName] : $conf['default'];
}