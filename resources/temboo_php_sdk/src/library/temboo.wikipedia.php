<?php

/**
 * Temboo PHP SDK Wikipedia classes
 *
 * Execute Choreographies from the Temboo Wikipedia bundle.
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
 * @subpackage Wikipedia
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves a summary response including a text extract of the first several sentences, as well as information about a thumbnail that represents the page.
 *
 * @package Temboo
 * @subpackage Wikipedia
 */
class Wikipedia_GetPageSummary extends Temboo_Choreography
{
    /**
     * Retrieves a summary response including a text extract of the first several sentences, as well as information about a thumbnail that represents the page.
     *
     * @param Temboo_Session $session The session that owns this GetPageSummary Choreo.
     * @return Wikipedia_GetPageSummary New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wikipedia/GetPageSummary/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetPageSummary Choreo.
     *
     * @param Wikipedia_GetPageSummary_Inputs|array $inputs (optional) Inputs as Wikipedia_GetPageSummary_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wikipedia_GetPageSummary_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wikipedia_GetPageSummary_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPageSummary Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wikipedia_GetPageSummary_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wikipedia_GetPageSummary_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPageSummary Choreo.
 *
 * @package Temboo
 * @subpackage Wikipedia
 */
class Wikipedia_GetPageSummary_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetPageSummary Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wikipedia_GetPageSummary_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPageSummary input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wikipedia_GetPageSummary_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wikipedia_GetPageSummary_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Title input for this GetPageSummary Choreo.
     *
     * @param string $value (required, string) The Wikipedia page title.
     * @return Wikipedia_GetPageSummary_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }
}


/**
 * Execution object for the GetPageSummary Choreo.
 *
 * @package Temboo
 * @subpackage Wikipedia
 */
class Wikipedia_GetPageSummary_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPageSummary Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetPageSummary execution.
     * @param Wikipedia_GetPageSummary $choreo The choreography object for this execution.
     * @param Wikipedia_GetPageSummary_Inputs|array $inputs (optional) Inputs as Wikipedia_GetPageSummary_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wikipedia_GetPageSummary_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wikipedia_GetPageSummary $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPageSummary execution.
     *
     * @return Wikipedia_GetPageSummary_Results New results object.
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
     * Wraps results in appropriate results class for this GetPageSummary execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wikipedia_GetPageSummary_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wikipedia_GetPageSummary_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetPageSummary Choreo.
 *
 * @package Temboo
 * @subpackage Wikipedia
 */
class Wikipedia_GetPageSummary_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetPageSummary Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wikipedia_GetPageSummary_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Extract" output from this GetPageSummary execution.
     *
     * @return string (string) The page summary.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExtract()
    {
        return $this->get('Extract');
    }
    /**
     * Retrieve the value for the "ResponseCode" output from this GetPageSummary execution.
     *
     * @return int (integer) The response code returned by the API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseCode()
    {
        return $this->get('ResponseCode');
    }
    /**
     * Retrieve the value for the "Response" output from this GetPageSummary execution.
     *
     * @return string (json) The response from Wikipedia.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>