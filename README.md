# passkit-php-members-rest-sdk
Use the PassKit PHP Members REST SDK to issue and manage Apple Wallet and Google Pay Passes from your PHP application.

For more information, please visit [the documentation](https://docs.passkit.io/protocols/member/).

## Table Of Contents
- [Requirements](#requirements)
- [Installation](#installation)
- [Getting Started](#getting-started)
- [PassKit Portal](#passkit-portal)
- [Known Issues & Unsupported Endpoints](#known-issues--unsupported-endpoints)
- [Getting Help](#getting-help)
- [Contributing](#contributing)
- [Author & License](#author--license)

## Requirements

1. PHP 5.5 and later.
2. A PassKit account; sign up for free at [https://app.passkit.com](https://app.passkit.com/signup).
3. Your [Rest API credentials](https://app.passkit.com/app/account/developer-tools) (Home >> Account >> Developer Tools >> Get REST Credentials).

## Installation
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/passkit/passkit-php-members-rest-sdk.git"
    }
  ],
  "require": {
    "passkit/passkit-php-members-rest-sdk": "1.0.0"
  }
}
```

Then run `composer install`

### Manual Installation

Clone the repo and include `autoload.php`:

```php
require_once('/path/to/passkit-php-members-rest-sdk/vendor/autoload.php');
```

## Getting Started

Follow the [installation procedure](#installation--usage), and see general usage format & examples below.

### API Authorization

The PassKit API uses JWT (JSON Web Tokens) to authenticate account level access. These tokens offer a method to establish secure server-to-server authentication by transferring a compact JSON object with a signed payload of your account’s API Key and Secret. The token generation is built into the SDK.  

**Accessing your API Key and Secret**
Log in to [https://app.passkit.com](https://app.passkit.com), navigate to your account and then visit your developer tools section.

**Important Note**: PassKit JWTs are short-lived: you should generate a new token for each API call.

### General Instructions

The general format of using the SDK in your code is shown below. When re-using the API instance object and doing multiple requests, ensure to create a new token for each request by calling:
```php
$apiInstance->getConfig()->setApiKey('Authorization', $auth->GenerateJwt());
```

General format:

```php
<?php
require_once "../vendor/autoload.php";

// Create config and set host
$config = PkIo\Configuration::getDefaultConfiguration();
$config->setHost("https://api.pub1.passkit.io");

// Create auth object for token generation
$auth = new PkIo\Auth("apiKey", "apiSecret");

// Create the API instance
$apiInstance = new PkIo\Api\MembersApi(
    new GuzzleHttp\Client(),
    $config
);

// Generate a new JWT.
// IMPORTANT: Our JWTs are short-lived; if you plan to re-use the API instance for multiple requests, then make sure to generate a new token for each request (repeat below line of code)
$apiInstance->getConfig()->setApiKey('Authorization', $auth->GenerateJwt());

// Set the Request body
$body = new PkIo\Model\MembersMember();

try {
    $result = $apiInstance->enrolMember($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->enrolMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Examples
Common use cases can be found in the [examples](/examples) folder in this repo.

## PassKit Portal
The [https://app.passkit.com](https://app.passkit.com) allows you to easily design loyalty cards, membership cards and coupons for both Apple Wallet and Google Pay. 

Additionally, the PassKit portal facilitates management, distribution and simple analysis of your Mobile Wallet projects.

Best Practices:
- Use the web portal for initial account and project setup.
- Then use the SDKs / APIs to issue, update and delete your individual passes.

## Known Issues & Unsupported Endpoints
The following methods are currently not implemented:
- List Programs
- Update Members by Segment: can be done by updating individual members and looping on client side
- Delete Members by Segment: can be done by deleting individual members and looping on client side
- Earn / Burn Points: can be done with Update Member
- Check In / Out Member

## Getting Help
- [Official documentation](https://docs.passkit.io/protocols/member/)
- [support@passkit.com](mailto:support@passkit.com)
- [Online Chat Support](https://app.passkit.com/)

## Contributing
Send bug reports, feature requests and code contributions into this repository.

## Author & License
PassKit Inc.: [support@passkit.com](mailto:support@passkit.com)

Distributed under MIT License. Details available in [license file](LICENSE).
