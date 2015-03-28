<?php

namespace Liuggio\StatsdClient\Entity;

interface StatsdDataInterface
{
    CONST STATSD_METRIC_TIMING = 'ms';
    CONST STATSD_METRIC_GAUGE  = 'g';
    CONST STATSD_METRIC_SET    = 's';
    CONST STATSD_METRIC_COUNT  = 'c';

    /**
     * @abstract
     * @return string
     */
    function getKey();

    /**
     * @abstract
     * @return mixed
     */
    function getValue();

    /**
     * @abstract
     * @return string
     */
    function getMetric();

    /**
     * @abstract
     * @return string
     */
    function getMessage();

    /**
     * @abstract
     * @return float
     */
    function getSampleRate();

    /**
     * @abstract
     * @return string
     */
    function __toString();
    
    /**
     * Set key prefix
     *
     * @abstract
     *
     * @param string $prefix The prefix of the metric key
     */
    function setPrefix($prefix);
    
    /**
     * Set key suffix
     *
     * @abstract
     *
     * @param string $suffix The suffix of the metric key
    */
    function setSuffix($suffix);
    
    /**
     * Get key prefix
     *
     * @abstract
     *
     * @return string
    */
    function getPrefix();
    
    
    /**
     * Get key suffix
     *
     * @abstract
     *
     * @return string $suffix
    */
    function getSuffix();
    
    /**
     * Get key with prefix/suffix
     *
     * @abstract
     *
     * @param string $key
     *
     * @return string
    */
    function getRealKey($key);
}
