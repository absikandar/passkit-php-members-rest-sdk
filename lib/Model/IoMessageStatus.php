<?php
/**
 * IoMessageStatus
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
 * IoMessageStatus Class Doc Comment
 *
 * @category Class
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IoMessageStatus
{
    /**
     * Possible values of this enum
     */
    const CREATED = 'CREATED';
const PROCESSING = 'PROCESSING';
const ABORTED_WITH_ERRORS = 'ABORTED_WITH_ERRORS';
const COMPLETED_WITH_WARNINGS = 'COMPLETED_WITH_WARNINGS';
const COMPLETED_WITH_ERRORS = 'COMPLETED_WITH_ERRORS';
const COMPLETED_WITHOUT_ERRORS = 'COMPLETED_WITHOUT_ERRORS';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATED,
self::PROCESSING,
self::ABORTED_WITH_ERRORS,
self::COMPLETED_WITH_WARNINGS,
self::COMPLETED_WITH_ERRORS,
self::COMPLETED_WITHOUT_ERRORS,        ];
    }
}