<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto

namespace Google\Analytics\Data\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Explains a metric.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.MetricMetadata</code>
 */
class MetricMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * A metric name. Useable in [Metric](#Metric)'s `name`. For example,
     * `eventCount`.
     *
     * Generated from protobuf field <code>string api_name = 1;</code>
     */
    private $api_name = '';
    /**
     * This metric's name within the Google Analytics user interface. For example,
     * `Event count`.
     *
     * Generated from protobuf field <code>string ui_name = 2;</code>
     */
    private $ui_name = '';
    /**
     * Description of how this metric is used and calculated.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * Still usable but deprecated names for this metric. If populated, this
     * metric is available by either `apiName` or one of `deprecatedApiNames`
     * for a period of time. After the deprecation period, the metric will be
     * available only by `apiName`.
     *
     * Generated from protobuf field <code>repeated string deprecated_api_names = 4;</code>
     */
    private $deprecated_api_names;
    /**
     * The type of this metric.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.MetricType type = 5;</code>
     */
    private $type = 0;
    /**
     * The mathematical expression for this derived metric. Can be used in
     * [Metric](#Metric)'s `expression` field for equivalent reports. Most metrics
     * are not expressions, and for non-expressions, this field is empty.
     *
     * Generated from protobuf field <code>string expression = 6;</code>
     */
    private $expression = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $api_name
     *           A metric name. Useable in [Metric](#Metric)'s `name`. For example,
     *           `eventCount`.
     *     @type string $ui_name
     *           This metric's name within the Google Analytics user interface. For example,
     *           `Event count`.
     *     @type string $description
     *           Description of how this metric is used and calculated.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $deprecated_api_names
     *           Still usable but deprecated names for this metric. If populated, this
     *           metric is available by either `apiName` or one of `deprecatedApiNames`
     *           for a period of time. After the deprecation period, the metric will be
     *           available only by `apiName`.
     *     @type int $type
     *           The type of this metric.
     *     @type string $expression
     *           The mathematical expression for this derived metric. Can be used in
     *           [Metric](#Metric)'s `expression` field for equivalent reports. Most metrics
     *           are not expressions, and for non-expressions, this field is empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Alpha\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * A metric name. Useable in [Metric](#Metric)'s `name`. For example,
     * `eventCount`.
     *
     * Generated from protobuf field <code>string api_name = 1;</code>
     * @return string
     */
    public function getApiName()
    {
        return $this->api_name;
    }

    /**
     * A metric name. Useable in [Metric](#Metric)'s `name`. For example,
     * `eventCount`.
     *
     * Generated from protobuf field <code>string api_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setApiName($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_name = $var;

        return $this;
    }

    /**
     * This metric's name within the Google Analytics user interface. For example,
     * `Event count`.
     *
     * Generated from protobuf field <code>string ui_name = 2;</code>
     * @return string
     */
    public function getUiName()
    {
        return $this->ui_name;
    }

    /**
     * This metric's name within the Google Analytics user interface. For example,
     * `Event count`.
     *
     * Generated from protobuf field <code>string ui_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUiName($var)
    {
        GPBUtil::checkString($var, True);
        $this->ui_name = $var;

        return $this;
    }

    /**
     * Description of how this metric is used and calculated.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of how this metric is used and calculated.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Still usable but deprecated names for this metric. If populated, this
     * metric is available by either `apiName` or one of `deprecatedApiNames`
     * for a period of time. After the deprecation period, the metric will be
     * available only by `apiName`.
     *
     * Generated from protobuf field <code>repeated string deprecated_api_names = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeprecatedApiNames()
    {
        return $this->deprecated_api_names;
    }

    /**
     * Still usable but deprecated names for this metric. If populated, this
     * metric is available by either `apiName` or one of `deprecatedApiNames`
     * for a period of time. After the deprecation period, the metric will be
     * available only by `apiName`.
     *
     * Generated from protobuf field <code>repeated string deprecated_api_names = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeprecatedApiNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->deprecated_api_names = $arr;

        return $this;
    }

    /**
     * The type of this metric.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.MetricType type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of this metric.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.MetricType type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Data\V1alpha\MetricType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The mathematical expression for this derived metric. Can be used in
     * [Metric](#Metric)'s `expression` field for equivalent reports. Most metrics
     * are not expressions, and for non-expressions, this field is empty.
     *
     * Generated from protobuf field <code>string expression = 6;</code>
     * @return string
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * The mathematical expression for this derived metric. Can be used in
     * [Metric](#Metric)'s `expression` field for equivalent reports. Most metrics
     * are not expressions, and for non-expressions, this field is empty.
     *
     * Generated from protobuf field <code>string expression = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setExpression($var)
    {
        GPBUtil::checkString($var, True);
        $this->expression = $var;

        return $this;
    }

}

