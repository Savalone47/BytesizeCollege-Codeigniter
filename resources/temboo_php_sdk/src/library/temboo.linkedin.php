<?php

/**
 * Temboo PHP SDK LinkedIn classes
 *
 * Execute Choreographies from the Temboo LinkedIn bundle.
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
 * @subpackage LinkedIn
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Posts shared comment on a company page.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_CompanyShare extends Temboo_Choreography
{
    /**
     * Posts shared comment on a company page.
     *
     * @param Temboo_Session $session The session that owns this CompanyShare Choreo.
     * @return LinkedIn_Companies_CompanyShare New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Companies/CompanyShare/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CompanyShare Choreo.
     *
     * @param LinkedIn_Companies_CompanyShare_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_CompanyShare_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_CompanyShare_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Companies_CompanyShare_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CompanyShare Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_CompanyShare_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Companies_CompanyShare_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CompanyShare Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_CompanyShare_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CompanyShare Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_CompanyShare_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CompanyShare input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Companies_CompanyShare_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Companies_CompanyShare_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CompanyShare Choreo.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the Client ID).
     * @return LinkedIn_Companies_CompanyShare_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this CompanyShare Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process (AKA the OAuth User Token).
     * @return LinkedIn_Companies_CompanyShare_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CompanyShare Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process (AKA the OAuth User Secret).
     * @return LinkedIn_Companies_CompanyShare_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the Comment input for this CompanyShare Choreo.
     *
     * @param string $value (conditional, string) A comment by the member to associated with the share. If this is not provided, you must specify the SubmittedURL.
     * @return LinkedIn_Companies_CompanyShare_Inputs For method chaining.
     */
    public function setComment($value)
    {
        return $this->set('Comment', $value);
    }

    /**
     * Set the value for the CompanyID input for this CompanyShare Choreo.
     *
     * @param int $value (required, integer) A LinkedIn assigned ID associated with the company.
     * @return LinkedIn_Companies_CompanyShare_Inputs For method chaining.
     */
    public function setCompanyID($value)
    {
        return $this->set('CompanyID', $value);
    }

    /**
     * Set the value for the Description input for this CompanyShare Choreo.
     *
     * @param string $value (optional, string) The description of the content being shared.
     * @return LinkedIn_Companies_CompanyShare_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CompanyShare Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml (the default) and json.
     * @return LinkedIn_Companies_CompanyShare_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this CompanyShare Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the Client Secret).
     * @return LinkedIn_Companies_CompanyShare_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the SharedTargetCode input for this CompanyShare Choreo.
     *
     * @param string $value (optional, string) A shared target code used to ensure that the shared content reaches a specific audience.
     * @return LinkedIn_Companies_CompanyShare_Inputs For method chaining.
     */
    public function setSharedTargetCode($value)
    {
        return $this->set('SharedTargetCode', $value);
    }

    /**
     * Set the value for the SharedTargetValue input for this CompanyShare Choreo.
     *
     * @param string $value (optional, string) The name of the shared target used to ensure that the shared content reaches a specific audience.
     * @return LinkedIn_Companies_CompanyShare_Inputs For method chaining.
     */
    public function setSharedTargetValue($value)
    {
        return $this->set('SharedTargetValue', $value);
    }

    /**
     * Set the value for the SubmittedImageURL input for this CompanyShare Choreo.
     *
     * @param string $value (optional, string) A fully qualified URL to a thumbnail image to accompany the shared content.
     * @return LinkedIn_Companies_CompanyShare_Inputs For method chaining.
     */
    public function setSubmittedImageURL($value)
    {
        return $this->set('SubmittedImageURL', $value);
    }

    /**
     * Set the value for the SubmittedURL input for this CompanyShare Choreo.
     *
     * @param string $value (optional, string) A fully qualified URL for the content being shared.
     * @return LinkedIn_Companies_CompanyShare_Inputs For method chaining.
     */
    public function setSubmittedURL($value)
    {
        return $this->set('SubmittedURL', $value);
    }

    /**
     * Set the value for the Title input for this CompanyShare Choreo.
     *
     * @param string $value (optional, string) The title of the content being shared.
     * @return LinkedIn_Companies_CompanyShare_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Visibility input for this CompanyShare Choreo.
     *
     * @param string $value (required, string) The visibility setting of the share. Valid values are: anyone, connections-only.
     * @return LinkedIn_Companies_CompanyShare_Inputs For method chaining.
     */
    public function setVisibility($value)
    {
        return $this->set('Visibility', $value);
    }
}


/**
 * Execution object for the CompanyShare Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_CompanyShare_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CompanyShare Choreo.
     *
     * @param Temboo_Session $session The session that owns this CompanyShare execution.
     * @param LinkedIn_Companies_CompanyShare $choreo The choreography object for this execution.
     * @param LinkedIn_Companies_CompanyShare_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_CompanyShare_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_CompanyShare_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Companies_CompanyShare $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CompanyShare execution.
     *
     * @return LinkedIn_Companies_CompanyShare_Results New results object.
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
     * Wraps results in appropriate results class for this CompanyShare execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Companies_CompanyShare_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Companies_CompanyShare_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CompanyShare Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_CompanyShare_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CompanyShare Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Companies_CompanyShare_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CompanyShare execution.
     *
     * @return string The response from LinkedIn.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns all comments for a specific company update.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetComments extends Temboo_Choreography
{
    /**
     * Returns all comments for a specific company update.
     *
     * @param Temboo_Session $session The session that owns this GetComments Choreo.
     * @return LinkedIn_Companies_GetComments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Companies/GetComments/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetComments Choreo.
     *
     * @param LinkedIn_Companies_GetComments_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetComments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Companies_GetComments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetComments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Companies_GetComments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetComments Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetComments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetComments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetComments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Companies_GetComments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Companies_GetComments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetComments Choreo.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the Client ID).
     * @return LinkedIn_Companies_GetComments_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetComments Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process (AKA the OAuth User Token).
     * @return LinkedIn_Companies_GetComments_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetComments Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process (AKA the OAuth User Secret).
     * @return LinkedIn_Companies_GetComments_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the CompanyID input for this GetComments Choreo.
     *
     * @param int $value (required, integer) A LinkedIn assigned ID associated with the company.
     * @return LinkedIn_Companies_GetComments_Inputs For method chaining.
     */
    public function setCompanyID($value)
    {
        return $this->set('CompanyID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetComments Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml (the default) and json.
     * @return LinkedIn_Companies_GetComments_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetComments Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the Client Secret).
     * @return LinkedIn_Companies_GetComments_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the UpdateKey input for this GetComments Choreo.
     *
     * @param string $value (required, string) The key of the update to retrieve comments for.
     * @return LinkedIn_Companies_GetComments_Inputs For method chaining.
     */
    public function setUpdateKey($value)
    {
        return $this->set('UpdateKey', $value);
    }
}


/**
 * Execution object for the GetComments Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetComments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetComments Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetComments execution.
     * @param LinkedIn_Companies_GetComments $choreo The choreography object for this execution.
     * @param LinkedIn_Companies_GetComments_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetComments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Companies_GetComments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetComments execution.
     *
     * @return LinkedIn_Companies_GetComments_Results New results object.
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
     * Wraps results in appropriate results class for this GetComments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Companies_GetComments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Companies_GetComments_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetComments Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetComments_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetComments Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Companies_GetComments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetComments execution.
     *
     * @return string The response from LinkedIn.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns profile information about a specified company.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfileByID extends Temboo_Choreography
{
    /**
     * Returns profile information about a specified company.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyProfileByID Choreo.
     * @return LinkedIn_Companies_GetCompanyProfileByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Companies/GetCompanyProfileByID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCompanyProfileByID Choreo.
     *
     * @param LinkedIn_Companies_GetCompanyProfileByID_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetCompanyProfileByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Companies_GetCompanyProfileByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCompanyProfileByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Companies_GetCompanyProfileByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCompanyProfileByID Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfileByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCompanyProfileByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCompanyProfileByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetCompanyProfileByID Choreo.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the Client ID).
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetCompanyProfileByID Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process (AKA the OAuth User Token).
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetCompanyProfileByID Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process (AKA the OAuth User Secret).
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the CompanyID input for this GetCompanyProfileByID Choreo.
     *
     * @param int $value (required, integer) A LinkedIn assigned ID associated with the company.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs For method chaining.
     */
    public function setCompanyID($value)
    {
        return $this->set('CompanyID', $value);
    }

    /**
     * Set the value for the FieldSelector input for this GetCompanyProfileByID Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of additional field names to return (e.g., id,name,description). See Choreo notes for more details.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs For method chaining.
     */
    public function setFieldSelector($value)
    {
        return $this->set('FieldSelector', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetCompanyProfileByID Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml (the default) and json.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetCompanyProfileByID Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the Client Secret).
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the GetCompanyProfileByID Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfileByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCompanyProfileByID Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyProfileByID execution.
     * @param LinkedIn_Companies_GetCompanyProfileByID $choreo The choreography object for this execution.
     * @param LinkedIn_Companies_GetCompanyProfileByID_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetCompanyProfileByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Companies_GetCompanyProfileByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCompanyProfileByID execution.
     *
     * @return LinkedIn_Companies_GetCompanyProfileByID_Results New results object.
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
     * Wraps results in appropriate results class for this GetCompanyProfileByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Companies_GetCompanyProfileByID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCompanyProfileByID Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfileByID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCompanyProfileByID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCompanyProfileByID execution.
     *
     * @return string The response from LinkedIn.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a specific update event from the LinkedIn company page.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyUpdate extends Temboo_Choreography
{
    /**
     * Returns a specific update event from the LinkedIn company page.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyUpdate Choreo.
     * @return LinkedIn_Companies_GetCompanyUpdate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Companies/GetCompanyUpdate/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCompanyUpdate Choreo.
     *
     * @param LinkedIn_Companies_GetCompanyUpdate_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetCompanyUpdate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetCompanyUpdate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Companies_GetCompanyUpdate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCompanyUpdate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetCompanyUpdate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Companies_GetCompanyUpdate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCompanyUpdate Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyUpdate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCompanyUpdate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetCompanyUpdate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCompanyUpdate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Companies_GetCompanyUpdate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Companies_GetCompanyUpdate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetCompanyUpdate Choreo.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the Client ID).
     * @return LinkedIn_Companies_GetCompanyUpdate_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetCompanyUpdate Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process (AKA the OAuth User Token).
     * @return LinkedIn_Companies_GetCompanyUpdate_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetCompanyUpdate Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process (AKA the OAuth User Secret).
     * @return LinkedIn_Companies_GetCompanyUpdate_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the CompanyID input for this GetCompanyUpdate Choreo.
     *
     * @param int $value (required, integer) A LinkedIn assigned ID associated with the company.
     * @return LinkedIn_Companies_GetCompanyUpdate_Inputs For method chaining.
     */
    public function setCompanyID($value)
    {
        return $this->set('CompanyID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetCompanyUpdate Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml (the default) and json.
     * @return LinkedIn_Companies_GetCompanyUpdate_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetCompanyUpdate Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the Client Secret).
     * @return LinkedIn_Companies_GetCompanyUpdate_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the UpdateKey input for this GetCompanyUpdate Choreo.
     *
     * @param string $value (required, string) The key of the update to return.
     * @return LinkedIn_Companies_GetCompanyUpdate_Inputs For method chaining.
     */
    public function setUpdateKey($value)
    {
        return $this->set('UpdateKey', $value);
    }
}


/**
 * Execution object for the GetCompanyUpdate Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyUpdate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCompanyUpdate Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyUpdate execution.
     * @param LinkedIn_Companies_GetCompanyUpdate $choreo The choreography object for this execution.
     * @param LinkedIn_Companies_GetCompanyUpdate_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetCompanyUpdate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetCompanyUpdate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Companies_GetCompanyUpdate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCompanyUpdate execution.
     *
     * @return LinkedIn_Companies_GetCompanyUpdate_Results New results object.
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
     * Wraps results in appropriate results class for this GetCompanyUpdate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Companies_GetCompanyUpdate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Companies_GetCompanyUpdate_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCompanyUpdate Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyUpdate_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCompanyUpdate Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Companies_GetCompanyUpdate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCompanyUpdate execution.
     *
     * @return string The response from LinkedIn.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of update events from the LinkedIn company page.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyUpdates extends Temboo_Choreography
{
    /**
     * Returns a list of update events from the LinkedIn company page.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyUpdates Choreo.
     * @return LinkedIn_Companies_GetCompanyUpdates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Companies/GetCompanyUpdates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCompanyUpdates Choreo.
     *
     * @param LinkedIn_Companies_GetCompanyUpdates_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetCompanyUpdates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetCompanyUpdates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Companies_GetCompanyUpdates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCompanyUpdates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetCompanyUpdates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Companies_GetCompanyUpdates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCompanyUpdates Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyUpdates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCompanyUpdates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetCompanyUpdates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCompanyUpdates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Companies_GetCompanyUpdates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Companies_GetCompanyUpdates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetCompanyUpdates Choreo.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the Client ID).
     * @return LinkedIn_Companies_GetCompanyUpdates_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetCompanyUpdates Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process (AKA the OAuth User Token).
     * @return LinkedIn_Companies_GetCompanyUpdates_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetCompanyUpdates Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process (AKA the OAuth User Secret).
     * @return LinkedIn_Companies_GetCompanyUpdates_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the CompanyID input for this GetCompanyUpdates Choreo.
     *
     * @param int $value (required, integer) A LinkedIn assigned ID associated with the company.
     * @return LinkedIn_Companies_GetCompanyUpdates_Inputs For method chaining.
     */
    public function setCompanyID($value)
    {
        return $this->set('CompanyID', $value);
    }

    /**
     * Set the value for the Count input for this GetCompanyUpdates Choreo.
     *
     * @param int $value (optional, integer) The number of results to return in the response.
     * @return LinkedIn_Companies_GetCompanyUpdates_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the EventType input for this GetCompanyUpdates Choreo.
     *
     * @param string $value (required, string) Filter the results to only return updates of the specified event type. Valid values are: job-posting, new-product, status-update.
     * @return LinkedIn_Companies_GetCompanyUpdates_Inputs For method chaining.
     */
    public function setEventType($value)
    {
        return $this->set('EventType', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetCompanyUpdates Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml (the default) and json.
     * @return LinkedIn_Companies_GetCompanyUpdates_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetCompanyUpdates Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the Client Secret).
     * @return LinkedIn_Companies_GetCompanyUpdates_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Start input for this GetCompanyUpdates Choreo.
     *
     * @param int $value (optional, integer) The page index to return. Used in combination with the Count input to page through results.
     * @return LinkedIn_Companies_GetCompanyUpdates_Inputs For method chaining.
     */
    public function setStart($value)
    {
        return $this->set('Start', $value);
    }
}


/**
 * Execution object for the GetCompanyUpdates Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyUpdates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCompanyUpdates Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyUpdates execution.
     * @param LinkedIn_Companies_GetCompanyUpdates $choreo The choreography object for this execution.
     * @param LinkedIn_Companies_GetCompanyUpdates_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetCompanyUpdates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetCompanyUpdates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Companies_GetCompanyUpdates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCompanyUpdates execution.
     *
     * @return LinkedIn_Companies_GetCompanyUpdates_Results New results object.
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
     * Wraps results in appropriate results class for this GetCompanyUpdates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Companies_GetCompanyUpdates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Companies_GetCompanyUpdates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCompanyUpdates Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyUpdates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCompanyUpdates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Companies_GetCompanyUpdates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCompanyUpdates execution.
     *
     * @return string The response from LinkedIn.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a company's followers, by segment.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetFollowers extends Temboo_Choreography
{
    /**
     * Returns a company's followers, by segment.
     *
     * @param Temboo_Session $session The session that owns this GetFollowers Choreo.
     * @return LinkedIn_Companies_GetFollowers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Companies/GetFollowers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFollowers Choreo.
     *
     * @param LinkedIn_Companies_GetFollowers_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetFollowers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetFollowers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Companies_GetFollowers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFollowers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetFollowers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Companies_GetFollowers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFollowers Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetFollowers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFollowers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetFollowers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFollowers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Companies_GetFollowers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Companies_GetFollowers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetFollowers Choreo.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the Client ID).
     * @return LinkedIn_Companies_GetFollowers_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFollowers Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process (AKA the OAuth User Token).
     * @return LinkedIn_Companies_GetFollowers_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFollowers Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process (AKA the OAuth User Secret).
     * @return LinkedIn_Companies_GetFollowers_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the CompanyID input for this GetFollowers Choreo.
     *
     * @param int $value (required, integer) A LinkedIn assigned ID associated with the company.
     * @return LinkedIn_Companies_GetFollowers_Inputs For method chaining.
     */
    public function setCompanyID($value)
    {
        return $this->set('CompanyID', $value);
    }

    /**
     * Set the value for the CompanySizes input for this GetFollowers Choreo.
     *
     * @param string $value (optional, string) Used to segment by a particular company size targeting code. See Choreo notes for more details.
     * @return LinkedIn_Companies_GetFollowers_Inputs For method chaining.
     */
    public function setCompanySizes($value)
    {
        return $this->set('CompanySizes', $value);
    }

    /**
     * Set the value for the GeographicArea input for this GetFollowers Choreo.
     *
     * @param string $value (optional, string) Used to segment by a particular geographic area. See Choreo notes for more details.
     * @return LinkedIn_Companies_GetFollowers_Inputs For method chaining.
     */
    public function setGeographicArea($value)
    {
        return $this->set('GeographicArea', $value);
    }

    /**
     * Set the value for the Industries input for this GetFollowers Choreo.
     *
     * @param string $value (optional, string) Used to segment by member industry. See Choreo notes for more details.
     * @return LinkedIn_Companies_GetFollowers_Inputs For method chaining.
     */
    public function setIndustries($value)
    {
        return $this->set('Industries', $value);
    }

    /**
     * Set the value for the JobFunction input for this GetFollowers Choreo.
     *
     * @param string $value (optional, string) Used to segment by member job function targeting code. See Choreo notes for more details.
     * @return LinkedIn_Companies_GetFollowers_Inputs For method chaining.
     */
    public function setJobFunction($value)
    {
        return $this->set('JobFunction', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetFollowers Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return LinkedIn_Companies_GetFollowers_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetFollowers Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the Client Secret).
     * @return LinkedIn_Companies_GetFollowers_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the SeniorityLevel input for this GetFollowers Choreo.
     *
     * @param string $value (optional, string) Used to segment by member seniority level targeting code. See Choreo notes for more details.
     * @return LinkedIn_Companies_GetFollowers_Inputs For method chaining.
     */
    public function setSeniorityLevel($value)
    {
        return $this->set('SeniorityLevel', $value);
    }
}


/**
 * Execution object for the GetFollowers Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetFollowers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFollowers Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFollowers execution.
     * @param LinkedIn_Companies_GetFollowers $choreo The choreography object for this execution.
     * @param LinkedIn_Companies_GetFollowers_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetFollowers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetFollowers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Companies_GetFollowers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFollowers execution.
     *
     * @return LinkedIn_Companies_GetFollowers_Results New results object.
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
     * Wraps results in appropriate results class for this GetFollowers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Companies_GetFollowers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Companies_GetFollowers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFollowers Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetFollowers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFollowers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Companies_GetFollowers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFollowers execution.
     *
     * @return string The response from LinkedIn.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a company's followers, by date range.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetHistoricalFollowers extends Temboo_Choreography
{
    /**
     * Returns a company's followers, by date range.
     *
     * @param Temboo_Session $session The session that owns this GetHistoricalFollowers Choreo.
     * @return LinkedIn_Companies_GetHistoricalFollowers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Companies/GetHistoricalFollowers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetHistoricalFollowers Choreo.
     *
     * @param LinkedIn_Companies_GetHistoricalFollowers_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetHistoricalFollowers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetHistoricalFollowers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Companies_GetHistoricalFollowers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetHistoricalFollowers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetHistoricalFollowers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Companies_GetHistoricalFollowers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetHistoricalFollowers Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetHistoricalFollowers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetHistoricalFollowers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetHistoricalFollowers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetHistoricalFollowers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Companies_GetHistoricalFollowers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Companies_GetHistoricalFollowers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetHistoricalFollowers Choreo.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the Client ID).
     * @return LinkedIn_Companies_GetHistoricalFollowers_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetHistoricalFollowers Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process (AKA the OAuth User Token).
     * @return LinkedIn_Companies_GetHistoricalFollowers_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetHistoricalFollowers Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process (AKA the OAuth User Secret).
     * @return LinkedIn_Companies_GetHistoricalFollowers_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the CompanyID input for this GetHistoricalFollowers Choreo.
     *
     * @param int $value (required, integer) A LinkedIn assigned ID associated with the company.
     * @return LinkedIn_Companies_GetHistoricalFollowers_Inputs For method chaining.
     */
    public function setCompanyID($value)
    {
        return $this->set('CompanyID', $value);
    }

    /**
     * Set the value for the EndTimestamp input for this GetHistoricalFollowers Choreo.
     *
     * @param string $value (optional, date) The starting timestamp of when the stats search should begin (milliseconds since epoch). The current time will be used if a timestamp is not provided.
     * @return LinkedIn_Companies_GetHistoricalFollowers_Inputs For method chaining.
     */
    public function setEndTimestamp($value)
    {
        return $this->set('EndTimestamp', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetHistoricalFollowers Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml (the default) and json.
     * @return LinkedIn_Companies_GetHistoricalFollowers_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetHistoricalFollowers Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the Client Secret).
     * @return LinkedIn_Companies_GetHistoricalFollowers_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the StartTimestamp input for this GetHistoricalFollowers Choreo.
     *
     * @param string $value (required, date) The starting timestamp of when the stats search should begin (milliseconds since epoch). The current time will be used if a timestamp is not provided.
     * @return LinkedIn_Companies_GetHistoricalFollowers_Inputs For method chaining.
     */
    public function setStartTimestamp($value)
    {
        return $this->set('StartTimestamp', $value);
    }

    /**
     * Set the value for the TimeGranularity input for this GetHistoricalFollowers Choreo.
     *
     * @param string $value (required, string) Granularity of statistics. Valid values are: day, month.
     * @return LinkedIn_Companies_GetHistoricalFollowers_Inputs For method chaining.
     */
    public function setTimeGranularity($value)
    {
        return $this->set('TimeGranularity', $value);
    }
}


/**
 * Execution object for the GetHistoricalFollowers Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetHistoricalFollowers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetHistoricalFollowers Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetHistoricalFollowers execution.
     * @param LinkedIn_Companies_GetHistoricalFollowers $choreo The choreography object for this execution.
     * @param LinkedIn_Companies_GetHistoricalFollowers_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetHistoricalFollowers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetHistoricalFollowers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Companies_GetHistoricalFollowers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetHistoricalFollowers execution.
     *
     * @return LinkedIn_Companies_GetHistoricalFollowers_Results New results object.
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
     * Wraps results in appropriate results class for this GetHistoricalFollowers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Companies_GetHistoricalFollowers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Companies_GetHistoricalFollowers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetHistoricalFollowers Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetHistoricalFollowers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetHistoricalFollowers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Companies_GetHistoricalFollowers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetHistoricalFollowers execution.
     *
     * @return string The response from LinkedIn.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns impression and engagement data on company shares for a given company page.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetHistoricalUpdates extends Temboo_Choreography
{
    /**
     * Returns impression and engagement data on company shares for a given company page.
     *
     * @param Temboo_Session $session The session that owns this GetHistoricalUpdates Choreo.
     * @return LinkedIn_Companies_GetHistoricalUpdates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Companies/GetHistoricalUpdates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetHistoricalUpdates Choreo.
     *
     * @param LinkedIn_Companies_GetHistoricalUpdates_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetHistoricalUpdates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetHistoricalUpdates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Companies_GetHistoricalUpdates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetHistoricalUpdates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetHistoricalUpdates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Companies_GetHistoricalUpdates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetHistoricalUpdates Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetHistoricalUpdates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetHistoricalUpdates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetHistoricalUpdates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetHistoricalUpdates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Companies_GetHistoricalUpdates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Companies_GetHistoricalUpdates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetHistoricalUpdates Choreo.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the Client ID).
     * @return LinkedIn_Companies_GetHistoricalUpdates_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetHistoricalUpdates Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process (AKA the OAuth User Token).
     * @return LinkedIn_Companies_GetHistoricalUpdates_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetHistoricalUpdates Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process (AKA the OAuth User Secret).
     * @return LinkedIn_Companies_GetHistoricalUpdates_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the CompanyID input for this GetHistoricalUpdates Choreo.
     *
     * @param int $value (required, integer) A LinkedIn assigned ID associated with the company.
     * @return LinkedIn_Companies_GetHistoricalUpdates_Inputs For method chaining.
     */
    public function setCompanyID($value)
    {
        return $this->set('CompanyID', $value);
    }

    /**
     * Set the value for the EndTimestamp input for this GetHistoricalUpdates Choreo.
     *
     * @param string $value (optional, date) The starting timestamp of when the stats search should begin (milliseconds since epoch). The current time will be used if a timestamp is not provided.
     * @return LinkedIn_Companies_GetHistoricalUpdates_Inputs For method chaining.
     */
    public function setEndTimestamp($value)
    {
        return $this->set('EndTimestamp', $value);
    }

    /**
     * Set the value for the FieldSelector input for this GetHistoricalUpdates Choreo.
     *
     * @param string $value (optional, string) A comma separated list of additional fields to return.
     * @return LinkedIn_Companies_GetHistoricalUpdates_Inputs For method chaining.
     */
    public function setFieldSelector($value)
    {
        return $this->set('FieldSelector', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetHistoricalUpdates Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml (the default) and json.
     * @return LinkedIn_Companies_GetHistoricalUpdates_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetHistoricalUpdates Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the Client Secret).
     * @return LinkedIn_Companies_GetHistoricalUpdates_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the StartTimestamp input for this GetHistoricalUpdates Choreo.
     *
     * @param string $value (required, date) The starting timestamp of when the stats search should begin (milliseconds since epoch). The current time will be used if a timestamp is not provided.
     * @return LinkedIn_Companies_GetHistoricalUpdates_Inputs For method chaining.
     */
    public function setStartTimestamp($value)
    {
        return $this->set('StartTimestamp', $value);
    }

    /**
     * Set the value for the TimeGranularity input for this GetHistoricalUpdates Choreo.
     *
     * @param string $value (required, string) Granularity of statistics. Valid values are: day, month.
     * @return LinkedIn_Companies_GetHistoricalUpdates_Inputs For method chaining.
     */
    public function setTimeGranularity($value)
    {
        return $this->set('TimeGranularity', $value);
    }

    /**
     * Set the value for the UpdateKey input for this GetHistoricalUpdates Choreo.
     *
     * @param string $value (optional, string) Optionally provide an update key value to return statistics for a specific company update.
     * @return LinkedIn_Companies_GetHistoricalUpdates_Inputs For method chaining.
     */
    public function setUpdateKey($value)
    {
        return $this->set('UpdateKey', $value);
    }
}


/**
 * Execution object for the GetHistoricalUpdates Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetHistoricalUpdates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetHistoricalUpdates Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetHistoricalUpdates execution.
     * @param LinkedIn_Companies_GetHistoricalUpdates $choreo The choreography object for this execution.
     * @param LinkedIn_Companies_GetHistoricalUpdates_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetHistoricalUpdates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetHistoricalUpdates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Companies_GetHistoricalUpdates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetHistoricalUpdates execution.
     *
     * @return LinkedIn_Companies_GetHistoricalUpdates_Results New results object.
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
     * Wraps results in appropriate results class for this GetHistoricalUpdates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Companies_GetHistoricalUpdates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Companies_GetHistoricalUpdates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetHistoricalUpdates Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetHistoricalUpdates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetHistoricalUpdates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Companies_GetHistoricalUpdates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetHistoricalUpdates execution.
     *
     * @return string The response from LinkedIn.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns all likes for a specific company update.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetLikes extends Temboo_Choreography
{
    /**
     * Returns all likes for a specific company update.
     *
     * @param Temboo_Session $session The session that owns this GetLikes Choreo.
     * @return LinkedIn_Companies_GetLikes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Companies/GetLikes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLikes Choreo.
     *
     * @param LinkedIn_Companies_GetLikes_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetLikes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetLikes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Companies_GetLikes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLikes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetLikes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Companies_GetLikes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLikes Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetLikes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLikes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetLikes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLikes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Companies_GetLikes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Companies_GetLikes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetLikes Choreo.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the Client ID).
     * @return LinkedIn_Companies_GetLikes_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetLikes Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process (AKA the OAuth User Token).
     * @return LinkedIn_Companies_GetLikes_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetLikes Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process (AKA the OAuth User Secret).
     * @return LinkedIn_Companies_GetLikes_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the CompanyID input for this GetLikes Choreo.
     *
     * @param int $value (required, integer) A LinkedIn assigned ID associated with the company.
     * @return LinkedIn_Companies_GetLikes_Inputs For method chaining.
     */
    public function setCompanyID($value)
    {
        return $this->set('CompanyID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetLikes Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml (the default) and json.
     * @return LinkedIn_Companies_GetLikes_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetLikes Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the Client Secret).
     * @return LinkedIn_Companies_GetLikes_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the UpdateKey input for this GetLikes Choreo.
     *
     * @param string $value (required, string) The key of the update to return likes for.
     * @return LinkedIn_Companies_GetLikes_Inputs For method chaining.
     */
    public function setUpdateKey($value)
    {
        return $this->set('UpdateKey', $value);
    }
}


/**
 * Execution object for the GetLikes Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetLikes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLikes Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLikes execution.
     * @param LinkedIn_Companies_GetLikes $choreo The choreography object for this execution.
     * @param LinkedIn_Companies_GetLikes_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetLikes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetLikes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Companies_GetLikes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLikes execution.
     *
     * @return LinkedIn_Companies_GetLikes_Results New results object.
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
     * Wraps results in appropriate results class for this GetLikes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Companies_GetLikes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Companies_GetLikes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLikes Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetLikes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLikes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Companies_GetLikes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLikes execution.
     *
     * @return string The response from LinkedIn.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns general statistics for a company.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetStatistics extends Temboo_Choreography
{
    /**
     * Returns general statistics for a company.
     *
     * @param Temboo_Session $session The session that owns this GetStatistics Choreo.
     * @return LinkedIn_Companies_GetStatistics New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Companies/GetStatistics/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetStatistics Choreo.
     *
     * @param LinkedIn_Companies_GetStatistics_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetStatistics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetStatistics_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Companies_GetStatistics_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetStatistics Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetStatistics_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Companies_GetStatistics_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetStatistics Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetStatistics_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetStatistics Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetStatistics_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetStatistics input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Companies_GetStatistics_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Companies_GetStatistics_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetStatistics Choreo.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the Client ID).
     * @return LinkedIn_Companies_GetStatistics_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetStatistics Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process (AKA the OAuth User Token).
     * @return LinkedIn_Companies_GetStatistics_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetStatistics Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process (AKA the OAuth User Secret).
     * @return LinkedIn_Companies_GetStatistics_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the CompanyID input for this GetStatistics Choreo.
     *
     * @param int $value (required, integer) A LinkedIn assigned ID associated with the company.
     * @return LinkedIn_Companies_GetStatistics_Inputs For method chaining.
     */
    public function setCompanyID($value)
    {
        return $this->set('CompanyID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetStatistics Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml (the default) and json.
     * @return LinkedIn_Companies_GetStatistics_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetStatistics Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the Client Secret).
     * @return LinkedIn_Companies_GetStatistics_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the GetStatistics Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetStatistics_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetStatistics Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetStatistics execution.
     * @param LinkedIn_Companies_GetStatistics $choreo The choreography object for this execution.
     * @param LinkedIn_Companies_GetStatistics_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetStatistics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetStatistics_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Companies_GetStatistics $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetStatistics execution.
     *
     * @return LinkedIn_Companies_GetStatistics_Results New results object.
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
     * Wraps results in appropriate results class for this GetStatistics execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Companies_GetStatistics_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Companies_GetStatistics_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetStatistics Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetStatistics_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetStatistics Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Companies_GetStatistics_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetStatistics execution.
     *
     * @return string The response from LinkedIn.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a simple boolean value that indicates whether the currently authenticated user is configured to be an administrator of the specified company.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_IsAdmin extends Temboo_Choreography
{
    /**
     * Returns a simple boolean value that indicates whether the currently authenticated user is configured to be an administrator of the specified company.
     *
     * @param Temboo_Session $session The session that owns this IsAdmin Choreo.
     * @return LinkedIn_Companies_IsAdmin New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Companies/IsAdmin/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this IsAdmin Choreo.
     *
     * @param LinkedIn_Companies_IsAdmin_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_IsAdmin_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_IsAdmin_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Companies_IsAdmin_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this IsAdmin Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_IsAdmin_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Companies_IsAdmin_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the IsAdmin Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_IsAdmin_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the IsAdmin Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_IsAdmin_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this IsAdmin input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Companies_IsAdmin_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Companies_IsAdmin_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this IsAdmin Choreo.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the Client ID).
     * @return LinkedIn_Companies_IsAdmin_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this IsAdmin Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process (AKA the OAuth User Token).
     * @return LinkedIn_Companies_IsAdmin_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this IsAdmin Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process (AKA the OAuth User Secret).
     * @return LinkedIn_Companies_IsAdmin_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the CompanyID input for this IsAdmin Choreo.
     *
     * @param int $value (required, integer) A LinkedIn assigned ID associated with the company.
     * @return LinkedIn_Companies_IsAdmin_Inputs For method chaining.
     */
    public function setCompanyID($value)
    {
        return $this->set('CompanyID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this IsAdmin Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return LinkedIn_Companies_IsAdmin_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this IsAdmin Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the Client Secret).
     * @return LinkedIn_Companies_IsAdmin_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the IsAdmin Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_IsAdmin_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the IsAdmin Choreo.
     *
     * @param Temboo_Session $session The session that owns this IsAdmin execution.
     * @param LinkedIn_Companies_IsAdmin $choreo The choreography object for this execution.
     * @param LinkedIn_Companies_IsAdmin_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_IsAdmin_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_IsAdmin_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Companies_IsAdmin $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this IsAdmin execution.
     *
     * @return LinkedIn_Companies_IsAdmin_Results New results object.
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
     * Wraps results in appropriate results class for this IsAdmin execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Companies_IsAdmin_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Companies_IsAdmin_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the IsAdmin Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_IsAdmin_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the IsAdmin Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Companies_IsAdmin_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this IsAdmin execution.
     *
     * @return string The response from LinkedIn.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a simple boolean value that indicates whether the specified company has sharing enabled or disabled.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_IsSharingEnabled extends Temboo_Choreography
{
    /**
     * Returns a simple boolean value that indicates whether the specified company has sharing enabled or disabled.
     *
     * @param Temboo_Session $session The session that owns this IsSharingEnabled Choreo.
     * @return LinkedIn_Companies_IsSharingEnabled New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Companies/IsSharingEnabled/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this IsSharingEnabled Choreo.
     *
     * @param LinkedIn_Companies_IsSharingEnabled_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_IsSharingEnabled_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_IsSharingEnabled_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Companies_IsSharingEnabled_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this IsSharingEnabled Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_IsSharingEnabled_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Companies_IsSharingEnabled_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the IsSharingEnabled Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_IsSharingEnabled_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the IsSharingEnabled Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_IsSharingEnabled_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this IsSharingEnabled input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Companies_IsSharingEnabled_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Companies_IsSharingEnabled_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this IsSharingEnabled Choreo.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the Client ID).
     * @return LinkedIn_Companies_IsSharingEnabled_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this IsSharingEnabled Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process (AKA the OAuth User Token).
     * @return LinkedIn_Companies_IsSharingEnabled_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this IsSharingEnabled Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process (AKA the OAuth User Secret).
     * @return LinkedIn_Companies_IsSharingEnabled_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the CompanyID input for this IsSharingEnabled Choreo.
     *
     * @param int $value (required, integer) A LinkedIn assigned ID associated with the company.
     * @return LinkedIn_Companies_IsSharingEnabled_Inputs For method chaining.
     */
    public function setCompanyID($value)
    {
        return $this->set('CompanyID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this IsSharingEnabled Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return LinkedIn_Companies_IsSharingEnabled_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this IsSharingEnabled Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the Client Secret).
     * @return LinkedIn_Companies_IsSharingEnabled_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the IsSharingEnabled Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_IsSharingEnabled_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the IsSharingEnabled Choreo.
     *
     * @param Temboo_Session $session The session that owns this IsSharingEnabled execution.
     * @param LinkedIn_Companies_IsSharingEnabled $choreo The choreography object for this execution.
     * @param LinkedIn_Companies_IsSharingEnabled_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_IsSharingEnabled_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_IsSharingEnabled_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Companies_IsSharingEnabled $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this IsSharingEnabled execution.
     *
     * @return LinkedIn_Companies_IsSharingEnabled_Results New results object.
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
     * Wraps results in appropriate results class for this IsSharingEnabled execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Companies_IsSharingEnabled_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Companies_IsSharingEnabled_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the IsSharingEnabled Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_IsSharingEnabled_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the IsSharingEnabled Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Companies_IsSharingEnabled_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this IsSharingEnabled execution.
     *
     * @return string The response from LinkedIn.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of all of the companies that the authenticated user is currently configured to be an administrator of.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_ListCompanies extends Temboo_Choreography
{
    /**
     * Returns a list of all of the companies that the authenticated user is currently configured to be an administrator of.
     *
     * @param Temboo_Session $session The session that owns this ListCompanies Choreo.
     * @return LinkedIn_Companies_ListCompanies New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Companies/ListCompanies/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListCompanies Choreo.
     *
     * @param LinkedIn_Companies_ListCompanies_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_ListCompanies_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_ListCompanies_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Companies_ListCompanies_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListCompanies Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_ListCompanies_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Companies_ListCompanies_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListCompanies Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_ListCompanies_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListCompanies Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_ListCompanies_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListCompanies input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Companies_ListCompanies_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Companies_ListCompanies_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListCompanies Choreo.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the Client ID).
     * @return LinkedIn_Companies_ListCompanies_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListCompanies Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process (AKA the OAuth User Token).
     * @return LinkedIn_Companies_ListCompanies_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ListCompanies Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process (AKA the OAuth User Secret).
     * @return LinkedIn_Companies_ListCompanies_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the Count input for this ListCompanies Choreo.
     *
     * @param int $value (optional, integer) The number of results to return in the response.
     * @return LinkedIn_Companies_ListCompanies_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListCompanies Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml (the default) and json.
     * @return LinkedIn_Companies_ListCompanies_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this ListCompanies Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the Client Secret).
     * @return LinkedIn_Companies_ListCompanies_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Start input for this ListCompanies Choreo.
     *
     * @param int $value (optional, integer) The page index to return. Used in combination with the Count input to page through results.
     * @return LinkedIn_Companies_ListCompanies_Inputs For method chaining.
     */
    public function setStart($value)
    {
        return $this->set('Start', $value);
    }
}


/**
 * Execution object for the ListCompanies Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_ListCompanies_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListCompanies Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListCompanies execution.
     * @param LinkedIn_Companies_ListCompanies $choreo The choreography object for this execution.
     * @param LinkedIn_Companies_ListCompanies_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_ListCompanies_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_ListCompanies_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Companies_ListCompanies $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListCompanies execution.
     *
     * @return LinkedIn_Companies_ListCompanies_Results New results object.
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
     * Wraps results in appropriate results class for this ListCompanies execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Companies_ListCompanies_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Companies_ListCompanies_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListCompanies Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_ListCompanies_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListCompanies Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Companies_ListCompanies_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListCompanies execution.
     *
     * @return string The response from LinkedIn.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Completes the OAuth process by retrieving a LinkedIn access token and access token secret for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a LinkedIn access token and access token secret for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return LinkedIn_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param LinkedIn_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as LinkedIn_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_OAuth_FinalizeOAuth_Inputs New instance.
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
     * @return LinkedIn_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the Client ID).
     * @return LinkedIn_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the callback data after the user authorizes.
     * @return LinkedIn_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the OAuthTokenSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The OAuthTokenSecret returned by the InitializeOAuth Choreo.
     * @return LinkedIn_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setOAuthTokenSecret($value)
    {
        return $this->set('OAuthTokenSecret', $value);
    }

    /**
     * Set the value for the SecretKey input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the Client Secret).
     * @return LinkedIn_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the SuppressErrors input for this FinalizeOAuth Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, errors received during the OAuth redirect process will be suppressed and returned in the ErrorMessage output.
     * @return LinkedIn_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setSuppressErrors($value)
    {
        return $this->set('SuppressErrors', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return LinkedIn_OAuth_FinalizeOAuth_Inputs For method chaining.
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
 * @subpackage LinkedIn
 */
class LinkedIn_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param LinkedIn_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param LinkedIn_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as LinkedIn_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return LinkedIn_OAuth_FinalizeOAuth_Results New results object.
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
     * @return LinkedIn_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_OAuth_FinalizeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Access Token retrieved during the OAuth process.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "AccessTokenSecret" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Access Token Secret retrieved during the OAuth process.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessTokenSecret()
    {
        return $this->get('AccessTokenSecret');
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
     * @return int (integer) The expiration time in seconds of the access token retrieved.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpires()
    {
        return $this->get('Expires');
    }
}

/**
 * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return LinkedIn_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param LinkedIn_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as LinkedIn_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_OAuth_InitializeOAuth_Inputs New instance.
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
     * @return LinkedIn_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the Client ID).
     * @return LinkedIn_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant access to your application. This should include the "https://" or "http://" prefix and be a fully qualified URL.
     * @return LinkedIn_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setForwardingURL($value)
    {
        return $this->set('ForwardingURL', $value);
    }

    /**
     * Set the value for the Scope input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A space delimited list of member permissions that your application requires (e.g.,  "r_basicprofile r_emailaddress w_share").
     * @return LinkedIn_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setScope($value)
    {
        return $this->set('Scope', $value);
    }

    /**
     * Set the value for the SecretKey input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the Client Secret).
     * @return LinkedIn_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param LinkedIn_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param LinkedIn_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as LinkedIn_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return LinkedIn_OAuth_InitializeOAuth_Results New results object.
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
     * @return LinkedIn_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_OAuth_InitializeOAuth_Results New instance.
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
    /**
     * Retrieve the value for the "OAuthTokenSecret" output from this InitializeOAuth execution.
     *
     * @return string (string) The temporary OAuth Token Secret that can be exchanged for a final token secret using the FinalizeOAuth Choreo.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getOAuthTokenSecret()
    {
        return $this->get('OAuthTokenSecret');
    }
}

/**
 * Returns the standard default profile of the current user.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_PeopleAndConnections_GetMemberProfile extends Temboo_Choreography
{
    /**
     * Returns the standard default profile of the current user.
     *
     * @param Temboo_Session $session The session that owns this GetMemberProfile Choreo.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/PeopleAndConnections/GetMemberProfile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMemberProfile Choreo.
     *
     * @param LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs|array $inputs (optional) Inputs as LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_PeopleAndConnections_GetMemberProfile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMemberProfile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMemberProfile Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMemberProfile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMemberProfile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetMemberProfile Choreo.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the Client ID).
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetMemberProfile Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process (AKA the OAuth User Token).
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetMemberProfile Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process (AKA the OAuth User Secret).
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the FieldSelector input for this GetMemberProfile Choreo.
     *
     * @param string $value (optional, string) A comma separated list of profile properties to return.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs For method chaining.
     */
    public function setFieldSelector($value)
    {
        return $this->set('FieldSelector', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetMemberProfile Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml (the default) and json.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetMemberProfile Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the Client Secret).
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the GetMemberProfile Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_PeopleAndConnections_GetMemberProfile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMemberProfile Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMemberProfile execution.
     * @param LinkedIn_PeopleAndConnections_GetMemberProfile $choreo The choreography object for this execution.
     * @param LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs|array $inputs (optional) Inputs as LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_PeopleAndConnections_GetMemberProfile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMemberProfile execution.
     *
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Results New results object.
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
     * Wraps results in appropriate results class for this GetMemberProfile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_PeopleAndConnections_GetMemberProfile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMemberProfile Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_PeopleAndConnections_GetMemberProfile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMemberProfile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetMemberProfile execution.
     *
     * @return string The response from LinkedIn.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to share content on behalf of a LinkedIn member.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_ShareAndSocialStream_CreateShare extends Temboo_Choreography
{
    /**
     * Allows you to share content on behalf of a LinkedIn member.
     *
     * @param Temboo_Session $session The session that owns this CreateShare Choreo.
     * @return LinkedIn_ShareAndSocialStream_CreateShare New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/ShareAndSocialStream/CreateShare/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateShare Choreo.
     *
     * @param LinkedIn_ShareAndSocialStream_CreateShare_Inputs|array $inputs (optional) Inputs as LinkedIn_ShareAndSocialStream_CreateShare_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_ShareAndSocialStream_CreateShare_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateShare Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_ShareAndSocialStream_CreateShare_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateShare Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_ShareAndSocialStream_CreateShare_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateShare Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateShare input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateShare Choreo.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the Client ID).
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateShare Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process (AKA the OAuth User Token).
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateShare Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process (AKA the OAuth User Secret).
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the Comment input for this CreateShare Choreo.
     *
     * @param string $value (conditional, string) The text of the member's comment. Required unless providing Title and URL for a shared post.
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Inputs For method chaining.
     */
    public function setComment($value)
    {
        return $this->set('Comment', $value);
    }

    /**
     * Set the value for the Description input for this CreateShare Choreo.
     *
     * @param string $value (optional, string) A description of the shared content.
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the ImageURL input for this CreateShare Choreo.
     *
     * @param string $value (optional, string) The URL for the image of the shared content.
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Inputs For method chaining.
     */
    public function setImageURL($value)
    {
        return $this->set('ImageURL', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateShare Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: xml (the default) and json.
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SecretKey input for this CreateShare Choreo.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the Client Secret).
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Title input for this CreateShare Choreo.
     *
     * @param string $value (conditional, string) The title of the shared content. Required unless providing a Comment.
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the URL input for this CreateShare Choreo.
     *
     * @param string $value (conditional, string) The URL for the shared content. Required unless providing a Comment.
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the Visibility input for this CreateShare Choreo.
     *
     * @param string $value (optional, string) Determines if the post will be visible to everyone, or only those who are connected to you. Valid values are: "anyone" or "connections-only" (the default).
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Inputs For method chaining.
     */
    public function setVisibility($value)
    {
        return $this->set('Visibility', $value);
    }
}


/**
 * Execution object for the CreateShare Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_ShareAndSocialStream_CreateShare_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateShare Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateShare execution.
     * @param LinkedIn_ShareAndSocialStream_CreateShare $choreo The choreography object for this execution.
     * @param LinkedIn_ShareAndSocialStream_CreateShare_Inputs|array $inputs (optional) Inputs as LinkedIn_ShareAndSocialStream_CreateShare_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_ShareAndSocialStream_CreateShare $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateShare execution.
     *
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Results New results object.
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
     * Wraps results in appropriate results class for this CreateShare execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_ShareAndSocialStream_CreateShare_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateShare Choreo.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_ShareAndSocialStream_CreateShare_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateShare Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_ShareAndSocialStream_CreateShare_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateShare execution.
     *
     * @return string The response from LinkedIn.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>