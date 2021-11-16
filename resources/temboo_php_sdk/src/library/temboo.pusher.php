<?php

/**
 * Temboo PHP SDK Pusher classes
 *
 * Execute Choreographies from the Temboo Pusher bundle.
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
 * @subpackage Pusher
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves information for a specific channel.
 *
 * @package Temboo
 * @subpackage Pusher
 */
class Pusher_Channels_GetChannel extends Temboo_Choreography
{
    /**
     * Retrieves information for a specific channel.
     *
     * @param Temboo_Session $session The session that owns this GetChannel Choreo.
     * @return Pusher_Channels_GetChannel New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Pusher/Channels/GetChannel/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetChannel Choreo.
     *
     * @param Pusher_Channels_GetChannel_Inputs|array $inputs (optional) Inputs as Pusher_Channels_GetChannel_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Pusher_Channels_GetChannel_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Pusher_Channels_GetChannel_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetChannel Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Pusher_Channels_GetChannel_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Pusher_Channels_GetChannel_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetChannel Choreo.
 *
 * @package Temboo
 * @subpackage Pusher
 */
class Pusher_Channels_GetChannel_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetChannel Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Pusher_Channels_GetChannel_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetChannel input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Pusher_Channels_GetChannel_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Pusher_Channels_GetChannel_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetChannel Choreo.
     *
     * @param string $value (required, string) The application ID provided by Pusher.
     * @return Pusher_Channels_GetChannel_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this GetChannel Choreo.
     *
     * @param string $value (required, string) The authenticaion key provided by Pusher.
     * @return Pusher_Channels_GetChannel_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this GetChannel Choreo.
     *
     * @param string $value (required, string) The authentication secret provided by Pusher.
     * @return Pusher_Channels_GetChannel_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the ChannelName input for this GetChannel Choreo.
     *
     * @param string $value (required, string) The name of the channel to retrieve.
     * @return Pusher_Channels_GetChannel_Inputs For method chaining.
     */
    public function setChannelName($value)
    {
        return $this->set('ChannelName', $value);
    }

    /**
     * Set the value for the Info input for this GetChannel Choreo.
     *
     * @param string $value (optional, string) A comma separated list of attributes which should be returned for the channel (e.g., user_count, subscription_count). Note that the user_count attribute is only applicable for presence channels.
     * @return Pusher_Channels_GetChannel_Inputs For method chaining.
     */
    public function setInfo($value)
    {
        return $this->set('Info', $value);
    }
}


/**
 * Execution object for the GetChannel Choreo.
 *
 * @package Temboo
 * @subpackage Pusher
 */
class Pusher_Channels_GetChannel_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetChannel Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetChannel execution.
     * @param Pusher_Channels_GetChannel $choreo The choreography object for this execution.
     * @param Pusher_Channels_GetChannel_Inputs|array $inputs (optional) Inputs as Pusher_Channels_GetChannel_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Pusher_Channels_GetChannel_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Pusher_Channels_GetChannel $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetChannel execution.
     *
     * @return Pusher_Channels_GetChannel_Results New results object.
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
     * Wraps results in appropriate results class for this GetChannel execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Pusher_Channels_GetChannel_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Pusher_Channels_GetChannel_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetChannel Choreo.
 *
 * @package Temboo
 * @subpackage Pusher
 */
class Pusher_Channels_GetChannel_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetChannel Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Pusher_Channels_GetChannel_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetChannel execution.
     *
     * @return string (json) The response from Pusher.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information for occupied channels.
 *
 * @package Temboo
 * @subpackage Pusher
 */
class Pusher_Channels_ListChannels extends Temboo_Choreography
{
    /**
     * Retrieves information for occupied channels.
     *
     * @param Temboo_Session $session The session that owns this ListChannels Choreo.
     * @return Pusher_Channels_ListChannels New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Pusher/Channels/ListChannels/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListChannels Choreo.
     *
     * @param Pusher_Channels_ListChannels_Inputs|array $inputs (optional) Inputs as Pusher_Channels_ListChannels_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Pusher_Channels_ListChannels_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Pusher_Channels_ListChannels_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListChannels Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Pusher_Channels_ListChannels_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Pusher_Channels_ListChannels_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListChannels Choreo.
 *
 * @package Temboo
 * @subpackage Pusher
 */
class Pusher_Channels_ListChannels_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListChannels Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Pusher_Channels_ListChannels_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListChannels input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Pusher_Channels_ListChannels_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Pusher_Channels_ListChannels_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this ListChannels Choreo.
     *
     * @param string $value (required, string) The application ID provided by Pusher.
     * @return Pusher_Channels_ListChannels_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this ListChannels Choreo.
     *
     * @param string $value (required, string) The authenticaion key provided by Pusher.
     * @return Pusher_Channels_ListChannels_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this ListChannels Choreo.
     *
     * @param string $value (required, string) The authentication secret provided by Pusher.
     * @return Pusher_Channels_ListChannels_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the FilterByPrefix input for this ListChannels Choreo.
     *
     * @param string $value (optional, string) Filter the returned channels by a specific prefix (e.g. "presence-").
     * @return Pusher_Channels_ListChannels_Inputs For method chaining.
     */
    public function setFilterByPrefix($value)
    {
        return $this->set('FilterByPrefix', $value);
    }

    /**
     * Set the value for the Info input for this ListChannels Choreo.
     *
     * @param string $value (optional, string) A comma separated list of attributes which should be returned for each channel (e.g., user_count). Note that the user_count attribute is only applicable for presence channels.
     * @return Pusher_Channels_ListChannels_Inputs For method chaining.
     */
    public function setInfo($value)
    {
        return $this->set('Info', $value);
    }
}


/**
 * Execution object for the ListChannels Choreo.
 *
 * @package Temboo
 * @subpackage Pusher
 */
class Pusher_Channels_ListChannels_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListChannels Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListChannels execution.
     * @param Pusher_Channels_ListChannels $choreo The choreography object for this execution.
     * @param Pusher_Channels_ListChannels_Inputs|array $inputs (optional) Inputs as Pusher_Channels_ListChannels_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Pusher_Channels_ListChannels_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Pusher_Channels_ListChannels $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListChannels execution.
     *
     * @return Pusher_Channels_ListChannels_Results New results object.
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
     * Wraps results in appropriate results class for this ListChannels execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Pusher_Channels_ListChannels_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Pusher_Channels_ListChannels_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListChannels Choreo.
 *
 * @package Temboo
 * @subpackage Pusher
 */
class Pusher_Channels_ListChannels_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListChannels Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Pusher_Channels_ListChannels_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListChannels execution.
     *
     * @return string (json) The response from Pusher.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Triggers an event on one or more channels.
 *
 * @package Temboo
 * @subpackage Pusher
 */
class Pusher_Events_PostEvent extends Temboo_Choreography
{
    /**
     * Triggers an event on one or more channels.
     *
     * @param Temboo_Session $session The session that owns this PostEvent Choreo.
     * @return Pusher_Events_PostEvent New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Pusher/Events/PostEvent/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PostEvent Choreo.
     *
     * @param Pusher_Events_PostEvent_Inputs|array $inputs (optional) Inputs as Pusher_Events_PostEvent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Pusher_Events_PostEvent_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Pusher_Events_PostEvent_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PostEvent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Pusher_Events_PostEvent_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Pusher_Events_PostEvent_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PostEvent Choreo.
 *
 * @package Temboo
 * @subpackage Pusher
 */
class Pusher_Events_PostEvent_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PostEvent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Pusher_Events_PostEvent_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PostEvent input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Pusher_Events_PostEvent_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Pusher_Events_PostEvent_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this PostEvent Choreo.
     *
     * @param string $value (required, string) The application ID provided by Pusher.
     * @return Pusher_Events_PostEvent_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this PostEvent Choreo.
     *
     * @param string $value (required, string) The authenticaion key provided by Pusher.
     * @return Pusher_Events_PostEvent_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this PostEvent Choreo.
     *
     * @param string $value (required, string) The authentication secret provided by Pusher.
     * @return Pusher_Events_PostEvent_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the ChannelName input for this PostEvent Choreo.
     *
     * @param string $value (required, string) The name of the channel to publish to. This can also be a list of channels formatted as a JSON array.
     * @return Pusher_Events_PostEvent_Inputs For method chaining.
     */
    public function setChannelName($value)
    {
        return $this->set('ChannelName', $value);
    }

    /**
     * Set the value for the EventData input for this PostEvent Choreo.
     *
     * @param string $value (required, json) A JSON object containing the event data.
     * @return Pusher_Events_PostEvent_Inputs For method chaining.
     */
    public function setEventData($value)
    {
        return $this->set('EventData', $value);
    }

    /**
     * Set the value for the EventName input for this PostEvent Choreo.
     *
     * @param string $value (required, string) The name of the event being triggered.
     * @return Pusher_Events_PostEvent_Inputs For method chaining.
     */
    public function setEventName($value)
    {
        return $this->set('EventName', $value);
    }

    /**
     * Set the value for the SocketID input for this PostEvent Choreo.
     *
     * @param string $value (optional, string) Excludes the event from being sent to a specific connection.
     * @return Pusher_Events_PostEvent_Inputs For method chaining.
     */
    public function setSocketID($value)
    {
        return $this->set('SocketID', $value);
    }
}


/**
 * Execution object for the PostEvent Choreo.
 *
 * @package Temboo
 * @subpackage Pusher
 */
class Pusher_Events_PostEvent_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PostEvent Choreo.
     *
     * @param Temboo_Session $session The session that owns this PostEvent execution.
     * @param Pusher_Events_PostEvent $choreo The choreography object for this execution.
     * @param Pusher_Events_PostEvent_Inputs|array $inputs (optional) Inputs as Pusher_Events_PostEvent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Pusher_Events_PostEvent_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Pusher_Events_PostEvent $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PostEvent execution.
     *
     * @return Pusher_Events_PostEvent_Results New results object.
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
     * Wraps results in appropriate results class for this PostEvent execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Pusher_Events_PostEvent_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Pusher_Events_PostEvent_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PostEvent Choreo.
 *
 * @package Temboo
 * @subpackage Pusher
 */
class Pusher_Events_PostEvent_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PostEvent Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Pusher_Events_PostEvent_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PostEvent execution.
     *
     * @return string (json) The response from Pusher. A successful request returns an empty JSON hash.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves IDs for users currently subscribed to a presence channel.
 *
 * @package Temboo
 * @subpackage Pusher
 */
class Pusher_Users_ListUsers extends Temboo_Choreography
{
    /**
     * Retrieves IDs for users currently subscribed to a presence channel.
     *
     * @param Temboo_Session $session The session that owns this ListUsers Choreo.
     * @return Pusher_Users_ListUsers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Pusher/Users/ListUsers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListUsers Choreo.
     *
     * @param Pusher_Users_ListUsers_Inputs|array $inputs (optional) Inputs as Pusher_Users_ListUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Pusher_Users_ListUsers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Pusher_Users_ListUsers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Pusher_Users_ListUsers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Pusher_Users_ListUsers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListUsers Choreo.
 *
 * @package Temboo
 * @subpackage Pusher
 */
class Pusher_Users_ListUsers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Pusher_Users_ListUsers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListUsers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Pusher_Users_ListUsers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Pusher_Users_ListUsers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this ListUsers Choreo.
     *
     * @param string $value (required, string) The application ID provided by Pusher.
     * @return Pusher_Users_ListUsers_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this ListUsers Choreo.
     *
     * @param string $value (required, string) The authenticaion key provided by Pusher.
     * @return Pusher_Users_ListUsers_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this ListUsers Choreo.
     *
     * @param string $value (required, string) The authentication secret provided by Pusher.
     * @return Pusher_Users_ListUsers_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the ChannelName input for this ListUsers Choreo.
     *
     * @param string $value (required, string) The name of the channel that the users are subscribed to.
     * @return Pusher_Users_ListUsers_Inputs For method chaining.
     */
    public function setChannelName($value)
    {
        return $this->set('ChannelName', $value);
    }
}


/**
 * Execution object for the ListUsers Choreo.
 *
 * @package Temboo
 * @subpackage Pusher
 */
class Pusher_Users_ListUsers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListUsers Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListUsers execution.
     * @param Pusher_Users_ListUsers $choreo The choreography object for this execution.
     * @param Pusher_Users_ListUsers_Inputs|array $inputs (optional) Inputs as Pusher_Users_ListUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Pusher_Users_ListUsers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Pusher_Users_ListUsers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListUsers execution.
     *
     * @return Pusher_Users_ListUsers_Results New results object.
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
     * Wraps results in appropriate results class for this ListUsers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Pusher_Users_ListUsers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Pusher_Users_ListUsers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListUsers Choreo.
 *
 * @package Temboo
 * @subpackage Pusher
 */
class Pusher_Users_ListUsers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListUsers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Pusher_Users_ListUsers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListUsers execution.
     *
     * @return string (json) The response from Pusher.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>