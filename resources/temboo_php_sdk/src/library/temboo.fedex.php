<?php

/**
 * Temboo PHP SDK FedEx classes
 *
 * Execute Choreographies from the Temboo FedEx bundle.
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
 * @subpackage FedEx
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves available shipping options and delivery dates for a specified origin and destination.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_Availability_ServiceAvailability extends Temboo_Choreography
{
    /**
     * Retrieves available shipping options and delivery dates for a specified origin and destination.
     *
     * @param Temboo_Session $session The session that owns this ServiceAvailability Choreo.
     * @return FedEx_Availability_ServiceAvailability New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FedEx/Availability/ServiceAvailability/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ServiceAvailability Choreo.
     *
     * @param FedEx_Availability_ServiceAvailability_Inputs|array $inputs (optional) Inputs as FedEx_Availability_ServiceAvailability_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_Availability_ServiceAvailability_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FedEx_Availability_ServiceAvailability_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ServiceAvailability Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_Availability_ServiceAvailability_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FedEx_Availability_ServiceAvailability_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ServiceAvailability Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_Availability_ServiceAvailability_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ServiceAvailability Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_Availability_ServiceAvailability_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ServiceAvailability input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FedEx_Availability_ServiceAvailability_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FedEx_Availability_ServiceAvailability_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountNumber input for this ServiceAvailability Choreo.
     *
     * @param string $value (required, string) Your FedEx Account Number or Test Account Number.
     * @return FedEx_Availability_ServiceAvailability_Inputs For method chaining.
     */
    public function setAccountNumber($value)
    {
        return $this->set('AccountNumber', $value);
    }

    /**
     * Set the value for the AuthenticationKey input for this ServiceAvailability Choreo.
     *
     * @param string $value (required, string) The Production Authentication Key or Development Test Key provided by FedEx Web Services.
     * @return FedEx_Availability_ServiceAvailability_Inputs For method chaining.
     */
    public function setAuthenticationKey($value)
    {
        return $this->set('AuthenticationKey', $value);
    }

    /**
     * Set the value for the DestinationCountryCode input for this ServiceAvailability Choreo.
     *
     * @param string $value (required, string) The destination country code to use for the service availability request (e.g., US).
     * @return FedEx_Availability_ServiceAvailability_Inputs For method chaining.
     */
    public function setDestinationCountryCode($value)
    {
        return $this->set('DestinationCountryCode', $value);
    }

    /**
     * Set the value for the DestinationPostalCode input for this ServiceAvailability Choreo.
     *
     * @param string $value (required, string) The destination postal code to use for  the service availability request.
     * @return FedEx_Availability_ServiceAvailability_Inputs For method chaining.
     */
    public function setDestinationPostalCode($value)
    {
        return $this->set('DestinationPostalCode', $value);
    }

    /**
     * Set the value for the Endpoint input for this ServiceAvailability Choreo.
     *
     * @param string $value (conditional, string) Set to "test" to direct requests to the FedEx test environment. Defaults to "production" indicating that requests are sent to the production URL.
     * @return FedEx_Availability_ServiceAvailability_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the MeterNumber input for this ServiceAvailability Choreo.
     *
     * @param string $value (required, string) The Production or Test Meter Number provided by FedEx Web Services.
     * @return FedEx_Availability_ServiceAvailability_Inputs For method chaining.
     */
    public function setMeterNumber($value)
    {
        return $this->set('MeterNumber', $value);
    }

    /**
     * Set the value for the OriginCountryCode input for this ServiceAvailability Choreo.
     *
     * @param string $value (required, string) The origin country code to use for the service availability request (e.g., US).
     * @return FedEx_Availability_ServiceAvailability_Inputs For method chaining.
     */
    public function setOriginCountryCode($value)
    {
        return $this->set('OriginCountryCode', $value);
    }

    /**
     * Set the value for the OriginPostalCode input for this ServiceAvailability Choreo.
     *
     * @param string $value (required, string) The origin postal code to use for the service availability request.
     * @return FedEx_Availability_ServiceAvailability_Inputs For method chaining.
     */
    public function setOriginPostalCode($value)
    {
        return $this->set('OriginPostalCode', $value);
    }

    /**
     * Set the value for the Password input for this ServiceAvailability Choreo.
     *
     * @param string $value (required, password) The Production or Test Password provided by FedEx Web Services.
     * @return FedEx_Availability_ServiceAvailability_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ServiceAvailability Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "xml" (the default) and "json".
     * @return FedEx_Availability_ServiceAvailability_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ShipDate input for this ServiceAvailability Choreo.
     *
     * @param string $value (optional, date) The date to use for the service availability request. Dates should be formatted as YYYY-MM-DD. Defautls to today's date.
     * @return FedEx_Availability_ServiceAvailability_Inputs For method chaining.
     */
    public function setShipDate($value)
    {
        return $this->set('ShipDate', $value);
    }
}


/**
 * Execution object for the ServiceAvailability Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_Availability_ServiceAvailability_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ServiceAvailability Choreo.
     *
     * @param Temboo_Session $session The session that owns this ServiceAvailability execution.
     * @param FedEx_Availability_ServiceAvailability $choreo The choreography object for this execution.
     * @param FedEx_Availability_ServiceAvailability_Inputs|array $inputs (optional) Inputs as FedEx_Availability_ServiceAvailability_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_Availability_ServiceAvailability_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FedEx_Availability_ServiceAvailability $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ServiceAvailability execution.
     *
     * @return FedEx_Availability_ServiceAvailability_Results New results object.
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
     * Wraps results in appropriate results class for this ServiceAvailability execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FedEx_Availability_ServiceAvailability_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FedEx_Availability_ServiceAvailability_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ServiceAvailability Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_Availability_ServiceAvailability_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ServiceAvailability Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FedEx_Availability_ServiceAvailability_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ServiceAvailability execution.
     *
     * @return string The response from FedEx.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves location information from FedEx Web Services for a specified postal code.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_CountryService_PostalCodeInquiry extends Temboo_Choreography
{
    /**
     * Retrieves location information from FedEx Web Services for a specified postal code.
     *
     * @param Temboo_Session $session The session that owns this PostalCodeInquiry Choreo.
     * @return FedEx_CountryService_PostalCodeInquiry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FedEx/CountryService/PostalCodeInquiry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PostalCodeInquiry Choreo.
     *
     * @param FedEx_CountryService_PostalCodeInquiry_Inputs|array $inputs (optional) Inputs as FedEx_CountryService_PostalCodeInquiry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_CountryService_PostalCodeInquiry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FedEx_CountryService_PostalCodeInquiry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PostalCodeInquiry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_CountryService_PostalCodeInquiry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FedEx_CountryService_PostalCodeInquiry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PostalCodeInquiry Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_CountryService_PostalCodeInquiry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PostalCodeInquiry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_CountryService_PostalCodeInquiry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PostalCodeInquiry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FedEx_CountryService_PostalCodeInquiry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FedEx_CountryService_PostalCodeInquiry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountNumber input for this PostalCodeInquiry Choreo.
     *
     * @param string $value (required, string) Your FedEx Account Number or Test Account Number.
     * @return FedEx_CountryService_PostalCodeInquiry_Inputs For method chaining.
     */
    public function setAccountNumber($value)
    {
        return $this->set('AccountNumber', $value);
    }

    /**
     * Set the value for the AuthenticationKey input for this PostalCodeInquiry Choreo.
     *
     * @param string $value (required, string) The Production Authentication Key or Development Test Key provided by FedEx Web Services.
     * @return FedEx_CountryService_PostalCodeInquiry_Inputs For method chaining.
     */
    public function setAuthenticationKey($value)
    {
        return $this->set('AuthenticationKey', $value);
    }

    /**
     * Set the value for the CountryCode input for this PostalCodeInquiry Choreo.
     *
     * @param string $value (required, string) The country code to use in the inquiry request (e.g., US).
     * @return FedEx_CountryService_PostalCodeInquiry_Inputs For method chaining.
     */
    public function setCountryCode($value)
    {
        return $this->set('CountryCode', $value);
    }

    /**
     * Set the value for the Endpoint input for this PostalCodeInquiry Choreo.
     *
     * @param string $value (conditional, string) Set to "test" to direct requests to the FedEx test environment. Defaults to "production" indicating that requests are sent to the production URL.
     * @return FedEx_CountryService_PostalCodeInquiry_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the MeterNumber input for this PostalCodeInquiry Choreo.
     *
     * @param string $value (required, string) The Production or Test Meter Number provided by FedEx Web Services.
     * @return FedEx_CountryService_PostalCodeInquiry_Inputs For method chaining.
     */
    public function setMeterNumber($value)
    {
        return $this->set('MeterNumber', $value);
    }

    /**
     * Set the value for the Password input for this PostalCodeInquiry Choreo.
     *
     * @param string $value (required, password) The Production or Test Password provided by FedEx Web Services.
     * @return FedEx_CountryService_PostalCodeInquiry_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PostalCode input for this PostalCodeInquiry Choreo.
     *
     * @param string $value (required, string) The postal code to use in the inquiry request.
     * @return FedEx_CountryService_PostalCodeInquiry_Inputs For method chaining.
     */
    public function setPostalCode($value)
    {
        return $this->set('PostalCode', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PostalCodeInquiry Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "xml" (the default) and "json".
     * @return FedEx_CountryService_PostalCodeInquiry_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ShipDate input for this PostalCodeInquiry Choreo.
     *
     * @param string $value (optional, string) The ship date to use for the inquiry. Dates should be formatted as YYYY-MM-DD. Defautls to today's date.
     * @return FedEx_CountryService_PostalCodeInquiry_Inputs For method chaining.
     */
    public function setShipDate($value)
    {
        return $this->set('ShipDate', $value);
    }
}


/**
 * Execution object for the PostalCodeInquiry Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_CountryService_PostalCodeInquiry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PostalCodeInquiry Choreo.
     *
     * @param Temboo_Session $session The session that owns this PostalCodeInquiry execution.
     * @param FedEx_CountryService_PostalCodeInquiry $choreo The choreography object for this execution.
     * @param FedEx_CountryService_PostalCodeInquiry_Inputs|array $inputs (optional) Inputs as FedEx_CountryService_PostalCodeInquiry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_CountryService_PostalCodeInquiry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FedEx_CountryService_PostalCodeInquiry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PostalCodeInquiry execution.
     *
     * @return FedEx_CountryService_PostalCodeInquiry_Results New results object.
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
     * Wraps results in appropriate results class for this PostalCodeInquiry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FedEx_CountryService_PostalCodeInquiry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FedEx_CountryService_PostalCodeInquiry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PostalCodeInquiry Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_CountryService_PostalCodeInquiry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PostalCodeInquiry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FedEx_CountryService_PostalCodeInquiry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PostalCodeInquiry execution.
     *
     * @return string The response from FedEx.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches for FedEx locations near a given address.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_Locations_SearchLocationsByAddress extends Temboo_Choreography
{
    /**
     * Searches for FedEx locations near a given address.
     *
     * @param Temboo_Session $session The session that owns this SearchLocationsByAddress Choreo.
     * @return FedEx_Locations_SearchLocationsByAddress New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FedEx/Locations/SearchLocationsByAddress/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchLocationsByAddress Choreo.
     *
     * @param FedEx_Locations_SearchLocationsByAddress_Inputs|array $inputs (optional) Inputs as FedEx_Locations_SearchLocationsByAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_Locations_SearchLocationsByAddress_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FedEx_Locations_SearchLocationsByAddress_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchLocationsByAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FedEx_Locations_SearchLocationsByAddress_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchLocationsByAddress Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_Locations_SearchLocationsByAddress_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchLocationsByAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchLocationsByAddress input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountNumber input for this SearchLocationsByAddress Choreo.
     *
     * @param string $value (required, string) Your FedEx Account Number or Test Account Number.
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs For method chaining.
     */
    public function setAccountNumber($value)
    {
        return $this->set('AccountNumber', $value);
    }

    /**
     * Set the value for the AuthenticationKey input for this SearchLocationsByAddress Choreo.
     *
     * @param string $value (required, string) The Production Authentication Key or Development Test Key provided by FedEx Web Services.
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs For method chaining.
     */
    public function setAuthenticationKey($value)
    {
        return $this->set('AuthenticationKey', $value);
    }

    /**
     * Set the value for the City input for this SearchLocationsByAddress Choreo.
     *
     * @param string $value (required, string) The city associated with the location being searched.
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the CountryCode input for this SearchLocationsByAddress Choreo.
     *
     * @param string $value (required, string) The country code associated with the location being searched (e.g., US).
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs For method chaining.
     */
    public function setCountryCode($value)
    {
        return $this->set('CountryCode', $value);
    }

    /**
     * Set the value for the Endpoint input for this SearchLocationsByAddress Choreo.
     *
     * @param string $value (conditional, string) Set to "test" to direct requests to the FedEx test environment. Defaults to "production" indicating that requests are sent to the production URL.
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the MeterNumber input for this SearchLocationsByAddress Choreo.
     *
     * @param string $value (required, string) The Production or Test Meter Number provided by FedEx Web Services.
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs For method chaining.
     */
    public function setMeterNumber($value)
    {
        return $this->set('MeterNumber', $value);
    }

    /**
     * Set the value for the Password input for this SearchLocationsByAddress Choreo.
     *
     * @param string $value (required, password) The Production or Test Password provided by FedEx Web Services.
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PostalCode input for this SearchLocationsByAddress Choreo.
     *
     * @param string $value (required, string) The postal code associated with the location being searched.
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs For method chaining.
     */
    public function setPostalCode($value)
    {
        return $this->set('PostalCode', $value);
    }

    /**
     * Set the value for the RadiusDistance input for this SearchLocationsByAddress Choreo.
     *
     * @param float $value (optional, decimal) Specifies value of the radius around the address to search for FedEx locations. Note that RadiusUnits applies to this value. Defaults to 10 miles.
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs For method chaining.
     */
    public function setRadiusDistance($value)
    {
        return $this->set('RadiusDistance', $value);
    }

    /**
     * Set the value for the RadiusUnits input for this SearchLocationsByAddress Choreo.
     *
     * @param string $value (optional, string) Specifies the unit of measure for the RadiusDistance value. Valid values are mi (the default) and km.
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs For method chaining.
     */
    public function setRadiusUnits($value)
    {
        return $this->set('RadiusUnits', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchLocationsByAddress Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "xml" (the default) and "json".
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SortBy input for this SearchLocationsByAddress Choreo.
     *
     * @param string $value (optional, string) Specifies the criterion to be used to sort the location details. Valid values are: distance (the default), latest_express_dropoff_time, latest_ground_dropoff_time, location_type.
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }

    /**
     * Set the value for the SortOrder input for this SearchLocationsByAddress Choreo.
     *
     * @param string $value (optional, string) Specifies sort order of the location details. Valid values are: lowest_to_highest (the default) and highest_to_lowest.
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }

    /**
     * Set the value for the State input for this SearchLocationsByAddress Choreo.
     *
     * @param string $value (required, string) Identifying abbreviation for US state, Canada province (e.g., NY).
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Street input for this SearchLocationsByAddress Choreo.
     *
     * @param string $value (required, string) The street number and street name (e.g., 350 5th Ave).
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs For method chaining.
     */
    public function setStreet($value)
    {
        return $this->set('Street', $value);
    }

    /**
     * Set the value for the SupportedServices input for this SearchLocationsByAddress Choreo.
     *
     * @param string $value (optional, string) Specifies the types of services supported by a FedEx location for redirect to hold. Valid values are: fedex_express, fedex_ground, fedex_ground_home_delivery.
     * @return FedEx_Locations_SearchLocationsByAddress_Inputs For method chaining.
     */
    public function setSupportedServices($value)
    {
        return $this->set('SupportedServices', $value);
    }
}


/**
 * Execution object for the SearchLocationsByAddress Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_Locations_SearchLocationsByAddress_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchLocationsByAddress Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchLocationsByAddress execution.
     * @param FedEx_Locations_SearchLocationsByAddress $choreo The choreography object for this execution.
     * @param FedEx_Locations_SearchLocationsByAddress_Inputs|array $inputs (optional) Inputs as FedEx_Locations_SearchLocationsByAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_Locations_SearchLocationsByAddress_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FedEx_Locations_SearchLocationsByAddress $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchLocationsByAddress execution.
     *
     * @return FedEx_Locations_SearchLocationsByAddress_Results New results object.
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
     * Wraps results in appropriate results class for this SearchLocationsByAddress execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FedEx_Locations_SearchLocationsByAddress_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FedEx_Locations_SearchLocationsByAddress_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchLocationsByAddress Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_Locations_SearchLocationsByAddress_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchLocationsByAddress Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FedEx_Locations_SearchLocationsByAddress_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchLocationsByAddress execution.
     *
     * @return string The response from FedEx.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves shipment information for a specified tracking number.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_TrackingAndVisibility_TrackByNumber extends Temboo_Choreography
{
    /**
     * Retrieves shipment information for a specified tracking number.
     *
     * @param Temboo_Session $session The session that owns this TrackByNumber Choreo.
     * @return FedEx_TrackingAndVisibility_TrackByNumber New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FedEx/TrackingAndVisibility/TrackByNumber/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TrackByNumber Choreo.
     *
     * @param FedEx_TrackingAndVisibility_TrackByNumber_Inputs|array $inputs (optional) Inputs as FedEx_TrackingAndVisibility_TrackByNumber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_TrackingAndVisibility_TrackByNumber_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FedEx_TrackingAndVisibility_TrackByNumber_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TrackByNumber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_TrackingAndVisibility_TrackByNumber_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FedEx_TrackingAndVisibility_TrackByNumber_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TrackByNumber Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_TrackingAndVisibility_TrackByNumber_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TrackByNumber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_TrackingAndVisibility_TrackByNumber_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TrackByNumber input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FedEx_TrackingAndVisibility_TrackByNumber_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FedEx_TrackingAndVisibility_TrackByNumber_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountNumber input for this TrackByNumber Choreo.
     *
     * @param string $value (required, string) Your FedEx Account Number or Test Account Number.
     * @return FedEx_TrackingAndVisibility_TrackByNumber_Inputs For method chaining.
     */
    public function setAccountNumber($value)
    {
        return $this->set('AccountNumber', $value);
    }

    /**
     * Set the value for the AuthenticationKey input for this TrackByNumber Choreo.
     *
     * @param string $value (required, string) The Production Authentication Key or Development Test Key provided by FedEx Web Services.
     * @return FedEx_TrackingAndVisibility_TrackByNumber_Inputs For method chaining.
     */
    public function setAuthenticationKey($value)
    {
        return $this->set('AuthenticationKey', $value);
    }

    /**
     * Set the value for the Endpoint input for this TrackByNumber Choreo.
     *
     * @param string $value (conditional, string) Set to "test" to direct requests to the FedEx test environment. Defaults to "production" indicating that requests are sent to the production URL.
     * @return FedEx_TrackingAndVisibility_TrackByNumber_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the MeterNumber input for this TrackByNumber Choreo.
     *
     * @param string $value (required, string) The Production or Test Meter Number provided by FedEx Web Services.
     * @return FedEx_TrackingAndVisibility_TrackByNumber_Inputs For method chaining.
     */
    public function setMeterNumber($value)
    {
        return $this->set('MeterNumber', $value);
    }

    /**
     * Set the value for the Password input for this TrackByNumber Choreo.
     *
     * @param string $value (required, password) The Production or Test Password provided by FedEx Web Services.
     * @return FedEx_TrackingAndVisibility_TrackByNumber_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TrackByNumber Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "xml" (the default) and "json".
     * @return FedEx_TrackingAndVisibility_TrackByNumber_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TrackingNumber input for this TrackByNumber Choreo.
     *
     * @param string $value (required, string) The tracking number for the shipment.
     * @return FedEx_TrackingAndVisibility_TrackByNumber_Inputs For method chaining.
     */
    public function setTrackingNumber($value)
    {
        return $this->set('TrackingNumber', $value);
    }
}


/**
 * Execution object for the TrackByNumber Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_TrackingAndVisibility_TrackByNumber_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TrackByNumber Choreo.
     *
     * @param Temboo_Session $session The session that owns this TrackByNumber execution.
     * @param FedEx_TrackingAndVisibility_TrackByNumber $choreo The choreography object for this execution.
     * @param FedEx_TrackingAndVisibility_TrackByNumber_Inputs|array $inputs (optional) Inputs as FedEx_TrackingAndVisibility_TrackByNumber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_TrackingAndVisibility_TrackByNumber_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FedEx_TrackingAndVisibility_TrackByNumber $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TrackByNumber execution.
     *
     * @return FedEx_TrackingAndVisibility_TrackByNumber_Results New results object.
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
     * Wraps results in appropriate results class for this TrackByNumber execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FedEx_TrackingAndVisibility_TrackByNumber_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FedEx_TrackingAndVisibility_TrackByNumber_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TrackByNumber Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_TrackingAndVisibility_TrackByNumber_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TrackByNumber Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FedEx_TrackingAndVisibility_TrackByNumber_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TrackByNumber execution.
     *
     * @return string The response from FedEx.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves shipment information for a specified reference number.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_TrackingAndVisibility_TrackByReference extends Temboo_Choreography
{
    /**
     * Retrieves shipment information for a specified reference number.
     *
     * @param Temboo_Session $session The session that owns this TrackByReference Choreo.
     * @return FedEx_TrackingAndVisibility_TrackByReference New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FedEx/TrackingAndVisibility/TrackByReference/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TrackByReference Choreo.
     *
     * @param FedEx_TrackingAndVisibility_TrackByReference_Inputs|array $inputs (optional) Inputs as FedEx_TrackingAndVisibility_TrackByReference_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FedEx_TrackingAndVisibility_TrackByReference_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TrackByReference Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FedEx_TrackingAndVisibility_TrackByReference_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TrackByReference Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_TrackingAndVisibility_TrackByReference_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TrackByReference Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TrackByReference input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountNumber input for this TrackByReference Choreo.
     *
     * @param string $value (required, string) Your FedEx Account Number or Test Account Number.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs For method chaining.
     */
    public function setAccountNumber($value)
    {
        return $this->set('AccountNumber', $value);
    }

    /**
     * Set the value for the AuthenticationKey input for this TrackByReference Choreo.
     *
     * @param string $value (required, string) The Production Authentication Key or Development Test Key provided by FedEx Web Services.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs For method chaining.
     */
    public function setAuthenticationKey($value)
    {
        return $this->set('AuthenticationKey', $value);
    }

    /**
     * Set the value for the City input for this TrackByReference Choreo.
     *
     * @param string $value (optional, string) The destination city.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the CountryCode input for this TrackByReference Choreo.
     *
     * @param string $value (conditional, string) The country code associated with the shipment destination (e.g., US). Required unless specifying the ShipmentAccountNumber.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs For method chaining.
     */
    public function setCountryCode($value)
    {
        return $this->set('CountryCode', $value);
    }

    /**
     * Set the value for the Endpoint input for this TrackByReference Choreo.
     *
     * @param string $value (conditional, string) Set to "test" to direct requests to the FedEx test environment. Defaults to "production" indicating that requests are sent to the production URL.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the MeterNumber input for this TrackByReference Choreo.
     *
     * @param string $value (required, string) The Production or Test Meter Number provided by FedEx Web Services.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs For method chaining.
     */
    public function setMeterNumber($value)
    {
        return $this->set('MeterNumber', $value);
    }

    /**
     * Set the value for the OperatingCompany input for this TrackByReference Choreo.
     *
     * @param string $value (required, string) Identification for a fedex operating company (e.g.,  fedex_express, fedex_freight, fedex_ground). See Choreo notes for allowed values.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs For method chaining.
     */
    public function setOperatingCompany($value)
    {
        return $this->set('OperatingCompany', $value);
    }

    /**
     * Set the value for the Password input for this TrackByReference Choreo.
     *
     * @param string $value (required, password) The Production or Test Password provided by FedEx Web Services.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PostalCode input for this TrackByReference Choreo.
     *
     * @param string $value (conditional, string) The postal code associated with the shipment destination. Required unless specifying the ShipmentAccountNumber.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs For method chaining.
     */
    public function setPostalCode($value)
    {
        return $this->set('PostalCode', $value);
    }

    /**
     * Set the value for the Reference input for this TrackByReference Choreo.
     *
     * @param string $value (required, string) A reference number for tracking the shipment.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs For method chaining.
     */
    public function setReference($value)
    {
        return $this->set('Reference', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TrackByReference Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "xml" (the default) and "json".
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ShipDateRangeBegin input for this TrackByReference Choreo.
     *
     * @param string $value (optional, date) Specifies the beginning of a date range used to narrow the search to a period in time. Dates should be formatted as YYYY-MM-DD.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs For method chaining.
     */
    public function setShipDateRangeBegin($value)
    {
        return $this->set('ShipDateRangeBegin', $value);
    }

    /**
     * Set the value for the ShipDateRangeEnd input for this TrackByReference Choreo.
     *
     * @param string $value (optional, date) Specifies the beginning of a date range used to narrow the search to a period in time. Dates should be formatted as YYYY-MM-DD.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs For method chaining.
     */
    public function setShipDateRangeEnd($value)
    {
        return $this->set('ShipDateRangeEnd', $value);
    }

    /**
     * Set the value for the ShipmentAccountNumber input for this TrackByReference Choreo.
     *
     * @param string $value (conditional, string) The shipment account number. Required unless specifying the PostalCode and CountryCode.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs For method chaining.
     */
    public function setShipmentAccountNumber($value)
    {
        return $this->set('ShipmentAccountNumber', $value);
    }

    /**
     * Set the value for the State input for this TrackByReference Choreo.
     *
     * @param string $value (optional, string) Identifying abbreviation for US state, Canada province of the shipment destination (e.g., NY).
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Street input for this TrackByReference Choreo.
     *
     * @param string $value (optional, string) The street number and street name for the shipment destination (e.g., 350 5th Ave).
     * @return FedEx_TrackingAndVisibility_TrackByReference_Inputs For method chaining.
     */
    public function setStreet($value)
    {
        return $this->set('Street', $value);
    }
}


/**
 * Execution object for the TrackByReference Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_TrackingAndVisibility_TrackByReference_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TrackByReference Choreo.
     *
     * @param Temboo_Session $session The session that owns this TrackByReference execution.
     * @param FedEx_TrackingAndVisibility_TrackByReference $choreo The choreography object for this execution.
     * @param FedEx_TrackingAndVisibility_TrackByReference_Inputs|array $inputs (optional) Inputs as FedEx_TrackingAndVisibility_TrackByReference_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FedEx_TrackingAndVisibility_TrackByReference $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TrackByReference execution.
     *
     * @return FedEx_TrackingAndVisibility_TrackByReference_Results New results object.
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
     * Wraps results in appropriate results class for this TrackByReference execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FedEx_TrackingAndVisibility_TrackByReference_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TrackByReference Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_TrackingAndVisibility_TrackByReference_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TrackByReference Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FedEx_TrackingAndVisibility_TrackByReference_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TrackByReference execution.
     *
     * @return string The response from FedEx.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Validates a given address.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_Validation_AddressValidation extends Temboo_Choreography
{
    /**
     * Validates a given address.
     *
     * @param Temboo_Session $session The session that owns this AddressValidation Choreo.
     * @return FedEx_Validation_AddressValidation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FedEx/Validation/AddressValidation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddressValidation Choreo.
     *
     * @param FedEx_Validation_AddressValidation_Inputs|array $inputs (optional) Inputs as FedEx_Validation_AddressValidation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_Validation_AddressValidation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FedEx_Validation_AddressValidation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddressValidation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_Validation_AddressValidation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FedEx_Validation_AddressValidation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddressValidation Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_Validation_AddressValidation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddressValidation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_Validation_AddressValidation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddressValidation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FedEx_Validation_AddressValidation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FedEx_Validation_AddressValidation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountNumber input for this AddressValidation Choreo.
     *
     * @param string $value (required, string) Your FedEx Account Number or Test Account Number.
     * @return FedEx_Validation_AddressValidation_Inputs For method chaining.
     */
    public function setAccountNumber($value)
    {
        return $this->set('AccountNumber', $value);
    }

    /**
     * Set the value for the AuthenticationKey input for this AddressValidation Choreo.
     *
     * @param string $value (required, string) The Production Authentication Key or Development Test Key provided by FedEx Web Services.
     * @return FedEx_Validation_AddressValidation_Inputs For method chaining.
     */
    public function setAuthenticationKey($value)
    {
        return $this->set('AuthenticationKey', $value);
    }

    /**
     * Set the value for the City input for this AddressValidation Choreo.
     *
     * @param string $value (conditional, string) The name of the city or town.
     * @return FedEx_Validation_AddressValidation_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the ClientReferenceID input for this AddressValidation Choreo.
     *
     * @param string $value (optional, string) A reference id provided by the client.
     * @return FedEx_Validation_AddressValidation_Inputs For method chaining.
     */
    public function setClientReferenceID($value)
    {
        return $this->set('ClientReferenceID', $value);
    }

    /**
     * Set the value for the CompanyName input for this AddressValidation Choreo.
     *
     * @param string $value (optional, string) Identifies the company associated with the location.
     * @return FedEx_Validation_AddressValidation_Inputs For method chaining.
     */
    public function setCompanyName($value)
    {
        return $this->set('CompanyName', $value);
    }

    /**
     * Set the value for the CountryCode input for this AddressValidation Choreo.
     *
     * @param string $value (conditional, string) The country code associated with the address being validated (e.g., US).
     * @return FedEx_Validation_AddressValidation_Inputs For method chaining.
     */
    public function setCountryCode($value)
    {
        return $this->set('CountryCode', $value);
    }

    /**
     * Set the value for the Endpoint input for this AddressValidation Choreo.
     *
     * @param string $value (conditional, string) Set to "test" to direct requests to the FedEx test environment. Defaults to "production" indicating that requests are sent to the production URL.
     * @return FedEx_Validation_AddressValidation_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the MeterNumber input for this AddressValidation Choreo.
     *
     * @param string $value (required, string) The Production or Test Meter Number provided by FedEx Web Services.
     * @return FedEx_Validation_AddressValidation_Inputs For method chaining.
     */
    public function setMeterNumber($value)
    {
        return $this->set('MeterNumber', $value);
    }

    /**
     * Set the value for the Password input for this AddressValidation Choreo.
     *
     * @param string $value (required, password) The Production or Test Password provided by FedEx Web Services.
     * @return FedEx_Validation_AddressValidation_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PhoneNumber input for this AddressValidation Choreo.
     *
     * @param string $value (optional, string) Identifies the phone number associated with the contact being validated.
     * @return FedEx_Validation_AddressValidation_Inputs For method chaining.
     */
    public function setPhoneNumber($value)
    {
        return $this->set('PhoneNumber', $value);
    }

    /**
     * Set the value for the PostalCode input for this AddressValidation Choreo.
     *
     * @param string $value (conditional, string) The postal code associated with the address being validated.
     * @return FedEx_Validation_AddressValidation_Inputs For method chaining.
     */
    public function setPostalCode($value)
    {
        return $this->set('PostalCode', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddressValidation Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are "xml" (the default) and "json".
     * @return FedEx_Validation_AddressValidation_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the State input for this AddressValidation Choreo.
     *
     * @param string $value (conditional, string) Identifying abbreviation for US state, Canada province (e.g., NY).
     * @return FedEx_Validation_AddressValidation_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Street input for this AddressValidation Choreo.
     *
     * @param string $value (conditional, string) The street number and street name (e.g., 350 5th Ave).
     * @return FedEx_Validation_AddressValidation_Inputs For method chaining.
     */
    public function setStreet($value)
    {
        return $this->set('Street', $value);
    }

    /**
     * Set the value for the UrbanizationCode input for this AddressValidation Choreo.
     *
     * @param string $value (optional, string) Relevant only to addresses in Puerto Rico.
     * @return FedEx_Validation_AddressValidation_Inputs For method chaining.
     */
    public function setUrbanizationCode($value)
    {
        return $this->set('UrbanizationCode', $value);
    }
}


/**
 * Execution object for the AddressValidation Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_Validation_AddressValidation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddressValidation Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddressValidation execution.
     * @param FedEx_Validation_AddressValidation $choreo The choreography object for this execution.
     * @param FedEx_Validation_AddressValidation_Inputs|array $inputs (optional) Inputs as FedEx_Validation_AddressValidation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_Validation_AddressValidation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FedEx_Validation_AddressValidation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddressValidation execution.
     *
     * @return FedEx_Validation_AddressValidation_Results New results object.
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
     * Wraps results in appropriate results class for this AddressValidation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FedEx_Validation_AddressValidation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FedEx_Validation_AddressValidation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddressValidation Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_Validation_AddressValidation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddressValidation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FedEx_Validation_AddressValidation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddressValidation execution.
     *
     * @return string The response from FedEx.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>