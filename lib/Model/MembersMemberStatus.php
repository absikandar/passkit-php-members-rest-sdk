<?php
/**
 * MembersMemberStatus
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
 * MembersMemberStatus Class Doc Comment
 *
 * @category Class
 * @description - ENROLLED: Member has successfully enrolled in the program  - ACTIVE: Member status changes to active when approved (if program requires approval, otherwise the member becomes active directly after enrolling). When approved a member also received the welcome email.  - SUSPENDED: Status to temporarily suspend a member  - EXPIRED: For expired members  - CANCELLED: Set if a member cancelled their membership  - DELETED: For members who&#x27;s records have been deleted
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MembersMemberStatus
{
    /**
     * Possible values of this enum
     */
    const ENROLLED = 'ENROLLED';
const ACTIVE = 'ACTIVE';
const SUSPENDED = 'SUSPENDED';
const EXPIRED = 'EXPIRED';
const CANCELLED = 'CANCELLED';
const DELETED = 'DELETED';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ENROLLED,
self::ACTIVE,
self::SUSPENDED,
self::EXPIRED,
self::CANCELLED,
self::DELETED,        ];
    }
}