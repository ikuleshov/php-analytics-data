<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto

namespace Google\Analytics\Data\V1alpha\Filter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The filter for string
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.Filter.StringFilter</code>
 */
class StringFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * The match type for this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.Filter.StringFilter.MatchType match_type = 1;</code>
     */
    private $match_type = 0;
    /**
     * The string value used for the matching.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     */
    private $value = '';
    /**
     * If true, the string value is case sensitive.
     *
     * Generated from protobuf field <code>bool case_sensitive = 3;</code>
     */
    private $case_sensitive = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $match_type
     *           The match type for this filter.
     *     @type string $value
     *           The string value used for the matching.
     *     @type bool $case_sensitive
     *           If true, the string value is case sensitive.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Alpha\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The match type for this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.Filter.StringFilter.MatchType match_type = 1;</code>
     * @return int
     */
    public function getMatchType()
    {
        return $this->match_type;
    }

    /**
     * The match type for this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.Filter.StringFilter.MatchType match_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMatchType($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Data\V1alpha\Filter\StringFilter\MatchType::class);
        $this->match_type = $var;

        return $this;
    }

    /**
     * The string value used for the matching.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The string value used for the matching.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * If true, the string value is case sensitive.
     *
     * Generated from protobuf field <code>bool case_sensitive = 3;</code>
     * @return bool
     */
    public function getCaseSensitive()
    {
        return $this->case_sensitive;
    }

    /**
     * If true, the string value is case sensitive.
     *
     * Generated from protobuf field <code>bool case_sensitive = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setCaseSensitive($var)
    {
        GPBUtil::checkBool($var);
        $this->case_sensitive = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StringFilter::class, \Google\Analytics\Data\V1alpha\Filter_StringFilter::class);

