<?php

/**
 * Temboo PHP SDK DarkSky classes
 *
 * Execute Choreographies from the Temboo DarkSky bundle.
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
 * @subpackage DarkSky
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Returns the current weather conditions for a specified location by address.
 *
 * @package Temboo
 * @subpackage DarkSky
 */
class DarkSky_GetForecastByAddress extends Temboo_Choreography
{
    /**
     * Returns the current weather conditions for a specified location by address.
     *
     * @param Temboo_Session $session The session that owns this GetForecastByAddress Choreo.
     * @return DarkSky_GetForecastByAddress New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DarkSky/GetForecastByAddress/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetForecastByAddress Choreo.
     *
     * @param DarkSky_GetForecastByAddress_Inputs|array $inputs (optional) Inputs as DarkSky_GetForecastByAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DarkSky_GetForecastByAddress_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DarkSky_GetForecastByAddress_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetForecastByAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DarkSky_GetForecastByAddress_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DarkSky_GetForecastByAddress_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetForecastByAddress Choreo.
 *
 * @package Temboo
 * @subpackage DarkSky
 */
class DarkSky_GetForecastByAddress_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetForecastByAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DarkSky_GetForecastByAddress_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetForecastByAddress input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DarkSky_GetForecastByAddress_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DarkSky_GetForecastByAddress_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetForecastByAddress Choreo.
     *
     * @param string $value (required, string) The API Key provided by Dark Sky.
     * @return DarkSky_GetForecastByAddress_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Address input for this GetForecastByAddress Choreo.
     *
     * @param string $value (required, string) The address of the location.
     * @return DarkSky_GetForecastByAddress_Inputs For method chaining.
     */
    public function setAddress($value)
    {
        return $this->set('Address', $value);
    }

    /**
     * Set the value for the Exclude input for this GetForecastByAddress Choreo.
     *
     * @param string $value (optional, string) Exclude some number of data blocks from the API response. Valid values are: currently, minutely, hourly, daily, alerts, and flags.
     * @return DarkSky_GetForecastByAddress_Inputs For method chaining.
     */
    public function setExclude($value)
    {
        return $this->set('Exclude', $value);
    }

    /**
     * Set the value for the Extend input for this GetForecastByAddress Choreo.
     *
     * @param string $value (optional, string) When present, returns hour-by-hour data for the next 168 hours, instead of the next 48. Valid value: hourly.
     * @return DarkSky_GetForecastByAddress_Inputs For method chaining.
     */
    public function setExtend($value)
    {
        return $this->set('Extend', $value);
    }

    /**
     * Set the value for the GeocodingAPIKey input for this GetForecastByAddress Choreo.
     *
     * @param string $value (required, string) Your Google Geocoding API Key.
     * @return DarkSky_GetForecastByAddress_Inputs For method chaining.
     */
    public function setGeocodingAPIKey($value)
    {
        return $this->set('GeocodingAPIKey', $value);
    }

    /**
     * Set the value for the Language input for this GetForecastByAddress Choreo.
     *
     * @param string $value (optional, string) The language in which to return results e.g., es, fr, it, en (the default). See Choreo notes for a link to a full list of supported languages.
     * @return DarkSky_GetForecastByAddress_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the Units input for this GetForecastByAddress Choreo.
     *
     * @param string $value (optional, string) Return weather conditions in the requested units. Valid values are: auto, ca, uk2, us (use for Farenheit), and si (use for Celsius).
     * @return DarkSky_GetForecastByAddress_Inputs For method chaining.
     */
    public function setUnits($value)
    {
        return $this->set('Units', $value);
    }
}


/**
 * Execution object for the GetForecastByAddress Choreo.
 *
 * @package Temboo
 * @subpackage DarkSky
 */
class DarkSky_GetForecastByAddress_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetForecastByAddress Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetForecastByAddress execution.
     * @param DarkSky_GetForecastByAddress $choreo The choreography object for this execution.
     * @param DarkSky_GetForecastByAddress_Inputs|array $inputs (optional) Inputs as DarkSky_GetForecastByAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DarkSky_GetForecastByAddress_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DarkSky_GetForecastByAddress $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetForecastByAddress execution.
     *
     * @return DarkSky_GetForecastByAddress_Results New results object.
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
     * Wraps results in appropriate results class for this GetForecastByAddress execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DarkSky_GetForecastByAddress_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DarkSky_GetForecastByAddress_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetForecastByAddress Choreo.
 *
 * @package Temboo
 * @subpackage DarkSky
 */
class DarkSky_GetForecastByAddress_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetForecastByAddress Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DarkSky_GetForecastByAddress_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "HourlySummary" output from this GetForecastByAddress execution.
     *
     * @return string (string) The hourly summary.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getHourlySummary()
    {
        return $this->get('HourlySummary');
    }
    /**
     * Retrieve the value for the "Humidity" output from this GetForecastByAddress execution.
     *
     * @return float (decimal) The current humidity.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getHumidity()
    {
        return $this->get('Humidity');
    }
    /**
     * Retrieve the value for the "Pressure" output from this GetForecastByAddress execution.
     *
     * @return float (decimal) The current pressure.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPressure()
    {
        return $this->get('Pressure');
    }
    /**
     * Retrieve the value for the "Summary" output from this GetForecastByAddress execution.
     *
     * @return string (string) The current weather summary.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getSummary()
    {
        return $this->get('Summary');
    }
    /**
     * Retrieve the value for the "Temperature" output from this GetForecastByAddress execution.
     *
     * @return float (decimal) The current temperature.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getTemperature()
    {
        return $this->get('Temperature');
    }
    /**
     * Retrieve the value for the "UVIndex" output from this GetForecastByAddress execution.
     *
     * @return int (integer) The current uv index.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getUVIndex()
    {
        return $this->get('UVIndex');
    }
    /**
     * Retrieve the value for the "Visibility" output from this GetForecastByAddress execution.
     *
     * @return float (decimal) The current visibility.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getVisibility()
    {
        return $this->get('Visibility');
    }
    /**
     * Retrieve the value for the "Response" output from this GetForecastByAddress execution.
     *
     * @return string (json) The response from Dark Sky.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the current weather conditions for a specified location by geo-coordinates.
 *
 * @package Temboo
 * @subpackage DarkSky
 */
class DarkSky_GetForecastByCoordinates extends Temboo_Choreography
{
    /**
     * Returns the current weather conditions for a specified location by geo-coordinates.
     *
     * @param Temboo_Session $session The session that owns this GetForecastByCoordinates Choreo.
     * @return DarkSky_GetForecastByCoordinates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DarkSky/GetForecastByCoordinates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetForecastByCoordinates Choreo.
     *
     * @param DarkSky_GetForecastByCoordinates_Inputs|array $inputs (optional) Inputs as DarkSky_GetForecastByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DarkSky_GetForecastByCoordinates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DarkSky_GetForecastByCoordinates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetForecastByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DarkSky_GetForecastByCoordinates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DarkSky_GetForecastByCoordinates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetForecastByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage DarkSky
 */
class DarkSky_GetForecastByCoordinates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetForecastByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DarkSky_GetForecastByCoordinates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetForecastByCoordinates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DarkSky_GetForecastByCoordinates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DarkSky_GetForecastByCoordinates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetForecastByCoordinates Choreo.
     *
     * @param string $value (required, string) The API Key provided by Dark Sky.
     * @return DarkSky_GetForecastByCoordinates_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Exclude input for this GetForecastByCoordinates Choreo.
     *
     * @param string $value (optional, string) Exclude some number of data blocks from the API response. Valid values are: currently, minutely, hourly, daily, alerts, and flags.
     * @return DarkSky_GetForecastByCoordinates_Inputs For method chaining.
     */
    public function setExclude($value)
    {
        return $this->set('Exclude', $value);
    }

    /**
     * Set the value for the Extend input for this GetForecastByCoordinates Choreo.
     *
     * @param string $value (optional, string) When present, returns hour-by-hour data for the next 168 hours, instead of the next 48. Valid value: hourly.
     * @return DarkSky_GetForecastByCoordinates_Inputs For method chaining.
     */
    public function setExtend($value)
    {
        return $this->set('Extend', $value);
    }

    /**
     * Set the value for the Language input for this GetForecastByCoordinates Choreo.
     *
     * @param string $value (optional, string) The language in which to return results e.g., es, fr, it, en (the default). See Choreo notes for a link to a full list of supported languages.
     * @return DarkSky_GetForecastByCoordinates_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the Latitude input for this GetForecastByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The latitude of the location.
     * @return DarkSky_GetForecastByCoordinates_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this GetForecastByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The longitude of the location.
     * @return DarkSky_GetForecastByCoordinates_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Units input for this GetForecastByCoordinates Choreo.
     *
     * @param string $value (optional, string) Return weather conditions in the requested units. Valid values are: auto, ca, uk2, us (use for Farenheit), and si (use for Celsius).
     * @return DarkSky_GetForecastByCoordinates_Inputs For method chaining.
     */
    public function setUnits($value)
    {
        return $this->set('Units', $value);
    }
}


/**
 * Execution object for the GetForecastByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage DarkSky
 */
class DarkSky_GetForecastByCoordinates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetForecastByCoordinates Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetForecastByCoordinates execution.
     * @param DarkSky_GetForecastByCoordinates $choreo The choreography object for this execution.
     * @param DarkSky_GetForecastByCoordinates_Inputs|array $inputs (optional) Inputs as DarkSky_GetForecastByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DarkSky_GetForecastByCoordinates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DarkSky_GetForecastByCoordinates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetForecastByCoordinates execution.
     *
     * @return DarkSky_GetForecastByCoordinates_Results New results object.
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
     * Wraps results in appropriate results class for this GetForecastByCoordinates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DarkSky_GetForecastByCoordinates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DarkSky_GetForecastByCoordinates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetForecastByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage DarkSky
 */
class DarkSky_GetForecastByCoordinates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetForecastByCoordinates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DarkSky_GetForecastByCoordinates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "HourlySummary" output from this GetForecastByCoordinates execution.
     *
     * @return string (string) The hourly summary.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getHourlySummary()
    {
        return $this->get('HourlySummary');
    }
    /**
     * Retrieve the value for the "Humidity" output from this GetForecastByCoordinates execution.
     *
     * @return float (decimal) The current humidity.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getHumidity()
    {
        return $this->get('Humidity');
    }
    /**
     * Retrieve the value for the "Pressure" output from this GetForecastByCoordinates execution.
     *
     * @return float (decimal) The current pressure.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPressure()
    {
        return $this->get('Pressure');
    }
    /**
     * Retrieve the value for the "Summary" output from this GetForecastByCoordinates execution.
     *
     * @return string (string) The current weather summary.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getSummary()
    {
        return $this->get('Summary');
    }
    /**
     * Retrieve the value for the "Temperature" output from this GetForecastByCoordinates execution.
     *
     * @return float (decimal) The current temperature.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getTemperature()
    {
        return $this->get('Temperature');
    }
    /**
     * Retrieve the value for the "UVIndex" output from this GetForecastByCoordinates execution.
     *
     * @return int (integer) The current uv index.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getUVIndex()
    {
        return $this->get('UVIndex');
    }
    /**
     * Retrieve the value for the "Visibility" output from this GetForecastByCoordinates execution.
     *
     * @return float (decimal) The current visibility.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getVisibility()
    {
        return $this->get('Visibility');
    }
    /**
     * Retrieve the value for the "Response" output from this GetForecastByCoordinates execution.
     *
     * @return string (json) The response from Dark Sky.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the observed (in the past) or forecasted (in the future) hour-by-hour weather and daily weather conditions for a particular date.
 *
 * @package Temboo
 * @subpackage DarkSky
 */
class DarkSky_TimeMachineRequest extends Temboo_Choreography
{
    /**
     * Returns the observed (in the past) or forecasted (in the future) hour-by-hour weather and daily weather conditions for a particular date.
     *
     * @param Temboo_Session $session The session that owns this TimeMachineRequest Choreo.
     * @return DarkSky_TimeMachineRequest New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DarkSky/TimeMachineRequest/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TimeMachineRequest Choreo.
     *
     * @param DarkSky_TimeMachineRequest_Inputs|array $inputs (optional) Inputs as DarkSky_TimeMachineRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DarkSky_TimeMachineRequest_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DarkSky_TimeMachineRequest_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TimeMachineRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DarkSky_TimeMachineRequest_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DarkSky_TimeMachineRequest_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TimeMachineRequest Choreo.
 *
 * @package Temboo
 * @subpackage DarkSky
 */
class DarkSky_TimeMachineRequest_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TimeMachineRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DarkSky_TimeMachineRequest_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TimeMachineRequest input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DarkSky_TimeMachineRequest_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DarkSky_TimeMachineRequest_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this TimeMachineRequest Choreo.
     *
     * @param string $value (required, string) The API Key provided by Dark Sky.
     * @return DarkSky_TimeMachineRequest_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Exclude input for this TimeMachineRequest Choreo.
     *
     * @param string $value (optional, string) Exclude some number of data blocks from the API response. Valid values are: currently, minutely, hourly, daily, alerts, and flags.
     * @return DarkSky_TimeMachineRequest_Inputs For method chaining.
     */
    public function setExclude($value)
    {
        return $this->set('Exclude', $value);
    }

    /**
     * Set the value for the Extend input for this TimeMachineRequest Choreo.
     *
     * @param string $value (optional, string) When present, returns hour-by-hour data for the next 168 hours, instead of the next 48. Valid value: hourly.
     * @return DarkSky_TimeMachineRequest_Inputs For method chaining.
     */
    public function setExtend($value)
    {
        return $this->set('Extend', $value);
    }

    /**
     * Set the value for the Language input for this TimeMachineRequest Choreo.
     *
     * @param string $value (optional, string) The language in which to return results e.g., es, fr, it, en (the default). See Choreo notes for a link to a full list of supported languages.
     * @return DarkSky_TimeMachineRequest_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the Latitude input for this TimeMachineRequest Choreo.
     *
     * @param float $value (required, decimal) The latitude of the location.
     * @return DarkSky_TimeMachineRequest_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this TimeMachineRequest Choreo.
     *
     * @param float $value (required, decimal) The longitude of the location.
     * @return DarkSky_TimeMachineRequest_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Time input for this TimeMachineRequest Choreo.
     *
     * @param string $value (required, date) A UNIX timestamp (seconds since midnight GMT on 1 Jan 1970) or a string formatted date e.g., 2016-03-05T15:48:56Z.
     * @return DarkSky_TimeMachineRequest_Inputs For method chaining.
     */
    public function setTime($value)
    {
        return $this->set('Time', $value);
    }

    /**
     * Set the value for the Units input for this TimeMachineRequest Choreo.
     *
     * @param string $value (optional, string) Return weather conditions in the requested units. Valid values are: auto, ca, uk2, us (use for Farenheit), and si (use for Celsius).
     * @return DarkSky_TimeMachineRequest_Inputs For method chaining.
     */
    public function setUnits($value)
    {
        return $this->set('Units', $value);
    }
}


/**
 * Execution object for the TimeMachineRequest Choreo.
 *
 * @package Temboo
 * @subpackage DarkSky
 */
class DarkSky_TimeMachineRequest_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TimeMachineRequest Choreo.
     *
     * @param Temboo_Session $session The session that owns this TimeMachineRequest execution.
     * @param DarkSky_TimeMachineRequest $choreo The choreography object for this execution.
     * @param DarkSky_TimeMachineRequest_Inputs|array $inputs (optional) Inputs as DarkSky_TimeMachineRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DarkSky_TimeMachineRequest_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DarkSky_TimeMachineRequest $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TimeMachineRequest execution.
     *
     * @return DarkSky_TimeMachineRequest_Results New results object.
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
     * Wraps results in appropriate results class for this TimeMachineRequest execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DarkSky_TimeMachineRequest_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DarkSky_TimeMachineRequest_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TimeMachineRequest Choreo.
 *
 * @package Temboo
 * @subpackage DarkSky
 */
class DarkSky_TimeMachineRequest_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TimeMachineRequest Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DarkSky_TimeMachineRequest_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "HourlySummary" output from this TimeMachineRequest execution.
     *
     * @return string (string) The hourly summary.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getHourlySummary()
    {
        return $this->get('HourlySummary');
    }
    /**
     * Retrieve the value for the "Humidity" output from this TimeMachineRequest execution.
     *
     * @return float (decimal) The current humidity.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getHumidity()
    {
        return $this->get('Humidity');
    }
    /**
     * Retrieve the value for the "Pressure" output from this TimeMachineRequest execution.
     *
     * @return float (decimal) The current pressure.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPressure()
    {
        return $this->get('Pressure');
    }
    /**
     * Retrieve the value for the "Summary" output from this TimeMachineRequest execution.
     *
     * @return string (string) The current weather summary.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getSummary()
    {
        return $this->get('Summary');
    }
    /**
     * Retrieve the value for the "Temperature" output from this TimeMachineRequest execution.
     *
     * @return float (decimal) The current temperature.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getTemperature()
    {
        return $this->get('Temperature');
    }
    /**
     * Retrieve the value for the "UVIndex" output from this TimeMachineRequest execution.
     *
     * @return int (integer) The current uv index.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getUVIndex()
    {
        return $this->get('UVIndex');
    }
    /**
     * Retrieve the value for the "Visibility" output from this TimeMachineRequest execution.
     *
     * @return float (decimal) The current visibility.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getVisibility()
    {
        return $this->get('Visibility');
    }
    /**
     * Retrieve the value for the "Response" output from this TimeMachineRequest execution.
     *
     * @return string (json) The response from Dark Sky.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>