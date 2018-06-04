<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/hai_session_profile.proto

namespace Akaxin\Proto\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 
 */
class HaiSessionProfileResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *需要查找的用户
     *
     * 
     */
    private $user_profile = null;

    public function __construct() {
        \GPBMetadata\Plugin\HaiSessionProfile::initOnce();
        parent::__construct();
    }

    /**
     *需要查找的用户
     *
     * 
     * @return \Akaxin\Proto\Core\UserProfile
     */
    public function getUserProfile()
    {
        return $this->user_profile;
    }

    /**
     *需要查找的用户
     *
     * 
     * @param \Akaxin\Proto\Core\UserProfile $var
     * @return $this
     */
    public function setUserProfile($var)
    {
        GPBUtil::checkMessage($var, \Akaxin\Proto\Core\UserProfile::class);
        $this->user_profile = $var;

        return $this;
    }

}
