<?php
/**
 * IoCallbackEvent
 *
 * PHP version 5
 *
 * @category Class
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PassKit Members API
 *
 * The PassKit Members API lets you manage your membership programs and passes for Apple Wallet and Google Pay.
 *
 * OpenAPI spec version: 1.0-rc
 * Contact: support@passkit.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.19
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace PkIo\Model;
use \PkIo\ObjectSerializer;

/**
 * IoCallbackEvent Class Doc Comment
 *
 * @category Class
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IoCallbackEvent
{
    /**
     * Possible values of this enum
     */
    const CALLBACK_OBJECT_CREATED = 'CALLBACK_OBJECT_CREATED';
const CALLBACK_OBJECT_UPDATED = 'CALLBACK_OBJECT_UPDATED';
const CALLBACK_OBJECT_REMOVED = 'CALLBACK_OBJECT_REMOVED';
const CALLBACK_PASS_ISSUED = 'CALLBACK_PASS_ISSUED';
const CALLBACK_PASS_INSTALLED = 'CALLBACK_PASS_INSTALLED';
const CALLBACK_PASS_UPDATED = 'CALLBACK_PASS_UPDATED';
const CALLBACK_PASS_REMOVED = 'CALLBACK_PASS_REMOVED';
const EMAIL_OPENED = 'EMAIL_OPENED';
const LINK_VISITED = 'LINK_VISITED';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CALLBACK_OBJECT_CREATED,
self::CALLBACK_OBJECT_UPDATED,
self::CALLBACK_OBJECT_REMOVED,
self::CALLBACK_PASS_ISSUED,
self::CALLBACK_PASS_INSTALLED,
self::CALLBACK_PASS_UPDATED,
self::CALLBACK_PASS_REMOVED,
self::EMAIL_OPENED,
self::LINK_VISITED,        ];
    }
}
