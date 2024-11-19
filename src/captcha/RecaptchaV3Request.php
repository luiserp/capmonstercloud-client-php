<?php

namespace luiserp\CapmonstercloudClientPhp\captcha;

use luiserp\CapmonstercloudClientPhp\CaptchaRequest;

class RecaptchaV3Request extends CaptchaRequest {

    public function __construct(string $websiteURL, string $websiteKey, float $minScore=null, string $pageAction=null) {
        $options = [
            "websiteURL" => $websiteURL, 
            "websiteKey" => $websiteKey,
            "minScore" => $minScore,
            "pageAction" => $pageAction
        ];
        CaptchaRequest::__construct("RecaptchaV3TaskProxyless", $options);
    }

}