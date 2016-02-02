<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2/1/16
 * Time: 6:27 PM
 */

namespace Kevin\Xinge;


class XingeWrapper {
    public function __construct($config)
    {
        $this->config = $config;
    }

    public function PushTokenAndroid($title, $content, $token)
    {
        $iosConfig = $this->config['Android'];
        $accessId = $iosConfig['accessId'];
        $secretKey = $iosConfig['secretKey'];
        return XingeApp::PushTokenAndroid($accessId, $secretKey, $title, $content, $token);
    }

    public function PushTokenIos($content, $token)
    {
        $iosConfig = $this->config['iOS'];
        $accessId = $iosConfig['accessId'];
        $secretKey = $iosConfig['secretKey'];
        $environment = $iosConfig['environment'] == 'production' ? 1 : 0;
        return XingeApp::PushTokenIos($accessId, $secretKey, $content, $token, $environment);
    }

    public function PushAllAndroid($title, $content)
    {
        $iosConfig = $this->config['Android'];
        $accessId = $iosConfig['accessId'];
        $secretKey = $iosConfig['secretKey'];
        return XingeApp::PushAllAndroid($accessId, $secretKey, $title, $content);
    }

    public function PushAllIos($content)
    {
        $iosConfig = $this->config['iOS'];
        $accessId = $iosConfig['accessId'];
        $secretKey = $iosConfig['secretKey'];
        $environment = $iosConfig['environment'] == 'production' ? 1 : 0;
        return XingeApp::PushAllIos($accessId, $secretKey, $content, $environment);
    }

    public function PushAll($content, $title = '')
    {
        $this->PushAllIos($content);
        $this->PushAllAndroid($title, $content);
    }
} 

