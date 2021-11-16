<?php

/**
 * Temboo PHP SDK Microsoft classes
 *
 * Execute Choreographies from the Temboo Microsoft bundle.
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
 * @subpackage Microsoft
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Deletes the cells associated with the range.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_DeleteRange extends Temboo_Choreography
{
    /**
     * Deletes the cells associated with the range.
     *
     * @param Temboo_Session $session The session that owns this DeleteRange Choreo.
     * @return Microsoft_Excel_Range_DeleteRange New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Excel/Range/DeleteRange/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteRange Choreo.
     *
     * @param Microsoft_Excel_Range_DeleteRange_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Range_DeleteRange_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Range_DeleteRange_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Excel_Range_DeleteRange_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteRange Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Range_DeleteRange_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Excel_Range_DeleteRange_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteRange Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_DeleteRange_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteRange Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Range_DeleteRange_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteRange input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Excel_Range_DeleteRange_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Excel_Range_DeleteRange_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteRange Choreo.
     *
     * @param string $value (optional, string) A valid Access Token retrieved during the OAuth process. This can be passed if your application is authenticating multiple Office 365 users.
     * @return Microsoft_Excel_Range_DeleteRange_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this DeleteRange Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_DeleteRange_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this DeleteRange Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_DeleteRange_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ItemPath input for this DeleteRange Choreo.
     *
     * @param string $value (required, string) The location of the spreadsheet in OneDrive (e.g. MyFolder/Book.xlsx).
     * @return Microsoft_Excel_Range_DeleteRange_Inputs For method chaining.
     */
    public function setItemPath($value)
    {
        return $this->set('ItemPath', $value);
    }

    /**
     * Set the value for the Password input for this DeleteRange Choreo.
     *
     * @param string $value (conditional, password) Your Microsoft password. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_DeleteRange_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Range input for this DeleteRange Choreo.
     *
     * @param string $value (conditional, string) A cell ange to delete (e.g. A1:B2).
     * @return Microsoft_Excel_Range_DeleteRange_Inputs For method chaining.
     */
    public function setRange($value)
    {
        return $this->set('Range', $value);
    }

    /**
     * Set the value for the Shift input for this DeleteRange Choreo.
     *
     * @param string $value (required, string) Specifies which way to shift the cells.  Possible values are: Up, Left.
     * @return Microsoft_Excel_Range_DeleteRange_Inputs For method chaining.
     */
    public function setShift($value)
    {
        return $this->set('Shift', $value);
    }

    /**
     * Set the value for the Username input for this DeleteRange Choreo.
     *
     * @param string $value (conditional, string) Your Microsoft username. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_DeleteRange_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the Worksheet input for this DeleteRange Choreo.
     *
     * @param string $value (required, string) The name or id of the worksheet.
     * @return Microsoft_Excel_Range_DeleteRange_Inputs For method chaining.
     */
    public function setWorksheet($value)
    {
        return $this->set('Worksheet', $value);
    }
}


/**
 * Execution object for the DeleteRange Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_DeleteRange_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteRange Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteRange execution.
     * @param Microsoft_Excel_Range_DeleteRange $choreo The choreography object for this execution.
     * @param Microsoft_Excel_Range_DeleteRange_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Range_DeleteRange_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Range_DeleteRange_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Excel_Range_DeleteRange $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteRange execution.
     *
     * @return Microsoft_Excel_Range_DeleteRange_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteRange execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Excel_Range_DeleteRange_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Excel_Range_DeleteRange_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteRange Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_DeleteRange_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteRange Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Excel_Range_DeleteRange_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseCode" output from this DeleteRange execution.
     *
     * @return int (integer) The response status code. A 204 is returned for a successful deletion.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseCode()
    {
        return $this->get('ResponseCode');
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteRange execution.
     *
     * @return string (json) The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the last cell within a specified range.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_GetLastCell extends Temboo_Choreography
{
    /**
     * Retrieves the last cell within a specified range.
     *
     * @param Temboo_Session $session The session that owns this GetLastCell Choreo.
     * @return Microsoft_Excel_Range_GetLastCell New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Excel/Range/GetLastCell/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLastCell Choreo.
     *
     * @param Microsoft_Excel_Range_GetLastCell_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Range_GetLastCell_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Range_GetLastCell_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Excel_Range_GetLastCell_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLastCell Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Range_GetLastCell_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Excel_Range_GetLastCell_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLastCell Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_GetLastCell_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLastCell Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Range_GetLastCell_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLastCell input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Excel_Range_GetLastCell_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Excel_Range_GetLastCell_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetLastCell Choreo.
     *
     * @param string $value (optional, string) A valid Access Token retrieved during the OAuth process. This can be passed if your application is authenticating multiple Office 365 users.
     * @return Microsoft_Excel_Range_GetLastCell_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetLastCell Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_GetLastCell_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetLastCell Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_GetLastCell_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ItemPath input for this GetLastCell Choreo.
     *
     * @param string $value (required, string) The location of the spreadsheet in OneDrive (e.g. MyFolder/Book.xlsx).
     * @return Microsoft_Excel_Range_GetLastCell_Inputs For method chaining.
     */
    public function setItemPath($value)
    {
        return $this->set('ItemPath', $value);
    }

    /**
     * Set the value for the Password input for this GetLastCell Choreo.
     *
     * @param string $value (conditional, password) Your Microsoft password. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_GetLastCell_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Range input for this GetLastCell Choreo.
     *
     * @param string $value (conditional, string) The cell range to consider (e.g. A1:C100).
     * @return Microsoft_Excel_Range_GetLastCell_Inputs For method chaining.
     */
    public function setRange($value)
    {
        return $this->set('Range', $value);
    }

    /**
     * Set the value for the Select input for this GetLastCell Choreo.
     *
     * @param string $value (optional, string) Comma-separated list of properties to include in the response.
     * @return Microsoft_Excel_Range_GetLastCell_Inputs For method chaining.
     */
    public function setSelect($value)
    {
        return $this->set('Select', $value);
    }

    /**
     * Set the value for the Username input for this GetLastCell Choreo.
     *
     * @param string $value (conditional, string) Your Microsoft username. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_GetLastCell_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the Worksheet input for this GetLastCell Choreo.
     *
     * @param string $value (required, string) The name or id of the worksheet.
     * @return Microsoft_Excel_Range_GetLastCell_Inputs For method chaining.
     */
    public function setWorksheet($value)
    {
        return $this->set('Worksheet', $value);
    }
}


/**
 * Execution object for the GetLastCell Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_GetLastCell_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLastCell Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLastCell execution.
     * @param Microsoft_Excel_Range_GetLastCell $choreo The choreography object for this execution.
     * @param Microsoft_Excel_Range_GetLastCell_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Range_GetLastCell_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Range_GetLastCell_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Excel_Range_GetLastCell $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLastCell execution.
     *
     * @return Microsoft_Excel_Range_GetLastCell_Results New results object.
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
     * Wraps results in appropriate results class for this GetLastCell execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Excel_Range_GetLastCell_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Excel_Range_GetLastCell_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLastCell Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_GetLastCell_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLastCell Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Excel_Range_GetLastCell_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLastCell execution.
     *
     * @return string (json) The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the last column within a specified range.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_GetLastColumn extends Temboo_Choreography
{
    /**
     * Retrieves the last column within a specified range.
     *
     * @param Temboo_Session $session The session that owns this GetLastColumn Choreo.
     * @return Microsoft_Excel_Range_GetLastColumn New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Excel/Range/GetLastColumn/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLastColumn Choreo.
     *
     * @param Microsoft_Excel_Range_GetLastColumn_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Range_GetLastColumn_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Range_GetLastColumn_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Excel_Range_GetLastColumn_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLastColumn Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Range_GetLastColumn_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Excel_Range_GetLastColumn_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLastColumn Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_GetLastColumn_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLastColumn Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Range_GetLastColumn_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLastColumn input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Excel_Range_GetLastColumn_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Excel_Range_GetLastColumn_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetLastColumn Choreo.
     *
     * @param string $value (optional, string) A valid Access Token retrieved during the OAuth process. This can be passed if your application is authenticating multiple Office 365 users.
     * @return Microsoft_Excel_Range_GetLastColumn_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetLastColumn Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_GetLastColumn_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetLastColumn Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_GetLastColumn_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ItemPath input for this GetLastColumn Choreo.
     *
     * @param string $value (required, string) The location of the spreadsheet in OneDrive (e.g. MyFolder/Book.xlsx).
     * @return Microsoft_Excel_Range_GetLastColumn_Inputs For method chaining.
     */
    public function setItemPath($value)
    {
        return $this->set('ItemPath', $value);
    }

    /**
     * Set the value for the Password input for this GetLastColumn Choreo.
     *
     * @param string $value (conditional, password) Your Microsoft password. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_GetLastColumn_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Range input for this GetLastColumn Choreo.
     *
     * @param string $value (conditional, string) The cell range to consider (e.g. A1:C100).
     * @return Microsoft_Excel_Range_GetLastColumn_Inputs For method chaining.
     */
    public function setRange($value)
    {
        return $this->set('Range', $value);
    }

    /**
     * Set the value for the Select input for this GetLastColumn Choreo.
     *
     * @param string $value (optional, string) Comma-separated list of properties to include in the response.
     * @return Microsoft_Excel_Range_GetLastColumn_Inputs For method chaining.
     */
    public function setSelect($value)
    {
        return $this->set('Select', $value);
    }

    /**
     * Set the value for the Username input for this GetLastColumn Choreo.
     *
     * @param string $value (conditional, string) Your Microsoft username. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_GetLastColumn_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the Worksheet input for this GetLastColumn Choreo.
     *
     * @param string $value (required, string) The name or id of the worksheet.
     * @return Microsoft_Excel_Range_GetLastColumn_Inputs For method chaining.
     */
    public function setWorksheet($value)
    {
        return $this->set('Worksheet', $value);
    }
}


/**
 * Execution object for the GetLastColumn Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_GetLastColumn_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLastColumn Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLastColumn execution.
     * @param Microsoft_Excel_Range_GetLastColumn $choreo The choreography object for this execution.
     * @param Microsoft_Excel_Range_GetLastColumn_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Range_GetLastColumn_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Range_GetLastColumn_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Excel_Range_GetLastColumn $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLastColumn execution.
     *
     * @return Microsoft_Excel_Range_GetLastColumn_Results New results object.
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
     * Wraps results in appropriate results class for this GetLastColumn execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Excel_Range_GetLastColumn_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Excel_Range_GetLastColumn_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLastColumn Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_GetLastColumn_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLastColumn Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Excel_Range_GetLastColumn_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLastColumn execution.
     *
     * @return string (json) The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the last row within a specified range.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_GetLastRow extends Temboo_Choreography
{
    /**
     * Retrieves the last row within a specified range.
     *
     * @param Temboo_Session $session The session that owns this GetLastRow Choreo.
     * @return Microsoft_Excel_Range_GetLastRow New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Excel/Range/GetLastRow/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLastRow Choreo.
     *
     * @param Microsoft_Excel_Range_GetLastRow_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Range_GetLastRow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Range_GetLastRow_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Excel_Range_GetLastRow_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLastRow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Range_GetLastRow_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Excel_Range_GetLastRow_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLastRow Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_GetLastRow_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLastRow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Range_GetLastRow_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLastRow input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Excel_Range_GetLastRow_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Excel_Range_GetLastRow_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetLastRow Choreo.
     *
     * @param string $value (optional, string) A valid Access Token retrieved during the OAuth process. This can be passed if your application is authenticating multiple Office 365 users.
     * @return Microsoft_Excel_Range_GetLastRow_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetLastRow Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_GetLastRow_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetLastRow Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_GetLastRow_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ItemPath input for this GetLastRow Choreo.
     *
     * @param string $value (required, string) The location of the spreadsheet in OneDrive (e.g. MyFolder/Book.xlsx).
     * @return Microsoft_Excel_Range_GetLastRow_Inputs For method chaining.
     */
    public function setItemPath($value)
    {
        return $this->set('ItemPath', $value);
    }

    /**
     * Set the value for the Password input for this GetLastRow Choreo.
     *
     * @param string $value (conditional, password) Your Microsoft password. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_GetLastRow_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Range input for this GetLastRow Choreo.
     *
     * @param string $value (conditional, string) The cell range to consider (e.g. A1:C100).
     * @return Microsoft_Excel_Range_GetLastRow_Inputs For method chaining.
     */
    public function setRange($value)
    {
        return $this->set('Range', $value);
    }

    /**
     * Set the value for the Select input for this GetLastRow Choreo.
     *
     * @param string $value (optional, string) Comma-separated list of properties to include in the response.
     * @return Microsoft_Excel_Range_GetLastRow_Inputs For method chaining.
     */
    public function setSelect($value)
    {
        return $this->set('Select', $value);
    }

    /**
     * Set the value for the Username input for this GetLastRow Choreo.
     *
     * @param string $value (conditional, string) Your Microsoft username. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_GetLastRow_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the Worksheet input for this GetLastRow Choreo.
     *
     * @param string $value (required, string) The name or id of the worksheet.
     * @return Microsoft_Excel_Range_GetLastRow_Inputs For method chaining.
     */
    public function setWorksheet($value)
    {
        return $this->set('Worksheet', $value);
    }
}


/**
 * Execution object for the GetLastRow Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_GetLastRow_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLastRow Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLastRow execution.
     * @param Microsoft_Excel_Range_GetLastRow $choreo The choreography object for this execution.
     * @param Microsoft_Excel_Range_GetLastRow_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Range_GetLastRow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Range_GetLastRow_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Excel_Range_GetLastRow $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLastRow execution.
     *
     * @return Microsoft_Excel_Range_GetLastRow_Results New results object.
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
     * Wraps results in appropriate results class for this GetLastRow execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Excel_Range_GetLastRow_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Excel_Range_GetLastRow_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLastRow Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_GetLastRow_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLastRow Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Excel_Range_GetLastRow_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLastRow execution.
     *
     * @return string (json) The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the properties and relationships of range object.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_GetRange extends Temboo_Choreography
{
    /**
     * Retrieves the properties and relationships of range object.
     *
     * @param Temboo_Session $session The session that owns this GetRange Choreo.
     * @return Microsoft_Excel_Range_GetRange New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Excel/Range/GetRange/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRange Choreo.
     *
     * @param Microsoft_Excel_Range_GetRange_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Range_GetRange_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Range_GetRange_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Excel_Range_GetRange_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRange Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Range_GetRange_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Excel_Range_GetRange_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRange Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_GetRange_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRange Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Range_GetRange_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRange input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Excel_Range_GetRange_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Excel_Range_GetRange_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetRange Choreo.
     *
     * @param string $value (optional, string) A valid Access Token retrieved during the OAuth process. This can be passed if your application is authenticating multiple Office 365 users.
     * @return Microsoft_Excel_Range_GetRange_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetRange Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_GetRange_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetRange Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_GetRange_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ItemPath input for this GetRange Choreo.
     *
     * @param string $value (required, string) The location of the spreadsheet in OneDrive (e.g. MyFolder/Book.xlsx).
     * @return Microsoft_Excel_Range_GetRange_Inputs For method chaining.
     */
    public function setItemPath($value)
    {
        return $this->set('ItemPath', $value);
    }

    /**
     * Set the value for the Password input for this GetRange Choreo.
     *
     * @param string $value (conditional, password) Your Microsoft password. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_GetRange_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Range input for this GetRange Choreo.
     *
     * @param string $value (conditional, string) A range to return (e.g. A1:B2).
     * @return Microsoft_Excel_Range_GetRange_Inputs For method chaining.
     */
    public function setRange($value)
    {
        return $this->set('Range', $value);
    }

    /**
     * Set the value for the Select input for this GetRange Choreo.
     *
     * @param string $value (optional, string) Comma-separated list of properties to include in the response.
     * @return Microsoft_Excel_Range_GetRange_Inputs For method chaining.
     */
    public function setSelect($value)
    {
        return $this->set('Select', $value);
    }

    /**
     * Set the value for the Username input for this GetRange Choreo.
     *
     * @param string $value (conditional, string) Your Microsoft username. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Range_GetRange_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the Worksheet input for this GetRange Choreo.
     *
     * @param string $value (required, string) The name or id of the worksheet.
     * @return Microsoft_Excel_Range_GetRange_Inputs For method chaining.
     */
    public function setWorksheet($value)
    {
        return $this->set('Worksheet', $value);
    }
}


/**
 * Execution object for the GetRange Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_GetRange_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRange Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRange execution.
     * @param Microsoft_Excel_Range_GetRange $choreo The choreography object for this execution.
     * @param Microsoft_Excel_Range_GetRange_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Range_GetRange_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Range_GetRange_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Excel_Range_GetRange $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRange execution.
     *
     * @return Microsoft_Excel_Range_GetRange_Results New results object.
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
     * Wraps results in appropriate results class for this GetRange execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Excel_Range_GetRange_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Excel_Range_GetRange_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRange Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Range_GetRange_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRange Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Excel_Range_GetRange_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRange execution.
     *
     * @return string (json) The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates new rows in a table.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_CreateTableRow extends Temboo_Choreography
{
    /**
     * Creates new rows in a table.
     *
     * @param Temboo_Session $session The session that owns this CreateTableRow Choreo.
     * @return Microsoft_Excel_Table_CreateTableRow New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Excel/Table/CreateTableRow/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateTableRow Choreo.
     *
     * @param Microsoft_Excel_Table_CreateTableRow_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Table_CreateTableRow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Table_CreateTableRow_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Excel_Table_CreateTableRow_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateTableRow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Table_CreateTableRow_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Excel_Table_CreateTableRow_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateTableRow Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_CreateTableRow_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateTableRow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Table_CreateTableRow_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateTableRow input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Excel_Table_CreateTableRow_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Excel_Table_CreateTableRow_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Values input for this CreateTableRow Choreo.
     *
     * @param string $value (required, json) This is an array of arrays. The outer array can represent one or more rows while the inner array can represent one or more cell values. See Choreo notes below for more details.
     * @return Microsoft_Excel_Table_CreateTableRow_Inputs For method chaining.
     */
    public function setValues($value)
    {
        return $this->set('Values', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateTableRow Choreo.
     *
     * @param string $value (optional, string) A valid Access Token retrieved during the OAuth process. This can be passed if your application is authenticating multiple Office 365 users.
     * @return Microsoft_Excel_Table_CreateTableRow_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this CreateTableRow Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_CreateTableRow_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this CreateTableRow Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_CreateTableRow_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Index input for this CreateTableRow Choreo.
     *
     * @param int $value (optional, integer) Indicates that the row should be created at this index.
     * @return Microsoft_Excel_Table_CreateTableRow_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the ItemPath input for this CreateTableRow Choreo.
     *
     * @param string $value (required, string) The location of the spreadsheet in OneDrive (e.g. MyFolder/Book.xlsx).
     * @return Microsoft_Excel_Table_CreateTableRow_Inputs For method chaining.
     */
    public function setItemPath($value)
    {
        return $this->set('ItemPath', $value);
    }

    /**
     * Set the value for the Password input for this CreateTableRow Choreo.
     *
     * @param string $value (conditional, password) Your Microsoft password. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_CreateTableRow_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Table input for this CreateTableRow Choreo.
     *
     * @param string $value (required, string) The name or id of the table to write to (e.g. Table1).
     * @return Microsoft_Excel_Table_CreateTableRow_Inputs For method chaining.
     */
    public function setTable($value)
    {
        return $this->set('Table', $value);
    }

    /**
     * Set the value for the Username input for this CreateTableRow Choreo.
     *
     * @param string $value (conditional, string) Your Microsoft username. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_CreateTableRow_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the Worksheet input for this CreateTableRow Choreo.
     *
     * @param string $value (required, string) The name or id of the worksheet to write to (e.g. Sheet1).
     * @return Microsoft_Excel_Table_CreateTableRow_Inputs For method chaining.
     */
    public function setWorksheet($value)
    {
        return $this->set('Worksheet', $value);
    }
}


/**
 * Execution object for the CreateTableRow Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_CreateTableRow_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateTableRow Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateTableRow execution.
     * @param Microsoft_Excel_Table_CreateTableRow $choreo The choreography object for this execution.
     * @param Microsoft_Excel_Table_CreateTableRow_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Table_CreateTableRow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Table_CreateTableRow_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Excel_Table_CreateTableRow $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateTableRow execution.
     *
     * @return Microsoft_Excel_Table_CreateTableRow_Results New results object.
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
     * Wraps results in appropriate results class for this CreateTableRow execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Excel_Table_CreateTableRow_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Excel_Table_CreateTableRow_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateTableRow Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_CreateTableRow_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateTableRow Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Excel_Table_CreateTableRow_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateTableRow execution.
     *
     * @return string (json) The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets the range object associated with the data body of the table.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_DataBodyRange extends Temboo_Choreography
{
    /**
     * Gets the range object associated with the data body of the table.
     *
     * @param Temboo_Session $session The session that owns this DataBodyRange Choreo.
     * @return Microsoft_Excel_Table_DataBodyRange New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Excel/Table/DataBodyRange/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DataBodyRange Choreo.
     *
     * @param Microsoft_Excel_Table_DataBodyRange_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Table_DataBodyRange_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Table_DataBodyRange_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Excel_Table_DataBodyRange_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DataBodyRange Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Table_DataBodyRange_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Excel_Table_DataBodyRange_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DataBodyRange Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_DataBodyRange_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DataBodyRange Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Table_DataBodyRange_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DataBodyRange input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Excel_Table_DataBodyRange_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Excel_Table_DataBodyRange_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DataBodyRange Choreo.
     *
     * @param string $value (optional, string) A valid Access Token retrieved during the OAuth process. This can be passed if your application is authenticating multiple Office 365 users.
     * @return Microsoft_Excel_Table_DataBodyRange_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this DataBodyRange Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_DataBodyRange_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this DataBodyRange Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_DataBodyRange_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ItemPath input for this DataBodyRange Choreo.
     *
     * @param string $value (required, string) The location of the spreadsheet in OneDrive (e.g. MyFolder/Book.xlsx).
     * @return Microsoft_Excel_Table_DataBodyRange_Inputs For method chaining.
     */
    public function setItemPath($value)
    {
        return $this->set('ItemPath', $value);
    }

    /**
     * Set the value for the Password input for this DataBodyRange Choreo.
     *
     * @param string $value (conditional, password) Your Microsoft password. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_DataBodyRange_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Select input for this DataBodyRange Choreo.
     *
     * @param string $value (optional, string) Comma-separated list of properties to include in the response.
     * @return Microsoft_Excel_Table_DataBodyRange_Inputs For method chaining.
     */
    public function setSelect($value)
    {
        return $this->set('Select', $value);
    }

    /**
     * Set the value for the Table input for this DataBodyRange Choreo.
     *
     * @param string $value (required, string) The name or id of the table.
     * @return Microsoft_Excel_Table_DataBodyRange_Inputs For method chaining.
     */
    public function setTable($value)
    {
        return $this->set('Table', $value);
    }

    /**
     * Set the value for the Username input for this DataBodyRange Choreo.
     *
     * @param string $value (conditional, string) Your Microsoft username. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_DataBodyRange_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the Worksheet input for this DataBodyRange Choreo.
     *
     * @param string $value (required, string) The name or id of the worksheet.
     * @return Microsoft_Excel_Table_DataBodyRange_Inputs For method chaining.
     */
    public function setWorksheet($value)
    {
        return $this->set('Worksheet', $value);
    }
}


/**
 * Execution object for the DataBodyRange Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_DataBodyRange_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DataBodyRange Choreo.
     *
     * @param Temboo_Session $session The session that owns this DataBodyRange execution.
     * @param Microsoft_Excel_Table_DataBodyRange $choreo The choreography object for this execution.
     * @param Microsoft_Excel_Table_DataBodyRange_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Table_DataBodyRange_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Table_DataBodyRange_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Excel_Table_DataBodyRange $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DataBodyRange execution.
     *
     * @return Microsoft_Excel_Table_DataBodyRange_Results New results object.
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
     * Wraps results in appropriate results class for this DataBodyRange execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Excel_Table_DataBodyRange_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Excel_Table_DataBodyRange_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DataBodyRange Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_DataBodyRange_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DataBodyRange Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Excel_Table_DataBodyRange_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DataBodyRange execution.
     *
     * @return string (json) The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes the row from the table.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_DeleteRow extends Temboo_Choreography
{
    /**
     * Deletes the row from the table.
     *
     * @param Temboo_Session $session The session that owns this DeleteRow Choreo.
     * @return Microsoft_Excel_Table_DeleteRow New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Excel/Table/DeleteRow/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteRow Choreo.
     *
     * @param Microsoft_Excel_Table_DeleteRow_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Table_DeleteRow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Table_DeleteRow_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Excel_Table_DeleteRow_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteRow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Table_DeleteRow_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Excel_Table_DeleteRow_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteRow Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_DeleteRow_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteRow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Table_DeleteRow_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteRow input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Excel_Table_DeleteRow_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Excel_Table_DeleteRow_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteRow Choreo.
     *
     * @param string $value (optional, string) A valid Access Token retrieved during the OAuth process. This can be passed if your application is authenticating multiple Office 365 users.
     * @return Microsoft_Excel_Table_DeleteRow_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this DeleteRow Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_DeleteRow_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this DeleteRow Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_DeleteRow_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Index input for this DeleteRow Choreo.
     *
     * @param int $value (required, integer) The index of the row that should be deleted.
     * @return Microsoft_Excel_Table_DeleteRow_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the ItemPath input for this DeleteRow Choreo.
     *
     * @param string $value (required, string) The location of the spreadsheet in OneDrive (e.g. MyFolder/Book.xlsx).
     * @return Microsoft_Excel_Table_DeleteRow_Inputs For method chaining.
     */
    public function setItemPath($value)
    {
        return $this->set('ItemPath', $value);
    }

    /**
     * Set the value for the Password input for this DeleteRow Choreo.
     *
     * @param string $value (conditional, password) Your Microsoft password. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_DeleteRow_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Table input for this DeleteRow Choreo.
     *
     * @param string $value (required, string) The name or id of the table.
     * @return Microsoft_Excel_Table_DeleteRow_Inputs For method chaining.
     */
    public function setTable($value)
    {
        return $this->set('Table', $value);
    }

    /**
     * Set the value for the Username input for this DeleteRow Choreo.
     *
     * @param string $value (conditional, string) Your Microsoft username. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_DeleteRow_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the Worksheet input for this DeleteRow Choreo.
     *
     * @param string $value (required, string) The name or id of the worksheet.
     * @return Microsoft_Excel_Table_DeleteRow_Inputs For method chaining.
     */
    public function setWorksheet($value)
    {
        return $this->set('Worksheet', $value);
    }
}


/**
 * Execution object for the DeleteRow Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_DeleteRow_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteRow Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteRow execution.
     * @param Microsoft_Excel_Table_DeleteRow $choreo The choreography object for this execution.
     * @param Microsoft_Excel_Table_DeleteRow_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Table_DeleteRow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Table_DeleteRow_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Excel_Table_DeleteRow $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteRow execution.
     *
     * @return Microsoft_Excel_Table_DeleteRow_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteRow execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Excel_Table_DeleteRow_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Excel_Table_DeleteRow_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteRow Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_DeleteRow_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteRow Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Excel_Table_DeleteRow_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseCode" output from this DeleteRow execution.
     *
     * @return int (integer) The response status code. A 204 is returned for a successful deletion.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseCode()
    {
        return $this->get('ResponseCode');
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteRow execution.
     *
     * @return string (json) The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve the properties and relationships of tablerow object.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_GetRow extends Temboo_Choreography
{
    /**
     * Retrieve the properties and relationships of tablerow object.
     *
     * @param Temboo_Session $session The session that owns this GetRow Choreo.
     * @return Microsoft_Excel_Table_GetRow New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Excel/Table/GetRow/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRow Choreo.
     *
     * @param Microsoft_Excel_Table_GetRow_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Table_GetRow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Table_GetRow_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Excel_Table_GetRow_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Table_GetRow_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Excel_Table_GetRow_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRow Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_GetRow_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Table_GetRow_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRow input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Excel_Table_GetRow_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Excel_Table_GetRow_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetRow Choreo.
     *
     * @param string $value (optional, string) A valid Access Token retrieved during the OAuth process. This can be passed if your application is authenticating multiple Office 365 users.
     * @return Microsoft_Excel_Table_GetRow_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetRow Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_GetRow_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetRow Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_GetRow_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Index input for this GetRow Choreo.
     *
     * @param int $value (required, integer) The index of the row that should be returned. If left empty, the last row in the table will be returned.
     * @return Microsoft_Excel_Table_GetRow_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the ItemPath input for this GetRow Choreo.
     *
     * @param string $value (required, string) The location of the spreadsheet in OneDrive (e.g. MyFolder/Book.xlsx).
     * @return Microsoft_Excel_Table_GetRow_Inputs For method chaining.
     */
    public function setItemPath($value)
    {
        return $this->set('ItemPath', $value);
    }

    /**
     * Set the value for the Password input for this GetRow Choreo.
     *
     * @param string $value (conditional, password) Your Microsoft password. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_GetRow_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Select input for this GetRow Choreo.
     *
     * @param string $value (optional, string) Comma-separated list of properties to include in the response.
     * @return Microsoft_Excel_Table_GetRow_Inputs For method chaining.
     */
    public function setSelect($value)
    {
        return $this->set('Select', $value);
    }

    /**
     * Set the value for the Table input for this GetRow Choreo.
     *
     * @param string $value (required, string) The name or id of the table.
     * @return Microsoft_Excel_Table_GetRow_Inputs For method chaining.
     */
    public function setTable($value)
    {
        return $this->set('Table', $value);
    }

    /**
     * Set the value for the Username input for this GetRow Choreo.
     *
     * @param string $value (conditional, string) Your Microsoft username. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_GetRow_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the Worksheet input for this GetRow Choreo.
     *
     * @param string $value (required, string) The name or id of the worksheet.
     * @return Microsoft_Excel_Table_GetRow_Inputs For method chaining.
     */
    public function setWorksheet($value)
    {
        return $this->set('Worksheet', $value);
    }
}


/**
 * Execution object for the GetRow Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_GetRow_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRow Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRow execution.
     * @param Microsoft_Excel_Table_GetRow $choreo The choreography object for this execution.
     * @param Microsoft_Excel_Table_GetRow_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Table_GetRow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Table_GetRow_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Excel_Table_GetRow $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRow execution.
     *
     * @return Microsoft_Excel_Table_GetRow_Results New results object.
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
     * Wraps results in appropriate results class for this GetRow execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Excel_Table_GetRow_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Excel_Table_GetRow_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRow Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_GetRow_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRow Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Excel_Table_GetRow_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRow execution.
     *
     * @return string (json) The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of tablecolumn objects.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_ListColumns extends Temboo_Choreography
{
    /**
     * Retrieve a list of tablecolumn objects.
     *
     * @param Temboo_Session $session The session that owns this ListColumns Choreo.
     * @return Microsoft_Excel_Table_ListColumns New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Excel/Table/ListColumns/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListColumns Choreo.
     *
     * @param Microsoft_Excel_Table_ListColumns_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Table_ListColumns_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Table_ListColumns_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Excel_Table_ListColumns_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListColumns Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Table_ListColumns_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Excel_Table_ListColumns_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListColumns Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_ListColumns_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListColumns Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Table_ListColumns_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListColumns input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Excel_Table_ListColumns_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Excel_Table_ListColumns_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListColumns Choreo.
     *
     * @param string $value (optional, string) A valid Access Token retrieved during the OAuth process. This can be passed if your application is authenticating multiple Office 365 users.
     * @return Microsoft_Excel_Table_ListColumns_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListColumns Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_ListColumns_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListColumns Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_ListColumns_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ItemPath input for this ListColumns Choreo.
     *
     * @param string $value (required, string) The location of the spreadsheet in OneDrive (e.g. MyFolder/Book.xlsx).
     * @return Microsoft_Excel_Table_ListColumns_Inputs For method chaining.
     */
    public function setItemPath($value)
    {
        return $this->set('ItemPath', $value);
    }

    /**
     * Set the value for the Password input for this ListColumns Choreo.
     *
     * @param string $value (conditional, password) Your Microsoft password. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_ListColumns_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Select input for this ListColumns Choreo.
     *
     * @param string $value (optional, string) Comma-separated list of properties to include in the response.
     * @return Microsoft_Excel_Table_ListColumns_Inputs For method chaining.
     */
    public function setSelect($value)
    {
        return $this->set('Select', $value);
    }

    /**
     * Set the value for the Skip input for this ListColumns Choreo.
     *
     * @param int $value (optional, integer) The number of items to skip in a result set.
     * @return Microsoft_Excel_Table_ListColumns_Inputs For method chaining.
     */
    public function setSkip($value)
    {
        return $this->set('Skip', $value);
    }

    /**
     * Set the value for the Table input for this ListColumns Choreo.
     *
     * @param string $value (required, string) The name or id of the table.
     * @return Microsoft_Excel_Table_ListColumns_Inputs For method chaining.
     */
    public function setTable($value)
    {
        return $this->set('Table', $value);
    }

    /**
     * Set the value for the Top input for this ListColumns Choreo.
     *
     * @param int $value (optional, integer) The number of items to return in a result set.
     * @return Microsoft_Excel_Table_ListColumns_Inputs For method chaining.
     */
    public function setTop($value)
    {
        return $this->set('Top', $value);
    }

    /**
     * Set the value for the Username input for this ListColumns Choreo.
     *
     * @param string $value (conditional, string) Your Microsoft username. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_ListColumns_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the Worksheet input for this ListColumns Choreo.
     *
     * @param string $value (required, string) The name or id of the worksheet.
     * @return Microsoft_Excel_Table_ListColumns_Inputs For method chaining.
     */
    public function setWorksheet($value)
    {
        return $this->set('Worksheet', $value);
    }
}


/**
 * Execution object for the ListColumns Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_ListColumns_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListColumns Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListColumns execution.
     * @param Microsoft_Excel_Table_ListColumns $choreo The choreography object for this execution.
     * @param Microsoft_Excel_Table_ListColumns_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Table_ListColumns_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Table_ListColumns_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Excel_Table_ListColumns $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListColumns execution.
     *
     * @return Microsoft_Excel_Table_ListColumns_Results New results object.
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
     * Wraps results in appropriate results class for this ListColumns execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Excel_Table_ListColumns_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Excel_Table_ListColumns_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListColumns Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_ListColumns_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListColumns Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Excel_Table_ListColumns_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListColumns execution.
     *
     * @return string (json) The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of tablerow objects.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_ListRows extends Temboo_Choreography
{
    /**
     * Retrieve a list of tablerow objects.
     *
     * @param Temboo_Session $session The session that owns this ListRows Choreo.
     * @return Microsoft_Excel_Table_ListRows New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Excel/Table/ListRows/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListRows Choreo.
     *
     * @param Microsoft_Excel_Table_ListRows_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Table_ListRows_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Table_ListRows_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Excel_Table_ListRows_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListRows Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Table_ListRows_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Excel_Table_ListRows_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListRows Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_ListRows_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListRows Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Table_ListRows_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListRows input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Excel_Table_ListRows_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Excel_Table_ListRows_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListRows Choreo.
     *
     * @param string $value (optional, string) A valid Access Token retrieved during the OAuth process. This can be passed if your application is authenticating multiple Office 365 users.
     * @return Microsoft_Excel_Table_ListRows_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListRows Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_ListRows_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListRows Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_ListRows_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ItemPath input for this ListRows Choreo.
     *
     * @param string $value (required, string) The location of the spreadsheet in OneDrive (e.g. MyFolder/Book.xlsx).
     * @return Microsoft_Excel_Table_ListRows_Inputs For method chaining.
     */
    public function setItemPath($value)
    {
        return $this->set('ItemPath', $value);
    }

    /**
     * Set the value for the Password input for this ListRows Choreo.
     *
     * @param string $value (conditional, password) Your Microsoft password. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_ListRows_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Select input for this ListRows Choreo.
     *
     * @param string $value (optional, string) Comma-separated list of properties to include in the response.
     * @return Microsoft_Excel_Table_ListRows_Inputs For method chaining.
     */
    public function setSelect($value)
    {
        return $this->set('Select', $value);
    }

    /**
     * Set the value for the Skip input for this ListRows Choreo.
     *
     * @param int $value (optional, integer) The number of items to skip in a result set.
     * @return Microsoft_Excel_Table_ListRows_Inputs For method chaining.
     */
    public function setSkip($value)
    {
        return $this->set('Skip', $value);
    }

    /**
     * Set the value for the Table input for this ListRows Choreo.
     *
     * @param string $value (required, string) The name or id of the table.
     * @return Microsoft_Excel_Table_ListRows_Inputs For method chaining.
     */
    public function setTable($value)
    {
        return $this->set('Table', $value);
    }

    /**
     * Set the value for the Top input for this ListRows Choreo.
     *
     * @param int $value (optional, integer) The number of items to return in a result set.
     * @return Microsoft_Excel_Table_ListRows_Inputs For method chaining.
     */
    public function setTop($value)
    {
        return $this->set('Top', $value);
    }

    /**
     * Set the value for the Username input for this ListRows Choreo.
     *
     * @param string $value (conditional, string) Your Microsoft username. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_ListRows_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the Worksheet input for this ListRows Choreo.
     *
     * @param string $value (required, string) The name or id of the worksheet.
     * @return Microsoft_Excel_Table_ListRows_Inputs For method chaining.
     */
    public function setWorksheet($value)
    {
        return $this->set('Worksheet', $value);
    }
}


/**
 * Execution object for the ListRows Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_ListRows_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListRows Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListRows execution.
     * @param Microsoft_Excel_Table_ListRows $choreo The choreography object for this execution.
     * @param Microsoft_Excel_Table_ListRows_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Table_ListRows_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Table_ListRows_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Excel_Table_ListRows $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListRows execution.
     *
     * @return Microsoft_Excel_Table_ListRows_Results New results object.
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
     * Wraps results in appropriate results class for this ListRows execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Excel_Table_ListRows_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Excel_Table_ListRows_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListRows Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_ListRows_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListRows Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Excel_Table_ListRows_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListRows execution.
     *
     * @return string (json) The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of tables.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_ListTables extends Temboo_Choreography
{
    /**
     * Retrieves a list of tables.
     *
     * @param Temboo_Session $session The session that owns this ListTables Choreo.
     * @return Microsoft_Excel_Table_ListTables New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Excel/Table/ListTables/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListTables Choreo.
     *
     * @param Microsoft_Excel_Table_ListTables_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Table_ListTables_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Table_ListTables_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Excel_Table_ListTables_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListTables Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Table_ListTables_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Excel_Table_ListTables_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListTables Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_ListTables_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListTables Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Table_ListTables_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListTables input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Excel_Table_ListTables_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Excel_Table_ListTables_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListTables Choreo.
     *
     * @param string $value (optional, string) A valid Access Token retrieved during the OAuth process. This can be passed if your application is authenticating multiple Office 365 users.
     * @return Microsoft_Excel_Table_ListTables_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListTables Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_ListTables_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListTables Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_ListTables_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ItemPath input for this ListTables Choreo.
     *
     * @param string $value (required, string) The location of the spreadsheet in OneDrive (e.g. MyFolder/Book.xlsx).
     * @return Microsoft_Excel_Table_ListTables_Inputs For method chaining.
     */
    public function setItemPath($value)
    {
        return $this->set('ItemPath', $value);
    }

    /**
     * Set the value for the Password input for this ListTables Choreo.
     *
     * @param string $value (conditional, password) Your Microsoft password. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_ListTables_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Select input for this ListTables Choreo.
     *
     * @param string $value (optional, string) Comma-separated list of properties to include in the response.
     * @return Microsoft_Excel_Table_ListTables_Inputs For method chaining.
     */
    public function setSelect($value)
    {
        return $this->set('Select', $value);
    }

    /**
     * Set the value for the Skip input for this ListTables Choreo.
     *
     * @param int $value (optional, integer) The number of items to skip in a result set.
     * @return Microsoft_Excel_Table_ListTables_Inputs For method chaining.
     */
    public function setSkip($value)
    {
        return $this->set('Skip', $value);
    }

    /**
     * Set the value for the Top input for this ListTables Choreo.
     *
     * @param int $value (optional, integer) The number of items to return in a result set.
     * @return Microsoft_Excel_Table_ListTables_Inputs For method chaining.
     */
    public function setTop($value)
    {
        return $this->set('Top', $value);
    }

    /**
     * Set the value for the Username input for this ListTables Choreo.
     *
     * @param string $value (conditional, string) Your Microsoft username. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Table_ListTables_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the Worksheet input for this ListTables Choreo.
     *
     * @param string $value (required, string) The name or id of the worksheet.
     * @return Microsoft_Excel_Table_ListTables_Inputs For method chaining.
     */
    public function setWorksheet($value)
    {
        return $this->set('Worksheet', $value);
    }
}


/**
 * Execution object for the ListTables Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_ListTables_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListTables Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListTables execution.
     * @param Microsoft_Excel_Table_ListTables $choreo The choreography object for this execution.
     * @param Microsoft_Excel_Table_ListTables_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Table_ListTables_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Table_ListTables_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Excel_Table_ListTables $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListTables execution.
     *
     * @return Microsoft_Excel_Table_ListTables_Results New results object.
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
     * Wraps results in appropriate results class for this ListTables execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Excel_Table_ListTables_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Excel_Table_ListTables_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListTables Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Table_ListTables_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListTables Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Excel_Table_ListTables_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListTables execution.
     *
     * @return string (json) The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Invokes a workbook function.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Workbook_InvokeFunction extends Temboo_Choreography
{
    /**
     * Invokes a workbook function.
     *
     * @param Temboo_Session $session The session that owns this InvokeFunction Choreo.
     * @return Microsoft_Excel_Workbook_InvokeFunction New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Excel/Workbook/InvokeFunction/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InvokeFunction Choreo.
     *
     * @param Microsoft_Excel_Workbook_InvokeFunction_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Workbook_InvokeFunction_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Workbook_InvokeFunction_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Excel_Workbook_InvokeFunction_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InvokeFunction Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Workbook_InvokeFunction_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Excel_Workbook_InvokeFunction_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InvokeFunction Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Workbook_InvokeFunction_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InvokeFunction Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Workbook_InvokeFunction_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this InvokeFunction input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Excel_Workbook_InvokeFunction_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Excel_Workbook_InvokeFunction_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Arguments input for this InvokeFunction Choreo.
     *
     * @param string $value (required, json) A JSON object containing the function arguments. See Choreo notes for more details.
     * @return Microsoft_Excel_Workbook_InvokeFunction_Inputs For method chaining.
     */
    public function setArguments($value)
    {
        return $this->set('Arguments', $value);
    }

    /**
     * Set the value for the AccessToken input for this InvokeFunction Choreo.
     *
     * @param string $value (optional, string) A valid Access Token retrieved during the OAuth process. This can be passed if your application is authenticating multiple Office 365 users.
     * @return Microsoft_Excel_Workbook_InvokeFunction_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this InvokeFunction Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Workbook_InvokeFunction_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this InvokeFunction Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Workbook_InvokeFunction_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Function input for this InvokeFunction Choreo.
     *
     * @param string $value (required, string) The name of the function (e.g. vlookup).
     * @return Microsoft_Excel_Workbook_InvokeFunction_Inputs For method chaining.
     */
    public function setFunction($value)
    {
        return $this->set('Function', $value);
    }

    /**
     * Set the value for the ItemPath input for this InvokeFunction Choreo.
     *
     * @param string $value (required, string) The location of the spreadsheet in OneDrive (e.g. MyFolder/Book.xlsx).
     * @return Microsoft_Excel_Workbook_InvokeFunction_Inputs For method chaining.
     */
    public function setItemPath($value)
    {
        return $this->set('ItemPath', $value);
    }

    /**
     * Set the value for the Password input for this InvokeFunction Choreo.
     *
     * @param string $value (conditional, password) Your Microsoft password. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Workbook_InvokeFunction_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this InvokeFunction Choreo.
     *
     * @param string $value (conditional, string) Your Microsoft username. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Workbook_InvokeFunction_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the InvokeFunction Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Workbook_InvokeFunction_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InvokeFunction Choreo.
     *
     * @param Temboo_Session $session The session that owns this InvokeFunction execution.
     * @param Microsoft_Excel_Workbook_InvokeFunction $choreo The choreography object for this execution.
     * @param Microsoft_Excel_Workbook_InvokeFunction_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Workbook_InvokeFunction_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Workbook_InvokeFunction_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Excel_Workbook_InvokeFunction $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InvokeFunction execution.
     *
     * @return Microsoft_Excel_Workbook_InvokeFunction_Results New results object.
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
     * Wraps results in appropriate results class for this InvokeFunction execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Excel_Workbook_InvokeFunction_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Excel_Workbook_InvokeFunction_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InvokeFunction Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Workbook_InvokeFunction_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InvokeFunction Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Excel_Workbook_InvokeFunction_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this InvokeFunction execution.
     *
     * @return string (json) The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds a new worksheet to the workbook.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Worksheet_AddWorksheet extends Temboo_Choreography
{
    /**
     * Adds a new worksheet to the workbook.
     *
     * @param Temboo_Session $session The session that owns this AddWorksheet Choreo.
     * @return Microsoft_Excel_Worksheet_AddWorksheet New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Excel/Worksheet/AddWorksheet/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddWorksheet Choreo.
     *
     * @param Microsoft_Excel_Worksheet_AddWorksheet_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Worksheet_AddWorksheet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Worksheet_AddWorksheet_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Excel_Worksheet_AddWorksheet_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddWorksheet Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Worksheet_AddWorksheet_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Excel_Worksheet_AddWorksheet_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddWorksheet Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Worksheet_AddWorksheet_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddWorksheet Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Worksheet_AddWorksheet_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddWorksheet input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Excel_Worksheet_AddWorksheet_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Excel_Worksheet_AddWorksheet_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this AddWorksheet Choreo.
     *
     * @param string $value (optional, string) A valid Access Token retrieved during the OAuth process. This can be passed if your application is authenticating multiple Office 365 users.
     * @return Microsoft_Excel_Worksheet_AddWorksheet_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this AddWorksheet Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Worksheet_AddWorksheet_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this AddWorksheet Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Worksheet_AddWorksheet_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ItemPath input for this AddWorksheet Choreo.
     *
     * @param string $value (required, string) The location of the spreadsheet in OneDrive (e.g. MyFolder/Book.xlsx).
     * @return Microsoft_Excel_Worksheet_AddWorksheet_Inputs For method chaining.
     */
    public function setItemPath($value)
    {
        return $this->set('ItemPath', $value);
    }

    /**
     * Set the value for the Password input for this AddWorksheet Choreo.
     *
     * @param string $value (conditional, password) Your Microsoft password. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Worksheet_AddWorksheet_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this AddWorksheet Choreo.
     *
     * @param string $value (conditional, string) Your Microsoft username. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Worksheet_AddWorksheet_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the Worksheet input for this AddWorksheet Choreo.
     *
     * @param string $value (required, string) The name of the new worksheet.
     * @return Microsoft_Excel_Worksheet_AddWorksheet_Inputs For method chaining.
     */
    public function setWorksheet($value)
    {
        return $this->set('Worksheet', $value);
    }
}


/**
 * Execution object for the AddWorksheet Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Worksheet_AddWorksheet_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddWorksheet Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddWorksheet execution.
     * @param Microsoft_Excel_Worksheet_AddWorksheet $choreo The choreography object for this execution.
     * @param Microsoft_Excel_Worksheet_AddWorksheet_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Worksheet_AddWorksheet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Worksheet_AddWorksheet_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Excel_Worksheet_AddWorksheet $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddWorksheet execution.
     *
     * @return Microsoft_Excel_Worksheet_AddWorksheet_Results New results object.
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
     * Wraps results in appropriate results class for this AddWorksheet execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Excel_Worksheet_AddWorksheet_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Excel_Worksheet_AddWorksheet_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddWorksheet Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Worksheet_AddWorksheet_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddWorksheet Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Excel_Worksheet_AddWorksheet_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddWorksheet execution.
     *
     * @return string (json) The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve the properties and relationships of worksheet object.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Worksheet_GetWorksheet extends Temboo_Choreography
{
    /**
     * Retrieve the properties and relationships of worksheet object.
     *
     * @param Temboo_Session $session The session that owns this GetWorksheet Choreo.
     * @return Microsoft_Excel_Worksheet_GetWorksheet New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Excel/Worksheet/GetWorksheet/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetWorksheet Choreo.
     *
     * @param Microsoft_Excel_Worksheet_GetWorksheet_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Worksheet_GetWorksheet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Worksheet_GetWorksheet_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Excel_Worksheet_GetWorksheet_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetWorksheet Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Worksheet_GetWorksheet_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Excel_Worksheet_GetWorksheet_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetWorksheet Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Worksheet_GetWorksheet_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetWorksheet Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Worksheet_GetWorksheet_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetWorksheet input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Excel_Worksheet_GetWorksheet_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Excel_Worksheet_GetWorksheet_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetWorksheet Choreo.
     *
     * @param string $value (optional, string) A valid Access Token retrieved during the OAuth process. This can be passed if your application is authenticating multiple Office 365 users.
     * @return Microsoft_Excel_Worksheet_GetWorksheet_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetWorksheet Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Worksheet_GetWorksheet_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetWorksheet Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Microsoft This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Worksheet_GetWorksheet_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ItemPath input for this GetWorksheet Choreo.
     *
     * @param string $value (required, string) The location of the spreadsheet in OneDrive (e.g. MyFolder/Book.xlsx).
     * @return Microsoft_Excel_Worksheet_GetWorksheet_Inputs For method chaining.
     */
    public function setItemPath($value)
    {
        return $this->set('ItemPath', $value);
    }

    /**
     * Set the value for the Password input for this GetWorksheet Choreo.
     *
     * @param string $value (conditional, password) Your Microsoft password. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Worksheet_GetWorksheet_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this GetWorksheet Choreo.
     *
     * @param string $value (conditional, string) Your Microsoft username. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Worksheet_GetWorksheet_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the Worksheet input for this GetWorksheet Choreo.
     *
     * @param string $value (required, string) The name or id of the worksheet.
     * @return Microsoft_Excel_Worksheet_GetWorksheet_Inputs For method chaining.
     */
    public function setWorksheet($value)
    {
        return $this->set('Worksheet', $value);
    }
}


/**
 * Execution object for the GetWorksheet Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Worksheet_GetWorksheet_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetWorksheet Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetWorksheet execution.
     * @param Microsoft_Excel_Worksheet_GetWorksheet $choreo The choreography object for this execution.
     * @param Microsoft_Excel_Worksheet_GetWorksheet_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Worksheet_GetWorksheet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Worksheet_GetWorksheet_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Excel_Worksheet_GetWorksheet $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetWorksheet execution.
     *
     * @return Microsoft_Excel_Worksheet_GetWorksheet_Results New results object.
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
     * Wraps results in appropriate results class for this GetWorksheet execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Excel_Worksheet_GetWorksheet_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Excel_Worksheet_GetWorksheet_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetWorksheet Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Worksheet_GetWorksheet_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetWorksheet Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Excel_Worksheet_GetWorksheet_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetWorksheet execution.
     *
     * @return string (json) The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of worksheet objects.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Worksheet_ListWorksheets extends Temboo_Choreography
{
    /**
     * Retrieve a list of worksheet objects.
     *
     * @param Temboo_Session $session The session that owns this ListWorksheets Choreo.
     * @return Microsoft_Excel_Worksheet_ListWorksheets New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Excel/Worksheet/ListWorksheets/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListWorksheets Choreo.
     *
     * @param Microsoft_Excel_Worksheet_ListWorksheets_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Worksheet_ListWorksheets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Worksheet_ListWorksheets_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Excel_Worksheet_ListWorksheets_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListWorksheets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Worksheet_ListWorksheets_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Excel_Worksheet_ListWorksheets_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListWorksheets Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Worksheet_ListWorksheets_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListWorksheets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Excel_Worksheet_ListWorksheets_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListWorksheets input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Excel_Worksheet_ListWorksheets_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Excel_Worksheet_ListWorksheets_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListWorksheets Choreo.
     *
     * @param string $value (optional, string) A valid Access Token retrieved during the OAuth process. This can be passed if your application is authenticating multiple Office 365 users.
     * @return Microsoft_Excel_Worksheet_ListWorksheets_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListWorksheets Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Worksheet_ListWorksheets_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListWorksheets Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Microsoft. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Worksheet_ListWorksheets_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ItemPath input for this ListWorksheets Choreo.
     *
     * @param string $value (required, string) The location of the spreadsheet in OneDrive (e.g. MyFolder/Book.xlsx).
     * @return Microsoft_Excel_Worksheet_ListWorksheets_Inputs For method chaining.
     */
    public function setItemPath($value)
    {
        return $this->set('ItemPath', $value);
    }

    /**
     * Set the value for the Password input for this ListWorksheets Choreo.
     *
     * @param string $value (conditional, password) Your Microsoft password. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Worksheet_ListWorksheets_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Select input for this ListWorksheets Choreo.
     *
     * @param string $value (optional, string) Comma-separated list of properties to include in the response.
     * @return Microsoft_Excel_Worksheet_ListWorksheets_Inputs For method chaining.
     */
    public function setSelect($value)
    {
        return $this->set('Select', $value);
    }

    /**
     * Set the value for the Skip input for this ListWorksheets Choreo.
     *
     * @param int $value (optional, integer) The number of items to skip in a result set.
     * @return Microsoft_Excel_Worksheet_ListWorksheets_Inputs For method chaining.
     */
    public function setSkip($value)
    {
        return $this->set('Skip', $value);
    }

    /**
     * Set the value for the Top input for this ListWorksheets Choreo.
     *
     * @param int $value (optional, integer) The number of items to return in a result set.
     * @return Microsoft_Excel_Worksheet_ListWorksheets_Inputs For method chaining.
     */
    public function setTop($value)
    {
        return $this->set('Top', $value);
    }

    /**
     * Set the value for the Username input for this ListWorksheets Choreo.
     *
     * @param string $value (conditional, string) Your Microsoft username. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_Excel_Worksheet_ListWorksheets_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ListWorksheets Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Worksheet_ListWorksheets_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListWorksheets Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListWorksheets execution.
     * @param Microsoft_Excel_Worksheet_ListWorksheets $choreo The choreography object for this execution.
     * @param Microsoft_Excel_Worksheet_ListWorksheets_Inputs|array $inputs (optional) Inputs as Microsoft_Excel_Worksheet_ListWorksheets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Excel_Worksheet_ListWorksheets_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Excel_Worksheet_ListWorksheets $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListWorksheets execution.
     *
     * @return Microsoft_Excel_Worksheet_ListWorksheets_Results New results object.
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
     * Wraps results in appropriate results class for this ListWorksheets execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Excel_Worksheet_ListWorksheets_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Excel_Worksheet_ListWorksheets_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListWorksheets Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Excel_Worksheet_ListWorksheets_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListWorksheets Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Excel_Worksheet_ListWorksheets_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListWorksheets execution.
     *
     * @return string (json) The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Completes the OAuth process by retrieving Microsoft OAuth tokens for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving Microsoft OAuth tokens for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return Microsoft_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param Microsoft_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Microsoft_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_OAuth_FinalizeOAuth_Inputs New instance.
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
     * @return Microsoft_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the authorization code after the user authorizes.
     * @return Microsoft_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the ClientID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Microsoft after registering your application.
     * @return Microsoft_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client Secret provided by Microsoft after registering your application.
     * @return Microsoft_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Resource input for this FinalizeOAuth Choreo.
     *
     * @param string $value (conditional, string) The App ID URI of the web API (secured resource). See Choreo notes for details.
     * @return Microsoft_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setResource($value)
    {
        return $this->set('Resource', $value);
    }

    /**
     * Set the value for the SuppressErrors input for this FinalizeOAuth Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, errors received during the OAuth redirect process will be suppressed and returned in the ErrorMessage output.
     * @return Microsoft_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setSuppressErrors($value)
    {
        return $this->set('SuppressErrors', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return Microsoft_OAuth_FinalizeOAuth_Inputs For method chaining.
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
 * @subpackage Microsoft
 */
class Microsoft_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param Microsoft_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param Microsoft_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Microsoft_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return Microsoft_OAuth_FinalizeOAuth_Results New results object.
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
     * @return Microsoft_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_OAuth_FinalizeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
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
     * @return int (integer) The remaining lifetime of the short-lived access token.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpires()
    {
        return $this->get('Expires');
    }
    /**
     * Retrieve the value for the "RefreshToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) A token that may be used to obtain a new access token when the short-lived access token expires.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRefreshToken()
    {
        return $this->get('RefreshToken');
    }
    /**
     * Retrieve the value for the "Response" output from this FinalizeOAuth execution.
     *
     * @return string (json) The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return Microsoft_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param Microsoft_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Microsoft_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_OAuth_InitializeOAuth_Inputs New instance.
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
     * @return Microsoft_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Microsoft after registering your application.
     * @return Microsoft_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the CustomCallbackID input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A unique identifier that you can pass to eliminate the need to wait for a Temboo generated CallbackID. Callback identifiers may only contain numbers, letters, periods, and hyphens.
     * @return Microsoft_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCustomCallbackID($value)
    {
        return $this->set('CustomCallbackID', $value);
    }

    /**
     * Set the value for the DomainHint input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Provides a hint about the tenant or domain that the user should use to sign in.
     * @return Microsoft_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setDomainHint($value)
    {
        return $this->set('DomainHint', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant access to your application. This should include the "https://" or "http://" prefix and be a fully qualified URL.
     * @return Microsoft_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setForwardingURL($value)
    {
        return $this->set('ForwardingURL', $value);
    }

    /**
     * Set the value for the LoginHint input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Provides a hint to the user on the sign-in page.
     * @return Microsoft_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setLoginHint($value)
    {
        return $this->set('LoginHint', $value);
    }

    /**
     * Set the value for the Prompt input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Indicate the type of user interaction that is required. Valid values are: login, consent, admin_consent.
     * @return Microsoft_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setPrompt($value)
    {
        return $this->set('Prompt', $value);
    }

    /**
     * Set the value for the Resource input for this InitializeOAuth Choreo.
     *
     * @param string $value (conditional, string) The App ID URI of the web API (secured resource). See Choreo notes for details.
     * @return Microsoft_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setResource($value)
    {
        return $this->set('Resource', $value);
    }
}


/**
 * Execution object for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param Microsoft_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param Microsoft_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Microsoft_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return Microsoft_OAuth_InitializeOAuth_Results New results object.
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
     * @return Microsoft_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_OAuth_InitializeOAuth_Results New instance.
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
 * Retrieves a new refresh token and access token by exchanging the refresh token that is associated with the expired access token.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_OAuth_RefreshToken extends Temboo_Choreography
{
    /**
     * Retrieves a new refresh token and access token by exchanging the refresh token that is associated with the expired access token.
     *
     * @param Temboo_Session $session The session that owns this RefreshToken Choreo.
     * @return Microsoft_OAuth_RefreshToken New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/OAuth/RefreshToken/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RefreshToken Choreo.
     *
     * @param Microsoft_OAuth_RefreshToken_Inputs|array $inputs (optional) Inputs as Microsoft_OAuth_RefreshToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_OAuth_RefreshToken_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_OAuth_RefreshToken_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RefreshToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_OAuth_RefreshToken_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_OAuth_RefreshToken_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RefreshToken Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_OAuth_RefreshToken_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RefreshToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_OAuth_RefreshToken_Inputs New instance.
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
     * @return Microsoft_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this RefreshToken Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Microsoft after registering your application.
     * @return Microsoft_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this RefreshToken Choreo.
     *
     * @param string $value (required, string) The Client Secret provided by Microsoft after registering your application.
     * @return Microsoft_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the RefreshToken input for this RefreshToken Choreo.
     *
     * @param string $value (required, string) An OAuth Refresh Token used to generate a new access token when the original token is expired.
     * @return Microsoft_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the Resource input for this RefreshToken Choreo.
     *
     * @param string $value (conditional, string) The App ID URI of the web API (secured resource). See Choreo notes for details.
     * @return Microsoft_OAuth_RefreshToken_Inputs For method chaining.
     */
    public function setResource($value)
    {
        return $this->set('Resource', $value);
    }
}


/**
 * Execution object for the RefreshToken Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_OAuth_RefreshToken_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RefreshToken Choreo.
     *
     * @param Temboo_Session $session The session that owns this RefreshToken execution.
     * @param Microsoft_OAuth_RefreshToken $choreo The choreography object for this execution.
     * @param Microsoft_OAuth_RefreshToken_Inputs|array $inputs (optional) Inputs as Microsoft_OAuth_RefreshToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_OAuth_RefreshToken_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_OAuth_RefreshToken $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RefreshToken execution.
     *
     * @return Microsoft_OAuth_RefreshToken_Results New results object.
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
     * @return Microsoft_OAuth_RefreshToken_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_OAuth_RefreshToken_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RefreshToken Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_OAuth_RefreshToken_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RefreshToken Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_OAuth_RefreshToken_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
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
     * Retrieve the value for the "Response" output from this RefreshToken execution.
     *
     * @return string (json) The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds rows to a table in a dataset
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_PowerBI_AddRow extends Temboo_Choreography
{
    /**
     * Adds rows to a table in a dataset
     *
     * @param Temboo_Session $session The session that owns this AddRow Choreo.
     * @return Microsoft_PowerBI_AddRow New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/PowerBI/AddRow/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddRow Choreo.
     *
     * @param Microsoft_PowerBI_AddRow_Inputs|array $inputs (optional) Inputs as Microsoft_PowerBI_AddRow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_PowerBI_AddRow_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_PowerBI_AddRow_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddRow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_PowerBI_AddRow_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_PowerBI_AddRow_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddRow Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_PowerBI_AddRow_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddRow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_PowerBI_AddRow_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddRow input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_PowerBI_AddRow_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_PowerBI_AddRow_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Rows input for this AddRow Choreo.
     *
     * @param string $value (required, json) A JSON object contain one or more rows to insert into a Power BI table. See Choreo notes for formatting details.
     * @return Microsoft_PowerBI_AddRow_Inputs For method chaining.
     */
    public function setRows($value)
    {
        return $this->set('Rows', $value);
    }

    /**
     * Set the value for the AccessToken input for this AddRow Choreo.
     *
     * @param string $value (optional, string) A valid Access Token retrieved during the OAuth process. This can be passed if your application is authenticating multiple Power BI users.
     * @return Microsoft_PowerBI_AddRow_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this AddRow Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Power BI. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_PowerBI_AddRow_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this AddRow Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Power BI. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_PowerBI_AddRow_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the DatasetID input for this AddRow Choreo.
     *
     * @param string $value (required, string) The ID of the dataset that your table belongs to.
     * @return Microsoft_PowerBI_AddRow_Inputs For method chaining.
     */
    public function setDatasetID($value)
    {
        return $this->set('DatasetID', $value);
    }

    /**
     * Set the value for the Password input for this AddRow Choreo.
     *
     * @param string $value (conditional, password) Your Power BI password. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_PowerBI_AddRow_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the TableName input for this AddRow Choreo.
     *
     * @param string $value (required, string) The name of the Power BI table to insert a row into.
     * @return Microsoft_PowerBI_AddRow_Inputs For method chaining.
     */
    public function setTableName($value)
    {
        return $this->set('TableName', $value);
    }

    /**
     * Set the value for the Username input for this AddRow Choreo.
     *
     * @param string $value (conditional, string) Your Power BI username. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_PowerBI_AddRow_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the AddRow Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_PowerBI_AddRow_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddRow Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddRow execution.
     * @param Microsoft_PowerBI_AddRow $choreo The choreography object for this execution.
     * @param Microsoft_PowerBI_AddRow_Inputs|array $inputs (optional) Inputs as Microsoft_PowerBI_AddRow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_PowerBI_AddRow_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_PowerBI_AddRow $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddRow execution.
     *
     * @return Microsoft_PowerBI_AddRow_Results New results object.
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
     * Wraps results in appropriate results class for this AddRow execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_PowerBI_AddRow_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_PowerBI_AddRow_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddRow Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_PowerBI_AddRow_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddRow Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_PowerBI_AddRow_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseCode" output from this AddRow execution.
     *
     * @return int (integer) The response status code returned from Power BI.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseCode()
    {
        return $this->get('ResponseCode');
    }
    /**
     * Retrieve the value for the "Response" output from this AddRow execution.
     *
     * @return string (json) The response from Power BI.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new Dataset from a JSON schema definition and returns the Dataset ID and the properties of the dataset created.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_PowerBI_CreateDataset extends Temboo_Choreography
{
    /**
     * Creates a new Dataset from a JSON schema definition and returns the Dataset ID and the properties of the dataset created.
     *
     * @param Temboo_Session $session The session that owns this CreateDataset Choreo.
     * @return Microsoft_PowerBI_CreateDataset New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/PowerBI/CreateDataset/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateDataset Choreo.
     *
     * @param Microsoft_PowerBI_CreateDataset_Inputs|array $inputs (optional) Inputs as Microsoft_PowerBI_CreateDataset_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_PowerBI_CreateDataset_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_PowerBI_CreateDataset_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateDataset Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_PowerBI_CreateDataset_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_PowerBI_CreateDataset_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateDataset Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_PowerBI_CreateDataset_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateDataset Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_PowerBI_CreateDataset_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateDataset input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_PowerBI_CreateDataset_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_PowerBI_CreateDataset_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the SchemaDefinition input for this CreateDataset Choreo.
     *
     * @param string $value (required, json) A JSON object containing information about the dataset table and columns. See Choreo notes for formatting details.
     * @return Microsoft_PowerBI_CreateDataset_Inputs For method chaining.
     */
    public function setSchemaDefinition($value)
    {
        return $this->set('SchemaDefinition', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateDataset Choreo.
     *
     * @param string $value (optional, string) A valid Access Token retrieved during the OAuth process. This can be passed if your application is authenticating multiple Power BI users.
     * @return Microsoft_PowerBI_CreateDataset_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this CreateDataset Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Power BI. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_PowerBI_CreateDataset_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this CreateDataset Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Power BI. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_PowerBI_CreateDataset_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the DefaultRetentionPolicy input for this CreateDataset Choreo.
     *
     * @param string $value (optional, string) Enables a default retention policy to automatically clean up old data while keeping a constant flow of new data going into your dashboard. Valid values are: None (the default) or basicFIFO.
     * @return Microsoft_PowerBI_CreateDataset_Inputs For method chaining.
     */
    public function setDefaultRetentionPolicy($value)
    {
        return $this->set('DefaultRetentionPolicy', $value);
    }

    /**
     * Set the value for the Password input for this CreateDataset Choreo.
     *
     * @param string $value (conditional, password) Your Power BI password. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_PowerBI_CreateDataset_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this CreateDataset Choreo.
     *
     * @param string $value (conditional, string) Your Power BI username. This is requried unless providing a valid AccessToken (see optional inputs).
     * @return Microsoft_PowerBI_CreateDataset_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CreateDataset Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_PowerBI_CreateDataset_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateDataset Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateDataset execution.
     * @param Microsoft_PowerBI_CreateDataset $choreo The choreography object for this execution.
     * @param Microsoft_PowerBI_CreateDataset_Inputs|array $inputs (optional) Inputs as Microsoft_PowerBI_CreateDataset_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_PowerBI_CreateDataset_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_PowerBI_CreateDataset $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateDataset execution.
     *
     * @return Microsoft_PowerBI_CreateDataset_Results New results object.
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
     * Wraps results in appropriate results class for this CreateDataset execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_PowerBI_CreateDataset_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_PowerBI_CreateDataset_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateDataset Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_PowerBI_CreateDataset_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateDataset Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_PowerBI_CreateDataset_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseCode" output from this CreateDataset execution.
     *
     * @return int (integer) The response status code returned from Power BI.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseCode()
    {
        return $this->get('ResponseCode');
    }
    /**
     * Retrieve the value for the "Response" output from this CreateDataset execution.
     *
     * @return string (json) The response from Power BI.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves an array of all translations for a given text.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_AddTranslation extends Temboo_Choreography
{
    /**
     * Retrieves an array of all translations for a given text.
     *
     * @param Temboo_Session $session The session that owns this AddTranslation Choreo.
     * @return Microsoft_Translator_AddTranslation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/AddTranslation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddTranslation Choreo.
     *
     * @param Microsoft_Translator_AddTranslation_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_AddTranslation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_AddTranslation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_AddTranslation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddTranslation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_AddTranslation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_AddTranslation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddTranslation Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_AddTranslation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddTranslation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_AddTranslation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddTranslation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this AddTranslation Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Category input for this AddTranslation Choreo.
     *
     * @param string $value (optional, string) A string containing the category (domain) of the translation. Defaults to "general".
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the ClientID input for this AddTranslation Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this AddTranslation Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ContentType input for this AddTranslation Choreo.
     *
     * @param string $value (optional, string) The format of the text being translated. The supported formats are "text/plain" and "text/html".
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the From input for this AddTranslation Choreo.
     *
     * @param string $value (required, string) A string containing the ISO 639-1 language code of the source language. Must be one of the languages returned by the method GetLanguagesForTranslate.(e.g., en).
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the OriginalText input for this AddTranslation Choreo.
     *
     * @param string $value (required, string) A string containing the text to translate from. The string has a maximum length of 1000 characters.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setOriginalText($value)
    {
        return $this->set('OriginalText', $value);
    }

    /**
     * Set the value for the Rating input for this AddTranslation Choreo.
     *
     * @param int $value (optional, integer) An integer representing the quality rating for this string. Value between -10 and 10. Defaults to 1.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setRating($value)
    {
        return $this->set('Rating', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddTranslation Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the To input for this AddTranslation Choreo.
     *
     * @param string $value (required, string) A string containing the lISO 639-1 language code of the target language. Must be one of the languages returned by the method GetLanguagesForTranslate (e.g., es).
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }

    /**
     * Set the value for the TranslatedText input for this AddTranslation Choreo.
     *
     * @param string $value (required, string) A string containing translated text in the target language. The string has a maximum length of 2000 characters.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setTranslatedText($value)
    {
        return $this->set('TranslatedText', $value);
    }

    /**
     * Set the value for the URI input for this AddTranslation Choreo.
     *
     * @param string $value (optional, string) A string containing the content location of this translation.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setURI($value)
    {
        return $this->set('URI', $value);
    }

    /**
     * Set the value for the User input for this AddTranslation Choreo.
     *
     * @param string $value (required, string) A string used to track the originator of the submission.
     * @return Microsoft_Translator_AddTranslation_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the AddTranslation Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_AddTranslation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddTranslation Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddTranslation execution.
     * @param Microsoft_Translator_AddTranslation $choreo The choreography object for this execution.
     * @param Microsoft_Translator_AddTranslation_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_AddTranslation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_AddTranslation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_AddTranslation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddTranslation execution.
     *
     * @return Microsoft_Translator_AddTranslation_Results New results object.
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
     * Wraps results in appropriate results class for this AddTranslation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_AddTranslation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_AddTranslation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddTranslation Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_AddTranslation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddTranslation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_AddTranslation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this AddTranslation execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this AddTranslation execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this AddTranslation execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds an array of translations to add translation memory.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_AddTranslationArray extends Temboo_Choreography
{
    /**
     * Adds an array of translations to add translation memory.
     *
     * @param Temboo_Session $session The session that owns this AddTranslationArray Choreo.
     * @return Microsoft_Translator_AddTranslationArray New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/AddTranslationArray/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddTranslationArray Choreo.
     *
     * @param Microsoft_Translator_AddTranslationArray_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_AddTranslationArray_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_AddTranslationArray_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_AddTranslationArray_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddTranslationArray Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_AddTranslationArray_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_AddTranslationArray_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddTranslationArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_AddTranslationArray_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddTranslationArray Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_AddTranslationArray_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddTranslationArray input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this AddTranslationArray Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Category input for this AddTranslationArray Choreo.
     *
     * @param string $value (optional, string) A string containing the category (domain) of the translation. Defaults to "general".
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the ClientID input for this AddTranslationArray Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this AddTranslationArray Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ContentType input for this AddTranslationArray Choreo.
     *
     * @param string $value (optional, string) The format of the text being translated. The supported formats are "text/plain" and "text/html".
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the From input for this AddTranslationArray Choreo.
     *
     * @param string $value (required, string) A string containing the ISO 639-1 language code of the source language (e.g., en). Must be one of the languages returned by the method GetLanguagesForTranslate.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddTranslationArray Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the To input for this AddTranslationArray Choreo.
     *
     * @param string $value (required, string) A string containing the ISO 639-1 language code of the target language (e.g., es). Must be one of the languages returned by the method GetLanguagesForTranslate.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }

    /**
     * Set the value for the Translations input for this AddTranslationArray Choreo.
     *
     * @param string $value (required, json) An array containing translations to add to translation memory. Each translation must contain: OriginalText, TranslatedText, and Rating. See Choreo description for formatting examples.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setTranslations($value)
    {
        return $this->set('Translations', $value);
    }

    /**
     * Set the value for the URI input for this AddTranslationArray Choreo.
     *
     * @param string $value (optional, string) A string containing the content location of this translation.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setURI($value)
    {
        return $this->set('URI', $value);
    }

    /**
     * Set the value for the User input for this AddTranslationArray Choreo.
     *
     * @param string $value (required, string) A string used to track the originator of the submission.
     * @return Microsoft_Translator_AddTranslationArray_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the AddTranslationArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_AddTranslationArray_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddTranslationArray Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddTranslationArray execution.
     * @param Microsoft_Translator_AddTranslationArray $choreo The choreography object for this execution.
     * @param Microsoft_Translator_AddTranslationArray_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_AddTranslationArray_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_AddTranslationArray_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_AddTranslationArray $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddTranslationArray execution.
     *
     * @return Microsoft_Translator_AddTranslationArray_Results New results object.
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
     * Wraps results in appropriate results class for this AddTranslationArray execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_AddTranslationArray_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_AddTranslationArray_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddTranslationArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_AddTranslationArray_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddTranslationArray Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_AddTranslationArray_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this AddTranslationArray execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this AddTranslationArray execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this AddTranslationArray execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Breaks a piece of text into sentences and returns an array containing the lengths in each sentence.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_BreakSentences extends Temboo_Choreography
{
    /**
     * Breaks a piece of text into sentences and returns an array containing the lengths in each sentence.
     *
     * @param Temboo_Session $session The session that owns this BreakSentences Choreo.
     * @return Microsoft_Translator_BreakSentences New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/BreakSentences/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this BreakSentences Choreo.
     *
     * @param Microsoft_Translator_BreakSentences_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_BreakSentences_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_BreakSentences_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_BreakSentences_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this BreakSentences Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_BreakSentences_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_BreakSentences_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the BreakSentences Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_BreakSentences_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the BreakSentences Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_BreakSentences_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this BreakSentences input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_BreakSentences_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_BreakSentences_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this BreakSentences Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_BreakSentences_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this BreakSentences Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_BreakSentences_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this BreakSentences Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_BreakSentences_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Language input for this BreakSentences Choreo.
     *
     * @param string $value (required, string) A string representing the ISO 639-1 language code of input text.
     * @return Microsoft_Translator_BreakSentences_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this BreakSentences Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_BreakSentences_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this BreakSentences Choreo.
     *
     * @param string $value (required, string) A string representing the text to split into sentences. The size of the text must not exceed 10000 characters.
     * @return Microsoft_Translator_BreakSentences_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }
}


/**
 * Execution object for the BreakSentences Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_BreakSentences_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the BreakSentences Choreo.
     *
     * @param Temboo_Session $session The session that owns this BreakSentences execution.
     * @param Microsoft_Translator_BreakSentences $choreo The choreography object for this execution.
     * @param Microsoft_Translator_BreakSentences_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_BreakSentences_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_BreakSentences_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_BreakSentences $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this BreakSentences execution.
     *
     * @return Microsoft_Translator_BreakSentences_Results New results object.
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
     * Wraps results in appropriate results class for this BreakSentences execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_BreakSentences_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_BreakSentences_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the BreakSentences Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_BreakSentences_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the BreakSentences Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_BreakSentences_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this BreakSentences execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this BreakSentences execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this BreakSentences execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Identifies the language of a selected piece of text.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Detect extends Temboo_Choreography
{
    /**
     * Identifies the language of a selected piece of text.
     *
     * @param Temboo_Session $session The session that owns this Detect Choreo.
     * @return Microsoft_Translator_Detect New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/Detect/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Detect Choreo.
     *
     * @param Microsoft_Translator_Detect_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_Detect_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_Detect_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_Detect_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Detect Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_Detect_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_Detect_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Detect Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Detect_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Detect Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_Detect_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Detect input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_Detect_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_Detect_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Detect Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_Detect_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this Detect Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_Detect_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Detect Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_Detect_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Detect Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_Detect_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this Detect Choreo.
     *
     * @param string $value (required, string) A string containing some text whose language is to be identified. The size of the text must not exceed 10000 characters.
     * @return Microsoft_Translator_Detect_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }
}


/**
 * Execution object for the Detect Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Detect_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Detect Choreo.
     *
     * @param Temboo_Session $session The session that owns this Detect execution.
     * @param Microsoft_Translator_Detect $choreo The choreography object for this execution.
     * @param Microsoft_Translator_Detect_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_Detect_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_Detect_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_Detect $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Detect execution.
     *
     * @return Microsoft_Translator_Detect_Results New results object.
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
     * Wraps results in appropriate results class for this Detect execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_Detect_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_Detect_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Detect Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Detect_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Detect Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_Detect_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this Detect execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this Detect execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this Detect execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Identifies the language of an array of text strings.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_DetectArray extends Temboo_Choreography
{
    /**
     * Identifies the language of an array of text strings.
     *
     * @param Temboo_Session $session The session that owns this DetectArray Choreo.
     * @return Microsoft_Translator_DetectArray New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/DetectArray/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DetectArray Choreo.
     *
     * @param Microsoft_Translator_DetectArray_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_DetectArray_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_DetectArray_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_DetectArray_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DetectArray Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_DetectArray_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_DetectArray_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DetectArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_DetectArray_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DetectArray Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_DetectArray_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DetectArray input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_DetectArray_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_DetectArray_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DetectArray Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_DetectArray_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this DetectArray Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_DetectArray_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this DetectArray Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_DetectArray_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DetectArray Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_DetectArray_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Texts input for this DetectArray Choreo.
     *
     * @param string $value (required, json) A JSON array representing the text from an unknown language. The size of the text must not exceed 10000 characters.
     * @return Microsoft_Translator_DetectArray_Inputs For method chaining.
     */
    public function setTexts($value)
    {
        return $this->set('Texts', $value);
    }
}


/**
 * Execution object for the DetectArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_DetectArray_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DetectArray Choreo.
     *
     * @param Temboo_Session $session The session that owns this DetectArray execution.
     * @param Microsoft_Translator_DetectArray $choreo The choreography object for this execution.
     * @param Microsoft_Translator_DetectArray_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_DetectArray_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_DetectArray_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_DetectArray $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DetectArray execution.
     *
     * @return Microsoft_Translator_DetectArray_Results New results object.
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
     * Wraps results in appropriate results class for this DetectArray execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_DetectArray_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_DetectArray_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DetectArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_DetectArray_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DetectArray Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_DetectArray_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this DetectArray execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this DetectArray execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this DetectArray execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves friendly names for languages and localized using the specified locale language.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguageNames extends Temboo_Choreography
{
    /**
     * Retrieves friendly names for languages and localized using the specified locale language.
     *
     * @param Temboo_Session $session The session that owns this GetLanguageNames Choreo.
     * @return Microsoft_Translator_GetLanguageNames New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/GetLanguageNames/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLanguageNames Choreo.
     *
     * @param Microsoft_Translator_GetLanguageNames_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetLanguageNames_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetLanguageNames_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_GetLanguageNames_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLanguageNames Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetLanguageNames_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_GetLanguageNames_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLanguageNames Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguageNames_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLanguageNames Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetLanguageNames_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLanguageNames input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_GetLanguageNames_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_GetLanguageNames_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetLanguageNames Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_GetLanguageNames_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetLanguageNames Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetLanguageNames_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetLanguageNames Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetLanguageNames_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the LanguageCodes input for this GetLanguageNames Choreo.
     *
     * @param string $value (required, json) An array of ISO 639-1 language codes to retrieve friendly names for.
     * @return Microsoft_Translator_GetLanguageNames_Inputs For method chaining.
     */
    public function setLanguageCodes($value)
    {
        return $this->set('LanguageCodes', $value);
    }

    /**
     * Set the value for the Locale input for this GetLanguageNames Choreo.
     *
     * @param string $value (required, string) The ISO 639-1 language code associated with the language you wish to return results in.
     * @return Microsoft_Translator_GetLanguageNames_Inputs For method chaining.
     */
    public function setLocale($value)
    {
        return $this->set('Locale', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetLanguageNames Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_GetLanguageNames_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetLanguageNames Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguageNames_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLanguageNames Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLanguageNames execution.
     * @param Microsoft_Translator_GetLanguageNames $choreo The choreography object for this execution.
     * @param Microsoft_Translator_GetLanguageNames_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetLanguageNames_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetLanguageNames_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_GetLanguageNames $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLanguageNames execution.
     *
     * @return Microsoft_Translator_GetLanguageNames_Results New results object.
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
     * Wraps results in appropriate results class for this GetLanguageNames execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_GetLanguageNames_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_GetLanguageNames_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLanguageNames Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguageNames_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLanguageNames Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_GetLanguageNames_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this GetLanguageNames execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this GetLanguageNames execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this GetLanguageNames execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the languages available for speech synthesis.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguagesForSpeak extends Temboo_Choreography
{
    /**
     * Retrieves the languages available for speech synthesis.
     *
     * @param Temboo_Session $session The session that owns this GetLanguagesForSpeak Choreo.
     * @return Microsoft_Translator_GetLanguagesForSpeak New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/GetLanguagesForSpeak/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLanguagesForSpeak Choreo.
     *
     * @param Microsoft_Translator_GetLanguagesForSpeak_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetLanguagesForSpeak_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_GetLanguagesForSpeak_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLanguagesForSpeak Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_GetLanguagesForSpeak_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLanguagesForSpeak Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguagesForSpeak_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLanguagesForSpeak Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLanguagesForSpeak input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetLanguagesForSpeak Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetLanguagesForSpeak Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetLanguagesForSpeak Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetLanguagesForSpeak Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetLanguagesForSpeak Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguagesForSpeak_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLanguagesForSpeak Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLanguagesForSpeak execution.
     * @param Microsoft_Translator_GetLanguagesForSpeak $choreo The choreography object for this execution.
     * @param Microsoft_Translator_GetLanguagesForSpeak_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetLanguagesForSpeak_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_GetLanguagesForSpeak $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLanguagesForSpeak execution.
     *
     * @return Microsoft_Translator_GetLanguagesForSpeak_Results New results object.
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
     * Wraps results in appropriate results class for this GetLanguagesForSpeak execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_GetLanguagesForSpeak_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLanguagesForSpeak Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguagesForSpeak_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLanguagesForSpeak Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_GetLanguagesForSpeak_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this GetLanguagesForSpeak execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this GetLanguagesForSpeak execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this GetLanguagesForSpeak execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of language codes representing languages that are supported by the Translation Service.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguagesForTranslate extends Temboo_Choreography
{
    /**
     * Retrieves a list of language codes representing languages that are supported by the Translation Service.
     *
     * @param Temboo_Session $session The session that owns this GetLanguagesForTranslate Choreo.
     * @return Microsoft_Translator_GetLanguagesForTranslate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/GetLanguagesForTranslate/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLanguagesForTranslate Choreo.
     *
     * @param Microsoft_Translator_GetLanguagesForTranslate_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetLanguagesForTranslate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_GetLanguagesForTranslate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLanguagesForTranslate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_GetLanguagesForTranslate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLanguagesForTranslate Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguagesForTranslate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLanguagesForTranslate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLanguagesForTranslate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetLanguagesForTranslate Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetLanguagesForTranslate Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetLanguagesForTranslate Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetLanguagesForTranslate Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetLanguagesForTranslate Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguagesForTranslate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLanguagesForTranslate Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLanguagesForTranslate execution.
     * @param Microsoft_Translator_GetLanguagesForTranslate $choreo The choreography object for this execution.
     * @param Microsoft_Translator_GetLanguagesForTranslate_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetLanguagesForTranslate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_GetLanguagesForTranslate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLanguagesForTranslate execution.
     *
     * @return Microsoft_Translator_GetLanguagesForTranslate_Results New results object.
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
     * Wraps results in appropriate results class for this GetLanguagesForTranslate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_GetLanguagesForTranslate_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLanguagesForTranslate Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetLanguagesForTranslate_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLanguagesForTranslate Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_GetLanguagesForTranslate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this GetLanguagesForTranslate execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this GetLanguagesForTranslate execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this GetLanguagesForTranslate execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves an access token that can be used to authenticate with the Microsoft Translator API.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetToken extends Temboo_Choreography
{
    /**
     * Retrieves an access token that can be used to authenticate with the Microsoft Translator API.
     *
     * @param Temboo_Session $session The session that owns this GetToken Choreo.
     * @return Microsoft_Translator_GetToken New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/GetToken/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetToken Choreo.
     *
     * @param Microsoft_Translator_GetToken_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetToken_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_GetToken_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetToken_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_GetToken_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetToken Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetToken_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetToken_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetToken input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_GetToken_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_GetToken_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this GetToken Choreo.
     *
     * @param string $value (required, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace.
     * @return Microsoft_Translator_GetToken_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetToken Choreo.
     *
     * @param string $value (required, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace.
     * @return Microsoft_Translator_GetToken_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }
}


/**
 * Execution object for the GetToken Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetToken_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetToken Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetToken execution.
     * @param Microsoft_Translator_GetToken $choreo The choreography object for this execution.
     * @param Microsoft_Translator_GetToken_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetToken_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_GetToken $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetToken execution.
     *
     * @return Microsoft_Translator_GetToken_Results New results object.
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
     * Wraps results in appropriate results class for this GetToken execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_GetToken_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_GetToken_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetToken Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetToken_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetToken Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_GetToken_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessToken" output from this GetToken execution.
     *
     * @return string (string) The access token returned from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this GetToken execution.
     *
     * @return int (integer) The number of seconds for which the access token is valid.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
}

/**
 * Retrieves an array of all translations for a given text.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetTranslations extends Temboo_Choreography
{
    /**
     * Retrieves an array of all translations for a given text.
     *
     * @param Temboo_Session $session The session that owns this GetTranslations Choreo.
     * @return Microsoft_Translator_GetTranslations New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/GetTranslations/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTranslations Choreo.
     *
     * @param Microsoft_Translator_GetTranslations_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetTranslations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetTranslations_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_GetTranslations_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTranslations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetTranslations_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_GetTranslations_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTranslations Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetTranslations_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTranslations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetTranslations_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTranslations input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetTranslations Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Category input for this GetTranslations Choreo.
     *
     * @param string $value (optional, string) A string containing the category (domain) of the translation. Defaults to "general".
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the ClientID input for this GetTranslations Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetTranslations Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ContentType input for this GetTranslations Choreo.
     *
     * @param string $value (optional, string) The format of the text being translated. The only supported, and the default, option is "text/plain".
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the From input for this GetTranslations Choreo.
     *
     * @param string $value (required, string) A string representing the ISO 639-1 language code of the translation text (e.g., en).
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the MaxTranslations input for this GetTranslations Choreo.
     *
     * @param int $value (required, integer) An integer representing the maximum number of translations to return.
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setMaxTranslations($value)
    {
        return $this->set('MaxTranslations', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetTranslations Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the State input for this GetTranslations Choreo.
     *
     * @param string $value (optional, string) User state to help correlate request and response. The same contents will be returned in the response.
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Text input for this GetTranslations Choreo.
     *
     * @param string $value (required, string) A string representing the text to translate. The size of the text must not exceed 10000 characters.
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the To input for this GetTranslations Choreo.
     *
     * @param string $value (required, string) A string representing the ISO 639-1 language code to translate the text into (e.g., es).
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }

    /**
     * Set the value for the URI input for this GetTranslations Choreo.
     *
     * @param string $value (optional, string) Filter results by this URI. Default: all
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setURI($value)
    {
        return $this->set('URI', $value);
    }

    /**
     * Set the value for the User input for this GetTranslations Choreo.
     *
     * @param string $value (optional, string) Filter results by this user. Default: all
     * @return Microsoft_Translator_GetTranslations_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetTranslations Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetTranslations_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTranslations Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTranslations execution.
     * @param Microsoft_Translator_GetTranslations $choreo The choreography object for this execution.
     * @param Microsoft_Translator_GetTranslations_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetTranslations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetTranslations_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_GetTranslations $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTranslations execution.
     *
     * @return Microsoft_Translator_GetTranslations_Results New results object.
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
     * Wraps results in appropriate results class for this GetTranslations execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_GetTranslations_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_GetTranslations_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTranslations Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetTranslations_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTranslations Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_GetTranslations_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this GetTranslations execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this GetTranslations execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this GetTranslations execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves multiple translation candidates for multiple source texts.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetTranslationsArray extends Temboo_Choreography
{
    /**
     * Retrieves multiple translation candidates for multiple source texts.
     *
     * @param Temboo_Session $session The session that owns this GetTranslationsArray Choreo.
     * @return Microsoft_Translator_GetTranslationsArray New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/GetTranslationsArray/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTranslationsArray Choreo.
     *
     * @param Microsoft_Translator_GetTranslationsArray_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetTranslationsArray_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetTranslationsArray_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_GetTranslationsArray_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTranslationsArray Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_GetTranslationsArray_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTranslationsArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetTranslationsArray_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTranslationsArray Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTranslationsArray input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetTranslationsArray Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Category input for this GetTranslationsArray Choreo.
     *
     * @param string $value (optional, string) A string containing the category (domain) of the translation. Defaults to "general".
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the ClientID input for this GetTranslationsArray Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetTranslationsArray Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ContentType input for this GetTranslationsArray Choreo.
     *
     * @param string $value (optional, string) The format of the text being translated. The only supported, and the default, option is "text/plain".
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the From input for this GetTranslationsArray Choreo.
     *
     * @param string $value (required, string) A string representing the ISO 639-1 language code of the translation text (e.g., en).
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the MaxTranslations input for this GetTranslationsArray Choreo.
     *
     * @param int $value (required, integer) An integer representing the maximum number of translations to return.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setMaxTranslations($value)
    {
        return $this->set('MaxTranslations', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetTranslationsArray Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the State input for this GetTranslationsArray Choreo.
     *
     * @param string $value (optional, string) User state to help correlate request and response. The same contents will be returned in the response.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Texts input for this GetTranslationsArray Choreo.
     *
     * @param string $value (required, json) An array containing the texts for translation. All strings must be of the same language. The total of all texts must not exceed 10000 characters. The max number of array items is 2000.
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setTexts($value)
    {
        return $this->set('Texts', $value);
    }

    /**
     * Set the value for the To input for this GetTranslationsArray Choreo.
     *
     * @param string $value (required, string) A string representing the ISO 639-1 language code to translate the text into (e.g., es).
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }

    /**
     * Set the value for the URI input for this GetTranslationsArray Choreo.
     *
     * @param string $value (optional, string) Filter results by this URI. Default: all
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setURI($value)
    {
        return $this->set('URI', $value);
    }

    /**
     * Set the value for the User input for this GetTranslationsArray Choreo.
     *
     * @param string $value (optional, string) Filter results by this user. Default: all
     * @return Microsoft_Translator_GetTranslationsArray_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetTranslationsArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetTranslationsArray_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTranslationsArray Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTranslationsArray execution.
     * @param Microsoft_Translator_GetTranslationsArray $choreo The choreography object for this execution.
     * @param Microsoft_Translator_GetTranslationsArray_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_GetTranslationsArray_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_GetTranslationsArray_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_GetTranslationsArray $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTranslationsArray execution.
     *
     * @return Microsoft_Translator_GetTranslationsArray_Results New results object.
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
     * Wraps results in appropriate results class for this GetTranslationsArray execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_GetTranslationsArray_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_GetTranslationsArray_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTranslationsArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_GetTranslationsArray_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTranslationsArray Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_GetTranslationsArray_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this GetTranslationsArray execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this GetTranslationsArray execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this GetTranslationsArray execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a Base64 encoded wave or mp3 file of the passed-in text being spoken in the desired language.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Speak extends Temboo_Choreography
{
    /**
     * Returns a Base64 encoded wave or mp3 file of the passed-in text being spoken in the desired language.
     *
     * @param Temboo_Session $session The session that owns this Speak Choreo.
     * @return Microsoft_Translator_Speak New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/Speak/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Speak Choreo.
     *
     * @param Microsoft_Translator_Speak_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_Speak_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_Speak_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_Speak_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Speak Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_Speak_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_Speak_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Speak Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Speak_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Speak Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_Speak_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Speak input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_Speak_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_Speak_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Speak Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_Speak_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this Speak Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_Speak_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Speak Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_Speak_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Format input for this Speak Choreo.
     *
     * @param string $value (optional, string) A string specifying the content-type. Currently, "audio/wav" and "audio/mp3" are available. The default value is "audio/wav".
     * @return Microsoft_Translator_Speak_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the Language input for this Speak Choreo.
     *
     * @param string $value (required, string) A string representing the supported ISO 639-1 language code to speak the text in (e.g., es). The code must be present in the list of codes returned from the method GetLanguagesForSpeak.
     * @return Microsoft_Translator_Speak_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the Options input for this Speak Choreo.
     *
     * @param string $value (optional, string) A string specifying the quality of the audio signals. Valid values are: MaxQuality or MinQuality (the default).
     * @return Microsoft_Translator_Speak_Inputs For method chaining.
     */
    public function setOptions($value)
    {
        return $this->set('Options', $value);
    }

    /**
     * Set the value for the Text input for this Speak Choreo.
     *
     * @param string $value (required, string) A string representing the text to translate. The size of the text must not exceed 10000 characters.
     * @return Microsoft_Translator_Speak_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }
}


/**
 * Execution object for the Speak Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Speak_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Speak Choreo.
     *
     * @param Temboo_Session $session The session that owns this Speak execution.
     * @param Microsoft_Translator_Speak $choreo The choreography object for this execution.
     * @param Microsoft_Translator_Speak_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_Speak_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_Speak_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_Speak $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Speak execution.
     *
     * @return Microsoft_Translator_Speak_Results New results object.
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
     * Wraps results in appropriate results class for this Speak execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_Speak_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_Speak_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Speak Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Speak_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Speak Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_Speak_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AudioFile" output from this Speak execution.
     *
     * @return string (string) The Base64 encoded audio file in mp3 or wav format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAudioFile()
    {
        return $this->get('AudioFile');
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this Speak execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this Speak execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
}

/**
 * Translates a text string from one language to another.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Translate extends Temboo_Choreography
{
    /**
     * Translates a text string from one language to another.
     *
     * @param Temboo_Session $session The session that owns this Translate Choreo.
     * @return Microsoft_Translator_Translate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/Translate/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Translate Choreo.
     *
     * @param Microsoft_Translator_Translate_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_Translate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_Translate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_Translate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Translate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_Translate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_Translate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Translate Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Translate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Translate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_Translate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Translate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Translate Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Category input for this Translate Choreo.
     *
     * @param string $value (optional, string) A string containing the category (domain) of the translation. Defaults to "general".
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the ClientID input for this Translate Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Translate Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ContentType input for this Translate Choreo.
     *
     * @param string $value (optional, string) The format of the text being translated. The supported formats are "text/plain" (the default) and "text/html".
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the From input for this Translate Choreo.
     *
     * @param string $value (required, string) A string representing the ISO 639-1 language code of the translation text (e.g., en).
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the Text input for this Translate Choreo.
     *
     * @param string $value (required, string) A string representing the text to translate. The size of the text must not exceed 10000 characters.
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the To input for this Translate Choreo.
     *
     * @param string $value (required, string) A string representing the ISO 639-1 language codee to translate the text into (e.g., es).
     * @return Microsoft_Translator_Translate_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }
}


/**
 * Execution object for the Translate Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Translate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Translate Choreo.
     *
     * @param Temboo_Session $session The session that owns this Translate execution.
     * @param Microsoft_Translator_Translate $choreo The choreography object for this execution.
     * @param Microsoft_Translator_Translate_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_Translate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_Translate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_Translate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Translate execution.
     *
     * @return Microsoft_Translator_Translate_Results New results object.
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
     * Wraps results in appropriate results class for this Translate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_Translate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_Translate_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Translate Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_Translate_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Translate Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_Translate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this Translate execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this Translate execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "TranslatedText" output from this Translate execution.
     *
     * @return string (string) The translated text parsed from the Microsoft response.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getTranslatedText()
    {
        return $this->get('TranslatedText');
    }
}

/**
 * Translates multiple source texts.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_TranslateArray extends Temboo_Choreography
{
    /**
     * Translates multiple source texts.
     *
     * @param Temboo_Session $session The session that owns this TranslateArray Choreo.
     * @return Microsoft_Translator_TranslateArray New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Microsoft/Translator/TranslateArray/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TranslateArray Choreo.
     *
     * @param Microsoft_Translator_TranslateArray_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_TranslateArray_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_TranslateArray_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Microsoft_Translator_TranslateArray_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TranslateArray Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_TranslateArray_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Microsoft_Translator_TranslateArray_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TranslateArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_TranslateArray_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TranslateArray Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Microsoft_Translator_TranslateArray_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TranslateArray input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this TranslateArray Choreo.
     *
     * @param string $value (optional, string) A valid access token. This can be retrieved by running the GetToken Choreo. Required unless providing the ClientID and ClientSecret.
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Category input for this TranslateArray Choreo.
     *
     * @param string $value (optional, string) A string containing the category (domain) of the translation. Defaults to "general".
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the ClientID input for this TranslateArray Choreo.
     *
     * @param string $value (conditional, string) The Client ID obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this TranslateArray Choreo.
     *
     * @param string $value (conditional, string) The Client Secret obtained when signing up for Microsoft Translator on Azure Marketplace. This is required unless providing an AccessToken.
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ContentType input for this TranslateArray Choreo.
     *
     * @param string $value (optional, string) The format of the text being translated. The supported formats are "text/plain" (the default) and "text/html".
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the From input for this TranslateArray Choreo.
     *
     * @param string $value (optional, string) A string representing the language code of the translation text (e.g., en). If not provided auto-detection is used.
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TranslateArray Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Texts input for this TranslateArray Choreo.
     *
     * @param string $value (required, json) An array containing the texts for translation. All strings must be of the same language. The total of all texts must not exceed 10000 characters. The max number of array items is 2000.
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setTexts($value)
    {
        return $this->set('Texts', $value);
    }

    /**
     * Set the value for the To input for this TranslateArray Choreo.
     *
     * @param string $value (required, string) A string representing the ISO 639-1 language code to translate the text into (e.g., es).
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }

    /**
     * Set the value for the URI input for this TranslateArray Choreo.
     *
     * @param string $value (optional, string) Filter results by this URI. Default: all
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setURI($value)
    {
        return $this->set('URI', $value);
    }

    /**
     * Set the value for the User input for this TranslateArray Choreo.
     *
     * @param string $value (optional, multiline) Filter results by this user. Default: all
     * @return Microsoft_Translator_TranslateArray_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the TranslateArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_TranslateArray_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TranslateArray Choreo.
     *
     * @param Temboo_Session $session The session that owns this TranslateArray execution.
     * @param Microsoft_Translator_TranslateArray $choreo The choreography object for this execution.
     * @param Microsoft_Translator_TranslateArray_Inputs|array $inputs (optional) Inputs as Microsoft_Translator_TranslateArray_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Microsoft_Translator_TranslateArray_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Microsoft_Translator_TranslateArray $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TranslateArray execution.
     *
     * @return Microsoft_Translator_TranslateArray_Results New results object.
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
     * Wraps results in appropriate results class for this TranslateArray execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Microsoft_Translator_TranslateArray_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Microsoft_Translator_TranslateArray_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TranslateArray Choreo.
 *
 * @package Temboo
 * @subpackage Microsoft
 */
class Microsoft_Translator_TranslateArray_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TranslateArray Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Microsoft_Translator_TranslateArray_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ExpiresIn" output from this TranslateArray execution.
     *
     * @return int (integer) Contains the number of seconds for which the access token is valid when ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpiresIn()
    {
        return $this->get('ExpiresIn');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this TranslateArray execution.
     *
     * @return string (string) Contains a new AccessToken when the ClientID and ClientSecret are provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this TranslateArray execution.
     *
     * @return string The response from Microsoft.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>