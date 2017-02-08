<?php
        /**
         *$_SERVER 得到服务器相关内容
         *
         * $_SERVER["SERVER_ADDR"] 返回服务器的IP地址
         * $_SERVER["SERVER_NAME"] 服务器名称
         * $_SERVER["SERVER_PORT"] 服务器端口号
         *
         * $_SERVER["REMOTE_ADDR"] 访问者IP
         * $_SERVER["REMOTE_HOST"] 访问者主机名
         */

        // var_dump($_SERVER);
        echo $_SERVER["SERVER_ADDR"];
        // echo "<hr/>";
        //
        // echo $_SERVER["SERVER_NAME"];
        // echo "<hr/>";
        //
        // echo $_SERVER["SERVER_PORT"];
        // echo "<hr/>";
        //
        // echo $_SERVER["REMOTE_ADDR"];
        // echo "<hr/>";
        //
        // echo $_SERVER["REMOTE_HOST"];



        // function getIP(){
        //     static $realip;
        //     if (isset($_SERVER)){
        //         if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
        //             $realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        //         } else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
        //             $realip = $_SERVER["HTTP_CLIENT_IP"];
        //         } else {
        //             $realip = $_SERVER["REMOTE_ADDR"];
        //         }
        //     } else {
        //         if (getenv("HTTP_X_FORWARDED_FOR")){
        //             $realip = getenv("HTTP_X_FORWARDED_FOR");
        //         } else if (getenv("HTTP_CLIENT_IP")) {
        //             $realip = getenv("HTTP_CLIENT_IP");
        //         } else {
        //             $realip = getenv("REMOTE_ADDR");
        //         }
        //     }
        //     return $realip;
        // }
        //
        //
         function getip(){
            if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
            {$ip = getenv("HTTP_CLIENT_IP");
            }
            else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
            {
            $ip = getenv("HTTP_X_FORWARDED_FOR");
            } else
            if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
            {
            $ip = getenv("REMOTE_ADDR");
            }
            else if (isset ($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
            {
            $ip = $_SERVER['REMOTE_ADDR'];
            }
            else {
            $ip = "unknown";
            }
            return ($ip);
            }

            $res = getip();
            echo $res;

 ?>
