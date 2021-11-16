<?php

/**
 * Temboo PHP SDK Dropbox classes
 *
 * Execute Choreographies from the Temboo Dropbox bundle.
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
 * @subpackage Dropbox
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves information about the user's account.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Account_AccountInfo extends Temboo_Choreography
{
    /**
     * Retrieves information about the user's account.
     *
     * @param Temboo_Session $session The session that owns this AccountInfo Choreo.
     * @return Dropbox_Account_AccountInfo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Account/AccountInfo/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AccountInfo Choreo.
     *
     * @param Dropbox_Account_AccountInfo_Inputs|array $inputs (optional) Inputs as Dropbox_Account_AccountInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Account_AccountInfo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Account_AccountInfo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AccountInfo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Account_AccountInfo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Account_AccountInfo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AccountInfo Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Account_AccountInfo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AccountInfo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Account_AccountInfo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AccountInfo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Account_AccountInfo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Account_AccountInfo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this AccountInfo Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_Account_AccountInfo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this AccountInfo Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_Account_AccountInfo_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this AccountInfo Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_Account_AccountInfo_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this AccountInfo Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_Account_AccountInfo_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AccountInfo Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Dropbox_Account_AccountInfo_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the AccountInfo Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Account_AccountInfo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AccountInfo Choreo.
     *
     * @param Temboo_Session $session The session that owns this AccountInfo execution.
     * @param Dropbox_Account_AccountInfo $choreo The choreography object for this execution.
     * @param Dropbox_Account_AccountInfo_Inputs|array $inputs (optional) Inputs as Dropbox_Account_AccountInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Account_AccountInfo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Account_AccountInfo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AccountInfo execution.
     *
     * @return Dropbox_Account_AccountInfo_Results New results object.
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
     * Wraps results in appropriate results class for this AccountInfo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Account_AccountInfo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Account_AccountInfo_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AccountInfo Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Account_AccountInfo_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AccountInfo Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Account_AccountInfo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AccountInfo execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Copies a file or folder to a new location in the Dropbox tree.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_CopyFileOrFolder extends Temboo_Choreography
{
    /**
     * Copies a file or folder to a new location in the Dropbox tree.
     *
     * @param Temboo_Session $session The session that owns this CopyFileOrFolder Choreo.
     * @return Dropbox_FileOperations_CopyFileOrFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FileOperations/CopyFileOrFolder/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CopyFileOrFolder Choreo.
     *
     * @param Dropbox_FileOperations_CopyFileOrFolder_Inputs|array $inputs (optional) Inputs as Dropbox_FileOperations_CopyFileOrFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FileOperations_CopyFileOrFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FileOperations_CopyFileOrFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CopyFileOrFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FileOperations_CopyFileOrFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FileOperations_CopyFileOrFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CopyFileOrFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_CopyFileOrFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CopyFileOrFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FileOperations_CopyFileOrFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CopyFileOrFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FileOperations_CopyFileOrFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FileOperations_CopyFileOrFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CopyFileOrFolder Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FileOperations_CopyFileOrFolder_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CopyFileOrFolder Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FileOperations_CopyFileOrFolder_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this CopyFileOrFolder Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FileOperations_CopyFileOrFolder_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this CopyFileOrFolder Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FileOperations_CopyFileOrFolder_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the FromCopyRef input for this CopyFileOrFolder Choreo.
     *
     * @param string $value (conditional, string) Specifies a CopyRef previously generated by running the CreateCopyRef choreo. If you specify this value, you must leave FromPath empty.
     * @return Dropbox_FileOperations_CopyFileOrFolder_Inputs For method chaining.
     */
    public function setFromCopyRef($value)
    {
        return $this->set('FromCopyRef', $value);
    }

    /**
     * Set the value for the FromPath input for this CopyFileOrFolder Choreo.
     *
     * @param string $value (conditional, string) Specifies the file or folder to be copied. If you specify this value, you must leave the FromCopyRef blank.
     * @return Dropbox_FileOperations_CopyFileOrFolder_Inputs For method chaining.
     */
    public function setFromPath($value)
    {
        return $this->set('FromPath', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CopyFileOrFolder Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Dropbox_FileOperations_CopyFileOrFolder_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Root input for this CopyFileOrFolder Choreo.
     *
     * @param string $value (optional, string) Defaults to "auto" which automatically determines the root folder using your app's permission level. Other options are "sandbox" (App Folder) and "dropbox" (Full Dropbox).
     * @return Dropbox_FileOperations_CopyFileOrFolder_Inputs For method chaining.
     */
    public function setRoot($value)
    {
        return $this->set('Root', $value);
    }

    /**
     * Set the value for the ToPath input for this CopyFileOrFolder Choreo.
     *
     * @param string $value (required, string) Specifies the destination path, including the new name for the file or folder.
     * @return Dropbox_FileOperations_CopyFileOrFolder_Inputs For method chaining.
     */
    public function setToPath($value)
    {
        return $this->set('ToPath', $value);
    }
}


/**
 * Execution object for the CopyFileOrFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_CopyFileOrFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CopyFileOrFolder Choreo.
     *
     * @param Temboo_Session $session The session that owns this CopyFileOrFolder execution.
     * @param Dropbox_FileOperations_CopyFileOrFolder $choreo The choreography object for this execution.
     * @param Dropbox_FileOperations_CopyFileOrFolder_Inputs|array $inputs (optional) Inputs as Dropbox_FileOperations_CopyFileOrFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FileOperations_CopyFileOrFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FileOperations_CopyFileOrFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CopyFileOrFolder execution.
     *
     * @return Dropbox_FileOperations_CopyFileOrFolder_Results New results object.
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
     * Wraps results in appropriate results class for this CopyFileOrFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FileOperations_CopyFileOrFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FileOperations_CopyFileOrFolder_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CopyFileOrFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_CopyFileOrFolder_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CopyFileOrFolder Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FileOperations_CopyFileOrFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CopyFileOrFolder execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a Dropbox folder.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_CreateFolder extends Temboo_Choreography
{
    /**
     * Creates a Dropbox folder.
     *
     * @param Temboo_Session $session The session that owns this CreateFolder Choreo.
     * @return Dropbox_FileOperations_CreateFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FileOperations/CreateFolder/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateFolder Choreo.
     *
     * @param Dropbox_FileOperations_CreateFolder_Inputs|array $inputs (optional) Inputs as Dropbox_FileOperations_CreateFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FileOperations_CreateFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FileOperations_CreateFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FileOperations_CreateFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FileOperations_CreateFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_CreateFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FileOperations_CreateFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FileOperations_CreateFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FileOperations_CreateFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateFolder Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FileOperations_CreateFolder_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateFolder Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FileOperations_CreateFolder_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this CreateFolder Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FileOperations_CreateFolder_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this CreateFolder Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FileOperations_CreateFolder_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the NewFolderName input for this CreateFolder Choreo.
     *
     * @param string $value (required, string) The name of the new folder to create. A path with a root folder is also valid (i.e. /RootFolder/NewFolderName).
     * @return Dropbox_FileOperations_CreateFolder_Inputs For method chaining.
     */
    public function setNewFolderName($value)
    {
        return $this->set('NewFolderName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateFolder Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Dropbox_FileOperations_CreateFolder_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Root input for this CreateFolder Choreo.
     *
     * @param string $value (optional, string) Defaults to "auto" which automatically determines the root folder using your app's permission level. Other options are "sandbox" (App Folder) and "dropbox" (Full Dropbox).
     * @return Dropbox_FileOperations_CreateFolder_Inputs For method chaining.
     */
    public function setRoot($value)
    {
        return $this->set('Root', $value);
    }
}


/**
 * Execution object for the CreateFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_CreateFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateFolder Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateFolder execution.
     * @param Dropbox_FileOperations_CreateFolder $choreo The choreography object for this execution.
     * @param Dropbox_FileOperations_CreateFolder_Inputs|array $inputs (optional) Inputs as Dropbox_FileOperations_CreateFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FileOperations_CreateFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FileOperations_CreateFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateFolder execution.
     *
     * @return Dropbox_FileOperations_CreateFolder_Results New results object.
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
     * Wraps results in appropriate results class for this CreateFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FileOperations_CreateFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FileOperations_CreateFolder_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_CreateFolder_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateFolder Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FileOperations_CreateFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateFolder execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a Dropbox file or folder that you specify.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_DeleteFileOrFolder extends Temboo_Choreography
{
    /**
     * Deletes a Dropbox file or folder that you specify.
     *
     * @param Temboo_Session $session The session that owns this DeleteFileOrFolder Choreo.
     * @return Dropbox_FileOperations_DeleteFileOrFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FileOperations/DeleteFileOrFolder/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteFileOrFolder Choreo.
     *
     * @param Dropbox_FileOperations_DeleteFileOrFolder_Inputs|array $inputs (optional) Inputs as Dropbox_FileOperations_DeleteFileOrFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FileOperations_DeleteFileOrFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FileOperations_DeleteFileOrFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteFileOrFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FileOperations_DeleteFileOrFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FileOperations_DeleteFileOrFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteFileOrFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_DeleteFileOrFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteFileOrFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FileOperations_DeleteFileOrFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteFileOrFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FileOperations_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FileOperations_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteFileOrFolder Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FileOperations_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteFileOrFolder Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FileOperations_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this DeleteFileOrFolder Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FileOperations_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this DeleteFileOrFolder Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FileOperations_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the Path input for this DeleteFileOrFolder Choreo.
     *
     * @param string $value (required, string) The path to the file or folder you want to delete (i.e. /RootFolder/SubFolder/FileToDelete.txt).
     * @return Dropbox_FileOperations_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteFileOrFolder Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Dropbox_FileOperations_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Root input for this DeleteFileOrFolder Choreo.
     *
     * @param string $value (optional, string) Defaults to "auto" which automatically determines the root folder using your app's permission level. Other options are "sandbox" (App Folder) and "dropbox" (Full Dropbox).
     * @return Dropbox_FileOperations_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setRoot($value)
    {
        return $this->set('Root', $value);
    }
}


/**
 * Execution object for the DeleteFileOrFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_DeleteFileOrFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteFileOrFolder Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteFileOrFolder execution.
     * @param Dropbox_FileOperations_DeleteFileOrFolder $choreo The choreography object for this execution.
     * @param Dropbox_FileOperations_DeleteFileOrFolder_Inputs|array $inputs (optional) Inputs as Dropbox_FileOperations_DeleteFileOrFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FileOperations_DeleteFileOrFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FileOperations_DeleteFileOrFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteFileOrFolder execution.
     *
     * @return Dropbox_FileOperations_DeleteFileOrFolder_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteFileOrFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FileOperations_DeleteFileOrFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FileOperations_DeleteFileOrFolder_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteFileOrFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_DeleteFileOrFolder_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteFileOrFolder Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FileOperations_DeleteFileOrFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteFileOrFolder execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Moves a file or folder to a new location in the Dropbox tree.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_MoveFileOrFolder extends Temboo_Choreography
{
    /**
     * Moves a file or folder to a new location in the Dropbox tree.
     *
     * @param Temboo_Session $session The session that owns this MoveFileOrFolder Choreo.
     * @return Dropbox_FileOperations_MoveFileOrFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FileOperations/MoveFileOrFolder/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this MoveFileOrFolder Choreo.
     *
     * @param Dropbox_FileOperations_MoveFileOrFolder_Inputs|array $inputs (optional) Inputs as Dropbox_FileOperations_MoveFileOrFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FileOperations_MoveFileOrFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FileOperations_MoveFileOrFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MoveFileOrFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FileOperations_MoveFileOrFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FileOperations_MoveFileOrFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MoveFileOrFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_MoveFileOrFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the MoveFileOrFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FileOperations_MoveFileOrFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MoveFileOrFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FileOperations_MoveFileOrFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FileOperations_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this MoveFileOrFolder Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FileOperations_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this MoveFileOrFolder Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FileOperations_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this MoveFileOrFolder Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FileOperations_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this MoveFileOrFolder Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FileOperations_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the FromPath input for this MoveFileOrFolder Choreo.
     *
     * @param string $value (required, string) Specifies the file or folder to be copied.
     * @return Dropbox_FileOperations_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setFromPath($value)
    {
        return $this->set('FromPath', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this MoveFileOrFolder Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Dropbox_FileOperations_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Root input for this MoveFileOrFolder Choreo.
     *
     * @param string $value (optional, string) Defaults to "auto" which automatically determines the root folder using your app's permission level. Other options are "sandbox" (App Folder) and "dropbox" (Full Dropbox).
     * @return Dropbox_FileOperations_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setRoot($value)
    {
        return $this->set('Root', $value);
    }

    /**
     * Set the value for the ToPath input for this MoveFileOrFolder Choreo.
     *
     * @param string $value (required, string) Specifies the destination path, including the new name for the file or folder.
     * @return Dropbox_FileOperations_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setToPath($value)
    {
        return $this->set('ToPath', $value);
    }
}


/**
 * Execution object for the MoveFileOrFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_MoveFileOrFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MoveFileOrFolder Choreo.
     *
     * @param Temboo_Session $session The session that owns this MoveFileOrFolder execution.
     * @param Dropbox_FileOperations_MoveFileOrFolder $choreo The choreography object for this execution.
     * @param Dropbox_FileOperations_MoveFileOrFolder_Inputs|array $inputs (optional) Inputs as Dropbox_FileOperations_MoveFileOrFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FileOperations_MoveFileOrFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FileOperations_MoveFileOrFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MoveFileOrFolder execution.
     *
     * @return Dropbox_FileOperations_MoveFileOrFolder_Results New results object.
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
     * Wraps results in appropriate results class for this MoveFileOrFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FileOperations_MoveFileOrFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FileOperations_MoveFileOrFolder_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the MoveFileOrFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_MoveFileOrFolder_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the MoveFileOrFolder Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FileOperations_MoveFileOrFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this MoveFileOrFolder execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a zipped version of the specified Dropbox file and returns a shareable link to the new compressed file.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_ZipFile extends Temboo_Choreography
{
    /**
     * Creates a zipped version of the specified Dropbox file and returns a shareable link to the new compressed file.
     *
     * @param Temboo_Session $session The session that owns this ZipFile Choreo.
     * @return Dropbox_FileOperations_ZipFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FileOperations/ZipFile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ZipFile Choreo.
     *
     * @param Dropbox_FileOperations_ZipFile_Inputs|array $inputs (optional) Inputs as Dropbox_FileOperations_ZipFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FileOperations_ZipFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FileOperations_ZipFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ZipFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FileOperations_ZipFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FileOperations_ZipFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ZipFile Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_ZipFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ZipFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FileOperations_ZipFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ZipFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FileOperations_ZipFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FileOperations_ZipFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ZipFile Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FileOperations_ZipFile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ZipFile Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FileOperations_ZipFile_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this ZipFile Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FileOperations_ZipFile_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this ZipFile Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FileOperations_ZipFile_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the FileName input for this ZipFile Choreo.
     *
     * @param string $value (required, string) The name of the Dropbox file you want to zip.
     * @return Dropbox_FileOperations_ZipFile_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the Folder input for this ZipFile Choreo.
     *
     * @param string $value (conditional, string) The name of the folder that contains the file you want to zip. A path to a sub-folder is also valid (i.e. RootFolder/SubFolder). Not required if the file is at the root level.
     * @return Dropbox_FileOperations_ZipFile_Inputs For method chaining.
     */
    public function setFolder($value)
    {
        return $this->set('Folder', $value);
    }

    /**
     * Set the value for the Root input for this ZipFile Choreo.
     *
     * @param string $value (optional, string) Defaults to "auto" which automatically determines the root folder using your app's permission level. Other options are "sandbox" (App Folder) and "dropbox" (Full Dropbox).
     * @return Dropbox_FileOperations_ZipFile_Inputs For method chaining.
     */
    public function setRoot($value)
    {
        return $this->set('Root', $value);
    }

    /**
     * Set the value for the ZipFileLocation input for this ZipFile Choreo.
     *
     * @param string $value (optional, string) The name of the folder to put the new zip file in.A path to a sub-folder is also valid (i.e. RootFolder/SubFolder).  When not specified, the zip file will be put in the root folder.
     * @return Dropbox_FileOperations_ZipFile_Inputs For method chaining.
     */
    public function setZipFileLocation($value)
    {
        return $this->set('ZipFileLocation', $value);
    }

    /**
     * Set the value for the ZipFileName input for this ZipFile Choreo.
     *
     * @param string $value (optional, string) The name of the zip file that will be created. If not specified, the original file name will be used with a .zip extension.
     * @return Dropbox_FileOperations_ZipFile_Inputs For method chaining.
     */
    public function setZipFileName($value)
    {
        return $this->set('ZipFileName', $value);
    }
}


/**
 * Execution object for the ZipFile Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_ZipFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ZipFile Choreo.
     *
     * @param Temboo_Session $session The session that owns this ZipFile execution.
     * @param Dropbox_FileOperations_ZipFile $choreo The choreography object for this execution.
     * @param Dropbox_FileOperations_ZipFile_Inputs|array $inputs (optional) Inputs as Dropbox_FileOperations_ZipFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FileOperations_ZipFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FileOperations_ZipFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ZipFile execution.
     *
     * @return Dropbox_FileOperations_ZipFile_Results New results object.
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
     * Wraps results in appropriate results class for this ZipFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FileOperations_ZipFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FileOperations_ZipFile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ZipFile Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_ZipFile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ZipFile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FileOperations_ZipFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "URL" output from this ZipFile execution.
     *
     * @return string (string) The shared link for the new zip file.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURL()
    {
        return $this->get('URL');
    }
}

/**
 * Creates a zip file containing all files within the specified folder and returns a shareable link to the new compressed file.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_ZipFolder extends Temboo_Choreography
{
    /**
     * Creates a zip file containing all files within the specified folder and returns a shareable link to the new compressed file.
     *
     * @param Temboo_Session $session The session that owns this ZipFolder Choreo.
     * @return Dropbox_FileOperations_ZipFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FileOperations/ZipFolder/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ZipFolder Choreo.
     *
     * @param Dropbox_FileOperations_ZipFolder_Inputs|array $inputs (optional) Inputs as Dropbox_FileOperations_ZipFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FileOperations_ZipFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FileOperations_ZipFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ZipFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FileOperations_ZipFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FileOperations_ZipFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ZipFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_ZipFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ZipFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FileOperations_ZipFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ZipFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FileOperations_ZipFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FileOperations_ZipFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ZipFolder Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FileOperations_ZipFolder_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ZipFolder Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FileOperations_ZipFolder_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this ZipFolder Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FileOperations_ZipFolder_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this ZipFolder Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FileOperations_ZipFolder_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the Folder input for this ZipFolder Choreo.
     *
     * @param string $value (required, string) The name of the folder that contains the files you want to retrieve and zip. A path to a sub-folder is also valid (i.e. RootFolder/SubFolder).
     * @return Dropbox_FileOperations_ZipFolder_Inputs For method chaining.
     */
    public function setFolder($value)
    {
        return $this->set('Folder', $value);
    }

    /**
     * Set the value for the Root input for this ZipFolder Choreo.
     *
     * @param string $value (optional, string) Defaults to "auto" which automatically determines the root folder using your app's permission level. Other options are "sandbox" (App Folder) and "dropbox" (Full Dropbox).
     * @return Dropbox_FileOperations_ZipFolder_Inputs For method chaining.
     */
    public function setRoot($value)
    {
        return $this->set('Root', $value);
    }

    /**
     * Set the value for the ZipFileLocation input for this ZipFolder Choreo.
     *
     * @param string $value (optional, string) The name of the folder to put the new zip file in. A path to a sub-folder is also valid (i.e. RootFolder/SubFolder). When not specified, the zip file will be put in the root folder.
     * @return Dropbox_FileOperations_ZipFolder_Inputs For method chaining.
     */
    public function setZipFileLocation($value)
    {
        return $this->set('ZipFileLocation', $value);
    }

    /**
     * Set the value for the ZipFileName input for this ZipFolder Choreo.
     *
     * @param string $value (optional, string) The name of the zip file that will be created. If not specified, the original folder name containing the files to zip will be used with a .zip extension.
     * @return Dropbox_FileOperations_ZipFolder_Inputs For method chaining.
     */
    public function setZipFileName($value)
    {
        return $this->set('ZipFileName', $value);
    }
}


/**
 * Execution object for the ZipFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_ZipFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ZipFolder Choreo.
     *
     * @param Temboo_Session $session The session that owns this ZipFolder execution.
     * @param Dropbox_FileOperations_ZipFolder $choreo The choreography object for this execution.
     * @param Dropbox_FileOperations_ZipFolder_Inputs|array $inputs (optional) Inputs as Dropbox_FileOperations_ZipFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FileOperations_ZipFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FileOperations_ZipFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ZipFolder execution.
     *
     * @return Dropbox_FileOperations_ZipFolder_Results New results object.
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
     * Wraps results in appropriate results class for this ZipFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FileOperations_ZipFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FileOperations_ZipFolder_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ZipFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FileOperations_ZipFolder_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ZipFolder Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FileOperations_ZipFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "URL" output from this ZipFolder execution.
     *
     * @return string 
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURL()
    {
        return $this->get('URL');
    }
    /**
     * Retrieve the value for the "Response" output from this ZipFolder execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Copies a file or folder to a different location in the user's Dropbox.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Copy extends Temboo_Choreography
{
    /**
     * Copies a file or folder to a different location in the user's Dropbox.
     *
     * @param Temboo_Session $session The session that owns this Copy Choreo.
     * @return Dropbox_Files_Copy New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/Copy/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Copy Choreo.
     *
     * @param Dropbox_Files_Copy_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Copy_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Copy_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_Copy_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Copy Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Copy_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_Copy_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Copy Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Copy_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Copy Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Copy_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Copy input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_Copy_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_Copy_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Copy Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_Copy_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AllowSharedFolder input for this Copy Choreo.
     *
     * @param bool $value (optional, boolean) If true, contents are copied into a shared folder, otherwise an error will be returned if the FromPath contains a shared folder. The default for this field is false.
     * @return Dropbox_Files_Copy_Inputs For method chaining.
     */
    public function setAllowSharedFolder($value)
    {
        return $this->set('AllowSharedFolder', $value);
    }

    /**
     * Set the value for the AutoRename input for this Copy Choreo.
     *
     * @param bool $value (optional, boolean) If there's a conflict, have the Dropbox server try to autorename the file to avoid the conflict. The default for this field is false.
     * @return Dropbox_Files_Copy_Inputs For method chaining.
     */
    public function setAutoRename($value)
    {
        return $this->set('AutoRename', $value);
    }

    /**
     * Set the value for the FromPath input for this Copy Choreo.
     *
     * @param string $value (required, string) Path in the user's Dropbox to be copied or moved.
     * @return Dropbox_Files_Copy_Inputs For method chaining.
     */
    public function setFromPath($value)
    {
        return $this->set('FromPath', $value);
    }

    /**
     * Set the value for the ToPath input for this Copy Choreo.
     *
     * @param string $value (required, string) Path in the user's Dropbox that is the destination.
     * @return Dropbox_Files_Copy_Inputs For method chaining.
     */
    public function setToPath($value)
    {
        return $this->set('ToPath', $value);
    }
}


/**
 * Execution object for the Copy Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Copy_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Copy Choreo.
     *
     * @param Temboo_Session $session The session that owns this Copy execution.
     * @param Dropbox_Files_Copy $choreo The choreography object for this execution.
     * @param Dropbox_Files_Copy_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Copy_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Copy_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_Copy $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Copy execution.
     *
     * @return Dropbox_Files_Copy_Results New results object.
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
     * Wraps results in appropriate results class for this Copy execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_Copy_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_Copy_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Copy Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Copy_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Copy Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_Copy_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Copy execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a copy reference to a file or folder.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CopyReferenceGet extends Temboo_Choreography
{
    /**
     * Gets a copy reference to a file or folder.
     *
     * @param Temboo_Session $session The session that owns this CopyReferenceGet Choreo.
     * @return Dropbox_Files_CopyReferenceGet New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/CopyReferenceGet/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CopyReferenceGet Choreo.
     *
     * @param Dropbox_Files_CopyReferenceGet_Inputs|array $inputs (optional) Inputs as Dropbox_Files_CopyReferenceGet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_CopyReferenceGet_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_CopyReferenceGet_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CopyReferenceGet Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_CopyReferenceGet_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_CopyReferenceGet_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CopyReferenceGet Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CopyReferenceGet_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CopyReferenceGet Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_CopyReferenceGet_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CopyReferenceGet input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_CopyReferenceGet_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_CopyReferenceGet_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CopyReferenceGet Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_CopyReferenceGet_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Path input for this CopyReferenceGet Choreo.
     *
     * @param string $value (required, string) The path to the file or folder you want to get a copy reference to.
     * @return Dropbox_Files_CopyReferenceGet_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }
}


/**
 * Execution object for the CopyReferenceGet Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CopyReferenceGet_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CopyReferenceGet Choreo.
     *
     * @param Temboo_Session $session The session that owns this CopyReferenceGet execution.
     * @param Dropbox_Files_CopyReferenceGet $choreo The choreography object for this execution.
     * @param Dropbox_Files_CopyReferenceGet_Inputs|array $inputs (optional) Inputs as Dropbox_Files_CopyReferenceGet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_CopyReferenceGet_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_CopyReferenceGet $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CopyReferenceGet execution.
     *
     * @return Dropbox_Files_CopyReferenceGet_Results New results object.
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
     * Wraps results in appropriate results class for this CopyReferenceGet execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_CopyReferenceGet_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_CopyReferenceGet_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CopyReferenceGet Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CopyReferenceGet_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CopyReferenceGet Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_CopyReferenceGet_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CopyReferenceGet execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Saves a copy reference returned by CopyReferenceGet to the user's Dropbox.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CopyReferenceSave extends Temboo_Choreography
{
    /**
     * Saves a copy reference returned by CopyReferenceGet to the user's Dropbox.
     *
     * @param Temboo_Session $session The session that owns this CopyReferenceSave Choreo.
     * @return Dropbox_Files_CopyReferenceSave New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/CopyReferenceSave/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CopyReferenceSave Choreo.
     *
     * @param Dropbox_Files_CopyReferenceSave_Inputs|array $inputs (optional) Inputs as Dropbox_Files_CopyReferenceSave_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_CopyReferenceSave_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_CopyReferenceSave_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CopyReferenceSave Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_CopyReferenceSave_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_CopyReferenceSave_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CopyReferenceSave Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CopyReferenceSave_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CopyReferenceSave Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_CopyReferenceSave_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CopyReferenceSave input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_CopyReferenceSave_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_CopyReferenceSave_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CopyReferenceSave Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_CopyReferenceSave_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the CopyReference input for this CopyReferenceSave Choreo.
     *
     * @param string $value (required, string) A copy reference returned by CopyReferenceGet.
     * @return Dropbox_Files_CopyReferenceSave_Inputs For method chaining.
     */
    public function setCopyReference($value)
    {
        return $this->set('CopyReference', $value);
    }

    /**
     * Set the value for the Path input for this CopyReferenceSave Choreo.
     *
     * @param string $value (required, string) Path in the user's Dropbox that is the destination.
     * @return Dropbox_Files_CopyReferenceSave_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }
}


/**
 * Execution object for the CopyReferenceSave Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CopyReferenceSave_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CopyReferenceSave Choreo.
     *
     * @param Temboo_Session $session The session that owns this CopyReferenceSave execution.
     * @param Dropbox_Files_CopyReferenceSave $choreo The choreography object for this execution.
     * @param Dropbox_Files_CopyReferenceSave_Inputs|array $inputs (optional) Inputs as Dropbox_Files_CopyReferenceSave_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_CopyReferenceSave_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_CopyReferenceSave $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CopyReferenceSave execution.
     *
     * @return Dropbox_Files_CopyReferenceSave_Results New results object.
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
     * Wraps results in appropriate results class for this CopyReferenceSave execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_CopyReferenceSave_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_CopyReferenceSave_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CopyReferenceSave Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CopyReferenceSave_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CopyReferenceSave Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_CopyReferenceSave_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CopyReferenceSave execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a folder at a given path.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CreateFolder extends Temboo_Choreography
{
    /**
     * Creates a folder at a given path.
     *
     * @param Temboo_Session $session The session that owns this CreateFolder Choreo.
     * @return Dropbox_Files_CreateFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/CreateFolder/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateFolder Choreo.
     *
     * @param Dropbox_Files_CreateFolder_Inputs|array $inputs (optional) Inputs as Dropbox_Files_CreateFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_CreateFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_CreateFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_CreateFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_CreateFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CreateFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_CreateFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_CreateFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_CreateFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateFolder Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_CreateFolder_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AutoRename input for this CreateFolder Choreo.
     *
     * @param bool $value (optional, boolean) If there's a conflict, have the Dropbox server try to autorename the file to avoid the conflict. The default for this field is false.
     * @return Dropbox_Files_CreateFolder_Inputs For method chaining.
     */
    public function setAutoRename($value)
    {
        return $this->set('AutoRename', $value);
    }

    /**
     * Set the value for the Path input for this CreateFolder Choreo.
     *
     * @param string $value (required, string) Path in the user's Dropbox to create.
     * @return Dropbox_Files_CreateFolder_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }
}


/**
 * Execution object for the CreateFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CreateFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateFolder Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateFolder execution.
     * @param Dropbox_Files_CreateFolder $choreo The choreography object for this execution.
     * @param Dropbox_Files_CreateFolder_Inputs|array $inputs (optional) Inputs as Dropbox_Files_CreateFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_CreateFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_CreateFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateFolder execution.
     *
     * @return Dropbox_Files_CreateFolder_Results New results object.
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
     * Wraps results in appropriate results class for this CreateFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_CreateFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_CreateFolder_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_CreateFolder_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateFolder Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_CreateFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateFolder execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes the file or folder at a given path.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Delete extends Temboo_Choreography
{
    /**
     * Deletes the file or folder at a given path.
     *
     * @param Temboo_Session $session The session that owns this Delete Choreo.
     * @return Dropbox_Files_Delete New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/Delete/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Delete Choreo.
     *
     * @param Dropbox_Files_Delete_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Delete_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Delete_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_Delete_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Delete Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Delete_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_Delete_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Delete Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Delete_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Delete Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Delete_Inputs New instance.
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
     * @return Dropbox_Files_Delete_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_Delete_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Delete Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_Delete_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Path input for this Delete Choreo.
     *
     * @param string $value (required, string) Path in the user's Dropbox to delete.
     * @return Dropbox_Files_Delete_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }
}


/**
 * Execution object for the Delete Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Delete_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Delete Choreo.
     *
     * @param Temboo_Session $session The session that owns this Delete execution.
     * @param Dropbox_Files_Delete $choreo The choreography object for this execution.
     * @param Dropbox_Files_Delete_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Delete_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Delete_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_Delete $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Delete execution.
     *
     * @return Dropbox_Files_Delete_Results New results object.
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
     * @return Dropbox_Files_Delete_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_Delete_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Delete Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Delete_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Delete Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_Delete_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Delete execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Downloads a file from a user's Dropbox.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Download extends Temboo_Choreography
{
    /**
     * Downloads a file from a user's Dropbox.
     *
     * @param Temboo_Session $session The session that owns this Download Choreo.
     * @return Dropbox_Files_Download New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/Download/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Download Choreo.
     *
     * @param Dropbox_Files_Download_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Download_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Download_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_Download_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Download Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Download_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_Download_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Download Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Download_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Download Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Download_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Download input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_Download_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_Download_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Download Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_Download_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Encode input for this Download Choreo.
     *
     * @param bool $value (optional, boolean) Binary files must be returned as Base64-encoded data. If the file you are donwloading is plain text, you can set this to false to return the raw data. Defaults to true. 
     * @return Dropbox_Files_Download_Inputs For method chaining.
     */
    public function setEncode($value)
    {
        return $this->set('Encode', $value);
    }

    /**
     * Set the value for the Path input for this Download Choreo.
     *
     * @param string $value (required, string) The path of the file to download.
     * @return Dropbox_Files_Download_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }
}


/**
 * Execution object for the Download Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Download_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Download Choreo.
     *
     * @param Temboo_Session $session The session that owns this Download execution.
     * @param Dropbox_Files_Download $choreo The choreography object for this execution.
     * @param Dropbox_Files_Download_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Download_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Download_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_Download $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Download execution.
     *
     * @return Dropbox_Files_Download_Results New results object.
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
     * Wraps results in appropriate results class for this Download execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_Download_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_Download_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Download Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Download_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Download Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_Download_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Download execution.
     *
     * @return string The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a cursor for the folder's state.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetLatestCursor extends Temboo_Choreography
{
    /**
     * Gets a cursor for the folder's state.
     *
     * @param Temboo_Session $session The session that owns this GetLatestCursor Choreo.
     * @return Dropbox_Files_GetLatestCursor New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/GetLatestCursor/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLatestCursor Choreo.
     *
     * @param Dropbox_Files_GetLatestCursor_Inputs|array $inputs (optional) Inputs as Dropbox_Files_GetLatestCursor_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_GetLatestCursor_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_GetLatestCursor_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLatestCursor Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_GetLatestCursor_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_GetLatestCursor_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLatestCursor Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetLatestCursor_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLatestCursor Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_GetLatestCursor_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLatestCursor input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_GetLatestCursor_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_GetLatestCursor_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetLatestCursor Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_GetLatestCursor_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the IncludeDeleted input for this GetLatestCursor Choreo.
     *
     * @param bool $value (optional, boolean) If true, the results will include entries for files and folders that used to exist but were deleted. The default for this field is false.
     * @return Dropbox_Files_GetLatestCursor_Inputs For method chaining.
     */
    public function setIncludeDeleted($value)
    {
        return $this->set('IncludeDeleted', $value);
    }

    /**
     * Set the value for the IncludeHasExplicitSharedMembers input for this GetLatestCursor Choreo.
     *
     * @param bool $value (optional, boolean) If true, the results will include a flag for each file indicating whether or not that file has any explicit members. The default for this field is false.
     * @return Dropbox_Files_GetLatestCursor_Inputs For method chaining.
     */
    public function setIncludeHasExplicitSharedMembers($value)
    {
        return $this->set('IncludeHasExplicitSharedMembers', $value);
    }

    /**
     * Set the value for the IncludeMediaInfo input for this GetLatestCursor Choreo.
     *
     * @param bool $value (optional, boolean) If true, FileMetadata.media_info is set for photo and video. The default for this field is false.
     * @return Dropbox_Files_GetLatestCursor_Inputs For method chaining.
     */
    public function setIncludeMediaInfo($value)
    {
        return $this->set('IncludeMediaInfo', $value);
    }

    /**
     * Set the value for the Path input for this GetLatestCursor Choreo.
     *
     * @param string $value (required, string) The path to the folder you want to see the contents of. This should be empty to list contents at the root level.
     * @return Dropbox_Files_GetLatestCursor_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Recursive input for this GetLatestCursor Choreo.
     *
     * @param bool $value (optional, boolean) If true, the list folder operation will be applied recursively to all subfolders and the response will contain contents of all subfolders. The default for this field is false.
     * @return Dropbox_Files_GetLatestCursor_Inputs For method chaining.
     */
    public function setRecursive($value)
    {
        return $this->set('Recursive', $value);
    }
}


/**
 * Execution object for the GetLatestCursor Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetLatestCursor_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLatestCursor Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLatestCursor execution.
     * @param Dropbox_Files_GetLatestCursor $choreo The choreography object for this execution.
     * @param Dropbox_Files_GetLatestCursor_Inputs|array $inputs (optional) Inputs as Dropbox_Files_GetLatestCursor_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_GetLatestCursor_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_GetLatestCursor $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLatestCursor execution.
     *
     * @return Dropbox_Files_GetLatestCursor_Results New results object.
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
     * Wraps results in appropriate results class for this GetLatestCursor execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_GetLatestCursor_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_GetLatestCursor_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLatestCursor Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetLatestCursor_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLatestCursor Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_GetLatestCursor_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Cursor" output from this GetLatestCursor execution.
     *
     * @return string (string) A cursor used to retrieve the next set of results with ListFolderContinue.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCursor()
    {
        return $this->get('Cursor');
    }
}

/**
 * Returns the metadata for a file or folder.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetMetadata extends Temboo_Choreography
{
    /**
     * Returns the metadata for a file or folder.
     *
     * @param Temboo_Session $session The session that owns this GetMetadata Choreo.
     * @return Dropbox_Files_GetMetadata New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/GetMetadata/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMetadata Choreo.
     *
     * @param Dropbox_Files_GetMetadata_Inputs|array $inputs (optional) Inputs as Dropbox_Files_GetMetadata_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_GetMetadata_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_GetMetadata_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMetadata Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_GetMetadata_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_GetMetadata_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMetadata Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetMetadata_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMetadata Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_GetMetadata_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMetadata input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_GetMetadata_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_GetMetadata_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetMetadata Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_GetMetadata_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the IncludeDeleted input for this GetMetadata Choreo.
     *
     * @param bool $value (optional, boolean) If true, DeletedMetadata will be returned for deleted file or folder, otherwise LookupError.not_found will be returned. The default for this field is false.
     * @return Dropbox_Files_GetMetadata_Inputs For method chaining.
     */
    public function setIncludeDeleted($value)
    {
        return $this->set('IncludeDeleted', $value);
    }

    /**
     * Set the value for the IncludeHasExplicitSharedMembers input for this GetMetadata Choreo.
     *
     * @param bool $value (optional, boolean) If true, the results will include a flag for each file indicating whether or not that file has any explicit members. The default for this field is false.
     * @return Dropbox_Files_GetMetadata_Inputs For method chaining.
     */
    public function setIncludeHasExplicitSharedMembers($value)
    {
        return $this->set('IncludeHasExplicitSharedMembers', $value);
    }

    /**
     * Set the value for the IncludeMediaInfo input for this GetMetadata Choreo.
     *
     * @param bool $value (optional, boolean) If true, FileMetadata.media_info is set for photo and video. The default for this field is false.
     * @return Dropbox_Files_GetMetadata_Inputs For method chaining.
     */
    public function setIncludeMediaInfo($value)
    {
        return $this->set('IncludeMediaInfo', $value);
    }

    /**
     * Set the value for the Path input for this GetMetadata Choreo.
     *
     * @param string $value (required, string) The path of a file or folder on Dropbox.
     * @return Dropbox_Files_GetMetadata_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }
}


/**
 * Execution object for the GetMetadata Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetMetadata_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMetadata Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMetadata execution.
     * @param Dropbox_Files_GetMetadata $choreo The choreography object for this execution.
     * @param Dropbox_Files_GetMetadata_Inputs|array $inputs (optional) Inputs as Dropbox_Files_GetMetadata_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_GetMetadata_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_GetMetadata $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMetadata execution.
     *
     * @return Dropbox_Files_GetMetadata_Results New results object.
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
     * Wraps results in appropriate results class for this GetMetadata execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_GetMetadata_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_GetMetadata_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMetadata Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetMetadata_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMetadata Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_GetMetadata_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetMetadata execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a thumbnail for an image.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetThumbnail extends Temboo_Choreography
{
    /**
     * Gets a thumbnail for an image.
     *
     * @param Temboo_Session $session The session that owns this GetThumbnail Choreo.
     * @return Dropbox_Files_GetThumbnail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/GetThumbnail/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetThumbnail Choreo.
     *
     * @param Dropbox_Files_GetThumbnail_Inputs|array $inputs (optional) Inputs as Dropbox_Files_GetThumbnail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_GetThumbnail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_GetThumbnail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetThumbnail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_GetThumbnail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_GetThumbnail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetThumbnail Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetThumbnail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetThumbnail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_GetThumbnail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetThumbnail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_GetThumbnail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_GetThumbnail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetThumbnail Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_GetThumbnail_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Format input for this GetThumbnail Choreo.
     *
     * @param string $value (optional, string) The format for the thumbnail image, jpeg (default) or png.
     * @return Dropbox_Files_GetThumbnail_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the Path input for this GetThumbnail Choreo.
     *
     * @param string $value (required, string) The path of the file to download.
     * @return Dropbox_Files_GetThumbnail_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Size input for this GetThumbnail Choreo.
     *
     * @param string $value (optional, string) The size for the thumbnail image. The default for this union is w64h64.
     * @return Dropbox_Files_GetThumbnail_Inputs For method chaining.
     */
    public function setSize($value)
    {
        return $this->set('Size', $value);
    }
}


/**
 * Execution object for the GetThumbnail Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetThumbnail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetThumbnail Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetThumbnail execution.
     * @param Dropbox_Files_GetThumbnail $choreo The choreography object for this execution.
     * @param Dropbox_Files_GetThumbnail_Inputs|array $inputs (optional) Inputs as Dropbox_Files_GetThumbnail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_GetThumbnail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_GetThumbnail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetThumbnail execution.
     *
     * @return Dropbox_Files_GetThumbnail_Results New results object.
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
     * Wraps results in appropriate results class for this GetThumbnail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_GetThumbnail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_GetThumbnail_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetThumbnail Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_GetThumbnail_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetThumbnail Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_GetThumbnail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetThumbnail execution.
     *
     * @return string The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Starts returning the contents of a folder.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListFolder extends Temboo_Choreography
{
    /**
     * Starts returning the contents of a folder.
     *
     * @param Temboo_Session $session The session that owns this ListFolder Choreo.
     * @return Dropbox_Files_ListFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/ListFolder/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListFolder Choreo.
     *
     * @param Dropbox_Files_ListFolder_Inputs|array $inputs (optional) Inputs as Dropbox_Files_ListFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_ListFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_ListFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_ListFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_ListFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_ListFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_ListFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_ListFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListFolder Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_ListFolder_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the IncludeDeleted input for this ListFolder Choreo.
     *
     * @param bool $value (optional, boolean) If true, the results will include entries for files and folders that used to exist but were deleted. The default for this field is false.
     * @return Dropbox_Files_ListFolder_Inputs For method chaining.
     */
    public function setIncludeDeleted($value)
    {
        return $this->set('IncludeDeleted', $value);
    }

    /**
     * Set the value for the IncludeHasExplicitSharedMembers input for this ListFolder Choreo.
     *
     * @param bool $value (optional, boolean) If true, the results will include a flag for each file indicating whether or not that file has any explicit members. The default for this field is false.
     * @return Dropbox_Files_ListFolder_Inputs For method chaining.
     */
    public function setIncludeHasExplicitSharedMembers($value)
    {
        return $this->set('IncludeHasExplicitSharedMembers', $value);
    }

    /**
     * Set the value for the IncludeMediaInfo input for this ListFolder Choreo.
     *
     * @param bool $value (optional, boolean) If true, FileMetadata.media_info is set for photo and video. The default for this field is false.
     * @return Dropbox_Files_ListFolder_Inputs For method chaining.
     */
    public function setIncludeMediaInfo($value)
    {
        return $this->set('IncludeMediaInfo', $value);
    }

    /**
     * Set the value for the Path input for this ListFolder Choreo.
     *
     * @param string $value (required, string) The path to the folder you want to see the contents of. This should be empty to list contents at the root level.
     * @return Dropbox_Files_ListFolder_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Recursive input for this ListFolder Choreo.
     *
     * @param bool $value (optional, boolean) If true, the list folder operation will be applied recursively to all subfolders and the response will contain contents of all subfolders. The default for this field is false.
     * @return Dropbox_Files_ListFolder_Inputs For method chaining.
     */
    public function setRecursive($value)
    {
        return $this->set('Recursive', $value);
    }
}


/**
 * Execution object for the ListFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListFolder Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListFolder execution.
     * @param Dropbox_Files_ListFolder $choreo The choreography object for this execution.
     * @param Dropbox_Files_ListFolder_Inputs|array $inputs (optional) Inputs as Dropbox_Files_ListFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_ListFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_ListFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListFolder execution.
     *
     * @return Dropbox_Files_ListFolder_Results New results object.
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
     * Wraps results in appropriate results class for this ListFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_ListFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_ListFolder_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListFolder Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListFolder_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListFolder Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_ListFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Cursor" output from this ListFolder execution.
     *
     * @return string (string) A cursor used to retrieve the next set of results with ListFolderContinue.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCursor()
    {
        return $this->get('Cursor');
    }
    /**
     * Retrieve the value for the "Response" output from this ListFolder execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Once a cursor has been retrieved from ListFolder, use this to paginate through all files and retrieve updates to the folder.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListFolderContinue extends Temboo_Choreography
{
    /**
     * Once a cursor has been retrieved from ListFolder, use this to paginate through all files and retrieve updates to the folder.
     *
     * @param Temboo_Session $session The session that owns this ListFolderContinue Choreo.
     * @return Dropbox_Files_ListFolderContinue New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/ListFolderContinue/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListFolderContinue Choreo.
     *
     * @param Dropbox_Files_ListFolderContinue_Inputs|array $inputs (optional) Inputs as Dropbox_Files_ListFolderContinue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_ListFolderContinue_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_ListFolderContinue_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListFolderContinue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_ListFolderContinue_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_ListFolderContinue_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListFolderContinue Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListFolderContinue_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListFolderContinue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_ListFolderContinue_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListFolderContinue input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_ListFolderContinue_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_ListFolderContinue_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListFolderContinue Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_ListFolderContinue_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Cursor input for this ListFolderContinue Choreo.
     *
     * @param string $value (required, string) A cursor used to retrieve the next set of results.
     * @return Dropbox_Files_ListFolderContinue_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }
}


/**
 * Execution object for the ListFolderContinue Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListFolderContinue_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListFolderContinue Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListFolderContinue execution.
     * @param Dropbox_Files_ListFolderContinue $choreo The choreography object for this execution.
     * @param Dropbox_Files_ListFolderContinue_Inputs|array $inputs (optional) Inputs as Dropbox_Files_ListFolderContinue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_ListFolderContinue_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_ListFolderContinue $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListFolderContinue execution.
     *
     * @return Dropbox_Files_ListFolderContinue_Results New results object.
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
     * Wraps results in appropriate results class for this ListFolderContinue execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_ListFolderContinue_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_ListFolderContinue_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListFolderContinue Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListFolderContinue_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListFolderContinue Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_ListFolderContinue_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "LatestCursor" output from this ListFolderContinue execution.
     *
     * @return string (string) The latest cursor which can be used to retrieve the next set of results.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLatestCursor()
    {
        return $this->get('LatestCursor');
    }
    /**
     * Retrieve the value for the "Response" output from this ListFolderContinue execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns revisions of a file.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListRevisions extends Temboo_Choreography
{
    /**
     * Returns revisions of a file.
     *
     * @param Temboo_Session $session The session that owns this ListRevisions Choreo.
     * @return Dropbox_Files_ListRevisions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/ListRevisions/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListRevisions Choreo.
     *
     * @param Dropbox_Files_ListRevisions_Inputs|array $inputs (optional) Inputs as Dropbox_Files_ListRevisions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_ListRevisions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_ListRevisions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListRevisions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_ListRevisions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_ListRevisions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListRevisions Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListRevisions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListRevisions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_ListRevisions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListRevisions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_ListRevisions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_ListRevisions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListRevisions Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_ListRevisions_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Limit input for this ListRevisions Choreo.
     *
     * @param int $value (optional, integer) The number of revisions to return. The default for this field is 10.
     * @return Dropbox_Files_ListRevisions_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Path input for this ListRevisions Choreo.
     *
     * @param string $value (conditional, string) The path to the file you want to see the revisions of.
     * @return Dropbox_Files_ListRevisions_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }
}


/**
 * Execution object for the ListRevisions Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListRevisions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListRevisions Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListRevisions execution.
     * @param Dropbox_Files_ListRevisions $choreo The choreography object for this execution.
     * @param Dropbox_Files_ListRevisions_Inputs|array $inputs (optional) Inputs as Dropbox_Files_ListRevisions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_ListRevisions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_ListRevisions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListRevisions execution.
     *
     * @return Dropbox_Files_ListRevisions_Results New results object.
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
     * Wraps results in appropriate results class for this ListRevisions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_ListRevisions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_ListRevisions_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListRevisions Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_ListRevisions_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListRevisions Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_ListRevisions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListRevisions execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Moves a file or folder to a different location in the user's Dropbox.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Move extends Temboo_Choreography
{
    /**
     * Moves a file or folder to a different location in the user's Dropbox.
     *
     * @param Temboo_Session $session The session that owns this Move Choreo.
     * @return Dropbox_Files_Move New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/Move/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Move Choreo.
     *
     * @param Dropbox_Files_Move_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Move_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Move_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_Move_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Move Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Move_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_Move_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Move Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Move_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Move Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Move_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Move input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_Move_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_Move_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Move Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_Move_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AllowSharedFolder input for this Move Choreo.
     *
     * @param bool $value (optional, boolean) If true, contents are copied into a shared folder, otherwise an error will be returned if the FromPath contains a shared folder. The default for this field is false.
     * @return Dropbox_Files_Move_Inputs For method chaining.
     */
    public function setAllowSharedFolder($value)
    {
        return $this->set('AllowSharedFolder', $value);
    }

    /**
     * Set the value for the AutoRename input for this Move Choreo.
     *
     * @param bool $value (optional, boolean) If there's a conflict, have the Dropbox server try to autorename the file to avoid the conflict. The default for this field is false.
     * @return Dropbox_Files_Move_Inputs For method chaining.
     */
    public function setAutoRename($value)
    {
        return $this->set('AutoRename', $value);
    }

    /**
     * Set the value for the FromPath input for this Move Choreo.
     *
     * @param string $value (required, string) Path in the user's Dropbox to be copied or moved.
     * @return Dropbox_Files_Move_Inputs For method chaining.
     */
    public function setFromPath($value)
    {
        return $this->set('FromPath', $value);
    }

    /**
     * Set the value for the ToPath input for this Move Choreo.
     *
     * @param string $value (required, string) Path in the user's Dropbox that is the destination.
     * @return Dropbox_Files_Move_Inputs For method chaining.
     */
    public function setToPath($value)
    {
        return $this->set('ToPath', $value);
    }
}


/**
 * Execution object for the Move Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Move_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Move Choreo.
     *
     * @param Temboo_Session $session The session that owns this Move execution.
     * @param Dropbox_Files_Move $choreo The choreography object for this execution.
     * @param Dropbox_Files_Move_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Move_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Move_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_Move $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Move execution.
     *
     * @return Dropbox_Files_Move_Results New results object.
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
     * Wraps results in appropriate results class for this Move execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_Move_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_Move_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Move Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Move_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Move Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_Move_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Move execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Restores a file to a specific revision.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Restore extends Temboo_Choreography
{
    /**
     * Restores a file to a specific revision.
     *
     * @param Temboo_Session $session The session that owns this Restore Choreo.
     * @return Dropbox_Files_Restore New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/Restore/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Restore Choreo.
     *
     * @param Dropbox_Files_Restore_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Restore_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Restore_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_Restore_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Restore Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Restore_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_Restore_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Restore Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Restore_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Restore Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Restore_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Restore input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_Restore_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_Restore_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Restore Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_Restore_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Path input for this Restore Choreo.
     *
     * @param string $value (conditional, string) The path to the file you want to see the revisions of.
     * @return Dropbox_Files_Restore_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Revision input for this Restore Choreo.
     *
     * @param string $value (required, string) The number of revisions to return. The default for this field is 10.
     * @return Dropbox_Files_Restore_Inputs For method chaining.
     */
    public function setRevision($value)
    {
        return $this->set('Revision', $value);
    }
}


/**
 * Execution object for the Restore Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Restore_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Restore Choreo.
     *
     * @param Temboo_Session $session The session that owns this Restore execution.
     * @param Dropbox_Files_Restore $choreo The choreography object for this execution.
     * @param Dropbox_Files_Restore_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Restore_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Restore_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_Restore $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Restore execution.
     *
     * @return Dropbox_Files_Restore_Results New results object.
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
     * Wraps results in appropriate results class for this Restore execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_Restore_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_Restore_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Restore Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Restore_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Restore Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_Restore_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Restore execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches for files and folders.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Search extends Temboo_Choreography
{
    /**
     * Searches for files and folders.
     *
     * @param Temboo_Session $session The session that owns this Search Choreo.
     * @return Dropbox_Files_Search New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/Search/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Search Choreo.
     *
     * @param Dropbox_Files_Search_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Search_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_Search_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Search Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Search_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_Search_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Search_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Search Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Search_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Search input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_Search_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_Search_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Search Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_Search_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the MaxResults input for this Search Choreo.
     *
     * @param bool $value (optional, boolean) The maximum number of search results to return. The default for this field is 100.
     * @return Dropbox_Files_Search_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the Mode input for this Search Choreo.
     *
     * @param string $value (optional, string) The search mode (filename, filename_and_content, or deleted_filename). Note that searching file content is only available for Dropbox Business accounts. The default for this union is filename.
     * @return Dropbox_Files_Search_Inputs For method chaining.
     */
    public function setMode($value)
    {
        return $this->set('Mode', $value);
    }

    /**
     * Set the value for the Path input for this Search Choreo.
     *
     * @param string $value (conditional, string) Path in the user's Dropbox to search. This should be empty to search at the root level.
     * @return Dropbox_Files_Search_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Query input for this Search Choreo.
     *
     * @param bool $value (optional, boolean) The string to search for. 
     * @return Dropbox_Files_Search_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Start input for this Search Choreo.
     *
     * @param int $value (optional, integer) The starting index within the search results (used for paging). The default for this field is 0.
     * @return Dropbox_Files_Search_Inputs For method chaining.
     */
    public function setStart($value)
    {
        return $this->set('Start', $value);
    }
}


/**
 * Execution object for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Search_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Search Choreo.
     *
     * @param Temboo_Session $session The session that owns this Search execution.
     * @param Dropbox_Files_Search $choreo The choreography object for this execution.
     * @param Dropbox_Files_Search_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Search_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_Search $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Search execution.
     *
     * @return Dropbox_Files_Search_Results New results object.
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
     * Wraps results in appropriate results class for this Search execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_Search_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_Search_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Search_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Search Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_Search_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Search execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new file with the contents provided in the request.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Upload extends Temboo_Choreography
{
    /**
     * Creates a new file with the contents provided in the request.
     *
     * @param Temboo_Session $session The session that owns this Upload Choreo.
     * @return Dropbox_Files_Upload New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/Upload/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Upload Choreo.
     *
     * @param Dropbox_Files_Upload_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Upload_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Upload_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_Upload_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Upload Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Upload_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_Upload_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Upload Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Upload_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Upload Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_Upload_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Upload input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Upload Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AutoRename input for this Upload Choreo.
     *
     * @param bool $value (optional, boolean) If there's a conflict, as determined by mode, have the Dropbox server try to autorename the file to avoid conflict. The default for this field is false.
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setAutoRename($value)
    {
        return $this->set('AutoRename', $value);
    }

    /**
     * Set the value for the ContentType input for this Upload Choreo.
     *
     * @param string $value (optional, string) The content type of the file being uploaded. Defaults to application/octet-stream.
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the FileContent input for this Upload Choreo.
     *
     * @param string $value (conditional, string) The Base64-encoded file content of the file you want to upload. Required unless uploading a file from a URL using the FileURL input. Encoding is not required when ContentType is set to "text/plain".
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setFileContent($value)
    {
        return $this->set('FileContent', $value);
    }

    /**
     * Set the value for the FileURL input for this Upload Choreo.
     *
     * @param string $value (optional, string) The public URL for file you want to upload. This can be used as an alternative to uploading Base64 encoded data.
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setFileURL($value)
    {
        return $this->set('FileURL', $value);
    }

    /**
     * Set the value for the Mode input for this Upload Choreo.
     *
     * @param string $value (optional, string) Selects what to do if the file already exists. Valid values are: add (default), overwrite, and update.
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setMode($value)
    {
        return $this->set('Mode', $value);
    }

    /**
     * Set the value for the Mute input for this Upload Choreo.
     *
     * @param bool $value (optional, boolean) If true, this tells the clients that this modification shouldn't result in a user notification. The default for this field is false.
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setMute($value)
    {
        return $this->set('Mute', $value);
    }

    /**
     * Set the value for the Path input for this Upload Choreo.
     *
     * @param string $value (required, string) Path in the user's Dropbox to save the file, including the filename.
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Revision input for this Upload Choreo.
     *
     * @param string $value (optional, string) The revision identifier. Used only when Mode is set to "update".
     * @return Dropbox_Files_Upload_Inputs For method chaining.
     */
    public function setRevision($value)
    {
        return $this->set('Revision', $value);
    }
}


/**
 * Execution object for the Upload Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Upload_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Upload Choreo.
     *
     * @param Temboo_Session $session The session that owns this Upload execution.
     * @param Dropbox_Files_Upload $choreo The choreography object for this execution.
     * @param Dropbox_Files_Upload_Inputs|array $inputs (optional) Inputs as Dropbox_Files_Upload_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_Upload_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_Upload $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Upload execution.
     *
     * @return Dropbox_Files_Upload_Results New results object.
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
     * Wraps results in appropriate results class for this Upload execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_Upload_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_Upload_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Upload Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_Upload_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Upload Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_Upload_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
}

/**
 * Appends more data to an upload session.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionAppend extends Temboo_Choreography
{
    /**
     * Appends more data to an upload session.
     *
     * @param Temboo_Session $session The session that owns this UploadSessionAppend Choreo.
     * @return Dropbox_Files_UploadSessionAppend New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/UploadSessionAppend/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UploadSessionAppend Choreo.
     *
     * @param Dropbox_Files_UploadSessionAppend_Inputs|array $inputs (optional) Inputs as Dropbox_Files_UploadSessionAppend_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_UploadSessionAppend_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_UploadSessionAppend_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UploadSessionAppend Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_UploadSessionAppend_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_UploadSessionAppend_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UploadSessionAppend Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionAppend_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UploadSessionAppend Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_UploadSessionAppend_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UploadSessionAppend input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_UploadSessionAppend_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_UploadSessionAppend_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this UploadSessionAppend Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_UploadSessionAppend_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Close input for this UploadSessionAppend Choreo.
     *
     * @param bool $value (optional, boolean) If true, the current session will be closed, at which point you won't be able to call UploadSessionAppend anymore with the current session. The default for this field is false.
     * @return Dropbox_Files_UploadSessionAppend_Inputs For method chaining.
     */
    public function setClose($value)
    {
        return $this->set('Close', $value);
    }

    /**
     * Set the value for the ContentType input for this UploadSessionAppend Choreo.
     *
     * @param string $value (optional, string) The content type of the file being uploaded. Defaults to application/octet-stream.
     * @return Dropbox_Files_UploadSessionAppend_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the FileContent input for this UploadSessionAppend Choreo.
     *
     * @param string $value (conditional, string) The next file segment to upload. Binary files should be Base64-encoded. Encoding is not required when ContentType is set to "text/plain".
     * @return Dropbox_Files_UploadSessionAppend_Inputs For method chaining.
     */
    public function setFileContent($value)
    {
        return $this->set('FileContent', $value);
    }

    /**
     * Set the value for the Offset input for this UploadSessionAppend Choreo.
     *
     * @param int $value (required, integer) The amount of data that has been uploaded so far.
     * @return Dropbox_Files_UploadSessionAppend_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the SessionID input for this UploadSessionAppend Choreo.
     *
     * @param string $value (conditional, string) The upload session ID returned from UploadSessionStart.
     * @return Dropbox_Files_UploadSessionAppend_Inputs For method chaining.
     */
    public function setSessionID($value)
    {
        return $this->set('SessionID', $value);
    }
}


/**
 * Execution object for the UploadSessionAppend Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionAppend_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UploadSessionAppend Choreo.
     *
     * @param Temboo_Session $session The session that owns this UploadSessionAppend execution.
     * @param Dropbox_Files_UploadSessionAppend $choreo The choreography object for this execution.
     * @param Dropbox_Files_UploadSessionAppend_Inputs|array $inputs (optional) Inputs as Dropbox_Files_UploadSessionAppend_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_UploadSessionAppend_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_UploadSessionAppend $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UploadSessionAppend execution.
     *
     * @return Dropbox_Files_UploadSessionAppend_Results New results object.
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
     * Wraps results in appropriate results class for this UploadSessionAppend execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_UploadSessionAppend_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_UploadSessionAppend_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UploadSessionAppend Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionAppend_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UploadSessionAppend Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_UploadSessionAppend_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
}

/**
 * Finishes an upload session and save the uploaded data to the given file path.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionFinish extends Temboo_Choreography
{
    /**
     * Finishes an upload session and save the uploaded data to the given file path.
     *
     * @param Temboo_Session $session The session that owns this UploadSessionFinish Choreo.
     * @return Dropbox_Files_UploadSessionFinish New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/UploadSessionFinish/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UploadSessionFinish Choreo.
     *
     * @param Dropbox_Files_UploadSessionFinish_Inputs|array $inputs (optional) Inputs as Dropbox_Files_UploadSessionFinish_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_UploadSessionFinish_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_UploadSessionFinish_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UploadSessionFinish Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_UploadSessionFinish_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_UploadSessionFinish_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UploadSessionFinish Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionFinish_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UploadSessionFinish Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_UploadSessionFinish_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UploadSessionFinish input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this UploadSessionFinish Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AutoRename input for this UploadSessionFinish Choreo.
     *
     * @param bool $value (optional, boolean) If there's a conflict, as determined by mode, have the Dropbox server try to autorename the file to avoid conflict. The default for this field is false.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setAutoRename($value)
    {
        return $this->set('AutoRename', $value);
    }

    /**
     * Set the value for the ContentType input for this UploadSessionFinish Choreo.
     *
     * @param string $value (optional, string) The content type of the file being uploaded. Defaults to application/octet-stream.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the FileContent input for this UploadSessionFinish Choreo.
     *
     * @param string $value (conditional, string) The remaining file content. Encoding is not required when ContentType is set to "text/plain". This can be left empty if the last file chunk was sent using UploadSessionAppend.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setFileContent($value)
    {
        return $this->set('FileContent', $value);
    }

    /**
     * Set the value for the Mode input for this UploadSessionFinish Choreo.
     *
     * @param string $value (optional, string) Selects what to do if the file already exists. Valid values are: add (default), overwrite, and update.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setMode($value)
    {
        return $this->set('Mode', $value);
    }

    /**
     * Set the value for the Mute input for this UploadSessionFinish Choreo.
     *
     * @param bool $value (optional, boolean) If true, this tells the clients that this modification shouldn't result in a user notification. The default for this field is false.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setMute($value)
    {
        return $this->set('Mute', $value);
    }

    /**
     * Set the value for the Offset input for this UploadSessionFinish Choreo.
     *
     * @param int $value (required, integer) The amount of data that has been uploaded so far.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Path input for this UploadSessionFinish Choreo.
     *
     * @param string $value (required, string) Path in the user's Dropbox to save the file.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Revision input for this UploadSessionFinish Choreo.
     *
     * @param string $value (optional, string) The revision identifier. Used only when Mode is set to "update".
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setRevision($value)
    {
        return $this->set('Revision', $value);
    }

    /**
     * Set the value for the SessionID input for this UploadSessionFinish Choreo.
     *
     * @param string $value (required, string) The upload session ID returned from UploadSessionStart.
     * @return Dropbox_Files_UploadSessionFinish_Inputs For method chaining.
     */
    public function setSessionID($value)
    {
        return $this->set('SessionID', $value);
    }
}


/**
 * Execution object for the UploadSessionFinish Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionFinish_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UploadSessionFinish Choreo.
     *
     * @param Temboo_Session $session The session that owns this UploadSessionFinish execution.
     * @param Dropbox_Files_UploadSessionFinish $choreo The choreography object for this execution.
     * @param Dropbox_Files_UploadSessionFinish_Inputs|array $inputs (optional) Inputs as Dropbox_Files_UploadSessionFinish_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_UploadSessionFinish_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_UploadSessionFinish $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UploadSessionFinish execution.
     *
     * @return Dropbox_Files_UploadSessionFinish_Results New results object.
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
     * Wraps results in appropriate results class for this UploadSessionFinish execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_UploadSessionFinish_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_UploadSessionFinish_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UploadSessionFinish Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionFinish_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UploadSessionFinish Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_UploadSessionFinish_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
}

/**
 * Allows you to upload a single file in one or more requests. This call starts a new upload session with the first chunk of data.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionStart extends Temboo_Choreography
{
    /**
     * Allows you to upload a single file in one or more requests. This call starts a new upload session with the first chunk of data.
     *
     * @param Temboo_Session $session The session that owns this UploadSessionStart Choreo.
     * @return Dropbox_Files_UploadSessionStart New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Files/UploadSessionStart/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UploadSessionStart Choreo.
     *
     * @param Dropbox_Files_UploadSessionStart_Inputs|array $inputs (optional) Inputs as Dropbox_Files_UploadSessionStart_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_UploadSessionStart_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Files_UploadSessionStart_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UploadSessionStart Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_UploadSessionStart_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Files_UploadSessionStart_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UploadSessionStart Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionStart_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UploadSessionStart Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Files_UploadSessionStart_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UploadSessionStart input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Files_UploadSessionStart_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Files_UploadSessionStart_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this UploadSessionStart Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Files_UploadSessionStart_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Close input for this UploadSessionStart Choreo.
     *
     * @param bool $value (optional, boolean) If true, the current session will be closed, at which point you won't be able to call UploadSessionAppend anymore with the current session. The default for this field is false.
     * @return Dropbox_Files_UploadSessionStart_Inputs For method chaining.
     */
    public function setClose($value)
    {
        return $this->set('Close', $value);
    }

    /**
     * Set the value for the ContentType input for this UploadSessionStart Choreo.
     *
     * @param string $value (optional, string) The content type of the file being uploaded. Defaults to application/octet-stream.
     * @return Dropbox_Files_UploadSessionStart_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the FileContent input for this UploadSessionStart Choreo.
     *
     * @param string $value (conditional, string) The first file segment to upload. Binary files should be Base64-encoded. Encoding is not required when ContentType is set to "text/plain".
     * @return Dropbox_Files_UploadSessionStart_Inputs For method chaining.
     */
    public function setFileContent($value)
    {
        return $this->set('FileContent', $value);
    }
}


/**
 * Execution object for the UploadSessionStart Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionStart_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UploadSessionStart Choreo.
     *
     * @param Temboo_Session $session The session that owns this UploadSessionStart execution.
     * @param Dropbox_Files_UploadSessionStart $choreo The choreography object for this execution.
     * @param Dropbox_Files_UploadSessionStart_Inputs|array $inputs (optional) Inputs as Dropbox_Files_UploadSessionStart_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Files_UploadSessionStart_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Files_UploadSessionStart $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UploadSessionStart execution.
     *
     * @return Dropbox_Files_UploadSessionStart_Results New results object.
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
     * Wraps results in appropriate results class for this UploadSessionStart execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Files_UploadSessionStart_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Files_UploadSessionStart_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UploadSessionStart Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Files_UploadSessionStart_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UploadSessionStart Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Files_UploadSessionStart_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "SessionID" output from this UploadSessionStart execution.
     *
     * @return string (string) The upload session ID that can be used to append to the upload or finish the upload.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getSessionID()
    {
        return $this->get('SessionID');
    }
}

/**
 * Uploads larger files to Dropbox in multiple chunks, and offers a way to resume if an upload gets interrupted.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_ChunkedUpload extends Temboo_Choreography
{
    /**
     * Uploads larger files to Dropbox in multiple chunks, and offers a way to resume if an upload gets interrupted.
     *
     * @param Temboo_Session $session The session that owns this ChunkedUpload Choreo.
     * @return Dropbox_FilesAndMetadata_ChunkedUpload New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FilesAndMetadata/ChunkedUpload/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ChunkedUpload Choreo.
     *
     * @param Dropbox_FilesAndMetadata_ChunkedUpload_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_ChunkedUpload_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_ChunkedUpload_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FilesAndMetadata_ChunkedUpload_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ChunkedUpload Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_ChunkedUpload_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FilesAndMetadata_ChunkedUpload_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ChunkedUpload Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_ChunkedUpload_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ChunkedUpload Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_ChunkedUpload_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ChunkedUpload input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FilesAndMetadata_ChunkedUpload_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FilesAndMetadata_ChunkedUpload_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ChunkedUpload Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_ChunkedUpload_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ChunkedUpload Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_ChunkedUpload_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this ChunkedUpload Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FilesAndMetadata_ChunkedUpload_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this ChunkedUpload Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FilesAndMetadata_ChunkedUpload_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the Chunk input for this ChunkedUpload Choreo.
     *
     * @param string $value (conditional, string) A Base64 encoded chunk of data from the file being uploaded. If resuming and upload, the chunk should begin at the number of bytes into the file that equals the NextOffset.
     * @return Dropbox_FilesAndMetadata_ChunkedUpload_Inputs For method chaining.
     */
    public function setChunk($value)
    {
        return $this->set('Chunk', $value);
    }

    /**
     * Set the value for the Offset input for this ChunkedUpload Choreo.
     *
     * @param string $value (conditional, string) The byte offset of this chunk, relative to the beginning of the full file. This is not required when uploading the first chunk of a file.
     * @return Dropbox_FilesAndMetadata_ChunkedUpload_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the UploadID input for this ChunkedUpload Choreo.
     *
     * @param string $value (conditional, string) The ID of the upload session returned after uploading the initial file chunk. This is not required when uploading the first chunk of a file. This value is returned in the UploadSessionID output.
     * @return Dropbox_FilesAndMetadata_ChunkedUpload_Inputs For method chaining.
     */
    public function setUploadID($value)
    {
        return $this->set('UploadID', $value);
    }

}


/**
 * Execution object for the ChunkedUpload Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_ChunkedUpload_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ChunkedUpload Choreo.
     *
     * @param Temboo_Session $session The session that owns this ChunkedUpload execution.
     * @param Dropbox_FilesAndMetadata_ChunkedUpload $choreo The choreography object for this execution.
     * @param Dropbox_FilesAndMetadata_ChunkedUpload_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_ChunkedUpload_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_ChunkedUpload_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FilesAndMetadata_ChunkedUpload $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ChunkedUpload execution.
     *
     * @return Dropbox_FilesAndMetadata_ChunkedUpload_Results New results object.
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
     * Wraps results in appropriate results class for this ChunkedUpload execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_ChunkedUpload_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FilesAndMetadata_ChunkedUpload_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ChunkedUpload Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_ChunkedUpload_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ChunkedUpload Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_ChunkedUpload_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Expires" output from this ChunkedUpload execution.
     *
     * @return string (string) The expiration time of the upload.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpires()
    {
        return $this->get('Expires');
    }
    /**
     * Retrieve the value for the "NextOffset" output from this ChunkedUpload execution.
     *
     * @return string (string) The current byte offset that the server will expect. This value can be passed to the Offset input on subsequent requests when uploading chunks repeatedly.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextOffset()
    {
        return $this->get('NextOffset');
    }
    /**
     * Retrieve the value for the "UploadSessionID" output from this ChunkedUpload execution.
     *
     * @return string (string) The upload ID returned after uploading an initial file chunk. This can be passed to the UploadID input for uploading subsequent chunks, and finally to the CommitChunkedUpload Choreo.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getUploadSessionID()
    {
        return $this->get('UploadSessionID');
    }
}

/**
 * Completes an upload initiated by the ChunkedUpload Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_CommitChunkedUpload extends Temboo_Choreography
{
    /**
     * Completes an upload initiated by the ChunkedUpload Choreo.
     *
     * @param Temboo_Session $session The session that owns this CommitChunkedUpload Choreo.
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FilesAndMetadata/CommitChunkedUpload/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CommitChunkedUpload Choreo.
     *
     * @param Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FilesAndMetadata_CommitChunkedUpload_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CommitChunkedUpload Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CommitChunkedUpload Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CommitChunkedUpload Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CommitChunkedUpload input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CommitChunkedUpload Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CommitChunkedUpload Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this CommitChunkedUpload Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this CommitChunkedUpload Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the Locale input for this CommitChunkedUpload Choreo.
     *
     * @param string $value (optional, string) The metadata returned on successful upload will have its size field translated based on the given locale.
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs For method chaining.
     */
    public function setLocale($value)
    {
        return $this->set('Locale', $value);
    }

    /**
     * Set the value for the Overwrite input for this CommitChunkedUpload Choreo.
     *
     * @param bool $value (optional, boolean) Indicates what happens when a file already exists at the specified path. If true (the default), the existing file will be overwritten. If false, the new file will be automatically renamed.
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs For method chaining.
     */
    public function setOverwrite($value)
    {
        return $this->set('Overwrite', $value);
    }

    /**
     * Set the value for the ParentRevision input for this CommitChunkedUpload Choreo.
     *
     * @param string $value (optional, string) The revision of the file you're editing. If this value matches the latest version of the file on the user's Dropbox, that file will be replaced, otherwise a new file will be created.
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs For method chaining.
     */
    public function setParentRevision($value)
    {
        return $this->set('ParentRevision', $value);
    }

    /**
     * Set the value for the Path input for this CommitChunkedUpload Choreo.
     *
     * @param string $value (required, string) The path to the file you want to write to (i.e. /RootFolder/SubFolder/MyFile.txt).
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CommitChunkedUpload Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Root input for this CommitChunkedUpload Choreo.
     *
     * @param string $value (optional, string) Defaults to "auto" which automatically determines the root folder using your app's permission level. Other options are "sandbox" (App Folder) and "dropbox" (Full Dropbox).
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs For method chaining.
     */
    public function setRoot($value)
    {
        return $this->set('Root', $value);
    }

    /**
     * Set the value for the UploadID input for this CommitChunkedUpload Choreo.
     *
     * @param string $value (required, string) Used to identify the chunked upload session you'd like to commit. This is returned from the ChunkedUpload Choreo.
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs For method chaining.
     */
    public function setUploadID($value)
    {
        return $this->set('UploadID', $value);
    }
}


/**
 * Execution object for the CommitChunkedUpload Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_CommitChunkedUpload_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CommitChunkedUpload Choreo.
     *
     * @param Temboo_Session $session The session that owns this CommitChunkedUpload execution.
     * @param Dropbox_FilesAndMetadata_CommitChunkedUpload $choreo The choreography object for this execution.
     * @param Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_CommitChunkedUpload_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FilesAndMetadata_CommitChunkedUpload $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CommitChunkedUpload execution.
     *
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Results New results object.
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
     * Wraps results in appropriate results class for this CommitChunkedUpload execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FilesAndMetadata_CommitChunkedUpload_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CommitChunkedUpload Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_CommitChunkedUpload_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CommitChunkedUpload Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_CommitChunkedUpload_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CommitChunkedUpload execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to create a copy reference (copy_ref) that you can later reference to copy files or folders to another user's Dropbox using the CopyFileOrFolder choreo. 
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_CreateCopyRef extends Temboo_Choreography
{
    /**
     * Allows you to create a copy reference (copy_ref) that you can later reference to copy files or folders to another user's Dropbox using the CopyFileOrFolder choreo. 
     *
     * @param Temboo_Session $session The session that owns this CreateCopyRef Choreo.
     * @return Dropbox_FilesAndMetadata_CreateCopyRef New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FilesAndMetadata/CreateCopyRef/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateCopyRef Choreo.
     *
     * @param Dropbox_FilesAndMetadata_CreateCopyRef_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_CreateCopyRef_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_CreateCopyRef_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FilesAndMetadata_CreateCopyRef_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateCopyRef Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_CreateCopyRef_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FilesAndMetadata_CreateCopyRef_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateCopyRef Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_CreateCopyRef_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateCopyRef Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_CreateCopyRef_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateCopyRef input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FilesAndMetadata_CreateCopyRef_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FilesAndMetadata_CreateCopyRef_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateCopyRef Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_CreateCopyRef_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateCopyRef Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_CreateCopyRef_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this CreateCopyRef Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FilesAndMetadata_CreateCopyRef_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this CreateCopyRef Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FilesAndMetadata_CreateCopyRef_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the Path input for this CreateCopyRef Choreo.
     *
     * @param string $value (required, string) The path to the file you want to make available as a copy reference, i.e.  "testfile.txt" or "/Folder/testfile.txt".
     * @return Dropbox_FilesAndMetadata_CreateCopyRef_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateCopyRef Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Dropbox_FilesAndMetadata_CreateCopyRef_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Root input for this CreateCopyRef Choreo.
     *
     * @param string $value (optional, string) Defaults to "auto" which automatically determines the root folder using your app's permission level. Other options are "sandbox" (App Folder) and "dropbox" (Full Dropbox).
     * @return Dropbox_FilesAndMetadata_CreateCopyRef_Inputs For method chaining.
     */
    public function setRoot($value)
    {
        return $this->set('Root', $value);
    }
}


/**
 * Execution object for the CreateCopyRef Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_CreateCopyRef_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateCopyRef Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateCopyRef execution.
     * @param Dropbox_FilesAndMetadata_CreateCopyRef $choreo The choreography object for this execution.
     * @param Dropbox_FilesAndMetadata_CreateCopyRef_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_CreateCopyRef_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_CreateCopyRef_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FilesAndMetadata_CreateCopyRef $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateCopyRef execution.
     *
     * @return Dropbox_FilesAndMetadata_CreateCopyRef_Results New results object.
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
     * Wraps results in appropriate results class for this CreateCopyRef execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_CreateCopyRef_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FilesAndMetadata_CreateCopyRef_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateCopyRef Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_CreateCopyRef_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateCopyRef Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_CreateCopyRef_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateCopyRef execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you keep up with changes to files and folders in a user's Dropbox.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_Delta extends Temboo_Choreography
{
    /**
     * Allows you keep up with changes to files and folders in a user's Dropbox.
     *
     * @param Temboo_Session $session The session that owns this Delta Choreo.
     * @return Dropbox_FilesAndMetadata_Delta New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FilesAndMetadata/Delta/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Delta Choreo.
     *
     * @param Dropbox_FilesAndMetadata_Delta_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_Delta_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_Delta_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FilesAndMetadata_Delta_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Delta Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_Delta_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FilesAndMetadata_Delta_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Delta Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_Delta_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Delta Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_Delta_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Delta input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FilesAndMetadata_Delta_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FilesAndMetadata_Delta_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Delta Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_Delta_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Delta Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_Delta_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this Delta Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FilesAndMetadata_Delta_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this Delta Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FilesAndMetadata_Delta_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the Cursor input for this Delta Choreo.
     *
     * @param string $value (optional, string) A string that is used to keep track of your current state. On the next call pass in this value to return delta entries that have been recorded since the cursor was returned.
     * @return Dropbox_FilesAndMetadata_Delta_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the IncludeMediaInfo input for this Delta Choreo.
     *
     * @param bool $value (optional, boolean) If set to true, each file will include a photo_info dictionary for photos and a video_info dictionary for videos with additional media info.
     * @return Dropbox_FilesAndMetadata_Delta_Inputs For method chaining.
     */
    public function setIncludeMediaInfo($value)
    {
        return $this->set('IncludeMediaInfo', $value);
    }

    /**
     * Set the value for the Locale input for this Delta Choreo.
     *
     * @param string $value (optional, string) The metadata returned will have its size field translated based on the given locale.
     * @return Dropbox_FilesAndMetadata_Delta_Inputs For method chaining.
     */
    public function setLocale($value)
    {
        return $this->set('Locale', $value);
    }

    /**
     * Set the value for the PathPrefix input for this Delta Choreo.
     *
     * @param string $value (optional, string) Filters the response to only include entries at or under the specified path.
     * @return Dropbox_FilesAndMetadata_Delta_Inputs For method chaining.
     */
    public function setPathPrefix($value)
    {
        return $this->set('PathPrefix', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Delta Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Dropbox_FilesAndMetadata_Delta_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Delta Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_Delta_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Delta Choreo.
     *
     * @param Temboo_Session $session The session that owns this Delta execution.
     * @param Dropbox_FilesAndMetadata_Delta $choreo The choreography object for this execution.
     * @param Dropbox_FilesAndMetadata_Delta_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_Delta_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_Delta_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FilesAndMetadata_Delta $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Delta execution.
     *
     * @return Dropbox_FilesAndMetadata_Delta_Results New results object.
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
     * Wraps results in appropriate results class for this Delta execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_Delta_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FilesAndMetadata_Delta_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Delta Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_Delta_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Delta Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_Delta_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Delta execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a direct download link allowing an application to stream the contents of the media.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetDownloadLink extends Temboo_Choreography
{
    /**
     * Retrieves a direct download link allowing an application to stream the contents of the media.
     *
     * @param Temboo_Session $session The session that owns this GetDownloadLink Choreo.
     * @return Dropbox_FilesAndMetadata_GetDownloadLink New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FilesAndMetadata/GetDownloadLink/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetDownloadLink Choreo.
     *
     * @param Dropbox_FilesAndMetadata_GetDownloadLink_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_GetDownloadLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_GetDownloadLink_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FilesAndMetadata_GetDownloadLink_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetDownloadLink Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_GetDownloadLink_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FilesAndMetadata_GetDownloadLink_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetDownloadLink Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetDownloadLink_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetDownloadLink Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_GetDownloadLink_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetDownloadLink input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FilesAndMetadata_GetDownloadLink_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FilesAndMetadata_GetDownloadLink_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetDownloadLink Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_GetDownloadLink_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetDownloadLink Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_GetDownloadLink_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this GetDownloadLink Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FilesAndMetadata_GetDownloadLink_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this GetDownloadLink Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FilesAndMetadata_GetDownloadLink_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the Path input for this GetDownloadLink Choreo.
     *
     * @param string $value (required, string) The path to the file or folder you want to return a download link for (i.e. /RootFolder/SubFolder/MyFile.txt).
     * @return Dropbox_FilesAndMetadata_GetDownloadLink_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetDownloadLink Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Dropbox_FilesAndMetadata_GetDownloadLink_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Root input for this GetDownloadLink Choreo.
     *
     * @param string $value (optional, string) Defaults to "auto" which automatically determines the root folder using your app's permission level. Other options are "sandbox" (App Folder) and "dropbox" (Full Dropbox).
     * @return Dropbox_FilesAndMetadata_GetDownloadLink_Inputs For method chaining.
     */
    public function setRoot($value)
    {
        return $this->set('Root', $value);
    }
}


/**
 * Execution object for the GetDownloadLink Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetDownloadLink_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetDownloadLink Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetDownloadLink execution.
     * @param Dropbox_FilesAndMetadata_GetDownloadLink $choreo The choreography object for this execution.
     * @param Dropbox_FilesAndMetadata_GetDownloadLink_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_GetDownloadLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_GetDownloadLink_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FilesAndMetadata_GetDownloadLink $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetDownloadLink execution.
     *
     * @return Dropbox_FilesAndMetadata_GetDownloadLink_Results New results object.
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
     * Wraps results in appropriate results class for this GetDownloadLink execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_GetDownloadLink_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FilesAndMetadata_GetDownloadLink_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetDownloadLink Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetDownloadLink_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetDownloadLink Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_GetDownloadLink_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "URL" output from this GetDownloadLink execution.
     *
     * @return string (string) The file's download URL.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURL()
    {
        return $this->get('URL');
    }
    /**
     * Retrieve the value for the "Response" output from this GetDownloadLink execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets the content and metadata for a specified file.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetFile extends Temboo_Choreography
{
    /**
     * Gets the content and metadata for a specified file.
     *
     * @param Temboo_Session $session The session that owns this GetFile Choreo.
     * @return Dropbox_FilesAndMetadata_GetFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FilesAndMetadata/GetFile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFile Choreo.
     *
     * @param Dropbox_FilesAndMetadata_GetFile_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_GetFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_GetFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FilesAndMetadata_GetFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_GetFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FilesAndMetadata_GetFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFile Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_GetFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FilesAndMetadata_GetFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FilesAndMetadata_GetFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetFile Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_GetFile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFile Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_GetFile_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this GetFile Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FilesAndMetadata_GetFile_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this GetFile Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FilesAndMetadata_GetFile_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the EncodeFileContent input for this GetFile Choreo.
     *
     * @param bool $value (optional, boolean) File content is returned as Base64 encoded data by default. Text files can be returned as Base64 decoded by setting this input to "false". Note that binary files should always be Base64 encoded.
     * @return Dropbox_FilesAndMetadata_GetFile_Inputs For method chaining.
     */
    public function setEncodeFileContent($value)
    {
        return $this->set('EncodeFileContent', $value);
    }

    /**
     * Set the value for the IncludeMetadata input for this GetFile Choreo.
     *
     * @param bool $value (optional, boolean) If set to true, metadata about the file is returned. Defaults to false, indicating that only the file content is returned.
     * @return Dropbox_FilesAndMetadata_GetFile_Inputs For method chaining.
     */
    public function setIncludeMetadata($value)
    {
        return $this->set('IncludeMetadata', $value);
    }

    /**
     * Set the value for the Path input for this GetFile Choreo.
     *
     * @param string $value (required, string) The path to file you want to retrieve (i.e. RootFolder/SubFolder/MyFile.txt). Only the file name is necessary when the file is at the root level.
     * @return Dropbox_FilesAndMetadata_GetFile_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Root input for this GetFile Choreo.
     *
     * @param string $value (optional, string) Defaults to "auto" which automatically determines the root folder using your app's permission level. Other options are "sandbox" (App Folder) and "dropbox" (Full Dropbox).
     * @return Dropbox_FilesAndMetadata_GetFile_Inputs For method chaining.
     */
    public function setRoot($value)
    {
        return $this->set('Root', $value);
    }
}


/**
 * Execution object for the GetFile Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFile Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFile execution.
     * @param Dropbox_FilesAndMetadata_GetFile $choreo The choreography object for this execution.
     * @param Dropbox_FilesAndMetadata_GetFile_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_GetFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_GetFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FilesAndMetadata_GetFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFile execution.
     *
     * @return Dropbox_FilesAndMetadata_GetFile_Results New results object.
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
     * Wraps results in appropriate results class for this GetFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_GetFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FilesAndMetadata_GetFile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFile Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetFile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_GetFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "FileMetadata" output from this GetFile execution.
     *
     * @return string (json) The metadata for the file. This only returned when IncludeMetadata is set to true.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getFileMetadata()
    {
        return $this->get('FileMetadata');
    }
    /**
     * Retrieve the value for the "Response" output from this GetFile execution.
     *
     * @return string (string) The response from Dropbox. The response will contain the contents of the file you are retrieving as Base64 encoded data.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves metadata for the previous revisions of a file
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetFileRevisions extends Temboo_Choreography
{
    /**
     * Retrieves metadata for the previous revisions of a file
     *
     * @param Temboo_Session $session The session that owns this GetFileRevisions Choreo.
     * @return Dropbox_FilesAndMetadata_GetFileRevisions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FilesAndMetadata/GetFileRevisions/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFileRevisions Choreo.
     *
     * @param Dropbox_FilesAndMetadata_GetFileRevisions_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_GetFileRevisions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_GetFileRevisions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FilesAndMetadata_GetFileRevisions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFileRevisions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_GetFileRevisions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FilesAndMetadata_GetFileRevisions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFileRevisions Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetFileRevisions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFileRevisions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_GetFileRevisions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFileRevisions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FilesAndMetadata_GetFileRevisions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FilesAndMetadata_GetFileRevisions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetFileRevisions Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_GetFileRevisions_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFileRevisions Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_GetFileRevisions_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this GetFileRevisions Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FilesAndMetadata_GetFileRevisions_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this GetFileRevisions Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FilesAndMetadata_GetFileRevisions_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the Path input for this GetFileRevisions Choreo.
     *
     * @param string $value (required, string) The path to the file that you want to return revisions for (i.e. /RootFolder/SubFolder/MyFile.txt).
     * @return Dropbox_FilesAndMetadata_GetFileRevisions_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetFileRevisions Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Dropbox_FilesAndMetadata_GetFileRevisions_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the RevisionLimit input for this GetFileRevisions Choreo.
     *
     * @param int $value (optional, integer) Default is 10. Max is 1,000. When listing a file, the service will not report listings containing more than the amount specified here.
     * @return Dropbox_FilesAndMetadata_GetFileRevisions_Inputs For method chaining.
     */
    public function setRevisionLimit($value)
    {
        return $this->set('RevisionLimit', $value);
    }

    /**
     * Set the value for the Root input for this GetFileRevisions Choreo.
     *
     * @param string $value (optional, string) Defaults to "auto" which automatically determines the root folder using your app's permission level. Other options are "sandbox" (App Folder) and "dropbox" (Full Dropbox).
     * @return Dropbox_FilesAndMetadata_GetFileRevisions_Inputs For method chaining.
     */
    public function setRoot($value)
    {
        return $this->set('Root', $value);
    }
}


/**
 * Execution object for the GetFileRevisions Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetFileRevisions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFileRevisions Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFileRevisions execution.
     * @param Dropbox_FilesAndMetadata_GetFileRevisions $choreo The choreography object for this execution.
     * @param Dropbox_FilesAndMetadata_GetFileRevisions_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_GetFileRevisions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_GetFileRevisions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FilesAndMetadata_GetFileRevisions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFileRevisions execution.
     *
     * @return Dropbox_FilesAndMetadata_GetFileRevisions_Results New results object.
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
     * Wraps results in appropriate results class for this GetFileRevisions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_GetFileRevisions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FilesAndMetadata_GetFileRevisions_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFileRevisions Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetFileRevisions_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFileRevisions Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_GetFileRevisions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFileRevisions execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a shareable link to files or folders.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetShareableLink extends Temboo_Choreography
{
    /**
     * Retrieves a shareable link to files or folders.
     *
     * @param Temboo_Session $session The session that owns this GetShareableLink Choreo.
     * @return Dropbox_FilesAndMetadata_GetShareableLink New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FilesAndMetadata/GetShareableLink/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetShareableLink Choreo.
     *
     * @param Dropbox_FilesAndMetadata_GetShareableLink_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_GetShareableLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_GetShareableLink_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FilesAndMetadata_GetShareableLink_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetShareableLink Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_GetShareableLink_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FilesAndMetadata_GetShareableLink_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetShareableLink Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetShareableLink_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetShareableLink Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_GetShareableLink_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetShareableLink input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FilesAndMetadata_GetShareableLink_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FilesAndMetadata_GetShareableLink_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetShareableLink Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_GetShareableLink_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetShareableLink Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_GetShareableLink_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this GetShareableLink Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FilesAndMetadata_GetShareableLink_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this GetShareableLink Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FilesAndMetadata_GetShareableLink_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the Path input for this GetShareableLink Choreo.
     *
     * @param string $value (required, string) The path to the file or folder you want to return a shareable link for (i.e. /RootFolder/SubFolder/MyFile.txt).
     * @return Dropbox_FilesAndMetadata_GetShareableLink_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetShareableLink Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Dropbox_FilesAndMetadata_GetShareableLink_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Root input for this GetShareableLink Choreo.
     *
     * @param string $value (optional, string) Defaults to "auto" which automatically determines the root folder using your app's permission level. Other options are "sandbox" (App Folder) and "dropbox" (Full Dropbox).
     * @return Dropbox_FilesAndMetadata_GetShareableLink_Inputs For method chaining.
     */
    public function setRoot($value)
    {
        return $this->set('Root', $value);
    }
}


/**
 * Execution object for the GetShareableLink Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetShareableLink_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetShareableLink Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetShareableLink execution.
     * @param Dropbox_FilesAndMetadata_GetShareableLink $choreo The choreography object for this execution.
     * @param Dropbox_FilesAndMetadata_GetShareableLink_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_GetShareableLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_GetShareableLink_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FilesAndMetadata_GetShareableLink $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetShareableLink execution.
     *
     * @return Dropbox_FilesAndMetadata_GetShareableLink_Results New results object.
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
     * Wraps results in appropriate results class for this GetShareableLink execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_GetShareableLink_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FilesAndMetadata_GetShareableLink_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetShareableLink Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetShareableLink_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetShareableLink Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_GetShareableLink_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetShareableLink execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a thumbnail for a specified image.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetThumbnail extends Temboo_Choreography
{
    /**
     * Retrieves a thumbnail for a specified image.
     *
     * @param Temboo_Session $session The session that owns this GetThumbnail Choreo.
     * @return Dropbox_FilesAndMetadata_GetThumbnail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FilesAndMetadata/GetThumbnail/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetThumbnail Choreo.
     *
     * @param Dropbox_FilesAndMetadata_GetThumbnail_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_GetThumbnail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_GetThumbnail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FilesAndMetadata_GetThumbnail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetThumbnail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_GetThumbnail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FilesAndMetadata_GetThumbnail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetThumbnail Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetThumbnail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetThumbnail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_GetThumbnail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetThumbnail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FilesAndMetadata_GetThumbnail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FilesAndMetadata_GetThumbnail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetThumbnail Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_GetThumbnail_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetThumbnail Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_GetThumbnail_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this GetThumbnail Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FilesAndMetadata_GetThumbnail_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this GetThumbnail Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FilesAndMetadata_GetThumbnail_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the ImageFormat input for this GetThumbnail Choreo.
     *
     * @param string $value (optional, string) The thumbnail format to return for the specified image. Accepted values are: jpeg (default) or png.
     * @return Dropbox_FilesAndMetadata_GetThumbnail_Inputs For method chaining.
     */
    public function setImageFormat($value)
    {
        return $this->set('ImageFormat', $value);
    }

    /**
     * Set the value for the Path input for this GetThumbnail Choreo.
     *
     * @param string $value (required, string) The path to the file that you want to generate a thumbnail for (i.e. /RootFolder/SubFolder/MyFile.txt).
     * @return Dropbox_FilesAndMetadata_GetThumbnail_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Root input for this GetThumbnail Choreo.
     *
     * @param string $value (optional, string) Defaults to "auto" which automatically determines the root folder using your app's permission level. Other options are "sandbox" (App Folder) and "dropbox" (Full Dropbox).
     * @return Dropbox_FilesAndMetadata_GetThumbnail_Inputs For method chaining.
     */
    public function setRoot($value)
    {
        return $this->set('Root', $value);
    }

    /**
     * Set the value for the Size input for this GetThumbnail Choreo.
     *
     * @param string $value (optional, string) The size of the thumbnail to generate. Accepted values are: small, medium, s, m, l, xl. See Choreo documentation for exact dimensions. Defaults to "small".
     * @return Dropbox_FilesAndMetadata_GetThumbnail_Inputs For method chaining.
     */
    public function setSize($value)
    {
        return $this->set('Size', $value);
    }
}


/**
 * Execution object for the GetThumbnail Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetThumbnail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetThumbnail Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetThumbnail execution.
     * @param Dropbox_FilesAndMetadata_GetThumbnail $choreo The choreography object for this execution.
     * @param Dropbox_FilesAndMetadata_GetThumbnail_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_GetThumbnail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_GetThumbnail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FilesAndMetadata_GetThumbnail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetThumbnail execution.
     *
     * @return Dropbox_FilesAndMetadata_GetThumbnail_Results New results object.
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
     * Wraps results in appropriate results class for this GetThumbnail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_GetThumbnail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FilesAndMetadata_GetThumbnail_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetThumbnail Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_GetThumbnail_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetThumbnail Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_GetThumbnail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetThumbnail execution.
     *
     * @return string (string) The base64 encoded image content of the thumbnail.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to quickly get a cursor for the server's state, for use with the Delta Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_LatestCursor extends Temboo_Choreography
{
    /**
     * Allows you to quickly get a cursor for the server's state, for use with the Delta Choreo.
     *
     * @param Temboo_Session $session The session that owns this LatestCursor Choreo.
     * @return Dropbox_FilesAndMetadata_LatestCursor New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FilesAndMetadata/LatestCursor/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LatestCursor Choreo.
     *
     * @param Dropbox_FilesAndMetadata_LatestCursor_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_LatestCursor_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_LatestCursor_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FilesAndMetadata_LatestCursor_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LatestCursor Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_LatestCursor_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FilesAndMetadata_LatestCursor_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LatestCursor Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_LatestCursor_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LatestCursor Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_LatestCursor_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LatestCursor input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FilesAndMetadata_LatestCursor_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FilesAndMetadata_LatestCursor_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this LatestCursor Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_LatestCursor_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this LatestCursor Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_LatestCursor_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this LatestCursor Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FilesAndMetadata_LatestCursor_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this LatestCursor Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FilesAndMetadata_LatestCursor_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the IncludeMediaInfo input for this LatestCursor Choreo.
     *
     * @param bool $value (optional, boolean) If true, the returned cursor will be encoded with include_media_info set to true for use with the Delta Choreo.
     * @return Dropbox_FilesAndMetadata_LatestCursor_Inputs For method chaining.
     */
    public function setIncludeMediaInfo($value)
    {
        return $this->set('IncludeMediaInfo', $value);
    }

    /**
     * Set the value for the PathPrefix input for this LatestCursor Choreo.
     *
     * @param string $value (optional, string) If present, the returned cursor will be encoded with a path_prefix for the specified path for use with the Delta Choreo.
     * @return Dropbox_FilesAndMetadata_LatestCursor_Inputs For method chaining.
     */
    public function setPathPrefix($value)
    {
        return $this->set('PathPrefix', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LatestCursor Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Dropbox_FilesAndMetadata_LatestCursor_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the LatestCursor Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_LatestCursor_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LatestCursor Choreo.
     *
     * @param Temboo_Session $session The session that owns this LatestCursor execution.
     * @param Dropbox_FilesAndMetadata_LatestCursor $choreo The choreography object for this execution.
     * @param Dropbox_FilesAndMetadata_LatestCursor_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_LatestCursor_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_LatestCursor_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FilesAndMetadata_LatestCursor $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LatestCursor execution.
     *
     * @return Dropbox_FilesAndMetadata_LatestCursor_Results New results object.
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
     * Wraps results in appropriate results class for this LatestCursor execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_LatestCursor_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FilesAndMetadata_LatestCursor_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LatestCursor Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_LatestCursor_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LatestCursor Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_LatestCursor_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LatestCursor execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves metadata (including folder contents) for a folder or file in Dropbox.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_ListFolderContents extends Temboo_Choreography
{
    /**
     * Retrieves metadata (including folder contents) for a folder or file in Dropbox.
     *
     * @param Temboo_Session $session The session that owns this ListFolderContents Choreo.
     * @return Dropbox_FilesAndMetadata_ListFolderContents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FilesAndMetadata/ListFolderContents/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListFolderContents Choreo.
     *
     * @param Dropbox_FilesAndMetadata_ListFolderContents_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_ListFolderContents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FilesAndMetadata_ListFolderContents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListFolderContents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FilesAndMetadata_ListFolderContents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListFolderContents Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_ListFolderContents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListFolderContents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListFolderContents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListFolderContents Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ListFolderContents Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this ListFolderContents Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this ListFolderContents Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the FileLimit input for this ListFolderContents Choreo.
     *
     * @param int $value (optional, integer) Dropbox will not return a list that exceeds this specified limit. Defaults to 10,000.
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Inputs For method chaining.
     */
    public function setFileLimit($value)
    {
        return $this->set('FileLimit', $value);
    }

    /**
     * Set the value for the Folder input for this ListFolderContents Choreo.
     *
     * @param string $value (optional, string) The path to a folder for which to retrieve metadata (i.e. /RootFolder/SubFolder). Note that a path to file can also be passed.
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Inputs For method chaining.
     */
    public function setFolder($value)
    {
        return $this->set('Folder', $value);
    }

    /**
     * Set the value for the Hash input for this ListFolderContents Choreo.
     *
     * @param string $value (optional, string) The value of a hash field from a previous request to get metadata on a folder. When provided, a 304 (not Modified) status code is returned instead of a folder listing if no changes have been made.
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Inputs For method chaining.
     */
    public function setHash($value)
    {
        return $this->set('Hash', $value);
    }

    /**
     * Set the value for the IncludeDeleted input for this ListFolderContents Choreo.
     *
     * @param bool $value (optional, boolean) Only applicable when List is set. If this parameter is set to true, contents will include the metadata of deleted children.
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Inputs For method chaining.
     */
    public function setIncludeDeleted($value)
    {
        return $this->set('IncludeDeleted', $value);
    }

    /**
     * Set the value for the List input for this ListFolderContents Choreo.
     *
     * @param bool $value (optional, boolean) If true (the default), the folder's metadata will include a contents field with a list of metadata entries for the contents of the folder.
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Inputs For method chaining.
     */
    public function setList($value)
    {
        return $this->set('List', $value);
    }

    /**
     * Set the value for the Locale input for this ListFolderContents Choreo.
     *
     * @param string $value (optional, string) If your app supports any language other than English, insert the appropriate IETF language tag, and the metadata returned will have its size field translated based on the given locale (e.g., pt-BR).
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Inputs For method chaining.
     */
    public function setLocale($value)
    {
        return $this->set('Locale', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListFolderContents Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Revision input for this ListFolderContents Choreo.
     *
     * @param string $value (optional, string) When including a particular revision number, only the metadata for that revision will be returned.
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Inputs For method chaining.
     */
    public function setRevision($value)
    {
        return $this->set('Revision', $value);
    }

    /**
     * Set the value for the Root input for this ListFolderContents Choreo.
     *
     * @param string $value (optional, string) Defaults to "auto" which automatically determines the root folder using your app's permission level. Other options are "sandbox" (App Folder) and "dropbox" (Full Dropbox).
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Inputs For method chaining.
     */
    public function setRoot($value)
    {
        return $this->set('Root', $value);
    }
}


/**
 * Execution object for the ListFolderContents Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_ListFolderContents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListFolderContents Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListFolderContents execution.
     * @param Dropbox_FilesAndMetadata_ListFolderContents $choreo The choreography object for this execution.
     * @param Dropbox_FilesAndMetadata_ListFolderContents_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_ListFolderContents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FilesAndMetadata_ListFolderContents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListFolderContents execution.
     *
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Results New results object.
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
     * Wraps results in appropriate results class for this ListFolderContents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FilesAndMetadata_ListFolderContents_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListFolderContents Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_ListFolderContents_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListFolderContents Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_ListFolderContents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ResponseStatusCode" output from this ListFolderContents execution.
     *
     * @return int (integer) The response status code returned from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponseStatusCode()
    {
        return $this->get('ResponseStatusCode');
    }
    /**
     * Retrieve the value for the "Response" output from this ListFolderContents execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Used in conjunction with the Delta Choreo, this allows you to perform a long-poll request to wait for changes on an account.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_LongPollDelta extends Temboo_Choreography
{
    /**
     * Used in conjunction with the Delta Choreo, this allows you to perform a long-poll request to wait for changes on an account.
     *
     * @param Temboo_Session $session The session that owns this LongPollDelta Choreo.
     * @return Dropbox_FilesAndMetadata_LongPollDelta New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FilesAndMetadata/LongPollDelta/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LongPollDelta Choreo.
     *
     * @param Dropbox_FilesAndMetadata_LongPollDelta_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_LongPollDelta_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_LongPollDelta_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FilesAndMetadata_LongPollDelta_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LongPollDelta Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_LongPollDelta_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FilesAndMetadata_LongPollDelta_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LongPollDelta Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_LongPollDelta_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LongPollDelta Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_LongPollDelta_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LongPollDelta input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FilesAndMetadata_LongPollDelta_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FilesAndMetadata_LongPollDelta_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Cursor input for this LongPollDelta Choreo.
     *
     * @param string $value (required, string) A delta cursor as returned from a call to the Delta Choreo.
     * @return Dropbox_FilesAndMetadata_LongPollDelta_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LongPollDelta Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Dropbox_FilesAndMetadata_LongPollDelta_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Timeout input for this LongPollDelta Choreo.
     *
     * @param string $value (optional, string) An integer indicating the amount of time, in seconds, to wait for a response. The default value is 30 seconds, which is also the minimum allowed value. The maximum is 480 seconds.
     * @return Dropbox_FilesAndMetadata_LongPollDelta_Inputs For method chaining.
     */
    public function setTimeout($value)
    {
        return $this->set('Timeout', $value);
    }
}


/**
 * Execution object for the LongPollDelta Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_LongPollDelta_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LongPollDelta Choreo.
     *
     * @param Temboo_Session $session The session that owns this LongPollDelta execution.
     * @param Dropbox_FilesAndMetadata_LongPollDelta $choreo The choreography object for this execution.
     * @param Dropbox_FilesAndMetadata_LongPollDelta_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_LongPollDelta_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_LongPollDelta_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FilesAndMetadata_LongPollDelta $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LongPollDelta execution.
     *
     * @return Dropbox_FilesAndMetadata_LongPollDelta_Results New results object.
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
     * Wraps results in appropriate results class for this LongPollDelta execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_LongPollDelta_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FilesAndMetadata_LongPollDelta_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LongPollDelta Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_LongPollDelta_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LongPollDelta Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_LongPollDelta_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LongPollDelta execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Restores a specified file to a previous revision.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_RestoreFileToRevision extends Temboo_Choreography
{
    /**
     * Restores a specified file to a previous revision.
     *
     * @param Temboo_Session $session The session that owns this RestoreFileToRevision Choreo.
     * @return Dropbox_FilesAndMetadata_RestoreFileToRevision New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FilesAndMetadata/RestoreFileToRevision/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RestoreFileToRevision Choreo.
     *
     * @param Dropbox_FilesAndMetadata_RestoreFileToRevision_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_RestoreFileToRevision_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_RestoreFileToRevision_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FilesAndMetadata_RestoreFileToRevision_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RestoreFileToRevision Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_RestoreFileToRevision_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FilesAndMetadata_RestoreFileToRevision_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RestoreFileToRevision Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_RestoreFileToRevision_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RestoreFileToRevision Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_RestoreFileToRevision_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RestoreFileToRevision input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FilesAndMetadata_RestoreFileToRevision_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FilesAndMetadata_RestoreFileToRevision_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RestoreFileToRevision Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_RestoreFileToRevision_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RestoreFileToRevision Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_RestoreFileToRevision_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this RestoreFileToRevision Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FilesAndMetadata_RestoreFileToRevision_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this RestoreFileToRevision Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FilesAndMetadata_RestoreFileToRevision_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the Path input for this RestoreFileToRevision Choreo.
     *
     * @param string $value (required, string) The path to the file that you want to return revisions for (i.e. /RootFolder/SubFolder/MyFile.txt).
     * @return Dropbox_FilesAndMetadata_RestoreFileToRevision_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RestoreFileToRevision Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Dropbox_FilesAndMetadata_RestoreFileToRevision_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Revision input for this RestoreFileToRevision Choreo.
     *
     * @param string $value (required, string) The revision of the file to restore. The revision ID can be retrieved by running the GetFileRevision Choreo.
     * @return Dropbox_FilesAndMetadata_RestoreFileToRevision_Inputs For method chaining.
     */
    public function setRevision($value)
    {
        return $this->set('Revision', $value);
    }

    /**
     * Set the value for the Root input for this RestoreFileToRevision Choreo.
     *
     * @param string $value (optional, string) Defaults to "auto" which automatically determines the root folder using your app's permission level. Other options are "sandbox" (App Folder) and "dropbox" (Full Dropbox).
     * @return Dropbox_FilesAndMetadata_RestoreFileToRevision_Inputs For method chaining.
     */
    public function setRoot($value)
    {
        return $this->set('Root', $value);
    }
}


/**
 * Execution object for the RestoreFileToRevision Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_RestoreFileToRevision_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RestoreFileToRevision Choreo.
     *
     * @param Temboo_Session $session The session that owns this RestoreFileToRevision execution.
     * @param Dropbox_FilesAndMetadata_RestoreFileToRevision $choreo The choreography object for this execution.
     * @param Dropbox_FilesAndMetadata_RestoreFileToRevision_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_RestoreFileToRevision_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_RestoreFileToRevision_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FilesAndMetadata_RestoreFileToRevision $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RestoreFileToRevision execution.
     *
     * @return Dropbox_FilesAndMetadata_RestoreFileToRevision_Results New results object.
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
     * Wraps results in appropriate results class for this RestoreFileToRevision execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_RestoreFileToRevision_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FilesAndMetadata_RestoreFileToRevision_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RestoreFileToRevision Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_RestoreFileToRevision_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RestoreFileToRevision Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_RestoreFileToRevision_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RestoreFileToRevision execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to search Dropbox for files or folders by a keyword search.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_SearchFilesAndFolders extends Temboo_Choreography
{
    /**
     * Allows you to search Dropbox for files or folders by a keyword search.
     *
     * @param Temboo_Session $session The session that owns this SearchFilesAndFolders Choreo.
     * @return Dropbox_FilesAndMetadata_SearchFilesAndFolders New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FilesAndMetadata/SearchFilesAndFolders/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchFilesAndFolders Choreo.
     *
     * @param Dropbox_FilesAndMetadata_SearchFilesAndFolders_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_SearchFilesAndFolders_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_SearchFilesAndFolders_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FilesAndMetadata_SearchFilesAndFolders_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchFilesAndFolders Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_SearchFilesAndFolders_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FilesAndMetadata_SearchFilesAndFolders_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchFilesAndFolders Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_SearchFilesAndFolders_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchFilesAndFolders Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_SearchFilesAndFolders_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchFilesAndFolders input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FilesAndMetadata_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FilesAndMetadata_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this SearchFilesAndFolders Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this SearchFilesAndFolders Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this SearchFilesAndFolders Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FilesAndMetadata_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this SearchFilesAndFolders Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FilesAndMetadata_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the FileLimit input for this SearchFilesAndFolders Choreo.
     *
     * @param int $value (optional, integer) Dropbox will not return a list that exceeds this specified limit. Defaults to 10,000.
     * @return Dropbox_FilesAndMetadata_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function setFileLimit($value)
    {
        return $this->set('FileLimit', $value);
    }

    /**
     * Set the value for the Path input for this SearchFilesAndFolders Choreo.
     *
     * @param string $value (optional, string) The path to the folder you want to search from (i.e. /RootFolder/SubFolder). Leave blank to search ALL.
     * @return Dropbox_FilesAndMetadata_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Query input for this SearchFilesAndFolders Choreo.
     *
     * @param string $value (required, string) The search string. Must be at least three characters long.
     * @return Dropbox_FilesAndMetadata_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchFilesAndFolders Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Dropbox_FilesAndMetadata_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Root input for this SearchFilesAndFolders Choreo.
     *
     * @param string $value (optional, string) Defaults to "auto" which automatically determines the root folder using your app's permission level. Other options are "sandbox" (App Folder) and "dropbox" (Full Dropbox).
     * @return Dropbox_FilesAndMetadata_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function setRoot($value)
    {
        return $this->set('Root', $value);
    }
}


/**
 * Execution object for the SearchFilesAndFolders Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_SearchFilesAndFolders_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchFilesAndFolders Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchFilesAndFolders execution.
     * @param Dropbox_FilesAndMetadata_SearchFilesAndFolders $choreo The choreography object for this execution.
     * @param Dropbox_FilesAndMetadata_SearchFilesAndFolders_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_SearchFilesAndFolders_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_SearchFilesAndFolders_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FilesAndMetadata_SearchFilesAndFolders $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchFilesAndFolders execution.
     *
     * @return Dropbox_FilesAndMetadata_SearchFilesAndFolders_Results New results object.
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
     * Wraps results in appropriate results class for this SearchFilesAndFolders execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_SearchFilesAndFolders_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FilesAndMetadata_SearchFilesAndFolders_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchFilesAndFolders Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_SearchFilesAndFolders_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchFilesAndFolders Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_SearchFilesAndFolders_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchFilesAndFolders execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Uploads a file to your Dropbox account.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_UploadFile extends Temboo_Choreography
{
    /**
     * Uploads a file to your Dropbox account.
     *
     * @param Temboo_Session $session The session that owns this UploadFile Choreo.
     * @return Dropbox_FilesAndMetadata_UploadFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/FilesAndMetadata/UploadFile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UploadFile Choreo.
     *
     * @param Dropbox_FilesAndMetadata_UploadFile_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_UploadFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_UploadFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_FilesAndMetadata_UploadFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UploadFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_UploadFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_FilesAndMetadata_UploadFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UploadFile Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_UploadFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UploadFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_FilesAndMetadata_UploadFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UploadFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_FilesAndMetadata_UploadFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_FilesAndMetadata_UploadFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FileContents input for this UploadFile Choreo.
     *
     * @param string $value (conditional, string) The Base64-encoded contents of the file you want to upload. Required UNLESS uploading a file from a URL using the FileContentsFromURL input variable.
     * @return Dropbox_FilesAndMetadata_UploadFile_Inputs For method chaining.
     */
    public function setFileContents($value)
    {
        return $this->set('FileContents', $value);
    }

    /**
     * Set the value for the AccessToken input for this UploadFile Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_UploadFile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this UploadFile Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_FilesAndMetadata_UploadFile_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this UploadFile Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_FilesAndMetadata_UploadFile_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this UploadFile Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_FilesAndMetadata_UploadFile_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the FileContentsFromURL input for this UploadFile Choreo.
     *
     * @param string $value (conditional, string) URL for file you want to upload. Alternative to uploading Base64Encoded data. If specifiying URL, leave FileContents blank. Valid URLs: http(s) requests only.
     * @return Dropbox_FilesAndMetadata_UploadFile_Inputs For method chaining.
     */
    public function setFileContentsFromURL($value)
    {
        return $this->set('FileContentsFromURL', $value);
    }

    /**
     * Set the value for the FileName input for this UploadFile Choreo.
     *
     * @param string $value (required, string) The name of the file you are uploading to Dropbox.
     * @return Dropbox_FilesAndMetadata_UploadFile_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the Folder input for this UploadFile Choreo.
     *
     * @param string $value (optional, string) The name of the folder that that you want to upload a file to. A path to a sub-folder is also valid (i.e. /RootFolder/SubFolder).
     * @return Dropbox_FilesAndMetadata_UploadFile_Inputs For method chaining.
     */
    public function setFolder($value)
    {
        return $this->set('Folder', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UploadFile Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Dropbox_FilesAndMetadata_UploadFile_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Root input for this UploadFile Choreo.
     *
     * @param string $value (optional, string) Defaults to "auto" which automatically determines the root folder using your app's permission level. Other options are "sandbox" (App Folder) and "dropbox" (Full Dropbox).
     * @return Dropbox_FilesAndMetadata_UploadFile_Inputs For method chaining.
     */
    public function setRoot($value)
    {
        return $this->set('Root', $value);
    }

}


/**
 * Execution object for the UploadFile Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_UploadFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UploadFile Choreo.
     *
     * @param Temboo_Session $session The session that owns this UploadFile execution.
     * @param Dropbox_FilesAndMetadata_UploadFile $choreo The choreography object for this execution.
     * @param Dropbox_FilesAndMetadata_UploadFile_Inputs|array $inputs (optional) Inputs as Dropbox_FilesAndMetadata_UploadFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_FilesAndMetadata_UploadFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_FilesAndMetadata_UploadFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UploadFile execution.
     *
     * @return Dropbox_FilesAndMetadata_UploadFile_Results New results object.
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
     * Wraps results in appropriate results class for this UploadFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_UploadFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_FilesAndMetadata_UploadFile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UploadFile Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_FilesAndMetadata_UploadFile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UploadFile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_FilesAndMetadata_UploadFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UploadFile execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Completes the OAuth process by retrieving a Dropbox access token and access token secret for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a Dropbox access token and access token secret for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return Dropbox_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param Dropbox_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Dropbox_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs New instance.
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
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the callback data after the user authorizes.
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the DropboxAppKey input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The APP Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setDropboxAppKey($value)
    {
        return $this->set('DropboxAppKey', $value);
    }

    /**
     * Set the value for the DropboxAppSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setDropboxAppSecret($value)
    {
        return $this->set('DropboxAppSecret', $value);
    }

    /**
     * Set the value for the OAuthTokenSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The OAuthTokenSecret returned by the InitializeOAuth Choreo.
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setOAuthTokenSecret($value)
    {
        return $this->set('OAuthTokenSecret', $value);
    }

    /**
     * Set the value for the SuppressErrors input for this FinalizeOAuth Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, errors received during the OAuth redirect process will be suppressed and returned in the ErrorMessage output.
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setSuppressErrors($value)
    {
        return $this->set('SuppressErrors', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return Dropbox_OAuth_FinalizeOAuth_Inputs For method chaining.
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
 * @subpackage Dropbox
 */
class Dropbox_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param Dropbox_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param Dropbox_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Dropbox_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return Dropbox_OAuth_FinalizeOAuth_Results New results object.
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
     * @return Dropbox_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_OAuth_FinalizeOAuth_Results New instance.
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
     * Retrieve the value for the "UserID" output from this FinalizeOAuth execution.
     *
     * @return int (integer) The Dropbox user ID associated with the access token and secret returned.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getUserID()
    {
        return $this->get('UserID');
    }
}

/**
 * Creates an OAuth 2.0 access token from the supplied OAuth 1.0 access token.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_FromOAuth1 extends Temboo_Choreography
{
    /**
     * Creates an OAuth 2.0 access token from the supplied OAuth 1.0 access token.
     *
     * @param Temboo_Session $session The session that owns this FromOAuth1 Choreo.
     * @return Dropbox_OAuth_FromOAuth1 New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/OAuth/FromOAuth1/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FromOAuth1 Choreo.
     *
     * @param Dropbox_OAuth_FromOAuth1_Inputs|array $inputs (optional) Inputs as Dropbox_OAuth_FromOAuth1_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_OAuth_FromOAuth1_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_OAuth_FromOAuth1_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FromOAuth1 Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_OAuth_FromOAuth1_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_OAuth_FromOAuth1_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FromOAuth1 Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_FromOAuth1_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FromOAuth1 Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_OAuth_FromOAuth1_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FromOAuth1 input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_OAuth_FromOAuth1_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_OAuth_FromOAuth1_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this FromOAuth1 Choreo.
     *
     * @param string $value (required, string) An OAuth 1.0 access token for a specific Dropbox user.
     * @return Dropbox_OAuth_FromOAuth1_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this FromOAuth1 Choreo.
     *
     * @param string $value (required, string) An OAuth 1.0 access token secret for a specific Dropbox user.
     * @return Dropbox_OAuth_FromOAuth1_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AppKey input for this FromOAuth1 Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox after registering your application.
     * @return Dropbox_OAuth_FromOAuth1_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this FromOAuth1 Choreo.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox after registering your application.
     * @return Dropbox_OAuth_FromOAuth1_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }
}


/**
 * Execution object for the FromOAuth1 Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_FromOAuth1_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FromOAuth1 Choreo.
     *
     * @param Temboo_Session $session The session that owns this FromOAuth1 execution.
     * @param Dropbox_OAuth_FromOAuth1 $choreo The choreography object for this execution.
     * @param Dropbox_OAuth_FromOAuth1_Inputs|array $inputs (optional) Inputs as Dropbox_OAuth_FromOAuth1_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_OAuth_FromOAuth1_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_OAuth_FromOAuth1 $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FromOAuth1 execution.
     *
     * @return Dropbox_OAuth_FromOAuth1_Results New results object.
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
     * Wraps results in appropriate results class for this FromOAuth1 execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_OAuth_FromOAuth1_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_OAuth_FromOAuth1_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FromOAuth1 Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_FromOAuth1_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FromOAuth1 Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_OAuth_FromOAuth1_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "OAuth2AccessToken" output from this FromOAuth1 execution.
     *
     * @return string (string) The OAuth 2.0 access for a specific Dropbox user.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getOAuth2AccessToken()
    {
        return $this->get('OAuth2AccessToken');
    }
}

/**
 * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return Dropbox_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param Dropbox_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Dropbox_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_OAuth_InitializeOAuth_Inputs New instance.
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
     * @return Dropbox_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Dropbox_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Dropbox_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Dropbox_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the DropboxAppKey input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setDropboxAppKey($value)
    {
        return $this->set('DropboxAppKey', $value);
    }

    /**
     * Set the value for the DropboxAppSecret input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The AppSecret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setDropboxAppSecret($value)
    {
        return $this->set('DropboxAppSecret', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant access to your application. This should include the "https://" or "http://" prefix and be a fully qualified URL.
     * @return Dropbox_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setForwardingURL($value)
    {
        return $this->set('ForwardingURL', $value);
    }
}


/**
 * Execution object for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param Dropbox_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param Dropbox_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Dropbox_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return Dropbox_OAuth_InitializeOAuth_Results New results object.
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
     * @return Dropbox_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_OAuth_InitializeOAuth_Results New instance.
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
 * Disables the access token used to authenticate the call.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_Revoke extends Temboo_Choreography
{
    /**
     * Disables the access token used to authenticate the call.
     *
     * @param Temboo_Session $session The session that owns this Revoke Choreo.
     * @return Dropbox_OAuth_Revoke New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/OAuth/Revoke/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Revoke Choreo.
     *
     * @param Dropbox_OAuth_Revoke_Inputs|array $inputs (optional) Inputs as Dropbox_OAuth_Revoke_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_OAuth_Revoke_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_OAuth_Revoke_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Revoke Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_OAuth_Revoke_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_OAuth_Revoke_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Revoke Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_Revoke_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Revoke Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_OAuth_Revoke_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Revoke input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_OAuth_Revoke_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_OAuth_Revoke_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Revoke Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_OAuth_Revoke_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the Revoke Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_Revoke_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Revoke Choreo.
     *
     * @param Temboo_Session $session The session that owns this Revoke execution.
     * @param Dropbox_OAuth_Revoke $choreo The choreography object for this execution.
     * @param Dropbox_OAuth_Revoke_Inputs|array $inputs (optional) Inputs as Dropbox_OAuth_Revoke_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_OAuth_Revoke_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_OAuth_Revoke $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Revoke execution.
     *
     * @return Dropbox_OAuth_Revoke_Results New results object.
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
     * Wraps results in appropriate results class for this Revoke execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_OAuth_Revoke_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_OAuth_Revoke_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Revoke Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_OAuth_Revoke_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Revoke Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_OAuth_Revoke_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Revoke execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a shared link.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Sharing_CreateSharedLink extends Temboo_Choreography
{
    /**
     * Creates a shared link.
     *
     * @param Temboo_Session $session The session that owns this CreateSharedLink Choreo.
     * @return Dropbox_Sharing_CreateSharedLink New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Sharing/CreateSharedLink/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateSharedLink Choreo.
     *
     * @param Dropbox_Sharing_CreateSharedLink_Inputs|array $inputs (optional) Inputs as Dropbox_Sharing_CreateSharedLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Sharing_CreateSharedLink_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Sharing_CreateSharedLink_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateSharedLink Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Sharing_CreateSharedLink_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Sharing_CreateSharedLink_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateSharedLink Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Sharing_CreateSharedLink_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateSharedLink Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Sharing_CreateSharedLink_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateSharedLink input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Sharing_CreateSharedLink_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Sharing_CreateSharedLink_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateSharedLink Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Sharing_CreateSharedLink_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Path input for this CreateSharedLink Choreo.
     *
     * @param string $value (required, string) The path to share.
     * @return Dropbox_Sharing_CreateSharedLink_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the ShortURL input for this CreateSharedLink Choreo.
     *
     * @param bool $value (optional, boolean) Whether to return a shortened URL. The default for this field is false.
     * @return Dropbox_Sharing_CreateSharedLink_Inputs For method chaining.
     */
    public function setShortURL($value)
    {
        return $this->set('ShortURL', $value);
    }
}


/**
 * Execution object for the CreateSharedLink Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Sharing_CreateSharedLink_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateSharedLink Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateSharedLink execution.
     * @param Dropbox_Sharing_CreateSharedLink $choreo The choreography object for this execution.
     * @param Dropbox_Sharing_CreateSharedLink_Inputs|array $inputs (optional) Inputs as Dropbox_Sharing_CreateSharedLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Sharing_CreateSharedLink_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Sharing_CreateSharedLink $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateSharedLink execution.
     *
     * @return Dropbox_Sharing_CreateSharedLink_Results New results object.
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
     * Wraps results in appropriate results class for this CreateSharedLink execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Sharing_CreateSharedLink_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Sharing_CreateSharedLink_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateSharedLink Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Sharing_CreateSharedLink_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateSharedLink Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Sharing_CreateSharedLink_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateSharedLink execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Revokes a shared link.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Sharing_RevokeSharedLink extends Temboo_Choreography
{
    /**
     * Revokes a shared link.
     *
     * @param Temboo_Session $session The session that owns this RevokeSharedLink Choreo.
     * @return Dropbox_Sharing_RevokeSharedLink New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Sharing/RevokeSharedLink/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RevokeSharedLink Choreo.
     *
     * @param Dropbox_Sharing_RevokeSharedLink_Inputs|array $inputs (optional) Inputs as Dropbox_Sharing_RevokeSharedLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Sharing_RevokeSharedLink_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Sharing_RevokeSharedLink_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RevokeSharedLink Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Sharing_RevokeSharedLink_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Sharing_RevokeSharedLink_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RevokeSharedLink Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Sharing_RevokeSharedLink_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RevokeSharedLink Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Sharing_RevokeSharedLink_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RevokeSharedLink input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Sharing_RevokeSharedLink_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Sharing_RevokeSharedLink_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RevokeSharedLink Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Sharing_RevokeSharedLink_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the URL input for this RevokeSharedLink Choreo.
     *
     * @param string $value (required, string) The URL of the shared link.
     * @return Dropbox_Sharing_RevokeSharedLink_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the RevokeSharedLink Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Sharing_RevokeSharedLink_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RevokeSharedLink Choreo.
     *
     * @param Temboo_Session $session The session that owns this RevokeSharedLink execution.
     * @param Dropbox_Sharing_RevokeSharedLink $choreo The choreography object for this execution.
     * @param Dropbox_Sharing_RevokeSharedLink_Inputs|array $inputs (optional) Inputs as Dropbox_Sharing_RevokeSharedLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Sharing_RevokeSharedLink_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Sharing_RevokeSharedLink $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RevokeSharedLink execution.
     *
     * @return Dropbox_Sharing_RevokeSharedLink_Results New results object.
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
     * Wraps results in appropriate results class for this RevokeSharedLink execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Sharing_RevokeSharedLink_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Sharing_RevokeSharedLink_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RevokeSharedLink Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Sharing_RevokeSharedLink_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RevokeSharedLink Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Sharing_RevokeSharedLink_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RevokeSharedLink execution.
     *
     * @return string (json) The response from Dropbox.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about a user's account.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Users_GetAccount extends Temboo_Choreography
{
    /**
     * Retrieves information about a user's account.
     *
     * @param Temboo_Session $session The session that owns this GetAccount Choreo.
     * @return Dropbox_Users_GetAccount New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Users/GetAccount/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetAccount Choreo.
     *
     * @param Dropbox_Users_GetAccount_Inputs|array $inputs (optional) Inputs as Dropbox_Users_GetAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Users_GetAccount_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Users_GetAccount_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Users_GetAccount_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Users_GetAccount_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAccount Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Users_GetAccount_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Users_GetAccount_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAccount input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Users_GetAccount_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Users_GetAccount_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetAccount Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Users_GetAccount_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccountID input for this GetAccount Choreo.
     *
     * @param string $value (required, string) A user's account identifier.
     * @return Dropbox_Users_GetAccount_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }
}


/**
 * Execution object for the GetAccount Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Users_GetAccount_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAccount Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetAccount execution.
     * @param Dropbox_Users_GetAccount $choreo The choreography object for this execution.
     * @param Dropbox_Users_GetAccount_Inputs|array $inputs (optional) Inputs as Dropbox_Users_GetAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Users_GetAccount_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Users_GetAccount $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAccount execution.
     *
     * @return Dropbox_Users_GetAccount_Results New results object.
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
     * Wraps results in appropriate results class for this GetAccount execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Users_GetAccount_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Users_GetAccount_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetAccount Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Users_GetAccount_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetAccount Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Users_GetAccount_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
}

/**
 * Retrieves information about the current user's account.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Users_GetCurrentAccount extends Temboo_Choreography
{
    /**
     * Retrieves information about the current user's account.
     *
     * @param Temboo_Session $session The session that owns this GetCurrentAccount Choreo.
     * @return Dropbox_Users_GetCurrentAccount New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Users/GetCurrentAccount/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCurrentAccount Choreo.
     *
     * @param Dropbox_Users_GetCurrentAccount_Inputs|array $inputs (optional) Inputs as Dropbox_Users_GetCurrentAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Users_GetCurrentAccount_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Users_GetCurrentAccount_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCurrentAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Users_GetCurrentAccount_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Users_GetCurrentAccount_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCurrentAccount Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Users_GetCurrentAccount_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCurrentAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Users_GetCurrentAccount_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCurrentAccount input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Users_GetCurrentAccount_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Users_GetCurrentAccount_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetCurrentAccount Choreo.
     *
     * @param string $value (required, string) The access token for a specific Dropbox user.
     * @return Dropbox_Users_GetCurrentAccount_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the GetCurrentAccount Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Users_GetCurrentAccount_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCurrentAccount Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCurrentAccount execution.
     * @param Dropbox_Users_GetCurrentAccount $choreo The choreography object for this execution.
     * @param Dropbox_Users_GetCurrentAccount_Inputs|array $inputs (optional) Inputs as Dropbox_Users_GetCurrentAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Users_GetCurrentAccount_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Users_GetCurrentAccount $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCurrentAccount execution.
     *
     * @return Dropbox_Users_GetCurrentAccount_Results New results object.
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
     * Wraps results in appropriate results class for this GetCurrentAccount execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Users_GetCurrentAccount_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Users_GetCurrentAccount_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCurrentAccount Choreo.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Users_GetCurrentAccount_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCurrentAccount Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Users_GetCurrentAccount_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
}

?>