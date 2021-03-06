<?php

/*
 * Copyright 2011-2017 Ning, Inc.
 * Copyright 2014 Groupon, Inc.
 * Copyright 2014 The Billing Project, LLC
 *
 * The Billing Project licenses this file to you under the Apache License, version 2.0
 * (the "License"); you may not use this file except in compliance with the
 * License.  You may obtain a copy of the License at:
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace Killbill\Client\Type;

/*
 * DO NOT EDIT!!!
 * File automatically generated by killbill-java-parser (git@github.com:killbill/killbill-java-parser.git)
 */

/**
 * PluginInfoAttributes
 */
class PluginInfoAttributes extends \Killbill\Client\AbstractResource
{
    /** @var string|null */
    protected $bundleSymbolicName = null;
    /** @var string|null */
    protected $pluginKey = null;
    /** @var string|null */
    protected $pluginName = null;
    /** @var string|null */
    protected $version = null;
    /** @var string|null */
    protected $state = null;
    /** @var bool|null */
    protected $isSelectedForStart = null;
    /** @var PluginServiceInfoAttributes[]|null */
    protected $services = null;

    /**
     * @param string|null $bundleSymbolicName
     */
    public function setBundleSymbolicName($bundleSymbolicName)
    {
        $this->bundleSymbolicName = $bundleSymbolicName;
    }

    /**
     * @return string|null
     */
    public function getBundleSymbolicName()
    {
        return $this->bundleSymbolicName;
    }

    /**
     * @param string|null $pluginKey
     */
    public function setPluginKey($pluginKey)
    {
        $this->pluginKey = $pluginKey;
    }

    /**
     * @return string|null
     */
    public function getPluginKey()
    {
        return $this->pluginKey;
    }

    /**
     * @param string|null $pluginName
     */
    public function setPluginName($pluginName)
    {
        $this->pluginName = $pluginName;
    }

    /**
     * @return string|null
     */
    public function getPluginName()
    {
        return $this->pluginName;
    }

    /**
     * @param string|null $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string|null $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param bool|null $isSelectedForStart
     */
    public function setIsSelectedForStart($isSelectedForStart)
    {
        $this->isSelectedForStart = $isSelectedForStart;
    }

    /**
     * @return bool|null
     */
    public function getIsSelectedForStart()
    {
        return $this->isSelectedForStart;
    }

    /**
     * @param PluginServiceInfoAttributes[]|null $services
     */
    public function setServices($services)
    {
        $this->services = $services;
    }

    /**
     * @return PluginServiceInfoAttributes[]|null
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @return string
     */
    public function getServicesType()
    {
        return PluginServiceInfoAttributes::class;
    }

}
