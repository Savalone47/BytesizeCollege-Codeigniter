<?php

/**
 * Temboo PHP SDK Uber classes
 *
 * Execute Choreographies from the Temboo Uber bundle.
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
 * @subpackage Uber
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Returns an estimated price range for each product offered at a given location.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_Estimates_GetPriceEstimates extends Temboo_Choreography
{
    /**
     * Returns an estimated price range for each product offered at a given location.
     *
     * @param Temboo_Session $session The session that owns this GetPriceEstimates Choreo.
     * @return Uber_Estimates_GetPriceEstimates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Uber/Estimates/GetPriceEstimates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetPriceEstimates Choreo.
     *
     * @param Uber_Estimates_GetPriceEstimates_Inputs|array $inputs (optional) Inputs as Uber_Estimates_GetPriceEstimates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Uber_Estimates_GetPriceEstimates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Uber_Estimates_GetPriceEstimates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPriceEstimates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Uber_Estimates_GetPriceEstimates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Uber_Estimates_GetPriceEstimates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPriceEstimates Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_Estimates_GetPriceEstimates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetPriceEstimates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Uber_Estimates_GetPriceEstimates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPriceEstimates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Uber_Estimates_GetPriceEstimates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Uber_Estimates_GetPriceEstimates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the EndLatitude input for this GetPriceEstimates Choreo.
     *
     * @param float $value (required, decimal) The latitude coordinate for the destination e.g., 40.650729.
     * @return Uber_Estimates_GetPriceEstimates_Inputs For method chaining.
     */
    public function setEndLatitude($value)
    {
        return $this->set('EndLatitude', $value);
    }

    /**
     * Set the value for the EndLongitude input for this GetPriceEstimates Choreo.
     *
     * @param float $value (required, decimal) The longitude coordinate for the destination e.g., -74.009536.
     * @return Uber_Estimates_GetPriceEstimates_Inputs For method chaining.
     */
    public function setEndLongitude($value)
    {
        return $this->set('EndLongitude', $value);
    }

    /**
     * Set the value for the ServerToken input for this GetPriceEstimates Choreo.
     *
     * @param string $value (required, string) The Sever Token provided by Uber.
     * @return Uber_Estimates_GetPriceEstimates_Inputs For method chaining.
     */
    public function setServerToken($value)
    {
        return $this->set('ServerToken', $value);
    }

    /**
     * Set the value for the StartLatitude input for this GetPriceEstimates Choreo.
     *
     * @param float $value (required, decimal) The latitude coordinate for the starting location e.g., 40.71863.
     * @return Uber_Estimates_GetPriceEstimates_Inputs For method chaining.
     */
    public function setStartLatitude($value)
    {
        return $this->set('StartLatitude', $value);
    }

    /**
     * Set the value for the StartLongitude input for this GetPriceEstimates Choreo.
     *
     * @param float $value (required, decimal) The longitude coordinate for the starting location e.g., -74.005584.
     * @return Uber_Estimates_GetPriceEstimates_Inputs For method chaining.
     */
    public function setStartLongitude($value)
    {
        return $this->set('StartLongitude', $value);
    }
}


/**
 * Execution object for the GetPriceEstimates Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_Estimates_GetPriceEstimates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPriceEstimates Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetPriceEstimates execution.
     * @param Uber_Estimates_GetPriceEstimates $choreo The choreography object for this execution.
     * @param Uber_Estimates_GetPriceEstimates_Inputs|array $inputs (optional) Inputs as Uber_Estimates_GetPriceEstimates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Uber_Estimates_GetPriceEstimates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Uber_Estimates_GetPriceEstimates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPriceEstimates execution.
     *
     * @return Uber_Estimates_GetPriceEstimates_Results New results object.
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
     * Wraps results in appropriate results class for this GetPriceEstimates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Uber_Estimates_GetPriceEstimates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Uber_Estimates_GetPriceEstimates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetPriceEstimates Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_Estimates_GetPriceEstimates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetPriceEstimates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Uber_Estimates_GetPriceEstimates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetPriceEstimates execution.
     *
     * @return string (json) The response from Uber.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns ETAs for all products offered at a given location.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_Estimates_GetTimeEstimates extends Temboo_Choreography
{
    /**
     * Returns ETAs for all products offered at a given location.
     *
     * @param Temboo_Session $session The session that owns this GetTimeEstimates Choreo.
     * @return Uber_Estimates_GetTimeEstimates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Uber/Estimates/GetTimeEstimates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTimeEstimates Choreo.
     *
     * @param Uber_Estimates_GetTimeEstimates_Inputs|array $inputs (optional) Inputs as Uber_Estimates_GetTimeEstimates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Uber_Estimates_GetTimeEstimates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Uber_Estimates_GetTimeEstimates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTimeEstimates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Uber_Estimates_GetTimeEstimates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Uber_Estimates_GetTimeEstimates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTimeEstimates Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_Estimates_GetTimeEstimates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTimeEstimates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Uber_Estimates_GetTimeEstimates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTimeEstimates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Uber_Estimates_GetTimeEstimates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Uber_Estimates_GetTimeEstimates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CustomerID input for this GetTimeEstimates Choreo.
     *
     * @param string $value (optional, string) The ID of a customer to be used for experience customization.
     * @return Uber_Estimates_GetTimeEstimates_Inputs For method chaining.
     */
    public function setCustomerID($value)
    {
        return $this->set('CustomerID', $value);
    }

    /**
     * Set the value for the ProductID input for this GetTimeEstimates Choreo.
     *
     * @param string $value (optional, string) An ID representing a specific product for a given latitude and longitude.
     * @return Uber_Estimates_GetTimeEstimates_Inputs For method chaining.
     */
    public function setProductID($value)
    {
        return $this->set('ProductID', $value);
    }

    /**
     * Set the value for the ServerToken input for this GetTimeEstimates Choreo.
     *
     * @param string $value (required, string) The Sever Token provided by Uber.
     * @return Uber_Estimates_GetTimeEstimates_Inputs For method chaining.
     */
    public function setServerToken($value)
    {
        return $this->set('ServerToken', $value);
    }

    /**
     * Set the value for the StartLatitude input for this GetTimeEstimates Choreo.
     *
     * @param float $value (required, decimal) The latitude coordinate for the starting location e.g., 40.71863.
     * @return Uber_Estimates_GetTimeEstimates_Inputs For method chaining.
     */
    public function setStartLatitude($value)
    {
        return $this->set('StartLatitude', $value);
    }

    /**
     * Set the value for the StartLongitude input for this GetTimeEstimates Choreo.
     *
     * @param float $value (required, decimal) The longitude coordinate for the starting location e.g., -74.005584.
     * @return Uber_Estimates_GetTimeEstimates_Inputs For method chaining.
     */
    public function setStartLongitude($value)
    {
        return $this->set('StartLongitude', $value);
    }
}


/**
 * Execution object for the GetTimeEstimates Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_Estimates_GetTimeEstimates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTimeEstimates Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTimeEstimates execution.
     * @param Uber_Estimates_GetTimeEstimates $choreo The choreography object for this execution.
     * @param Uber_Estimates_GetTimeEstimates_Inputs|array $inputs (optional) Inputs as Uber_Estimates_GetTimeEstimates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Uber_Estimates_GetTimeEstimates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Uber_Estimates_GetTimeEstimates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTimeEstimates execution.
     *
     * @return Uber_Estimates_GetTimeEstimates_Results New results object.
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
     * Wraps results in appropriate results class for this GetTimeEstimates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Uber_Estimates_GetTimeEstimates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Uber_Estimates_GetTimeEstimates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTimeEstimates Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_Estimates_GetTimeEstimates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTimeEstimates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Uber_Estimates_GetTimeEstimates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTimeEstimates execution.
     *
     * @return string (json) The response from Uber.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Completes the OAuth process by retrieving an Uber access token for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving an Uber access token for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return Uber_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Uber/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param Uber_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Uber_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Uber_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Uber_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Uber_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Uber_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Uber_OAuth_FinalizeOAuth_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FinalizeOAuth input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Uber_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Uber_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the authorization code after the user authorizes.
     * @return Uber_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the ClientID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Uber after registering your application.
     * @return Uber_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client Secret provided by Uber after registering your application.
     * @return Uber_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the SuppressErrors input for this FinalizeOAuth Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, errors received during the OAuth redirect process will be suppressed and returned in the ErrorMessage output.
     * @return Uber_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setSuppressErrors($value)
    {
        return $this->set('SuppressErrors', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return Uber_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setTimeout($value)
    {
        return $this->set('Timeout', $value);
    }
}


/**
 * Execution object for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param Uber_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param Uber_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Uber_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Uber_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Uber_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return Uber_OAuth_FinalizeOAuth_Results New results object.
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
     * Wraps results in appropriate results class for this FinalizeOAuth execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Uber_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Uber_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Uber_OAuth_FinalizeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Access Token for the user that has granted access to your application.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "ErrorMessage" output from this FinalizeOAuth execution.
     *
     * @return string (string) Contains an error message if an error occurs during the OAuth redirect process and if SuppressErrors is set to true.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getErrorMessage()
    {
        return $this->get('ErrorMessage');
    }
    /**
     * Retrieve the value for the "Expires" output from this FinalizeOAuth execution.
     *
     * @return int (integer) The remaining lifetime of the short-lived Access Token.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpires()
    {
        return $this->get('Expires');
    }
    /**
     * Retrieve the value for the "RefreshToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) A token that may be used to obtain a new Access Token when the short-lived Access Token expires.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRefreshToken()
    {
        return $this->get('RefreshToken');
    }
}

/**
 * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return Uber_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Uber/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param Uber_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Uber_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Uber_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Uber_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Uber_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Uber_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Uber_OAuth_InitializeOAuth_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this InitializeOAuth input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Uber_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Uber_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Uber after registering your application.
     * @return Uber_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the CustomCallbackID input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A unique identifier that you can pass to eliminate the need to wait for a Temboo generated CallbackID. Callback identifiers may only contain numbers, letters, periods, and hyphens.
     * @return Uber_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCustomCallbackID($value)
    {
        return $this->set('CustomCallbackID', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant access to your application. This should include the "https://" or "http://" prefix and be a fully qualified URL.
     * @return Uber_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setForwardingURL($value)
    {
        return $this->set('ForwardingURL', $value);
    }

    /**
     * Set the value for the Scope input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A space-delimited list of scopes to requests access for. See Choreo notes for a list of valid scopes.
     * @return Uber_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setScope($value)
    {
        return $this->set('Scope', $value);
    }
}


/**
 * Execution object for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param Uber_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param Uber_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Uber_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Uber_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Uber_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return Uber_OAuth_InitializeOAuth_Results New results object.
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
     * Wraps results in appropriate results class for this InitializeOAuth execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Uber_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Uber_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Uber_OAuth_InitializeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AuthorizationURL" output from this InitializeOAuth execution.
     *
     * @return string (string) The authorization URL that the application's user needs to go to in order to grant access to your application.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAuthorizationURL()
    {
        return $this->get('AuthorizationURL');
    }
    /**
     * Retrieve the value for the "CallbackID" output from this InitializeOAuth execution.
     *
     * @return string (string) An ID used to retrieve the callback data that Temboo stores once your application's user authorizes.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCallbackID()
    {
        return $this->get('CallbackID');
    }
}

/**
 * Retrieves a fresh Access Token by exchanging the Refresh Token that is associated with the expired Access Token.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_OAuth_RefreshToken extends Temboo_Choreography
{
    /**
     * Retrieves a fresh Access Token by exchanging the Refresh Token that is associated with the expired Access Token.
     *
     * @param Temboo_Session $session The session that owns this RefreshToken Choreo.
     * @return Uber_OAuth_RefreshToken New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Uber/OAuth/RefreshToken/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RefreshToken Choreo.
     *
     * @param Uber_OAuth_RefreshToken_Inputs|array $inputs (optional) Inputs as Uber_OAuth_RefreshToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Uber_OAuth_RefreshToken_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Uber_OAuth_RefreshToken_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RefreshToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Uber_OAuth_RefreshToken_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Uber_OAuth_RefreshToken_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RefreshToken Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_OAuth_RefreshToken_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RefreshToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Uber_OAuth_RefreshToken_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RefreshToken input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Uber_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Uber_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this RefreshToken Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Uber after registering your application.
     * @return Uber_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this RefreshToken Choreo.
     *
     * @param string $value (required, string) The Client Secret provided by Uber after registering your application.
     * @return Uber_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the RefreshToken input for this RefreshToken Choreo.
     *
     * @param string $value (required, string) An OAuth Refresh Token used to generate a new access token when the original token is expired.
     * @return Uber_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the RefreshToken Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_OAuth_RefreshToken_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RefreshToken Choreo.
     *
     * @param Temboo_Session $session The session that owns this RefreshToken execution.
     * @param Uber_OAuth_RefreshToken $choreo The choreography object for this execution.
     * @param Uber_OAuth_RefreshToken_Inputs|array $inputs (optional) Inputs as Uber_OAuth_RefreshToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Uber_OAuth_RefreshToken_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Uber_OAuth_RefreshToken $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RefreshToken execution.
     *
     * @return Uber_OAuth_RefreshToken_Results New results object.
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
     * Wraps results in appropriate results class for this RefreshToken execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Uber_OAuth_RefreshToken_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Uber_OAuth_RefreshToken_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RefreshToken Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_OAuth_RefreshToken_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RefreshToken Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Uber_OAuth_RefreshToken_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessToken" output from this RefreshToken execution.
     *
     * @return string (string) The Access Token for the user that has granted access to your application.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "Expires" output from this RefreshToken execution.
     *
     * @return int (integer) The remaining lifetime of the short-lived access token.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpires()
    {
        return $this->get('Expires');
    }
    /**
     * Retrieve the value for the "NewRefreshToken" output from this RefreshToken execution.
     *
     * @return string (string) The new Refresh Token which can be used the next time your app needs to get a new Access Token.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewRefreshToken()
    {
        return $this->get('NewRefreshToken');
    }
    /**
     * Retrieve the value for the "Scope" output from this RefreshToken execution.
     *
     * @return string (string) The scope associated with the new Access Token.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getScope()
    {
        return $this->get('Scope');
    }
}

/**
 * Returns information about the Uber products offered at a given location.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_Products_GetProductTypes extends Temboo_Choreography
{
    /**
     * Returns information about the Uber products offered at a given location.
     *
     * @param Temboo_Session $session The session that owns this GetProductTypes Choreo.
     * @return Uber_Products_GetProductTypes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Uber/Products/GetProductTypes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetProductTypes Choreo.
     *
     * @param Uber_Products_GetProductTypes_Inputs|array $inputs (optional) Inputs as Uber_Products_GetProductTypes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Uber_Products_GetProductTypes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Uber_Products_GetProductTypes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetProductTypes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Uber_Products_GetProductTypes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Uber_Products_GetProductTypes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetProductTypes Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_Products_GetProductTypes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetProductTypes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Uber_Products_GetProductTypes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetProductTypes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Uber_Products_GetProductTypes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Uber_Products_GetProductTypes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Latitude input for this GetProductTypes Choreo.
     *
     * @param float $value (required, decimal) The latitude coordinate for the location e.g., 40.71863.
     * @return Uber_Products_GetProductTypes_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this GetProductTypes Choreo.
     *
     * @param float $value (required, decimal) The longitude coordinate for the location e.g., -74.005584.
     * @return Uber_Products_GetProductTypes_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the ServerToken input for this GetProductTypes Choreo.
     *
     * @param string $value (required, string) The Sever Token provided by Uber.
     * @return Uber_Products_GetProductTypes_Inputs For method chaining.
     */
    public function setServerToken($value)
    {
        return $this->set('ServerToken', $value);
    }
}


/**
 * Execution object for the GetProductTypes Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_Products_GetProductTypes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetProductTypes Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetProductTypes execution.
     * @param Uber_Products_GetProductTypes $choreo The choreography object for this execution.
     * @param Uber_Products_GetProductTypes_Inputs|array $inputs (optional) Inputs as Uber_Products_GetProductTypes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Uber_Products_GetProductTypes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Uber_Products_GetProductTypes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetProductTypes execution.
     *
     * @return Uber_Products_GetProductTypes_Results New results object.
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
     * Wraps results in appropriate results class for this GetProductTypes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Uber_Products_GetProductTypes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Uber_Products_GetProductTypes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetProductTypes Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_Products_GetProductTypes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetProductTypes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Uber_Products_GetProductTypes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetProductTypes execution.
     *
     * @return string (json) The response from Uber.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns information about a user's activity with Uber including pickup locations and times, dropoff locations and times, the distance of past requests, and information about which products were requested.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_User_GetActivity extends Temboo_Choreography
{
    /**
     * Returns information about a user's activity with Uber including pickup locations and times, dropoff locations and times, the distance of past requests, and information about which products were requested.
     *
     * @param Temboo_Session $session The session that owns this GetActivity Choreo.
     * @return Uber_User_GetActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Uber/User/GetActivity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetActivity Choreo.
     *
     * @param Uber_User_GetActivity_Inputs|array $inputs (optional) Inputs as Uber_User_GetActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Uber_User_GetActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Uber_User_GetActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Uber_User_GetActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Uber_User_GetActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetActivity Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_User_GetActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Uber_User_GetActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Uber_User_GetActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Uber_User_GetActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetActivity Choreo.
     *
     * @param string $value (required, string) A valid Access Token retrieved during the OAuth process.
     * @return Uber_User_GetActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Limit input for this GetActivity Choreo.
     *
     * @param int $value (optional, integer) Limits the number of records returned in the response.
     * @return Uber_User_GetActivity_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this GetActivity Choreo.
     *
     * @param int $value (optional, integer) Returns results starting from the specified number.
     * @return Uber_User_GetActivity_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }
}


/**
 * Execution object for the GetActivity Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_User_GetActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetActivity Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetActivity execution.
     * @param Uber_User_GetActivity $choreo The choreography object for this execution.
     * @param Uber_User_GetActivity_Inputs|array $inputs (optional) Inputs as Uber_User_GetActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Uber_User_GetActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Uber_User_GetActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetActivity execution.
     *
     * @return Uber_User_GetActivity_Results New results object.
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
     * Wraps results in appropriate results class for this GetActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Uber_User_GetActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Uber_User_GetActivity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetActivity Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_User_GetActivity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetActivity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Uber_User_GetActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetActivity execution.
     *
     * @return string (json) The response from Uber.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns information about the Uber user that has authorized with the application.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_User_GetProfile extends Temboo_Choreography
{
    /**
     * Returns information about the Uber user that has authorized with the application.
     *
     * @param Temboo_Session $session The session that owns this GetProfile Choreo.
     * @return Uber_User_GetProfile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Uber/User/GetProfile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetProfile Choreo.
     *
     * @param Uber_User_GetProfile_Inputs|array $inputs (optional) Inputs as Uber_User_GetProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Uber_User_GetProfile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Uber_User_GetProfile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetProfile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Uber_User_GetProfile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Uber_User_GetProfile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetProfile Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_User_GetProfile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetProfile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Uber_User_GetProfile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetProfile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Uber_User_GetProfile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Uber_User_GetProfile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetProfile Choreo.
     *
     * @param string $value (required, string) A valid Access Token retrieved during the OAuth process.
     * @return Uber_User_GetProfile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the GetProfile Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_User_GetProfile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetProfile Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetProfile execution.
     * @param Uber_User_GetProfile $choreo The choreography object for this execution.
     * @param Uber_User_GetProfile_Inputs|array $inputs (optional) Inputs as Uber_User_GetProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Uber_User_GetProfile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Uber_User_GetProfile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetProfile execution.
     *
     * @return Uber_User_GetProfile_Results New results object.
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
     * Wraps results in appropriate results class for this GetProfile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Uber_User_GetProfile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Uber_User_GetProfile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetProfile Choreo.
 *
 * @package Temboo
 * @subpackage Uber
 */
class Uber_User_GetProfile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetProfile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Uber_User_GetProfile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetProfile execution.
     *
     * @return string (json) The response from Uber.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>