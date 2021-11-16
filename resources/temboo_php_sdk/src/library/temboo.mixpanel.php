<?php

/**
 * Temboo PHP SDK Mixpanel classes
 *
 * Execute Choreographies from the Temboo Mixpanel bundle.
 *
 * PHP version 5
 *
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @category   Services
 * @package    Temboo
 * @subpackage Mixpanel
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Gets unique, total, or average data for a set of events over the last N days, weeks, or months.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Events_EventData extends Temboo_Choreography
{
    /**
     * Gets unique, total, or average data for a set of events over the last N days, weeks, or months.
     *
     * @param Temboo_Session $session The session that owns this EventData Choreo.
     * @return Mixpanel_DataExport_Events_EventData New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/DataExport/Events/EventData/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this EventData Choreo.
     *
     * @param Mixpanel_DataExport_Events_EventData_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Events_EventData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Events_EventData_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_DataExport_Events_EventData_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EventData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Events_EventData_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_DataExport_Events_EventData_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EventData Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Events_EventData_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the EventData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Events_EventData_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EventData input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_DataExport_Events_EventData_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_DataExport_Events_EventData_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this EventData Choreo.
     *
     * @param string $value (required, string) The API Key provided my Mixpanel. You can find your Mixpanel API Key in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Events_EventData_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this EventData Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Mixpanel. You can find your Mixpanel API Secret in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Events_EventData_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the EventNames input for this EventData Choreo.
     *
     * @param string $value (required, json) A JSON array containing the event or events you wish to get data for.
     * @return Mixpanel_DataExport_Events_EventData_Inputs For method chaining.
     */
    public function setEventNames($value)
    {
        return $this->set('EventNames', $value);
    }

    /**
     * Set the value for the Expire input for this EventData Choreo.
     *
     * @param int $value (optional, integer) The amount of minutes past NOW() before the request will expire. Defaults to 1.
     * @return Mixpanel_DataExport_Events_EventData_Inputs For method chaining.
     */
    public function setExpire($value)
    {
        return $this->set('Expire', $value);
    }

    /**
     * Set the value for the Interval input for this EventData Choreo.
     *
     * @param int $value (required, integer) The time interval to return. This relates to the value provided for Unit.
     * @return Mixpanel_DataExport_Events_EventData_Inputs For method chaining.
     */
    public function setInterval($value)
    {
        return $this->set('Interval', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this EventData Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and csv.
     * @return Mixpanel_DataExport_Events_EventData_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Type input for this EventData Choreo.
     *
     * @param string $value (required, string) The analysis type you would like to get data for. Valid values are: general, unique, or average
     * @return Mixpanel_DataExport_Events_EventData_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the Unit input for this EventData Choreo.
     *
     * @param string $value (required, string) The granularity of the data to return. Valid values are: minute, hour, day, week, or month.
     * @return Mixpanel_DataExport_Events_EventData_Inputs For method chaining.
     */
    public function setUnit($value)
    {
        return $this->set('Unit', $value);
    }
}


/**
 * Execution object for the EventData Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Events_EventData_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EventData Choreo.
     *
     * @param Temboo_Session $session The session that owns this EventData execution.
     * @param Mixpanel_DataExport_Events_EventData $choreo The choreography object for this execution.
     * @param Mixpanel_DataExport_Events_EventData_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Events_EventData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Events_EventData_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_DataExport_Events_EventData $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EventData execution.
     *
     * @return Mixpanel_DataExport_Events_EventData_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this EventData execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_DataExport_Events_EventData_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_DataExport_Events_EventData_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the EventData Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Events_EventData_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the EventData Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_DataExport_Events_EventData_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this EventData execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets the top events for today, with their counts and the normalized percent change from yesterday.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Events_TopEvents extends Temboo_Choreography
{
    /**
     * Gets the top events for today, with their counts and the normalized percent change from yesterday.
     *
     * @param Temboo_Session $session The session that owns this TopEvents Choreo.
     * @return Mixpanel_DataExport_Events_TopEvents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/DataExport/Events/TopEvents/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TopEvents Choreo.
     *
     * @param Mixpanel_DataExport_Events_TopEvents_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Events_TopEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Events_TopEvents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_DataExport_Events_TopEvents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TopEvents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Events_TopEvents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_DataExport_Events_TopEvents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TopEvents Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Events_TopEvents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TopEvents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Events_TopEvents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TopEvents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_DataExport_Events_TopEvents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_DataExport_Events_TopEvents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this TopEvents Choreo.
     *
     * @param string $value (required, string) The API Key provided my Mixpanel. You can find your Mixpanel API Key in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Events_TopEvents_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this TopEvents Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Mixpanel. You can find your Mixpanel API Secret in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Events_TopEvents_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Expire input for this TopEvents Choreo.
     *
     * @param int $value (optional, integer) The amount of minutes past NOW() before the request will expire. Defaults to 1.
     * @return Mixpanel_DataExport_Events_TopEvents_Inputs For method chaining.
     */
    public function setExpire($value)
    {
        return $this->set('Expire', $value);
    }

    /**
     * Set the value for the Limit input for this TopEvents Choreo.
     *
     * @param int $value (optional, integer) The maximum number of events to return. Defaults to 100 (the max the limit).
     * @return Mixpanel_DataExport_Events_TopEvents_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Type input for this TopEvents Choreo.
     *
     * @param string $value (required, string) The analysis type you would like to get data for. Valid values are: general, unique, or average
     * @return Mixpanel_DataExport_Events_TopEvents_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the TopEvents Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Events_TopEvents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TopEvents Choreo.
     *
     * @param Temboo_Session $session The session that owns this TopEvents execution.
     * @param Mixpanel_DataExport_Events_TopEvents $choreo The choreography object for this execution.
     * @param Mixpanel_DataExport_Events_TopEvents_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Events_TopEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Events_TopEvents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_DataExport_Events_TopEvents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TopEvents execution.
     *
     * @return Mixpanel_DataExport_Events_TopEvents_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this TopEvents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_DataExport_Events_TopEvents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_DataExport_Events_TopEvents_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TopEvents Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Events_TopEvents_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TopEvents Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_DataExport_Events_TopEvents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TopEvents execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a list of the most common events over the last 31 days.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Events_TopNames extends Temboo_Choreography
{
    /**
     * Gets a list of the most common events over the last 31 days.
     *
     * @param Temboo_Session $session The session that owns this TopNames Choreo.
     * @return Mixpanel_DataExport_Events_TopNames New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/DataExport/Events/TopNames/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TopNames Choreo.
     *
     * @param Mixpanel_DataExport_Events_TopNames_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Events_TopNames_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Events_TopNames_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_DataExport_Events_TopNames_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TopNames Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Events_TopNames_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_DataExport_Events_TopNames_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TopNames Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Events_TopNames_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TopNames Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Events_TopNames_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TopNames input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_DataExport_Events_TopNames_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_DataExport_Events_TopNames_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this TopNames Choreo.
     *
     * @param string $value (required, string) The API Key provided my Mixpanel. You can find your Mixpanel API Key in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Events_TopNames_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this TopNames Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Mixpanel. You can find your Mixpanel API Secret in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Events_TopNames_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Expire input for this TopNames Choreo.
     *
     * @param int $value (optional, integer) The amount of minutes past NOW() before the request will expire. Defaults to 1.
     * @return Mixpanel_DataExport_Events_TopNames_Inputs For method chaining.
     */
    public function setExpire($value)
    {
        return $this->set('Expire', $value);
    }

    /**
     * Set the value for the Limit input for this TopNames Choreo.
     *
     * @param int $value (optional, integer) The maximum number of events to return. Defaults to 100 (the max the limit).
     * @return Mixpanel_DataExport_Events_TopNames_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Type input for this TopNames Choreo.
     *
     * @param string $value (required, string) The analysis type you would like to get data for. Valid values are: general, unique, or average
     * @return Mixpanel_DataExport_Events_TopNames_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the TopNames Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Events_TopNames_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TopNames Choreo.
     *
     * @param Temboo_Session $session The session that owns this TopNames execution.
     * @param Mixpanel_DataExport_Events_TopNames $choreo The choreography object for this execution.
     * @param Mixpanel_DataExport_Events_TopNames_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Events_TopNames_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Events_TopNames_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_DataExport_Events_TopNames $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TopNames execution.
     *
     * @return Mixpanel_DataExport_Events_TopNames_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this TopNames execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_DataExport_Events_TopNames_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_DataExport_Events_TopNames_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TopNames Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Events_TopNames_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TopNames Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_DataExport_Events_TopNames_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TopNames execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets data for a specified funnel.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Funnels_FunnelData extends Temboo_Choreography
{
    /**
     * Gets data for a specified funnel.
     *
     * @param Temboo_Session $session The session that owns this FunnelData Choreo.
     * @return Mixpanel_DataExport_Funnels_FunnelData New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/DataExport/Funnels/FunnelData/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FunnelData Choreo.
     *
     * @param Mixpanel_DataExport_Funnels_FunnelData_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Funnels_FunnelData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_DataExport_Funnels_FunnelData_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FunnelData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_DataExport_Funnels_FunnelData_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FunnelData Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Funnels_FunnelData_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FunnelData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FunnelData input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FunnelData Choreo.
     *
     * @param string $value (required, string) The API Key provided my Mixpanel. You can find your Mixpanel API Key in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FunnelData Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Mixpanel. You can find your Mixpanel API Secret in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Expire input for this FunnelData Choreo.
     *
     * @param int $value (optional, integer) The amount of minutes past NOW() before the request will expire. Defaults to 1.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Inputs For method chaining.
     */
    public function setExpire($value)
    {
        return $this->set('Expire', $value);
    }

    /**
     * Set the value for the FromDate input for this FunnelData Choreo.
     *
     * @param string $value (optional, date) The first date in yyyy-mm-dd format from which a user can begin the first step in the funnel. This date is inclusive.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Inputs For method chaining.
     */
    public function setFromDate($value)
    {
        return $this->set('FromDate', $value);
    }

    /**
     * Set the value for the FunnelID input for this FunnelData Choreo.
     *
     * @param string $value (required, string) The ID of the funnel to get data for.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Inputs For method chaining.
     */
    public function setFunnelID($value)
    {
        return $this->set('FunnelID', $value);
    }

    /**
     * Set the value for the Interval input for this FunnelData Choreo.
     *
     * @param int $value (optional, integer) The number of days you want your results bucketed into.The default value is 1.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Inputs For method chaining.
     */
    public function setInterval($value)
    {
        return $this->set('Interval', $value);
    }

    /**
     * Set the value for the Length input for this FunnelData Choreo.
     *
     * @param int $value (optional, integer) The number of days each user has to complete the funnel, starting from the time they triggered the first step in the funnel. May not be greater than 60 days. Defaults to 14.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Inputs For method chaining.
     */
    public function setLength($value)
    {
        return $this->set('Length', $value);
    }

    /**
     * Set the value for the Limit input for this FunnelData Choreo.
     *
     * @param int $value (optional, integer) Return the top limit property values. This parameter is ignored if the On input is not specified.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the On input for this FunnelData Choreo.
     *
     * @param string $value (optional, string) The property expression to segment the event on (e.g., properties["Referred By"] == "Friend"). See Choreo description for examples.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Inputs For method chaining.
     */
    public function setOn($value)
    {
        return $this->set('On', $value);
    }

    /**
     * Set the value for the ToDate input for this FunnelData Choreo.
     *
     * @param string $value (optional, date) The last date in yyyy-mm-dd format from which a user can begin the first step in the funnel. This date is inclusive. The date range may not be more than 60 days.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Inputs For method chaining.
     */
    public function setToDate($value)
    {
        return $this->set('ToDate', $value);
    }

    /**
     * Set the value for the Unit input for this FunnelData Choreo.
     *
     * @param string $value (optional, string) This is an alternate way of specifying interval and can set to be 'day' or 'week'.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Inputs For method chaining.
     */
    public function setUnit($value)
    {
        return $this->set('Unit', $value);
    }

    /**
     * Set the value for the Where input for this FunnelData Choreo.
     *
     * @param string $value (optional, string) An expression to filter events by  (e.g., properties["Signed Up"]). See Choreo description for examples.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Inputs For method chaining.
     */
    public function setWhere($value)
    {
        return $this->set('Where', $value);
    }
}


/**
 * Execution object for the FunnelData Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Funnels_FunnelData_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FunnelData Choreo.
     *
     * @param Temboo_Session $session The session that owns this FunnelData execution.
     * @param Mixpanel_DataExport_Funnels_FunnelData $choreo The choreography object for this execution.
     * @param Mixpanel_DataExport_Funnels_FunnelData_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Funnels_FunnelData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_DataExport_Funnels_FunnelData $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FunnelData execution.
     *
     * @return Mixpanel_DataExport_Funnels_FunnelData_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this FunnelData execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_DataExport_Funnels_FunnelData_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FunnelData Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Funnels_FunnelData_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FunnelData Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_DataExport_Funnels_FunnelData_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FunnelData execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets the names and funnel_ids of your funnels.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Funnels_FunnelList extends Temboo_Choreography
{
    /**
     * Gets the names and funnel_ids of your funnels.
     *
     * @param Temboo_Session $session The session that owns this FunnelList Choreo.
     * @return Mixpanel_DataExport_Funnels_FunnelList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/DataExport/Funnels/FunnelList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FunnelList Choreo.
     *
     * @param Mixpanel_DataExport_Funnels_FunnelList_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Funnels_FunnelList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Funnels_FunnelList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_DataExport_Funnels_FunnelList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FunnelList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Funnels_FunnelList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_DataExport_Funnels_FunnelList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FunnelList Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Funnels_FunnelList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FunnelList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Funnels_FunnelList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FunnelList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_DataExport_Funnels_FunnelList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_DataExport_Funnels_FunnelList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FunnelList Choreo.
     *
     * @param string $value (required, string) The API Key provided my Mixpanel. You can find your Mixpanel API Key in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Funnels_FunnelList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FunnelList Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Mixpanel. You can find your Mixpanel API Secret in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Funnels_FunnelList_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Expire input for this FunnelList Choreo.
     *
     * @param int $value (optional, integer) The amount of minutes past NOW() before the request will expire. Defaults to 1.
     * @return Mixpanel_DataExport_Funnels_FunnelList_Inputs For method chaining.
     */
    public function setExpire($value)
    {
        return $this->set('Expire', $value);
    }
}


/**
 * Execution object for the FunnelList Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Funnels_FunnelList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FunnelList Choreo.
     *
     * @param Temboo_Session $session The session that owns this FunnelList execution.
     * @param Mixpanel_DataExport_Funnels_FunnelList $choreo The choreography object for this execution.
     * @param Mixpanel_DataExport_Funnels_FunnelList_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Funnels_FunnelList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Funnels_FunnelList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_DataExport_Funnels_FunnelList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FunnelList execution.
     *
     * @return Mixpanel_DataExport_Funnels_FunnelList_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this FunnelList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_DataExport_Funnels_FunnelList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_DataExport_Funnels_FunnelList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FunnelList Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Funnels_FunnelList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FunnelList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_DataExport_Funnels_FunnelList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FunnelList execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Queries Mixpanel for data about people.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_People_Engage extends Temboo_Choreography
{
    /**
     * Queries Mixpanel for data about people.
     *
     * @param Temboo_Session $session The session that owns this Engage Choreo.
     * @return Mixpanel_DataExport_People_Engage New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/DataExport/People/Engage/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Engage Choreo.
     *
     * @param Mixpanel_DataExport_People_Engage_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_People_Engage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_People_Engage_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_DataExport_People_Engage_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Engage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_People_Engage_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_DataExport_People_Engage_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Engage Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_People_Engage_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Engage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_People_Engage_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Engage input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_DataExport_People_Engage_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_DataExport_People_Engage_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Engage Choreo.
     *
     * @param string $value (required, string) The API Key provided my Mixpanel. You can find your Mixpanel API Key in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_People_Engage_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this Engage Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Mixpanel. You can find your Mixpanel API Secret in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_People_Engage_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Expire input for this Engage Choreo.
     *
     * @param int $value (optional, integer) The amount of minutes past NOW() before the request will expire. Defaults to 1.
     * @return Mixpanel_DataExport_People_Engage_Inputs For method chaining.
     */
    public function setExpire($value)
    {
        return $this->set('Expire', $value);
    }

    /**
     * Set the value for the Page input for this Engage Choreo.
     *
     * @param int $value (optional, integer) Which page of the results to retrieve. Pages start at zero. If the "page" parameter is provided, the session_id parameter must also be provided.
     * @return Mixpanel_DataExport_People_Engage_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the SessionID input for this Engage Choreo.
     *
     * @param string $value (optional, string) A string id provided in the results of a previous query. Using a session_id speeds up api response, and allows paging through results.
     * @return Mixpanel_DataExport_People_Engage_Inputs For method chaining.
     */
    public function setSessionID($value)
    {
        return $this->set('SessionID', $value);
    }

    /**
     * Set the value for the Where input for this Engage Choreo.
     *
     * @param string $value (optional, string) An expression to filter people by (e.g., properties["time"]). See Choreo description for examples.
     * @return Mixpanel_DataExport_People_Engage_Inputs For method chaining.
     */
    public function setWhere($value)
    {
        return $this->set('Where', $value);
    }
}


/**
 * Execution object for the Engage Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_People_Engage_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Engage Choreo.
     *
     * @param Temboo_Session $session The session that owns this Engage execution.
     * @param Mixpanel_DataExport_People_Engage $choreo The choreography object for this execution.
     * @param Mixpanel_DataExport_People_Engage_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_People_Engage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_People_Engage_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_DataExport_People_Engage $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Engage execution.
     *
     * @return Mixpanel_DataExport_People_Engage_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Engage execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_DataExport_People_Engage_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_DataExport_People_Engage_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Engage Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_People_Engage_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Engage Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_DataExport_People_Engage_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Engage execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets unique, total, or average data for of a single event and property over the last N days, weeks, or months.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Properties_PropertyData extends Temboo_Choreography
{
    /**
     * Gets unique, total, or average data for of a single event and property over the last N days, weeks, or months.
     *
     * @param Temboo_Session $session The session that owns this PropertyData Choreo.
     * @return Mixpanel_DataExport_Properties_PropertyData New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/DataExport/Properties/PropertyData/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PropertyData Choreo.
     *
     * @param Mixpanel_DataExport_Properties_PropertyData_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Properties_PropertyData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Properties_PropertyData_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_DataExport_Properties_PropertyData_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PropertyData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Properties_PropertyData_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_DataExport_Properties_PropertyData_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PropertyData Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Properties_PropertyData_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PropertyData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Properties_PropertyData_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PropertyData input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_DataExport_Properties_PropertyData_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_DataExport_Properties_PropertyData_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this PropertyData Choreo.
     *
     * @param string $value (required, string) The API Key provided my Mixpanel. You can find your Mixpanel API Key in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Properties_PropertyData_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this PropertyData Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Mixpanel. You can find your Mixpanel API Secret in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Properties_PropertyData_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the EventName input for this PropertyData Choreo.
     *
     * @param string $value (required, string) The name of the event that you wish to get data for.
     * @return Mixpanel_DataExport_Properties_PropertyData_Inputs For method chaining.
     */
    public function setEventName($value)
    {
        return $this->set('EventName', $value);
    }

    /**
     * Set the value for the Expire input for this PropertyData Choreo.
     *
     * @param int $value (optional, integer) The amount of minutes past NOW() before the request will expire. Defaults to 1.
     * @return Mixpanel_DataExport_Properties_PropertyData_Inputs For method chaining.
     */
    public function setExpire($value)
    {
        return $this->set('Expire', $value);
    }

    /**
     * Set the value for the Interval input for this PropertyData Choreo.
     *
     * @param int $value (required, integer) The time interval to return. This relates to the value provided for Unit.
     * @return Mixpanel_DataExport_Properties_PropertyData_Inputs For method chaining.
     */
    public function setInterval($value)
    {
        return $this->set('Interval', $value);
    }

    /**
     * Set the value for the Limit input for this PropertyData Choreo.
     *
     * @param int $value (optional, integer) The maximum number of values to return. Defaults to 255.
     * @return Mixpanel_DataExport_Properties_PropertyData_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the PropertyName input for this PropertyData Choreo.
     *
     * @param string $value (required, string) The name of the property you would like to get data for.
     * @return Mixpanel_DataExport_Properties_PropertyData_Inputs For method chaining.
     */
    public function setPropertyName($value)
    {
        return $this->set('PropertyName', $value);
    }

    /**
     * Set the value for the PropertyValues input for this PropertyData Choreo.
     *
     * @param string $value (optional, json) A JSON array containing property values that you wish to retrieve.
     * @return Mixpanel_DataExport_Properties_PropertyData_Inputs For method chaining.
     */
    public function setPropertyValues($value)
    {
        return $this->set('PropertyValues', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PropertyData Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and csv.
     * @return Mixpanel_DataExport_Properties_PropertyData_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Type input for this PropertyData Choreo.
     *
     * @param string $value (required, string) The analysis type you would like to get data for. Valid values are: general, unique, or average
     * @return Mixpanel_DataExport_Properties_PropertyData_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the Unit input for this PropertyData Choreo.
     *
     * @param string $value (required, string) The granularity of the data to return. Valid values are: minute, hour, day, week, or month.
     * @return Mixpanel_DataExport_Properties_PropertyData_Inputs For method chaining.
     */
    public function setUnit($value)
    {
        return $this->set('Unit', $value);
    }
}


/**
 * Execution object for the PropertyData Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Properties_PropertyData_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PropertyData Choreo.
     *
     * @param Temboo_Session $session The session that owns this PropertyData execution.
     * @param Mixpanel_DataExport_Properties_PropertyData $choreo The choreography object for this execution.
     * @param Mixpanel_DataExport_Properties_PropertyData_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Properties_PropertyData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Properties_PropertyData_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_DataExport_Properties_PropertyData $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PropertyData execution.
     *
     * @return Mixpanel_DataExport_Properties_PropertyData_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this PropertyData execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_DataExport_Properties_PropertyData_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_DataExport_Properties_PropertyData_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PropertyData Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Properties_PropertyData_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PropertyData Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_DataExport_Properties_PropertyData_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PropertyData execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets the top property names for an event.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Properties_TopProperties extends Temboo_Choreography
{
    /**
     * Gets the top property names for an event.
     *
     * @param Temboo_Session $session The session that owns this TopProperties Choreo.
     * @return Mixpanel_DataExport_Properties_TopProperties New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/DataExport/Properties/TopProperties/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TopProperties Choreo.
     *
     * @param Mixpanel_DataExport_Properties_TopProperties_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Properties_TopProperties_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Properties_TopProperties_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_DataExport_Properties_TopProperties_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TopProperties Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Properties_TopProperties_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_DataExport_Properties_TopProperties_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TopProperties Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Properties_TopProperties_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TopProperties Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Properties_TopProperties_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TopProperties input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_DataExport_Properties_TopProperties_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_DataExport_Properties_TopProperties_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this TopProperties Choreo.
     *
     * @param string $value (required, string) The API Key provided my Mixpanel. You can find your Mixpanel API Key in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Properties_TopProperties_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this TopProperties Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Mixpanel. You can find your Mixpanel API Secret in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Properties_TopProperties_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the EventName input for this TopProperties Choreo.
     *
     * @param string $value (required, string) The name of the event that you wish to get data for.
     * @return Mixpanel_DataExport_Properties_TopProperties_Inputs For method chaining.
     */
    public function setEventName($value)
    {
        return $this->set('EventName', $value);
    }

    /**
     * Set the value for the Expire input for this TopProperties Choreo.
     *
     * @param int $value (optional, integer) The amount of minutes past NOW() before the request will expire. Defaults to 1.
     * @return Mixpanel_DataExport_Properties_TopProperties_Inputs For method chaining.
     */
    public function setExpire($value)
    {
        return $this->set('Expire', $value);
    }

    /**
     * Set the value for the Limit input for this TopProperties Choreo.
     *
     * @param int $value (optional, integer) The maximum number of properties to return. Defaults to 10.
     * @return Mixpanel_DataExport_Properties_TopProperties_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }
}


/**
 * Execution object for the TopProperties Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Properties_TopProperties_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TopProperties Choreo.
     *
     * @param Temboo_Session $session The session that owns this TopProperties execution.
     * @param Mixpanel_DataExport_Properties_TopProperties $choreo The choreography object for this execution.
     * @param Mixpanel_DataExport_Properties_TopProperties_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Properties_TopProperties_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Properties_TopProperties_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_DataExport_Properties_TopProperties $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TopProperties execution.
     *
     * @return Mixpanel_DataExport_Properties_TopProperties_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this TopProperties execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_DataExport_Properties_TopProperties_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_DataExport_Properties_TopProperties_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TopProperties Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Properties_TopProperties_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TopProperties Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_DataExport_Properties_TopProperties_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TopProperties execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets the top values for a property.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Properties_TopValues extends Temboo_Choreography
{
    /**
     * Gets the top values for a property.
     *
     * @param Temboo_Session $session The session that owns this TopValues Choreo.
     * @return Mixpanel_DataExport_Properties_TopValues New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/DataExport/Properties/TopValues/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TopValues Choreo.
     *
     * @param Mixpanel_DataExport_Properties_TopValues_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Properties_TopValues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Properties_TopValues_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_DataExport_Properties_TopValues_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TopValues Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Properties_TopValues_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_DataExport_Properties_TopValues_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TopValues Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Properties_TopValues_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TopValues Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Properties_TopValues_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TopValues input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_DataExport_Properties_TopValues_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_DataExport_Properties_TopValues_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this TopValues Choreo.
     *
     * @param string $value (required, string) The API Key provided my Mixpanel. You can find your Mixpanel API Key in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Properties_TopValues_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this TopValues Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Mixpanel. You can find your Mixpanel API Secret in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Properties_TopValues_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the EventName input for this TopValues Choreo.
     *
     * @param string $value (required, string) The name of the event that you wish to get data for.
     * @return Mixpanel_DataExport_Properties_TopValues_Inputs For method chaining.
     */
    public function setEventName($value)
    {
        return $this->set('EventName', $value);
    }

    /**
     * Set the value for the Expire input for this TopValues Choreo.
     *
     * @param int $value (optional, integer) The amount of minutes past NOW() before the request will expire. Defaults to 1.
     * @return Mixpanel_DataExport_Properties_TopValues_Inputs For method chaining.
     */
    public function setExpire($value)
    {
        return $this->set('Expire', $value);
    }

    /**
     * Set the value for the Limit input for this TopValues Choreo.
     *
     * @param int $value (optional, integer) The maximum number of values to return. Defaults to 255.
     * @return Mixpanel_DataExport_Properties_TopValues_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the PropertyName input for this TopValues Choreo.
     *
     * @param string $value (required, string) The name of the property you would like to get data for.
     * @return Mixpanel_DataExport_Properties_TopValues_Inputs For method chaining.
     */
    public function setPropertyName($value)
    {
        return $this->set('PropertyName', $value);
    }
}


/**
 * Execution object for the TopValues Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Properties_TopValues_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TopValues Choreo.
     *
     * @param Temboo_Session $session The session that owns this TopValues execution.
     * @param Mixpanel_DataExport_Properties_TopValues $choreo The choreography object for this execution.
     * @param Mixpanel_DataExport_Properties_TopValues_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Properties_TopValues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Properties_TopValues_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_DataExport_Properties_TopValues $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TopValues execution.
     *
     * @return Mixpanel_DataExport_Properties_TopValues_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this TopValues execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_DataExport_Properties_TopValues_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_DataExport_Properties_TopValues_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TopValues Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Properties_TopValues_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TopValues Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_DataExport_Properties_TopValues_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TopValues execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets cohort analysis.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Retention_RetentionData extends Temboo_Choreography
{
    /**
     * Gets cohort analysis.
     *
     * @param Temboo_Session $session The session that owns this RetentionData Choreo.
     * @return Mixpanel_DataExport_Retention_RetentionData New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/DataExport/Retention/RetentionData/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetentionData Choreo.
     *
     * @param Mixpanel_DataExport_Retention_RetentionData_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Retention_RetentionData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Retention_RetentionData_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_DataExport_Retention_RetentionData_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetentionData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Retention_RetentionData_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_DataExport_Retention_RetentionData_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetentionData Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Retention_RetentionData_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetentionData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Retention_RetentionData_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetentionData input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_DataExport_Retention_RetentionData_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_DataExport_Retention_RetentionData_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetentionData Choreo.
     *
     * @param string $value (required, string) The API Key provided my Mixpanel. You can find your Mixpanel API Key in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Retention_RetentionData_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this RetentionData Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Mixpanel. You can find your Mixpanel API Secret in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Retention_RetentionData_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the BornEvent input for this RetentionData Choreo.
     *
     * @param string $value (conditional, string) The first event a user must do to be counted in a birth retention cohort. Required when retention_type is 'birth'.
     * @return Mixpanel_DataExport_Retention_RetentionData_Inputs For method chaining.
     */
    public function setBornEvent($value)
    {
        return $this->set('BornEvent', $value);
    }

    /**
     * Set the value for the BornWhere input for this RetentionData Choreo.
     *
     * @param string $value (optional, string) An expression to filter born_events by. See Choreo description for examples.
     * @return Mixpanel_DataExport_Retention_RetentionData_Inputs For method chaining.
     */
    public function setBornWhere($value)
    {
        return $this->set('BornWhere', $value);
    }

    /**
     * Set the value for the EventName input for this RetentionData Choreo.
     *
     * @param string $value (optional, string) The event to generate returning counts for.
     * @return Mixpanel_DataExport_Retention_RetentionData_Inputs For method chaining.
     */
    public function setEventName($value)
    {
        return $this->set('EventName', $value);
    }

    /**
     * Set the value for the Expire input for this RetentionData Choreo.
     *
     * @param int $value (optional, integer) The amount of minutes past NOW() before the request will expire. Defaults to 1.
     * @return Mixpanel_DataExport_Retention_RetentionData_Inputs For method chaining.
     */
    public function setExpire($value)
    {
        return $this->set('Expire', $value);
    }

    /**
     * Set the value for the FromDate input for this RetentionData Choreo.
     *
     * @param string $value (required, date) The date in yyyy-mm-dd format from which to begin generating cohorts from. This date is inclusive.
     * @return Mixpanel_DataExport_Retention_RetentionData_Inputs For method chaining.
     */
    public function setFromDate($value)
    {
        return $this->set('FromDate', $value);
    }

    /**
     * Set the value for the Interval input for this RetentionData Choreo.
     *
     * @param int $value (optional, integer) The number of days you want your results bucketed into.The default value is 1 or specified by unit.
     * @return Mixpanel_DataExport_Retention_RetentionData_Inputs For method chaining.
     */
    public function setInterval($value)
    {
        return $this->set('Interval', $value);
    }

    /**
     * Set the value for the IntervalCount input for this RetentionData Choreo.
     *
     * @param int $value (optional, integer) The number of intervals you want. Defaults to 1.
     * @return Mixpanel_DataExport_Retention_RetentionData_Inputs For method chaining.
     */
    public function setIntervalCount($value)
    {
        return $this->set('IntervalCount', $value);
    }

    /**
     * Set the value for the Limit input for this RetentionData Choreo.
     *
     * @param int $value (optional, integer) Return the top limit segmentation values. This parameter is ignored if the On input is not specified.
     * @return Mixpanel_DataExport_Retention_RetentionData_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the On input for this RetentionData Choreo.
     *
     * @param string $value (optional, string) The property expression to segment the second event on. See Choreo description for examples.
     * @return Mixpanel_DataExport_Retention_RetentionData_Inputs For method chaining.
     */
    public function setOn($value)
    {
        return $this->set('On', $value);
    }

    /**
     * Set the value for the RetentionType input for this RetentionData Choreo.
     *
     * @param string $value (conditional, string) The type of retention. Valid values are: birth (the default) or compounded.
     * @return Mixpanel_DataExport_Retention_RetentionData_Inputs For method chaining.
     */
    public function setRetentionType($value)
    {
        return $this->set('RetentionType', $value);
    }

    /**
     * Set the value for the ToDate input for this RetentionData Choreo.
     *
     * @param string $value (required, date) The date in yyyy-mm-dd format from which to stop generating cohorts from. This date is inclusive.
     * @return Mixpanel_DataExport_Retention_RetentionData_Inputs For method chaining.
     */
    public function setToDate($value)
    {
        return $this->set('ToDate', $value);
    }

    /**
     * Set the value for the Unit input for this RetentionData Choreo.
     *
     * @param string $value (optional, string) This is an alternate way of specifying interval. Valid values are: day, week, or month.
     * @return Mixpanel_DataExport_Retention_RetentionData_Inputs For method chaining.
     */
    public function setUnit($value)
    {
        return $this->set('Unit', $value);
    }

    /**
     * Set the value for the Where input for this RetentionData Choreo.
     *
     * @param string $value (optional, string) An expression to filter events by  (e.g., properties["Signed Up"]). See Choreo description for examples.
     * @return Mixpanel_DataExport_Retention_RetentionData_Inputs For method chaining.
     */
    public function setWhere($value)
    {
        return $this->set('Where', $value);
    }
}


/**
 * Execution object for the RetentionData Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Retention_RetentionData_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetentionData Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetentionData execution.
     * @param Mixpanel_DataExport_Retention_RetentionData $choreo The choreography object for this execution.
     * @param Mixpanel_DataExport_Retention_RetentionData_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Retention_RetentionData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Retention_RetentionData_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_DataExport_Retention_RetentionData $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetentionData execution.
     *
     * @return Mixpanel_DataExport_Retention_RetentionData_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this RetentionData execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_DataExport_Retention_RetentionData_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_DataExport_Retention_RetentionData_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetentionData Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Retention_RetentionData_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetentionData Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_DataExport_Retention_RetentionData_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetentionData execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Averages an expression for events per unit time.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Segmentation_Average extends Temboo_Choreography
{
    /**
     * Averages an expression for events per unit time.
     *
     * @param Temboo_Session $session The session that owns this Average Choreo.
     * @return Mixpanel_DataExport_Segmentation_Average New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/DataExport/Segmentation/Average/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Average Choreo.
     *
     * @param Mixpanel_DataExport_Segmentation_Average_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Segmentation_Average_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Segmentation_Average_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_DataExport_Segmentation_Average_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Average Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Segmentation_Average_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_DataExport_Segmentation_Average_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Average Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Segmentation_Average_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Average Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Segmentation_Average_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Average input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_DataExport_Segmentation_Average_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_DataExport_Segmentation_Average_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Average Choreo.
     *
     * @param string $value (required, string) The API Key provided my Mixpanel. You can find your Mixpanel API Key in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Segmentation_Average_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this Average Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Mixpanel. You can find your Mixpanel API Secret in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Segmentation_Average_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the EventName input for this Average Choreo.
     *
     * @param string $value (required, string) The event that you wish to segment on.
     * @return Mixpanel_DataExport_Segmentation_Average_Inputs For method chaining.
     */
    public function setEventName($value)
    {
        return $this->set('EventName', $value);
    }

    /**
     * Set the value for the Expire input for this Average Choreo.
     *
     * @param int $value (optional, integer) The amount of minutes past NOW() before the request will expire. Defaults to 1.
     * @return Mixpanel_DataExport_Segmentation_Average_Inputs For method chaining.
     */
    public function setExpire($value)
    {
        return $this->set('Expire', $value);
    }

    /**
     * Set the value for the FromDate input for this Average Choreo.
     *
     * @param string $value (required, date) The date in yyyy-mm-dd format from which to begin querying for the event from. This date is inclusive.
     * @return Mixpanel_DataExport_Segmentation_Average_Inputs For method chaining.
     */
    public function setFromDate($value)
    {
        return $this->set('FromDate', $value);
    }

    /**
     * Set the value for the On input for this Average Choreo.
     *
     * @param string $value (required, string) The expression to average per unit time. The result of the expression should be a numeric value (e.g., properties["time"]. See Choreo description for examples.
     * @return Mixpanel_DataExport_Segmentation_Average_Inputs For method chaining.
     */
    public function setOn($value)
    {
        return $this->set('On', $value);
    }

    /**
     * Set the value for the ToDate input for this Average Choreo.
     *
     * @param string $value (required, date) The date in yyyy-mm-dd format from which to stop querying for the event from. This date is inclusive. The date range may not be more than 30 days.
     * @return Mixpanel_DataExport_Segmentation_Average_Inputs For method chaining.
     */
    public function setToDate($value)
    {
        return $this->set('ToDate', $value);
    }

    /**
     * Set the value for the Unit input for this Average Choreo.
     *
     * @param string $value (optional, string) Determines the buckets into which the property values that you segment on are placed. Valid values are: hour or day.
     * @return Mixpanel_DataExport_Segmentation_Average_Inputs For method chaining.
     */
    public function setUnit($value)
    {
        return $this->set('Unit', $value);
    }

    /**
     * Set the value for the Where input for this Average Choreo.
     *
     * @param string $value (optional, string) An expression to filter events by  (e.g., properties["time"] >= 2000). See Choreo description for examples.
     * @return Mixpanel_DataExport_Segmentation_Average_Inputs For method chaining.
     */
    public function setWhere($value)
    {
        return $this->set('Where', $value);
    }
}


/**
 * Execution object for the Average Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Segmentation_Average_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Average Choreo.
     *
     * @param Temboo_Session $session The session that owns this Average execution.
     * @param Mixpanel_DataExport_Segmentation_Average $choreo The choreography object for this execution.
     * @param Mixpanel_DataExport_Segmentation_Average_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Segmentation_Average_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Segmentation_Average_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_DataExport_Segmentation_Average $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Average execution.
     *
     * @return Mixpanel_DataExport_Segmentation_Average_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Average execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_DataExport_Segmentation_Average_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_DataExport_Segmentation_Average_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Average Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Segmentation_Average_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Average Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_DataExport_Segmentation_Average_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Average execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets data for an event, segmented and filtered by properties, with values placed into numeric buckets.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Segmentation_Numeric extends Temboo_Choreography
{
    /**
     * Gets data for an event, segmented and filtered by properties, with values placed into numeric buckets.
     *
     * @param Temboo_Session $session The session that owns this Numeric Choreo.
     * @return Mixpanel_DataExport_Segmentation_Numeric New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/DataExport/Segmentation/Numeric/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Numeric Choreo.
     *
     * @param Mixpanel_DataExport_Segmentation_Numeric_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Segmentation_Numeric_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Segmentation_Numeric_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_DataExport_Segmentation_Numeric_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Numeric Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Segmentation_Numeric_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_DataExport_Segmentation_Numeric_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Numeric Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Segmentation_Numeric_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Numeric Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Segmentation_Numeric_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Numeric input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_DataExport_Segmentation_Numeric_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_DataExport_Segmentation_Numeric_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Numeric Choreo.
     *
     * @param string $value (required, string) The API Key provided my Mixpanel. You can find your Mixpanel API Key in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Segmentation_Numeric_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this Numeric Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Mixpanel. You can find your Mixpanel API Secret in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Segmentation_Numeric_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Buckets input for this Numeric Choreo.
     *
     * @param int $value (required, integer) The number of buckets that you wish to divide the numeric values up into. Bucket ranges are automatically computed based on the maximum and minimum of the 'On' expression.
     * @return Mixpanel_DataExport_Segmentation_Numeric_Inputs For method chaining.
     */
    public function setBuckets($value)
    {
        return $this->set('Buckets', $value);
    }

    /**
     * Set the value for the EventName input for this Numeric Choreo.
     *
     * @param string $value (required, string) The event that you wish to segment on.
     * @return Mixpanel_DataExport_Segmentation_Numeric_Inputs For method chaining.
     */
    public function setEventName($value)
    {
        return $this->set('EventName', $value);
    }

    /**
     * Set the value for the Expire input for this Numeric Choreo.
     *
     * @param int $value (optional, integer) The amount of minutes past NOW() before the request will expire. Defaults to 1.
     * @return Mixpanel_DataExport_Segmentation_Numeric_Inputs For method chaining.
     */
    public function setExpire($value)
    {
        return $this->set('Expire', $value);
    }

    /**
     * Set the value for the FromDate input for this Numeric Choreo.
     *
     * @param string $value (required, date) The date in yyyy-mm-dd format from which to begin querying for the event from. This date is inclusive.
     * @return Mixpanel_DataExport_Segmentation_Numeric_Inputs For method chaining.
     */
    public function setFromDate($value)
    {
        return $this->set('FromDate', $value);
    }

    /**
     * Set the value for the On input for this Numeric Choreo.
     *
     * @param string $value (required, string) The property expression to segment the event on. Must be a numeric expression (e.g., number(properties["time"]). See Choreo description for examples.
     * @return Mixpanel_DataExport_Segmentation_Numeric_Inputs For method chaining.
     */
    public function setOn($value)
    {
        return $this->set('On', $value);
    }

    /**
     * Set the value for the ToDate input for this Numeric Choreo.
     *
     * @param string $value (required, date) The date in yyyy-mm-dd format from which to stop querying for the event from. This date is inclusive.
     * @return Mixpanel_DataExport_Segmentation_Numeric_Inputs For method chaining.
     */
    public function setToDate($value)
    {
        return $this->set('ToDate', $value);
    }

    /**
     * Set the value for the Type input for this Numeric Choreo.
     *
     * @param string $value (optional, string) The analysis type you would like to get data for. Valid values are: general, unique, or average
     * @return Mixpanel_DataExport_Segmentation_Numeric_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the Unit input for this Numeric Choreo.
     *
     * @param string $value (optional, string) Determines the buckets into which the property values that you segment on are placed. Valid values are: hour or day.
     * @return Mixpanel_DataExport_Segmentation_Numeric_Inputs For method chaining.
     */
    public function setUnit($value)
    {
        return $this->set('Unit', $value);
    }

    /**
     * Set the value for the Where input for this Numeric Choreo.
     *
     * @param string $value (optional, string) An expression to filter events by  (e.g., number(properties["time"]) >= 2000). See Choreo description for examples.
     * @return Mixpanel_DataExport_Segmentation_Numeric_Inputs For method chaining.
     */
    public function setWhere($value)
    {
        return $this->set('Where', $value);
    }
}


/**
 * Execution object for the Numeric Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Segmentation_Numeric_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Numeric Choreo.
     *
     * @param Temboo_Session $session The session that owns this Numeric execution.
     * @param Mixpanel_DataExport_Segmentation_Numeric $choreo The choreography object for this execution.
     * @param Mixpanel_DataExport_Segmentation_Numeric_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Segmentation_Numeric_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Segmentation_Numeric_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_DataExport_Segmentation_Numeric $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Numeric execution.
     *
     * @return Mixpanel_DataExport_Segmentation_Numeric_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Numeric execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_DataExport_Segmentation_Numeric_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_DataExport_Segmentation_Numeric_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Numeric Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Segmentation_Numeric_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Numeric Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_DataExport_Segmentation_Numeric_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Numeric execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets data for an event, segmented and filtered by properties.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Segmentation_SegmentationData extends Temboo_Choreography
{
    /**
     * Gets data for an event, segmented and filtered by properties.
     *
     * @param Temboo_Session $session The session that owns this SegmentationData Choreo.
     * @return Mixpanel_DataExport_Segmentation_SegmentationData New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/DataExport/Segmentation/SegmentationData/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SegmentationData Choreo.
     *
     * @param Mixpanel_DataExport_Segmentation_SegmentationData_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Segmentation_SegmentationData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_DataExport_Segmentation_SegmentationData_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SegmentationData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_DataExport_Segmentation_SegmentationData_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SegmentationData Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Segmentation_SegmentationData_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SegmentationData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SegmentationData input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SegmentationData Choreo.
     *
     * @param string $value (required, string) The API Key provided my Mixpanel. You can find your Mixpanel API Key in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this SegmentationData Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Mixpanel. You can find your Mixpanel API Secret in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the EventName input for this SegmentationData Choreo.
     *
     * @param string $value (required, string) The event that you wish to segment on.
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Inputs For method chaining.
     */
    public function setEventName($value)
    {
        return $this->set('EventName', $value);
    }

    /**
     * Set the value for the Expire input for this SegmentationData Choreo.
     *
     * @param int $value (optional, integer) The amount of minutes past NOW() before the request will expire. Defaults to 1.
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Inputs For method chaining.
     */
    public function setExpire($value)
    {
        return $this->set('Expire', $value);
    }

    /**
     * Set the value for the FromDate input for this SegmentationData Choreo.
     *
     * @param string $value (required, date) The date in yyyy-mm-dd format from which to begin querying for the event from. This date is inclusive.
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Inputs For method chaining.
     */
    public function setFromDate($value)
    {
        return $this->set('FromDate', $value);
    }

    /**
     * Set the value for the Limit input for this SegmentationData Choreo.
     *
     * @param int $value (optional, integer) Return the top limit property values. This parameter is ignored if the On input is not specified.
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the On input for this SegmentationData Choreo.
     *
     * @param string $value (optional, string) The property expression to segment the event on (e.g., properties["Referred By"] == "Friend"). See Choreo description for examples.
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Inputs For method chaining.
     */
    public function setOn($value)
    {
        return $this->set('On', $value);
    }

    /**
     * Set the value for the ToDate input for this SegmentationData Choreo.
     *
     * @param string $value (required, date) The date in yyyy-mm-dd format from which to stop querying for the event from. This date is inclusive.
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Inputs For method chaining.
     */
    public function setToDate($value)
    {
        return $this->set('ToDate', $value);
    }

    /**
     * Set the value for the Type input for this SegmentationData Choreo.
     *
     * @param string $value (optional, string) The analysis type you would like to get data for. Valid values are: general, unique, or average
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the Unit input for this SegmentationData Choreo.
     *
     * @param string $value (optional, string) Determines the buckets into which the property values that you segment on are placed. Valid values are: minute, hour, day (the default), or month.
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Inputs For method chaining.
     */
    public function setUnit($value)
    {
        return $this->set('Unit', $value);
    }

    /**
     * Set the value for the Where input for this SegmentationData Choreo.
     *
     * @param string $value (optional, string) An expression to filter events by  (e.g., properties["Signed Up"]). See Choreo description for examples.
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Inputs For method chaining.
     */
    public function setWhere($value)
    {
        return $this->set('Where', $value);
    }
}


/**
 * Execution object for the SegmentationData Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Segmentation_SegmentationData_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SegmentationData Choreo.
     *
     * @param Temboo_Session $session The session that owns this SegmentationData execution.
     * @param Mixpanel_DataExport_Segmentation_SegmentationData $choreo The choreography object for this execution.
     * @param Mixpanel_DataExport_Segmentation_SegmentationData_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Segmentation_SegmentationData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_DataExport_Segmentation_SegmentationData $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SegmentationData execution.
     *
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this SegmentationData execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_DataExport_Segmentation_SegmentationData_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SegmentationData Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Segmentation_SegmentationData_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SegmentationData Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_DataExport_Segmentation_SegmentationData_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SegmentationData execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Sums an expression for events per unit time.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Segmentation_Sum extends Temboo_Choreography
{
    /**
     * Sums an expression for events per unit time.
     *
     * @param Temboo_Session $session The session that owns this Sum Choreo.
     * @return Mixpanel_DataExport_Segmentation_Sum New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/DataExport/Segmentation/Sum/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Sum Choreo.
     *
     * @param Mixpanel_DataExport_Segmentation_Sum_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Segmentation_Sum_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Segmentation_Sum_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_DataExport_Segmentation_Sum_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Sum Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Segmentation_Sum_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_DataExport_Segmentation_Sum_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Sum Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Segmentation_Sum_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Sum Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_DataExport_Segmentation_Sum_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Sum input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_DataExport_Segmentation_Sum_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_DataExport_Segmentation_Sum_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Sum Choreo.
     *
     * @param string $value (required, string) The API Key provided my Mixpanel. You can find your Mixpanel API Key in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Segmentation_Sum_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this Sum Choreo.
     *
     * @param string $value (required, string) The API Secret provided by Mixpanel. You can find your Mixpanel API Secret in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_DataExport_Segmentation_Sum_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the EventName input for this Sum Choreo.
     *
     * @param string $value (required, string) The event that you wish to segment on.
     * @return Mixpanel_DataExport_Segmentation_Sum_Inputs For method chaining.
     */
    public function setEventName($value)
    {
        return $this->set('EventName', $value);
    }

    /**
     * Set the value for the Expire input for this Sum Choreo.
     *
     * @param int $value (optional, integer) The amount of minutes past NOW() before the request will expire. Defaults to 1.
     * @return Mixpanel_DataExport_Segmentation_Sum_Inputs For method chaining.
     */
    public function setExpire($value)
    {
        return $this->set('Expire', $value);
    }

    /**
     * Set the value for the FromDate input for this Sum Choreo.
     *
     * @param string $value (required, date) The date in yyyy-mm-dd format from which to begin querying for the event from. This date is inclusive.
     * @return Mixpanel_DataExport_Segmentation_Sum_Inputs For method chaining.
     */
    public function setFromDate($value)
    {
        return $this->set('FromDate', $value);
    }

    /**
     * Set the value for the On input for this Sum Choreo.
     *
     * @param string $value (required, string) The expression to sum per unit time. Must be a numeric expression (e.g., number(properties["time"]). See Choreo description for examples.
     * @return Mixpanel_DataExport_Segmentation_Sum_Inputs For method chaining.
     */
    public function setOn($value)
    {
        return $this->set('On', $value);
    }

    /**
     * Set the value for the ToDate input for this Sum Choreo.
     *
     * @param string $value (required, date) The date in yyyy-mm-dd format from which to stop querying for the event from. This date is inclusive. The date range may not be more than 30 days.
     * @return Mixpanel_DataExport_Segmentation_Sum_Inputs For method chaining.
     */
    public function setToDate($value)
    {
        return $this->set('ToDate', $value);
    }

    /**
     * Set the value for the Unit input for this Sum Choreo.
     *
     * @param string $value (optional, string) Determines the buckets into which the property values that you segment on are placed. Valid values are: hour or day.
     * @return Mixpanel_DataExport_Segmentation_Sum_Inputs For method chaining.
     */
    public function setUnit($value)
    {
        return $this->set('Unit', $value);
    }

    /**
     * Set the value for the Where input for this Sum Choreo.
     *
     * @param string $value (optional, string) An expression to filter events by  (e.g., number(properties["time"]) >= 2000). See Choreo description for examples.
     * @return Mixpanel_DataExport_Segmentation_Sum_Inputs For method chaining.
     */
    public function setWhere($value)
    {
        return $this->set('Where', $value);
    }
}


/**
 * Execution object for the Sum Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Segmentation_Sum_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Sum Choreo.
     *
     * @param Temboo_Session $session The session that owns this Sum execution.
     * @param Mixpanel_DataExport_Segmentation_Sum $choreo The choreography object for this execution.
     * @param Mixpanel_DataExport_Segmentation_Sum_Inputs|array $inputs (optional) Inputs as Mixpanel_DataExport_Segmentation_Sum_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_DataExport_Segmentation_Sum_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_DataExport_Segmentation_Sum $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Sum execution.
     *
     * @return Mixpanel_DataExport_Segmentation_Sum_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Sum execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_DataExport_Segmentation_Sum_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_DataExport_Segmentation_Sum_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Sum Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_DataExport_Segmentation_Sum_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Sum Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_DataExport_Segmentation_Sum_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Sum execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Records an event in Mixpanel.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Events_Track extends Temboo_Choreography
{
    /**
     * Records an event in Mixpanel.
     *
     * @param Temboo_Session $session The session that owns this Track Choreo.
     * @return Mixpanel_Events_Track New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/Events/Track/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Track Choreo.
     *
     * @param Mixpanel_Events_Track_Inputs|array $inputs (optional) Inputs as Mixpanel_Events_Track_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_Events_Track_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_Events_Track_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Track Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_Events_Track_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_Events_Track_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Track Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Events_Track_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Track Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_Events_Track_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Track input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_Events_Track_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_Events_Track_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DistinctID input for this Track Choreo.
     *
     * @param string $value (optional, string) Used to uniquely identify a user associated with your event. When provided, you can track a given user through funnels and distinguish unique users for retention analyses.
     * @return Mixpanel_Events_Track_Inputs For method chaining.
     */
    public function setDistinctID($value)
    {
        return $this->set('DistinctID', $value);
    }

    /**
     * Set the value for the EventName input for this Track Choreo.
     *
     * @param string $value (required, string) A name for the event (e.g., Signed Up, Uploaded Photo, etc).
     * @return Mixpanel_Events_Track_Inputs For method chaining.
     */
    public function setEventName($value)
    {
        return $this->set('EventName', $value);
    }

    /**
     * Set the value for the EventProperties input for this Track Choreo.
     *
     * @param string $value (optional, json) Additional properties associated with the event formatted as name/value pairs in a JSON object. These properties can be used for segmentation and funnels.
     * @return Mixpanel_Events_Track_Inputs For method chaining.
     */
    public function setEventProperties($value)
    {
        return $this->set('EventProperties', $value);
    }

    /**
     * Set the value for the IP input for this Track Choreo.
     *
     * @param string $value (optional, string) An IP address string associated with the event (e.g., 127.0.0.1). When set to 0 (the default) Mixpanel will ignore IP information.
     * @return Mixpanel_Events_Track_Inputs For method chaining.
     */
    public function setIP($value)
    {
        return $this->set('IP', $value);
    }

    /**
     * Set the value for the Time input for this Track Choreo.
     *
     * @param string $value (optional, date) A unix timestamp representing the time the event occurred. If not provided, Mixpanel will use the time the event arrives at the server.
     * @return Mixpanel_Events_Track_Inputs For method chaining.
     */
    public function setTime($value)
    {
        return $this->set('Time', $value);
    }

    /**
     * Set the value for the Token input for this Track Choreo.
     *
     * @param string $value (required, string) The token provided by Mixpanel. You can find your Mixpanel token in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_Events_Track_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Verbose input for this Track Choreo.
     *
     * @param bool $value (optional, boolean) When set to 1, the response will contain more information describing the success or failure of the tracking call.
     * @return Mixpanel_Events_Track_Inputs For method chaining.
     */
    public function setVerbose($value)
    {
        return $this->set('Verbose', $value);
    }
}


/**
 * Execution object for the Track Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Events_Track_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Track Choreo.
     *
     * @param Temboo_Session $session The session that owns this Track execution.
     * @param Mixpanel_Events_Track $choreo The choreography object for this execution.
     * @param Mixpanel_Events_Track_Inputs|array $inputs (optional) Inputs as Mixpanel_Events_Track_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_Events_Track_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_Events_Track $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Track execution.
     *
     * @return Mixpanel_Events_Track_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Track execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_Events_Track_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_Events_Track_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Track Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Events_Track_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Track Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_Events_Track_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Track execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds or subtracts a value from an existing numeric property value.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Add extends Temboo_Choreography
{
    /**
     * Adds or subtracts a value from an existing numeric property value.
     *
     * @param Temboo_Session $session The session that owns this Add Choreo.
     * @return Mixpanel_Profiles_Add New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/Profiles/Add/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Add Choreo.
     *
     * @param Mixpanel_Profiles_Add_Inputs|array $inputs (optional) Inputs as Mixpanel_Profiles_Add_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_Profiles_Add_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_Profiles_Add_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Add Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_Profiles_Add_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_Profiles_Add_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Add Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Add_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Add Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_Profiles_Add_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Add input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_Profiles_Add_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_Profiles_Add_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DistinctID input for this Add Choreo.
     *
     * @param string $value (required, string) Used to uniquely identify the profile you want to update.
     * @return Mixpanel_Profiles_Add_Inputs For method chaining.
     */
    public function setDistinctID($value)
    {
        return $this->set('DistinctID', $value);
    }

    /**
     * Set the value for the IP input for this Add Choreo.
     *
     * @param string $value (optional, string) An IP address string associated with the profile (e.g., 127.0.0.1). When set to 0 (the default) Mixpanel will ignore IP information.
     * @return Mixpanel_Profiles_Add_Inputs For method chaining.
     */
    public function setIP($value)
    {
        return $this->set('IP', $value);
    }

    /**
     * Set the value for the IgnoreTime input for this Add Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, Mixpanel will not automatically update the "Last Seen" property of the profile. Otherwise, Mixpanel will add a "Last Seen" property associated with any set, append, or add requests.
     * @return Mixpanel_Profiles_Add_Inputs For method chaining.
     */
    public function setIgnoreTime($value)
    {
        return $this->set('IgnoreTime', $value);
    }

    /**
     * Set the value for the ProfileProperties input for this Add Choreo.
     *
     * @param string $value (conditional, json) A JSON object containing names and values of custom profile properties. The current value will be added to any existing property value. If the property doesn't exist, the value will be added to 0.
     * @return Mixpanel_Profiles_Add_Inputs For method chaining.
     */
    public function setProfileProperties($value)
    {
        return $this->set('ProfileProperties', $value);
    }

    /**
     * Set the value for the Time input for this Add Choreo.
     *
     * @param string $value (optional, date) A unix timestamp representing the time of the profile update. If not provided, Mixpanel will use the time the update arrives at the server.
     * @return Mixpanel_Profiles_Add_Inputs For method chaining.
     */
    public function setTime($value)
    {
        return $this->set('Time', $value);
    }

    /**
     * Set the value for the Token input for this Add Choreo.
     *
     * @param string $value (required, string) The token provided by Mixpanel. You can find your Mixpanel token in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_Profiles_Add_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Verbose input for this Add Choreo.
     *
     * @param bool $value (optional, boolean) When set to 1, the response will contain more information describing the success or failure of the tracking call.
     * @return Mixpanel_Profiles_Add_Inputs For method chaining.
     */
    public function setVerbose($value)
    {
        return $this->set('Verbose', $value);
    }
}


/**
 * Execution object for the Add Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Add_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Add Choreo.
     *
     * @param Temboo_Session $session The session that owns this Add execution.
     * @param Mixpanel_Profiles_Add $choreo The choreography object for this execution.
     * @param Mixpanel_Profiles_Add_Inputs|array $inputs (optional) Inputs as Mixpanel_Profiles_Add_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_Profiles_Add_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_Profiles_Add $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Add execution.
     *
     * @return Mixpanel_Profiles_Add_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Add execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_Profiles_Add_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_Profiles_Add_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Add Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Add_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Add Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_Profiles_Add_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Add execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Appends a value to a list property on a profile.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Append extends Temboo_Choreography
{
    /**
     * Appends a value to a list property on a profile.
     *
     * @param Temboo_Session $session The session that owns this Append Choreo.
     * @return Mixpanel_Profiles_Append New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/Profiles/Append/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Append Choreo.
     *
     * @param Mixpanel_Profiles_Append_Inputs|array $inputs (optional) Inputs as Mixpanel_Profiles_Append_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_Profiles_Append_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_Profiles_Append_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Append Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_Profiles_Append_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_Profiles_Append_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Append Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Append_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Append Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_Profiles_Append_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Append input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_Profiles_Append_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_Profiles_Append_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DistinctID input for this Append Choreo.
     *
     * @param string $value (required, string) Used to uniquely identify the profile you want to update.
     * @return Mixpanel_Profiles_Append_Inputs For method chaining.
     */
    public function setDistinctID($value)
    {
        return $this->set('DistinctID', $value);
    }

    /**
     * Set the value for the IP input for this Append Choreo.
     *
     * @param string $value (optional, string) An IP address string associated with the profile (e.g., 127.0.0.1). When set to 0 (the default) Mixpanel will ignore IP information.
     * @return Mixpanel_Profiles_Append_Inputs For method chaining.
     */
    public function setIP($value)
    {
        return $this->set('IP', $value);
    }

    /**
     * Set the value for the IgnoreTime input for this Append Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, Mixpanel will not automatically update the "Last Seen" property of the profile. Otherwise, Mixpanel will add a "Last Seen" property associated with any set, append, or add requests.
     * @return Mixpanel_Profiles_Append_Inputs For method chaining.
     */
    public function setIgnoreTime($value)
    {
        return $this->set('IgnoreTime', $value);
    }

    /**
     * Set the value for the ProfileProperties input for this Append Choreo.
     *
     * @param string $value (conditional, json) A JSON object containing a name/value pair representing a list name and value. The current value will be appended to any existing lists. If the list doesn't exist, it will be created.
     * @return Mixpanel_Profiles_Append_Inputs For method chaining.
     */
    public function setProfileProperties($value)
    {
        return $this->set('ProfileProperties', $value);
    }

    /**
     * Set the value for the Time input for this Append Choreo.
     *
     * @param string $value (optional, date) A unix timestamp representing the time of the profile update. If not provided, Mixpanel will use the time the update arrives at the server.
     * @return Mixpanel_Profiles_Append_Inputs For method chaining.
     */
    public function setTime($value)
    {
        return $this->set('Time', $value);
    }

    /**
     * Set the value for the Token input for this Append Choreo.
     *
     * @param string $value (required, string) The token provided by Mixpanel. You can find your Mixpanel token in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_Profiles_Append_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Verbose input for this Append Choreo.
     *
     * @param bool $value (optional, boolean) When set to 1, the response will contain more information describing the success or failure of the tracking call.
     * @return Mixpanel_Profiles_Append_Inputs For method chaining.
     */
    public function setVerbose($value)
    {
        return $this->set('Verbose', $value);
    }
}


/**
 * Execution object for the Append Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Append_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Append Choreo.
     *
     * @param Temboo_Session $session The session that owns this Append execution.
     * @param Mixpanel_Profiles_Append $choreo The choreography object for this execution.
     * @param Mixpanel_Profiles_Append_Inputs|array $inputs (optional) Inputs as Mixpanel_Profiles_Append_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_Profiles_Append_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_Profiles_Append $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Append execution.
     *
     * @return Mixpanel_Profiles_Append_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Append execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_Profiles_Append_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_Profiles_Append_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Append Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Append_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Append Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_Profiles_Append_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Append execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Permanently deletes the profile from Mixpanel, along with all of its properties.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Delete extends Temboo_Choreography
{
    /**
     * Permanently deletes the profile from Mixpanel, along with all of its properties.
     *
     * @param Temboo_Session $session The session that owns this Delete Choreo.
     * @return Mixpanel_Profiles_Delete New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/Profiles/Delete/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Delete Choreo.
     *
     * @param Mixpanel_Profiles_Delete_Inputs|array $inputs (optional) Inputs as Mixpanel_Profiles_Delete_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_Profiles_Delete_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_Profiles_Delete_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Delete Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_Profiles_Delete_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_Profiles_Delete_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Delete Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Delete_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Delete Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_Profiles_Delete_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Delete input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_Profiles_Delete_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_Profiles_Delete_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DistinctID input for this Delete Choreo.
     *
     * @param string $value (required, string) Used to uniquely identify the profile you want to update.
     * @return Mixpanel_Profiles_Delete_Inputs For method chaining.
     */
    public function setDistinctID($value)
    {
        return $this->set('DistinctID', $value);
    }

    /**
     * Set the value for the Token input for this Delete Choreo.
     *
     * @param string $value (required, string) The token provided by Mixpanel. You can find your Mixpanel token in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_Profiles_Delete_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Verbose input for this Delete Choreo.
     *
     * @param bool $value (optional, boolean) When set to 1, the response will contain more information describing the success or failure of the tracking call.
     * @return Mixpanel_Profiles_Delete_Inputs For method chaining.
     */
    public function setVerbose($value)
    {
        return $this->set('Verbose', $value);
    }
}


/**
 * Execution object for the Delete Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Delete_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Delete Choreo.
     *
     * @param Temboo_Session $session The session that owns this Delete execution.
     * @param Mixpanel_Profiles_Delete $choreo The choreography object for this execution.
     * @param Mixpanel_Profiles_Delete_Inputs|array $inputs (optional) Inputs as Mixpanel_Profiles_Delete_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_Profiles_Delete_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_Profiles_Delete $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Delete execution.
     *
     * @return Mixpanel_Profiles_Delete_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Delete execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_Profiles_Delete_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_Profiles_Delete_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Delete Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Delete_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Delete Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_Profiles_Delete_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Delete execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Sets the properties of a profile.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Set extends Temboo_Choreography
{
    /**
     * Sets the properties of a profile.
     *
     * @param Temboo_Session $session The session that owns this Set Choreo.
     * @return Mixpanel_Profiles_Set New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/Profiles/Set/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Set Choreo.
     *
     * @param Mixpanel_Profiles_Set_Inputs|array $inputs (optional) Inputs as Mixpanel_Profiles_Set_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_Profiles_Set_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_Profiles_Set_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Set Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_Profiles_Set_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_Profiles_Set_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Set Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Set_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Set Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_Profiles_Set_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Set input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_Profiles_Set_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_Profiles_Set_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the City input for this Set Choreo.
     *
     * @param string $value (optional, string) The city associated with the user's location.
     * @return Mixpanel_Profiles_Set_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the Created input for this Set Choreo.
     *
     * @param string $value (optional, date) The time when the user created their account. This should be expressed as YYYY-MM-DDThh:mm:ss.
     * @return Mixpanel_Profiles_Set_Inputs For method chaining.
     */
    public function setCreated($value)
    {
        return $this->set('Created', $value);
    }

    /**
     * Set the value for the DistinctID input for this Set Choreo.
     *
     * @param string $value (required, string) Used to uniquely identify the profile you want to update.
     * @return Mixpanel_Profiles_Set_Inputs For method chaining.
     */
    public function setDistinctID($value)
    {
        return $this->set('DistinctID', $value);
    }

    /**
     * Set the value for the Email input for this Set Choreo.
     *
     * @param string $value (optional, string) The user's email address. Mixpanel can use this property when sending email notifications to your users.
     * @return Mixpanel_Profiles_Set_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the FirstName input for this Set Choreo.
     *
     * @param string $value (optional, string) The first name of the user represented the profile.
     * @return Mixpanel_Profiles_Set_Inputs For method chaining.
     */
    public function setFirstName($value)
    {
        return $this->set('FirstName', $value);
    }

    /**
     * Set the value for the IP input for this Set Choreo.
     *
     * @param string $value (optional, string) An IP address string associated with the profile (e.g., 127.0.0.1). When set to 0 (the default) Mixpanel will ignore IP information.
     * @return Mixpanel_Profiles_Set_Inputs For method chaining.
     */
    public function setIP($value)
    {
        return $this->set('IP', $value);
    }

    /**
     * Set the value for the IgnoreTime input for this Set Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, Mixpanel will not automatically update the "Last Seen" property of the profile. Otherwise, Mixpanel will add a "Last Seen" property associated with any set, append, or add requests.
     * @return Mixpanel_Profiles_Set_Inputs For method chaining.
     */
    public function setIgnoreTime($value)
    {
        return $this->set('IgnoreTime', $value);
    }

    /**
     * Set the value for the LastName input for this Set Choreo.
     *
     * @param string $value (optional, string) The last name of the user representing the profile.
     * @return Mixpanel_Profiles_Set_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the Name input for this Set Choreo.
     *
     * @param string $value (optional, string) The full name of the user. This can be used as an alternative to FirstName and LastName.
     * @return Mixpanel_Profiles_Set_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the Phone input for this Set Choreo.
     *
     * @param string $value (optional, string) The user's phone number (e.g., 4805551212). Mixpanel can use this property when sending SMS messages to your users.
     * @return Mixpanel_Profiles_Set_Inputs For method chaining.
     */
    public function setPhone($value)
    {
        return $this->set('Phone', $value);
    }

    /**
     * Set the value for the ProfileProperties input for this Set Choreo.
     *
     * @param string $value (optional, json) A JSON object containing names and values of custom profile properties. Note that properties that exist already will be overwritten.
     * @return Mixpanel_Profiles_Set_Inputs For method chaining.
     */
    public function setProfileProperties($value)
    {
        return $this->set('ProfileProperties', $value);
    }

    /**
     * Set the value for the Region input for this Set Choreo.
     *
     * @param string $value (optional, string) The region associated with a user's location.
     * @return Mixpanel_Profiles_Set_Inputs For method chaining.
     */
    public function setRegion($value)
    {
        return $this->set('Region', $value);
    }

    /**
     * Set the value for the Time input for this Set Choreo.
     *
     * @param string $value (optional, date) A unix timestamp representing the time of the profile update. If not provided, Mixpanel will use the time the update arrives at the server.
     * @return Mixpanel_Profiles_Set_Inputs For method chaining.
     */
    public function setTime($value)
    {
        return $this->set('Time', $value);
    }

    /**
     * Set the value for the Timezone input for this Set Choreo.
     *
     * @param string $value (optional, string) The timezone associated with a user's location.
     * @return Mixpanel_Profiles_Set_Inputs For method chaining.
     */
    public function setTimezone($value)
    {
        return $this->set('Timezone', $value);
    }

    /**
     * Set the value for the Token input for this Set Choreo.
     *
     * @param string $value (required, string) The token provided by Mixpanel. You can find your Mixpanel token in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_Profiles_Set_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Verbose input for this Set Choreo.
     *
     * @param bool $value (optional, boolean) When set to 1, the response will contain more information describing the success or failure of the tracking call.
     * @return Mixpanel_Profiles_Set_Inputs For method chaining.
     */
    public function setVerbose($value)
    {
        return $this->set('Verbose', $value);
    }
}


/**
 * Execution object for the Set Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Set_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Set Choreo.
     *
     * @param Temboo_Session $session The session that owns this Set execution.
     * @param Mixpanel_Profiles_Set $choreo The choreography object for this execution.
     * @param Mixpanel_Profiles_Set_Inputs|array $inputs (optional) Inputs as Mixpanel_Profiles_Set_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_Profiles_Set_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_Profiles_Set $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Set execution.
     *
     * @return Mixpanel_Profiles_Set_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Set execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_Profiles_Set_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_Profiles_Set_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Set Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Set_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Set Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_Profiles_Set_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Set execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Sets the properties of a profile, but will not overwrite existing properties.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_SetOnce extends Temboo_Choreography
{
    /**
     * Sets the properties of a profile, but will not overwrite existing properties.
     *
     * @param Temboo_Session $session The session that owns this SetOnce Choreo.
     * @return Mixpanel_Profiles_SetOnce New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/Profiles/SetOnce/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SetOnce Choreo.
     *
     * @param Mixpanel_Profiles_SetOnce_Inputs|array $inputs (optional) Inputs as Mixpanel_Profiles_SetOnce_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_Profiles_SetOnce_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_Profiles_SetOnce_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SetOnce Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_Profiles_SetOnce_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_Profiles_SetOnce_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SetOnce Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_SetOnce_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SetOnce Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_Profiles_SetOnce_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SetOnce input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_Profiles_SetOnce_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_Profiles_SetOnce_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DistinctID input for this SetOnce Choreo.
     *
     * @param string $value (required, string) Used to uniquely identify the profile you want to update.
     * @return Mixpanel_Profiles_SetOnce_Inputs For method chaining.
     */
    public function setDistinctID($value)
    {
        return $this->set('DistinctID', $value);
    }

    /**
     * Set the value for the IP input for this SetOnce Choreo.
     *
     * @param string $value (optional, string) An IP address string associated with the profile (e.g., 127.0.0.1). When set to 0 (the default) Mixpanel will ignore IP information.
     * @return Mixpanel_Profiles_SetOnce_Inputs For method chaining.
     */
    public function setIP($value)
    {
        return $this->set('IP', $value);
    }

    /**
     * Set the value for the IgnoreTime input for this SetOnce Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, Mixpanel will not automatically update the "Last Seen" property of the profile. Otherwise, Mixpanel will add a "Last Seen" property associated with any set, append, or add requests.
     * @return Mixpanel_Profiles_SetOnce_Inputs For method chaining.
     */
    public function setIgnoreTime($value)
    {
        return $this->set('IgnoreTime', $value);
    }

    /**
     * Set the value for the ProfileProperties input for this SetOnce Choreo.
     *
     * @param string $value (conditional, json) A JSON object containing names and values of custom profile properties. Note that properties existing already will not be overwritten.
     * @return Mixpanel_Profiles_SetOnce_Inputs For method chaining.
     */
    public function setProfileProperties($value)
    {
        return $this->set('ProfileProperties', $value);
    }

    /**
     * Set the value for the Time input for this SetOnce Choreo.
     *
     * @param string $value (optional, date) A unix timestamp representing the time of the profile update. If not provided, Mixpanel will use the time the update arrives at the server.
     * @return Mixpanel_Profiles_SetOnce_Inputs For method chaining.
     */
    public function setTime($value)
    {
        return $this->set('Time', $value);
    }

    /**
     * Set the value for the Token input for this SetOnce Choreo.
     *
     * @param string $value (required, string) The token provided by Mixpanel. You can find your Mixpanel token in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_Profiles_SetOnce_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Verbose input for this SetOnce Choreo.
     *
     * @param bool $value (optional, boolean) When set to 1, the response will contain more information describing the success or failure of the tracking call.
     * @return Mixpanel_Profiles_SetOnce_Inputs For method chaining.
     */
    public function setVerbose($value)
    {
        return $this->set('Verbose', $value);
    }
}


/**
 * Execution object for the SetOnce Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_SetOnce_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SetOnce Choreo.
     *
     * @param Temboo_Session $session The session that owns this SetOnce execution.
     * @param Mixpanel_Profiles_SetOnce $choreo The choreography object for this execution.
     * @param Mixpanel_Profiles_SetOnce_Inputs|array $inputs (optional) Inputs as Mixpanel_Profiles_SetOnce_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_Profiles_SetOnce_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_Profiles_SetOnce $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SetOnce execution.
     *
     * @return Mixpanel_Profiles_SetOnce_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this SetOnce execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_Profiles_SetOnce_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_Profiles_SetOnce_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SetOnce Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_SetOnce_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SetOnce Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_Profiles_SetOnce_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SetOnce execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Appends transaction data to a profile.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Transaction extends Temboo_Choreography
{
    /**
     * Appends transaction data to a profile.
     *
     * @param Temboo_Session $session The session that owns this Transaction Choreo.
     * @return Mixpanel_Profiles_Transaction New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/Profiles/Transaction/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Transaction Choreo.
     *
     * @param Mixpanel_Profiles_Transaction_Inputs|array $inputs (optional) Inputs as Mixpanel_Profiles_Transaction_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_Profiles_Transaction_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_Profiles_Transaction_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Transaction Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_Profiles_Transaction_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_Profiles_Transaction_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Transaction Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Transaction_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Transaction Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_Profiles_Transaction_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Transaction input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_Profiles_Transaction_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_Profiles_Transaction_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DistinctID input for this Transaction Choreo.
     *
     * @param string $value (required, string) Used to uniquely identify the profile you want to update.
     * @return Mixpanel_Profiles_Transaction_Inputs For method chaining.
     */
    public function setDistinctID($value)
    {
        return $this->set('DistinctID', $value);
    }

    /**
     * Set the value for the IP input for this Transaction Choreo.
     *
     * @param string $value (optional, string) An IP address string associated with the profile (e.g., 127.0.0.1). When set to 0 (the default) Mixpanel will ignore IP information.
     * @return Mixpanel_Profiles_Transaction_Inputs For method chaining.
     */
    public function setIP($value)
    {
        return $this->set('IP', $value);
    }

    /**
     * Set the value for the IgnoreTime input for this Transaction Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, Mixpanel will not automatically update the "Last Seen" property of the profile. Otherwise, Mixpanel will add a "Last Seen" property associated with any set, append, or add requests.
     * @return Mixpanel_Profiles_Transaction_Inputs For method chaining.
     */
    public function setIgnoreTime($value)
    {
        return $this->set('IgnoreTime', $value);
    }

    /**
     * Set the value for the Time input for this Transaction Choreo.
     *
     * @param string $value (optional, date) A unix timestamp representing the time of the profile update. If not provided, Mixpanel will use the time the update arrives at the server.
     * @return Mixpanel_Profiles_Transaction_Inputs For method chaining.
     */
    public function setTime($value)
    {
        return $this->set('Time', $value);
    }

    /**
     * Set the value for the Token input for this Transaction Choreo.
     *
     * @param string $value (required, string) The token provided by Mixpanel. You can find your Mixpanel token in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_Profiles_Transaction_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the TransactionAmount input for this Transaction Choreo.
     *
     * @param float $value (required, decimal) The amount of the transaction.
     * @return Mixpanel_Profiles_Transaction_Inputs For method chaining.
     */
    public function setTransactionAmount($value)
    {
        return $this->set('TransactionAmount', $value);
    }

    /**
     * Set the value for the TransactionProperties input for this Transaction Choreo.
     *
     * @param string $value (optional, json) A JSON object containing any transaction properties you wish to set (e.g. SKU, Product Name, etc).
     * @return Mixpanel_Profiles_Transaction_Inputs For method chaining.
     */
    public function setTransactionProperties($value)
    {
        return $this->set('TransactionProperties', $value);
    }

    /**
     * Set the value for the TransactionTime input for this Transaction Choreo.
     *
     * @param string $value (conditional, date) The time of the transaction (e.g., 2013-01-03T09:00:00). If this isn't provided, the current time in UTC is specified.
     * @return Mixpanel_Profiles_Transaction_Inputs For method chaining.
     */
    public function setTransactionTime($value)
    {
        return $this->set('TransactionTime', $value);
    }

    /**
     * Set the value for the Verbose input for this Transaction Choreo.
     *
     * @param bool $value (optional, boolean) When set to 1, the response will contain more information describing the success or failure of the tracking call.
     * @return Mixpanel_Profiles_Transaction_Inputs For method chaining.
     */
    public function setVerbose($value)
    {
        return $this->set('Verbose', $value);
    }
}


/**
 * Execution object for the Transaction Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Transaction_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Transaction Choreo.
     *
     * @param Temboo_Session $session The session that owns this Transaction execution.
     * @param Mixpanel_Profiles_Transaction $choreo The choreography object for this execution.
     * @param Mixpanel_Profiles_Transaction_Inputs|array $inputs (optional) Inputs as Mixpanel_Profiles_Transaction_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_Profiles_Transaction_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_Profiles_Transaction $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Transaction execution.
     *
     * @return Mixpanel_Profiles_Transaction_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Transaction execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_Profiles_Transaction_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_Profiles_Transaction_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Transaction Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Transaction_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Transaction Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_Profiles_Transaction_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Transaction execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Merges list values with an existing list on a profile.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Union extends Temboo_Choreography
{
    /**
     * Merges list values with an existing list on a profile.
     *
     * @param Temboo_Session $session The session that owns this Union Choreo.
     * @return Mixpanel_Profiles_Union New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/Profiles/Union/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Union Choreo.
     *
     * @param Mixpanel_Profiles_Union_Inputs|array $inputs (optional) Inputs as Mixpanel_Profiles_Union_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_Profiles_Union_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_Profiles_Union_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Union Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_Profiles_Union_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_Profiles_Union_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Union Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Union_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Union Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_Profiles_Union_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Union input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_Profiles_Union_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_Profiles_Union_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DistinctID input for this Union Choreo.
     *
     * @param string $value (required, string) Used to uniquely identify the profile you want to update.
     * @return Mixpanel_Profiles_Union_Inputs For method chaining.
     */
    public function setDistinctID($value)
    {
        return $this->set('DistinctID', $value);
    }

    /**
     * Set the value for the IP input for this Union Choreo.
     *
     * @param string $value (optional, string) An IP address string associated with the profile (e.g., 127.0.0.1). When set to 0 (the default) Mixpanel will ignore IP information.
     * @return Mixpanel_Profiles_Union_Inputs For method chaining.
     */
    public function setIP($value)
    {
        return $this->set('IP', $value);
    }

    /**
     * Set the value for the IgnoreTime input for this Union Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, Mixpanel will not automatically update the "Last Seen" property of the profile. Otherwise, Mixpanel will add a "Last Seen" property associated with any set, append, or add requests.
     * @return Mixpanel_Profiles_Union_Inputs For method chaining.
     */
    public function setIgnoreTime($value)
    {
        return $this->set('IgnoreTime', $value);
    }

    /**
     * Set the value for the ProfileProperties input for this Union Choreo.
     *
     * @param string $value (required, json) A JSON object containing a list name and an array of values. The list values in the request are merged with the existing list on the user profile, ignoring duplicate list values.
     * @return Mixpanel_Profiles_Union_Inputs For method chaining.
     */
    public function setProfileProperties($value)
    {
        return $this->set('ProfileProperties', $value);
    }

    /**
     * Set the value for the Time input for this Union Choreo.
     *
     * @param string $value (optional, date) A unix timestamp representing the time of the profile update. If not provided, Mixpanel will use the time the update arrives at the server.
     * @return Mixpanel_Profiles_Union_Inputs For method chaining.
     */
    public function setTime($value)
    {
        return $this->set('Time', $value);
    }

    /**
     * Set the value for the Token input for this Union Choreo.
     *
     * @param string $value (required, string) The token provided by Mixpanel. You can find your Mixpanel token in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_Profiles_Union_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Verbose input for this Union Choreo.
     *
     * @param bool $value (optional, boolean) When set to 1, the response will contain more information describing the success or failure of the tracking call.
     * @return Mixpanel_Profiles_Union_Inputs For method chaining.
     */
    public function setVerbose($value)
    {
        return $this->set('Verbose', $value);
    }
}


/**
 * Execution object for the Union Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Union_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Union Choreo.
     *
     * @param Temboo_Session $session The session that owns this Union execution.
     * @param Mixpanel_Profiles_Union $choreo The choreography object for this execution.
     * @param Mixpanel_Profiles_Union_Inputs|array $inputs (optional) Inputs as Mixpanel_Profiles_Union_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_Profiles_Union_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_Profiles_Union $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Union execution.
     *
     * @return Mixpanel_Profiles_Union_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Union execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_Profiles_Union_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_Profiles_Union_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Union Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Union_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Union Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_Profiles_Union_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Union execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Removes the specified properties and their values from a profile.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Unset extends Temboo_Choreography
{
    /**
     * Removes the specified properties and their values from a profile.
     *
     * @param Temboo_Session $session The session that owns this Unset Choreo.
     * @return Mixpanel_Profiles_Unset New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Mixpanel/Profiles/Unset/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Unset Choreo.
     *
     * @param Mixpanel_Profiles_Unset_Inputs|array $inputs (optional) Inputs as Mixpanel_Profiles_Unset_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_Profiles_Unset_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Mixpanel_Profiles_Unset_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Unset Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_Profiles_Unset_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Mixpanel_Profiles_Unset_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Unset Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Unset_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Unset Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Mixpanel_Profiles_Unset_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Unset input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Mixpanel_Profiles_Unset_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Mixpanel_Profiles_Unset_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DistinctID input for this Unset Choreo.
     *
     * @param string $value (required, string) Used to uniquely identify the profile you want to update.
     * @return Mixpanel_Profiles_Unset_Inputs For method chaining.
     */
    public function setDistinctID($value)
    {
        return $this->set('DistinctID', $value);
    }

    /**
     * Set the value for the IP input for this Unset Choreo.
     *
     * @param string $value (optional, string) An IP address string associated with the profile (e.g., 127.0.0.1). When set to 0 (the default) Mixpanel will ignore IP information.
     * @return Mixpanel_Profiles_Unset_Inputs For method chaining.
     */
    public function setIP($value)
    {
        return $this->set('IP', $value);
    }

    /**
     * Set the value for the IgnoreTime input for this Unset Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, Mixpanel will not automatically update the "Last Seen" property of the profile. Otherwise, Mixpanel will add a "Last Seen" property associated with any set, append, or add requests.
     * @return Mixpanel_Profiles_Unset_Inputs For method chaining.
     */
    public function setIgnoreTime($value)
    {
        return $this->set('IgnoreTime', $value);
    }

    /**
     * Set the value for the ProfileProperties input for this Unset Choreo.
     *
     * @param string $value (conditional, json) A JSON array of property names to remove from a profile.
     * @return Mixpanel_Profiles_Unset_Inputs For method chaining.
     */
    public function setProfileProperties($value)
    {
        return $this->set('ProfileProperties', $value);
    }

    /**
     * Set the value for the Time input for this Unset Choreo.
     *
     * @param string $value (optional, date) A unix timestamp representing the time of the profile update. If not provided, Mixpanel will use the time the update arrives at the server.
     * @return Mixpanel_Profiles_Unset_Inputs For method chaining.
     */
    public function setTime($value)
    {
        return $this->set('Time', $value);
    }

    /**
     * Set the value for the Token input for this Unset Choreo.
     *
     * @param string $value (required, string) The token provided by Mixpanel. You can find your Mixpanel token in the project settings dialog in the Mixpanel app.
     * @return Mixpanel_Profiles_Unset_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Verbose input for this Unset Choreo.
     *
     * @param bool $value (optional, boolean) When set to 1, the response will contain more information describing the success or failure of the tracking call.
     * @return Mixpanel_Profiles_Unset_Inputs For method chaining.
     */
    public function setVerbose($value)
    {
        return $this->set('Verbose', $value);
    }
}


/**
 * Execution object for the Unset Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Unset_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Unset Choreo.
     *
     * @param Temboo_Session $session The session that owns this Unset execution.
     * @param Mixpanel_Profiles_Unset $choreo The choreography object for this execution.
     * @param Mixpanel_Profiles_Unset_Inputs|array $inputs (optional) Inputs as Mixpanel_Profiles_Unset_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Mixpanel_Profiles_Unset_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Mixpanel_Profiles_Unset $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Unset execution.
     *
     * @return Mixpanel_Profiles_Unset_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Unset execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Mixpanel_Profiles_Unset_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Mixpanel_Profiles_Unset_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Unset Choreo.
 *
 * @package Temboo
 * @subpackage Mixpanel
 */
class Mixpanel_Profiles_Unset_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Unset Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Mixpanel_Profiles_Unset_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Unset execution.
     *
     * @return string The response from Mixpanel.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>