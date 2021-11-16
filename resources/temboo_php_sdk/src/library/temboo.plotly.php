<?php

/**
 * Temboo PHP SDK Plotly classes
 *
 * Execute Choreographies from the Temboo Plotly bundle.
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
 * @subpackage Plotly
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Creates, modifies, or styles a graph.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_ConfigureGraph extends Temboo_Choreography
{
    /**
     * Creates, modifies, or styles a graph.
     *
     * @param Temboo_Session $session The session that owns this ConfigureGraph Choreo.
     * @return Plotly_ConfigureGraph New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Plotly/ConfigureGraph/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ConfigureGraph Choreo.
     *
     * @param Plotly_ConfigureGraph_Inputs|array $inputs (optional) Inputs as Plotly_ConfigureGraph_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Plotly_ConfigureGraph_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Plotly_ConfigureGraph_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ConfigureGraph Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Plotly_ConfigureGraph_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Plotly_ConfigureGraph_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ConfigureGraph Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_ConfigureGraph_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ConfigureGraph Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Plotly_ConfigureGraph_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ConfigureGraph input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Plotly_ConfigureGraph_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Plotly_ConfigureGraph_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ConfigureGraph Choreo.
     *
     * @param string $value (required, string) The API Key provided by Plotly.
     * @return Plotly_ConfigureGraph_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the FileName input for this ConfigureGraph Choreo.
     *
     * @param string $value (required, string) The file name of your Plotly graph. If the file is nested within a directory, you can specify a path here (e.g., myFolder/myPlot).
     * @return Plotly_ConfigureGraph_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the FileOption input for this ConfigureGraph Choreo.
     *
     * @param string $value (required, string) The file operation being performed. Valid values are: "new", "overwrite", "append", or "extend". See Choreo description for more details.
     * @return Plotly_ConfigureGraph_Inputs For method chaining.
     */
    public function setFileOption($value)
    {
        return $this->set('FileOption', $value);
    }

    /**
     * Set the value for the GraphArguments input for this ConfigureGraph Choreo.
     *
     * @param string $value (conditional, json) The data and/or styling arguments. Typically, this is in the form of a JSON array where x and y are represented as arrays of numbers or strings. See Choreo description for more details.
     * @return Plotly_ConfigureGraph_Inputs For method chaining.
     */
    public function setGraphArguments($value)
    {
        return $this->set('GraphArguments', $value);
    }

    /**
     * Set the value for the Layout input for this ConfigureGraph Choreo.
     *
     * @param string $value (optional, json) A key-value paired JSON object that describes the layout of the plot (e.g., {"title": "Sensor Data"}).
     * @return Plotly_ConfigureGraph_Inputs For method chaining.
     */
    public function setLayout($value)
    {
        return $this->set('Layout', $value);
    }

    /**
     * Set the value for the Origin input for this ConfigureGraph Choreo.
     *
     * @param string $value (optional, string) Specifies the type of call and the type of data in the Arguments parameter. Valid values are: plot (the default), style, or layout.
     * @return Plotly_ConfigureGraph_Inputs For method chaining.
     */
    public function setOrigin($value)
    {
        return $this->set('Origin', $value);
    }

    /**
     * Set the value for the Style input for this ConfigureGraph Choreo.
     *
     * @param string $value (optional, json) A JSON object describing the style of the graph (e.g., {"type": "bar"}). This can be applied to every single trace (default) or to the traces specified in the optional Traces input.
     * @return Plotly_ConfigureGraph_Inputs For method chaining.
     */
    public function setStyle($value)
    {
        return $this->set('Style', $value);
    }

    /**
     * Set the value for the Traces input for this ConfigureGraph Choreo.
     *
     * @param string $value (optional, json) Specifies the indices that the Style input object should be applied to. This should be formatted as a JSON array.
     * @return Plotly_ConfigureGraph_Inputs For method chaining.
     */
    public function setTraces($value)
    {
        return $this->set('Traces', $value);
    }

    /**
     * Set the value for the Username input for this ConfigureGraph Choreo.
     *
     * @param string $value (required, string) A valid Plotly username.
     * @return Plotly_ConfigureGraph_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the WorldReadable input for this ConfigureGraph Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the graph is viewable by anyone who has the link. If false (the default), the graph is only viewable in the owner's Plotly account.
     * @return Plotly_ConfigureGraph_Inputs For method chaining.
     */
    public function setWorldReadable($value)
    {
        return $this->set('WorldReadable', $value);
    }
}


/**
 * Execution object for the ConfigureGraph Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_ConfigureGraph_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ConfigureGraph Choreo.
     *
     * @param Temboo_Session $session The session that owns this ConfigureGraph execution.
     * @param Plotly_ConfigureGraph $choreo The choreography object for this execution.
     * @param Plotly_ConfigureGraph_Inputs|array $inputs (optional) Inputs as Plotly_ConfigureGraph_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Plotly_ConfigureGraph_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Plotly_ConfigureGraph $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ConfigureGraph execution.
     *
     * @return Plotly_ConfigureGraph_Results New results object.
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
     * Wraps results in appropriate results class for this ConfigureGraph execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Plotly_ConfigureGraph_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Plotly_ConfigureGraph_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ConfigureGraph Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_ConfigureGraph_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ConfigureGraph Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Plotly_ConfigureGraph_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "URL" output from this ConfigureGraph execution.
     *
     * @return string (string) The Plotly URL for the graph.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURL()
    {
        return $this->get('URL');
    }
    /**
     * Retrieve the value for the "Response" output from this ConfigureGraph execution.
     *
     * @return string (json) The response from Plotly
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Extends the specified bar graph by plotting a single addition point.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_ExtendBarGraph extends Temboo_Choreography
{
    /**
     * Extends the specified bar graph by plotting a single addition point.
     *
     * @param Temboo_Session $session The session that owns this ExtendBarGraph Choreo.
     * @return Plotly_ExtendBarGraph New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Plotly/ExtendBarGraph/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ExtendBarGraph Choreo.
     *
     * @param Plotly_ExtendBarGraph_Inputs|array $inputs (optional) Inputs as Plotly_ExtendBarGraph_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Plotly_ExtendBarGraph_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Plotly_ExtendBarGraph_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ExtendBarGraph Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Plotly_ExtendBarGraph_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Plotly_ExtendBarGraph_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ExtendBarGraph Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_ExtendBarGraph_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ExtendBarGraph Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Plotly_ExtendBarGraph_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ExtendBarGraph input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Plotly_ExtendBarGraph_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Plotly_ExtendBarGraph_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ExtendBarGraph Choreo.
     *
     * @param string $value (required, string) The API Key provided by Plotly.
     * @return Plotly_ExtendBarGraph_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the FileName input for this ExtendBarGraph Choreo.
     *
     * @param string $value (required, string) The file name of your Plotly graph. If the file is nested within a directory, you can specify a path here (e.g., myFolder/myPlot).
     * @return Plotly_ExtendBarGraph_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the Title input for this ExtendBarGraph Choreo.
     *
     * @param string $value (optional, string) The title of the graph.
     * @return Plotly_ExtendBarGraph_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Username input for this ExtendBarGraph Choreo.
     *
     * @param string $value (required, string) A valid Plotly username.
     * @return Plotly_ExtendBarGraph_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the WorldReadable input for this ExtendBarGraph Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the graph is viewable by anyone who has the link. If false (the default), the graph is only viewable in the owner's Plotly account.
     * @return Plotly_ExtendBarGraph_Inputs For method chaining.
     */
    public function setWorldReadable($value)
    {
        return $this->set('WorldReadable', $value);
    }

    /**
     * Set the value for the XValue input for this ExtendBarGraph Choreo.
     *
     * @param mixed $value (required, any) The "x" coordinate value to be plotted on the graph.
     * @return Plotly_ExtendBarGraph_Inputs For method chaining.
     */
    public function setXValue($value)
    {
        return $this->set('XValue', $value);
    }

    /**
     * Set the value for the YValue input for this ExtendBarGraph Choreo.
     *
     * @param mixed $value (required, any) The "y" coordinate value to be plotted on the graph.
     * @return Plotly_ExtendBarGraph_Inputs For method chaining.
     */
    public function setYValue($value)
    {
        return $this->set('YValue', $value);
    }
}


/**
 * Execution object for the ExtendBarGraph Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_ExtendBarGraph_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ExtendBarGraph Choreo.
     *
     * @param Temboo_Session $session The session that owns this ExtendBarGraph execution.
     * @param Plotly_ExtendBarGraph $choreo The choreography object for this execution.
     * @param Plotly_ExtendBarGraph_Inputs|array $inputs (optional) Inputs as Plotly_ExtendBarGraph_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Plotly_ExtendBarGraph_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Plotly_ExtendBarGraph $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ExtendBarGraph execution.
     *
     * @return Plotly_ExtendBarGraph_Results New results object.
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
     * Wraps results in appropriate results class for this ExtendBarGraph execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Plotly_ExtendBarGraph_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Plotly_ExtendBarGraph_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ExtendBarGraph Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_ExtendBarGraph_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ExtendBarGraph Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Plotly_ExtendBarGraph_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "URL" output from this ExtendBarGraph execution.
     *
     * @return string (string) The Plotly URL for the graph.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURL()
    {
        return $this->get('URL');
    }
    /**
     * Retrieve the value for the "Response" output from this ExtendBarGraph execution.
     *
     * @return string (json) The response from Plotly
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Extends the specified line graph by plotting a single addition point.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_ExtendLineGraph extends Temboo_Choreography
{
    /**
     * Extends the specified line graph by plotting a single addition point.
     *
     * @param Temboo_Session $session The session that owns this ExtendLineGraph Choreo.
     * @return Plotly_ExtendLineGraph New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Plotly/ExtendLineGraph/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ExtendLineGraph Choreo.
     *
     * @param Plotly_ExtendLineGraph_Inputs|array $inputs (optional) Inputs as Plotly_ExtendLineGraph_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Plotly_ExtendLineGraph_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Plotly_ExtendLineGraph_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ExtendLineGraph Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Plotly_ExtendLineGraph_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Plotly_ExtendLineGraph_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ExtendLineGraph Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_ExtendLineGraph_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ExtendLineGraph Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Plotly_ExtendLineGraph_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ExtendLineGraph input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Plotly_ExtendLineGraph_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Plotly_ExtendLineGraph_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ExtendLineGraph Choreo.
     *
     * @param string $value (required, string) The API Key provided by Plotly.
     * @return Plotly_ExtendLineGraph_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the FileName input for this ExtendLineGraph Choreo.
     *
     * @param string $value (required, string) The file name of your Plotly graph. If the file is nested within a directory, you can specify a path here (e.g., myFolder/myPlot).
     * @return Plotly_ExtendLineGraph_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the Title input for this ExtendLineGraph Choreo.
     *
     * @param string $value (optional, string) The title of the graph.
     * @return Plotly_ExtendLineGraph_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Username input for this ExtendLineGraph Choreo.
     *
     * @param string $value (required, string) A valid Plotly username.
     * @return Plotly_ExtendLineGraph_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the WorldReadable input for this ExtendLineGraph Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the graph is viewable by anyone who has the link. If false (the default), the graph is only viewable in the owner's Plotly account.
     * @return Plotly_ExtendLineGraph_Inputs For method chaining.
     */
    public function setWorldReadable($value)
    {
        return $this->set('WorldReadable', $value);
    }

    /**
     * Set the value for the XValue input for this ExtendLineGraph Choreo.
     *
     * @param mixed $value (required, any) The "x" coordinate value to be plotted on the graph.
     * @return Plotly_ExtendLineGraph_Inputs For method chaining.
     */
    public function setXValue($value)
    {
        return $this->set('XValue', $value);
    }

    /**
     * Set the value for the YValue input for this ExtendLineGraph Choreo.
     *
     * @param mixed $value (required, any) The "y" coordinate value to be plotted on the graph.
     * @return Plotly_ExtendLineGraph_Inputs For method chaining.
     */
    public function setYValue($value)
    {
        return $this->set('YValue', $value);
    }
}


/**
 * Execution object for the ExtendLineGraph Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_ExtendLineGraph_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ExtendLineGraph Choreo.
     *
     * @param Temboo_Session $session The session that owns this ExtendLineGraph execution.
     * @param Plotly_ExtendLineGraph $choreo The choreography object for this execution.
     * @param Plotly_ExtendLineGraph_Inputs|array $inputs (optional) Inputs as Plotly_ExtendLineGraph_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Plotly_ExtendLineGraph_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Plotly_ExtendLineGraph $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ExtendLineGraph execution.
     *
     * @return Plotly_ExtendLineGraph_Results New results object.
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
     * Wraps results in appropriate results class for this ExtendLineGraph execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Plotly_ExtendLineGraph_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Plotly_ExtendLineGraph_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ExtendLineGraph Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_ExtendLineGraph_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ExtendLineGraph Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Plotly_ExtendLineGraph_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "URL" output from this ExtendLineGraph execution.
     *
     * @return string (string) The Plotly URL for the graph.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURL()
    {
        return $this->get('URL');
    }
    /**
     * Retrieve the value for the "Response" output from this ExtendLineGraph execution.
     *
     * @return string (json) The response from Plotly
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Extends the specified time series graph by plotting a single addition point.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_ExtendTimeSeries extends Temboo_Choreography
{
    /**
     * Extends the specified time series graph by plotting a single addition point.
     *
     * @param Temboo_Session $session The session that owns this ExtendTimeSeries Choreo.
     * @return Plotly_ExtendTimeSeries New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Plotly/ExtendTimeSeries/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ExtendTimeSeries Choreo.
     *
     * @param Plotly_ExtendTimeSeries_Inputs|array $inputs (optional) Inputs as Plotly_ExtendTimeSeries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Plotly_ExtendTimeSeries_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Plotly_ExtendTimeSeries_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ExtendTimeSeries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Plotly_ExtendTimeSeries_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Plotly_ExtendTimeSeries_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ExtendTimeSeries Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_ExtendTimeSeries_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ExtendTimeSeries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Plotly_ExtendTimeSeries_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ExtendTimeSeries input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Plotly_ExtendTimeSeries_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Plotly_ExtendTimeSeries_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ExtendTimeSeries Choreo.
     *
     * @param string $value (required, string) The API Key provided by Plotly.
     * @return Plotly_ExtendTimeSeries_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the FileName input for this ExtendTimeSeries Choreo.
     *
     * @param string $value (required, string) The file name of your Plotly graph. If the file is nested within a directory, you can specify a path here (e.g., myFolder/myPlot).
     * @return Plotly_ExtendTimeSeries_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the TimeZone input for this ExtendTimeSeries Choreo.
     *
     * @param string $value (optional, string) If a value is not passed to the Timestamp input, the current is generated for you. When using this feature, you can indicate the desired time zone using this input. The default TimeZone is UTC.
     * @return Plotly_ExtendTimeSeries_Inputs For method chaining.
     */
    public function setTimeZone($value)
    {
        return $this->set('TimeZone', $value);
    }

    /**
     * Set the value for the Title input for this ExtendTimeSeries Choreo.
     *
     * @param string $value (optional, string) The title of the graph.
     * @return Plotly_ExtendTimeSeries_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Username input for this ExtendTimeSeries Choreo.
     *
     * @param string $value (required, string) A valid Plotly username.
     * @return Plotly_ExtendTimeSeries_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the WorldReadable input for this ExtendTimeSeries Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the graph is viewable by anyone who has the link. If false (the default), the graph is only viewable in the owner's Plotly account.
     * @return Plotly_ExtendTimeSeries_Inputs For method chaining.
     */
    public function setWorldReadable($value)
    {
        return $this->set('WorldReadable', $value);
    }

    /**
     * Set the value for the XValue input for this ExtendTimeSeries Choreo.
     *
     * @param string $value (conditional, date) The "x" coordinate timestamp to be plotted on the graph in the format YYYY-MM-DD HH:MM:SS. If not provided, this defaults to NOW().
     * @return Plotly_ExtendTimeSeries_Inputs For method chaining.
     */
    public function setXValue($value)
    {
        return $this->set('XValue', $value);
    }

    /**
     * Set the value for the YValue input for this ExtendTimeSeries Choreo.
     *
     * @param string $value (required, string) The "y" coordinate value associated with the specified timestamp.
     * @return Plotly_ExtendTimeSeries_Inputs For method chaining.
     */
    public function setYValue($value)
    {
        return $this->set('YValue', $value);
    }
}


/**
 * Execution object for the ExtendTimeSeries Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_ExtendTimeSeries_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ExtendTimeSeries Choreo.
     *
     * @param Temboo_Session $session The session that owns this ExtendTimeSeries execution.
     * @param Plotly_ExtendTimeSeries $choreo The choreography object for this execution.
     * @param Plotly_ExtendTimeSeries_Inputs|array $inputs (optional) Inputs as Plotly_ExtendTimeSeries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Plotly_ExtendTimeSeries_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Plotly_ExtendTimeSeries $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ExtendTimeSeries execution.
     *
     * @return Plotly_ExtendTimeSeries_Results New results object.
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
     * Wraps results in appropriate results class for this ExtendTimeSeries execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Plotly_ExtendTimeSeries_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Plotly_ExtendTimeSeries_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ExtendTimeSeries Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_ExtendTimeSeries_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ExtendTimeSeries Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Plotly_ExtendTimeSeries_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "URL" output from this ExtendTimeSeries execution.
     *
     * @return string (string) The Plotly URL for the graph.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURL()
    {
        return $this->get('URL');
    }
    /**
     * Retrieve the value for the "Response" output from this ExtendTimeSeries execution.
     *
     * @return string (json) The response from Plotly
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Plots an array of points on a bar graph.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_PlotBarGraph extends Temboo_Choreography
{
    /**
     * Plots an array of points on a bar graph.
     *
     * @param Temboo_Session $session The session that owns this PlotBarGraph Choreo.
     * @return Plotly_PlotBarGraph New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Plotly/PlotBarGraph/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PlotBarGraph Choreo.
     *
     * @param Plotly_PlotBarGraph_Inputs|array $inputs (optional) Inputs as Plotly_PlotBarGraph_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Plotly_PlotBarGraph_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Plotly_PlotBarGraph_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PlotBarGraph Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Plotly_PlotBarGraph_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Plotly_PlotBarGraph_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PlotBarGraph Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_PlotBarGraph_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PlotBarGraph Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Plotly_PlotBarGraph_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PlotBarGraph input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Plotly_PlotBarGraph_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Plotly_PlotBarGraph_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this PlotBarGraph Choreo.
     *
     * @param string $value (required, string) The API Key provided by Plotly.
     * @return Plotly_PlotBarGraph_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the FileName input for this PlotBarGraph Choreo.
     *
     * @param string $value (required, string) The file name of your Plotly graph. If the file is nested within a directory, you can specify a path here (e.g., myFolder/myPlot).
     * @return Plotly_PlotBarGraph_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the FileOption input for this PlotBarGraph Choreo.
     *
     * @param string $value (optional, string) The file operation being performed. Valid values are: "new", "overwrite", "append", or "extend". See Choreo description for more details. This defaults to "overwrite".
     * @return Plotly_PlotBarGraph_Inputs For method chaining.
     */
    public function setFileOption($value)
    {
        return $this->set('FileOption', $value);
    }

    /**
     * Set the value for the Title input for this PlotBarGraph Choreo.
     *
     * @param string $value (optional, string) The title of the graph.
     * @return Plotly_PlotBarGraph_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Username input for this PlotBarGraph Choreo.
     *
     * @param string $value (required, string) A valid Plotly username.
     * @return Plotly_PlotBarGraph_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the WorldReadable input for this PlotBarGraph Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the graph is viewable by anyone who has the link. If false (the default), the graph is only viewable in the owner's Plotly account.
     * @return Plotly_PlotBarGraph_Inputs For method chaining.
     */
    public function setWorldReadable($value)
    {
        return $this->set('WorldReadable', $value);
    }

    /**
     * Set the value for the XValues input for this PlotBarGraph Choreo.
     *
     * @param string $value (required, json) A JSON array containing the "x" coordinate values to be plotted on the graph.
     * @return Plotly_PlotBarGraph_Inputs For method chaining.
     */
    public function setXValues($value)
    {
        return $this->set('XValues', $value);
    }

    /**
     * Set the value for the YValues input for this PlotBarGraph Choreo.
     *
     * @param string $value (required, json) A JSON array containing the "y" coordinate values to be plotted on the graph.
     * @return Plotly_PlotBarGraph_Inputs For method chaining.
     */
    public function setYValues($value)
    {
        return $this->set('YValues', $value);
    }
}


/**
 * Execution object for the PlotBarGraph Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_PlotBarGraph_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PlotBarGraph Choreo.
     *
     * @param Temboo_Session $session The session that owns this PlotBarGraph execution.
     * @param Plotly_PlotBarGraph $choreo The choreography object for this execution.
     * @param Plotly_PlotBarGraph_Inputs|array $inputs (optional) Inputs as Plotly_PlotBarGraph_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Plotly_PlotBarGraph_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Plotly_PlotBarGraph $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PlotBarGraph execution.
     *
     * @return Plotly_PlotBarGraph_Results New results object.
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
     * Wraps results in appropriate results class for this PlotBarGraph execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Plotly_PlotBarGraph_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Plotly_PlotBarGraph_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PlotBarGraph Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_PlotBarGraph_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PlotBarGraph Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Plotly_PlotBarGraph_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "URL" output from this PlotBarGraph execution.
     *
     * @return string (string) The Plotly URL for the graph.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURL()
    {
        return $this->get('URL');
    }
    /**
     * Retrieve the value for the "Response" output from this PlotBarGraph execution.
     *
     * @return string (json) The response from Plotly
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Plots an array of points on a line graph.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_PlotLineGraph extends Temboo_Choreography
{
    /**
     * Plots an array of points on a line graph.
     *
     * @param Temboo_Session $session The session that owns this PlotLineGraph Choreo.
     * @return Plotly_PlotLineGraph New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Plotly/PlotLineGraph/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PlotLineGraph Choreo.
     *
     * @param Plotly_PlotLineGraph_Inputs|array $inputs (optional) Inputs as Plotly_PlotLineGraph_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Plotly_PlotLineGraph_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Plotly_PlotLineGraph_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PlotLineGraph Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Plotly_PlotLineGraph_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Plotly_PlotLineGraph_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PlotLineGraph Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_PlotLineGraph_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PlotLineGraph Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Plotly_PlotLineGraph_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PlotLineGraph input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Plotly_PlotLineGraph_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Plotly_PlotLineGraph_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this PlotLineGraph Choreo.
     *
     * @param string $value (required, string) The API Key provided by Plotly.
     * @return Plotly_PlotLineGraph_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the FileName input for this PlotLineGraph Choreo.
     *
     * @param string $value (required, string) The file name of your Plotly graph. If the file is nested within a directory, you can specify a path here (e.g., myFolder/myPlot).
     * @return Plotly_PlotLineGraph_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the FileOption input for this PlotLineGraph Choreo.
     *
     * @param string $value (optional, string) The file operation being performed. Valid values are: "new", "overwrite", "append", or "extend". See Choreo description for more details. This defaults to "overwrite".
     * @return Plotly_PlotLineGraph_Inputs For method chaining.
     */
    public function setFileOption($value)
    {
        return $this->set('FileOption', $value);
    }

    /**
     * Set the value for the Title input for this PlotLineGraph Choreo.
     *
     * @param string $value (optional, string) The title of the graph.
     * @return Plotly_PlotLineGraph_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Username input for this PlotLineGraph Choreo.
     *
     * @param string $value (required, string) A valid Plotly username.
     * @return Plotly_PlotLineGraph_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the WorldReadable input for this PlotLineGraph Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the graph is viewable by anyone who has the link. If false (the default), the graph is only viewable in the owner's Plotly account.
     * @return Plotly_PlotLineGraph_Inputs For method chaining.
     */
    public function setWorldReadable($value)
    {
        return $this->set('WorldReadable', $value);
    }

    /**
     * Set the value for the XValues input for this PlotLineGraph Choreo.
     *
     * @param string $value (required, json) A JSON array containing the "x" coordinate values to be plotted on the graph.
     * @return Plotly_PlotLineGraph_Inputs For method chaining.
     */
    public function setXValues($value)
    {
        return $this->set('XValues', $value);
    }

    /**
     * Set the value for the YValues input for this PlotLineGraph Choreo.
     *
     * @param string $value (required, json) A JSON array containing the "y" coordinate values to be plotted on the graph.
     * @return Plotly_PlotLineGraph_Inputs For method chaining.
     */
    public function setYValues($value)
    {
        return $this->set('YValues', $value);
    }
}


/**
 * Execution object for the PlotLineGraph Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_PlotLineGraph_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PlotLineGraph Choreo.
     *
     * @param Temboo_Session $session The session that owns this PlotLineGraph execution.
     * @param Plotly_PlotLineGraph $choreo The choreography object for this execution.
     * @param Plotly_PlotLineGraph_Inputs|array $inputs (optional) Inputs as Plotly_PlotLineGraph_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Plotly_PlotLineGraph_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Plotly_PlotLineGraph $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PlotLineGraph execution.
     *
     * @return Plotly_PlotLineGraph_Results New results object.
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
     * Wraps results in appropriate results class for this PlotLineGraph execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Plotly_PlotLineGraph_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Plotly_PlotLineGraph_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PlotLineGraph Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_PlotLineGraph_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PlotLineGraph Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Plotly_PlotLineGraph_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "URL" output from this PlotLineGraph execution.
     *
     * @return string (string) The Plotly URL for the graph.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURL()
    {
        return $this->get('URL');
    }
    /**
     * Retrieve the value for the "Response" output from this PlotLineGraph execution.
     *
     * @return string (json) The response from Plotly
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Plots an array of time series data on a graph.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_PlotTimeSeries extends Temboo_Choreography
{
    /**
     * Plots an array of time series data on a graph.
     *
     * @param Temboo_Session $session The session that owns this PlotTimeSeries Choreo.
     * @return Plotly_PlotTimeSeries New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Plotly/PlotTimeSeries/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PlotTimeSeries Choreo.
     *
     * @param Plotly_PlotTimeSeries_Inputs|array $inputs (optional) Inputs as Plotly_PlotTimeSeries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Plotly_PlotTimeSeries_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Plotly_PlotTimeSeries_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PlotTimeSeries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Plotly_PlotTimeSeries_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Plotly_PlotTimeSeries_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PlotTimeSeries Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_PlotTimeSeries_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PlotTimeSeries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Plotly_PlotTimeSeries_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PlotTimeSeries input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Plotly_PlotTimeSeries_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Plotly_PlotTimeSeries_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this PlotTimeSeries Choreo.
     *
     * @param string $value (required, string) The API Key provided by Plotly.
     * @return Plotly_PlotTimeSeries_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the FileName input for this PlotTimeSeries Choreo.
     *
     * @param string $value (required, string) The file name of your Plotly graph. If the file is nested within a directory, you can specify a path here (e.g., myFolder/myPlot).
     * @return Plotly_PlotTimeSeries_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the FileOption input for this PlotTimeSeries Choreo.
     *
     * @param string $value (optional, string) The file operation being performed. Valid values are: "new", "overwrite", "append", or "extend". See Choreo description for more details. This defaults to "overwrite".
     * @return Plotly_PlotTimeSeries_Inputs For method chaining.
     */
    public function setFileOption($value)
    {
        return $this->set('FileOption', $value);
    }

    /**
     * Set the value for the Title input for this PlotTimeSeries Choreo.
     *
     * @param string $value (optional, string) The title of the graph.
     * @return Plotly_PlotTimeSeries_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Username input for this PlotTimeSeries Choreo.
     *
     * @param string $value (required, string) A valid Plotly username.
     * @return Plotly_PlotTimeSeries_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the WorldReadable input for this PlotTimeSeries Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the graph is viewable by anyone who has the link. If false (the default), the graph is only viewable in the owner's Plotly account.
     * @return Plotly_PlotTimeSeries_Inputs For method chaining.
     */
    public function setWorldReadable($value)
    {
        return $this->set('WorldReadable', $value);
    }

    /**
     * Set the value for the XValues input for this PlotTimeSeries Choreo.
     *
     * @param string $value (required, json) A JSON array of timestamps representing the "x" coordinates to be plotted on the graph. Timestamps should be formatted as YYYY-MM-DD HH:MM:SS.
     * @return Plotly_PlotTimeSeries_Inputs For method chaining.
     */
    public function setXValues($value)
    {
        return $this->set('XValues', $value);
    }

    /**
     * Set the value for the YValues input for this PlotTimeSeries Choreo.
     *
     * @param string $value (required, json) A  JSON array of values representing the "y" coordinates associated with the specified timestamps.
     * @return Plotly_PlotTimeSeries_Inputs For method chaining.
     */
    public function setYValues($value)
    {
        return $this->set('YValues', $value);
    }
}


/**
 * Execution object for the PlotTimeSeries Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_PlotTimeSeries_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PlotTimeSeries Choreo.
     *
     * @param Temboo_Session $session The session that owns this PlotTimeSeries execution.
     * @param Plotly_PlotTimeSeries $choreo The choreography object for this execution.
     * @param Plotly_PlotTimeSeries_Inputs|array $inputs (optional) Inputs as Plotly_PlotTimeSeries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Plotly_PlotTimeSeries_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Plotly_PlotTimeSeries $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PlotTimeSeries execution.
     *
     * @return Plotly_PlotTimeSeries_Results New results object.
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
     * Wraps results in appropriate results class for this PlotTimeSeries execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Plotly_PlotTimeSeries_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Plotly_PlotTimeSeries_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PlotTimeSeries Choreo.
 *
 * @package Temboo
 * @subpackage Plotly
 */
class Plotly_PlotTimeSeries_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PlotTimeSeries Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Plotly_PlotTimeSeries_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "URL" output from this PlotTimeSeries execution.
     *
     * @return string (string) The Plotly URL for the graph.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURL()
    {
        return $this->get('URL');
    }
    /**
     * Retrieve the value for the "Response" output from this PlotTimeSeries execution.
     *
     * @return string (json) The response from Plotly
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>