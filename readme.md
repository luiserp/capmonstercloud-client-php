# PHP Client Library for Zennolab.CapMonster API (Forked)

## Installation

To install the library, add it to your project using Composer:

```bash
composer require luiserp/capmonstercloud-client-php
```

### Usage

```php
use luiserp\CapmonstercloudClientPhp\Client;
use luiserp\CapmonstercloudClientPhp\Captcha\ImageToTextRequest;
use luiserp\CapmonstercloudClientPhp\Captcha\RecaptchaV2Request;
use luiserp\CapmonstercloudClientPhp\Captcha\HCaptchaRequest;

// Initialize the client with your API key
$client = new Client("your_client_key");

// Solve image captcha
$body = "base64_captcha_image";
$imageRequest = new ImageToTextRequest($body);
$imageResult = $client->solve($imageRequest);

// Solve Recaptcha 2 (without proxy)
$websiteURL = "https://lessons.zennolab.com/captchas/recaptcha/v2_simple.php?level=high";
$websiteKey = "6Lcg7CMUAAAAANphynKgn9YAgA4tQ2KI_iqRyTwd";
$recaptchaV2Request = new RecaptchaV2Request($websiteURL, $websiteKey);
$recaptchaV2Result = $client->solve($recaptchaV2Request);

// Solve HCaptcha (without proxy)
$websiteUrl = "https://lessons.zennolab.com/captchas/hcaptcha/?level=easy";
$websiteKey = "472fc7af-86a4-4382-9a49-ca9090474471";
$hcaptchaRequest = new HCaptchaRequest($websiteUrl, $websiteKey);
$hcaptchaResult = $client->solve($hcaptchaRequest);
```
