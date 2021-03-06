<?php
/**
 * IoOperator
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
 * IoOperator Class Doc Comment
 *
 * @category Class
 * @description - AND: Join grouped filter fields with AND operator. E.g. tier_id &#x3D; bronze AND tier_id &#x3D; silver. The default.  - OR: Join grouped filter fields with OR operator. E.g. tier_id &#x3D; bronze OR tier_id &#x3D; silver.
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IoOperator
{
    /**
     * Possible values of this enum
     */
    const _AND = 'AND';
const _OR = 'OR';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_AND,
self::_OR,        ];
    }
}
