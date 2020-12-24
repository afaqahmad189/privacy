<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Autopilot\V1\Assistant;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class QueryOptions {
    /**
     * @param string $language The ISO language-country string that specifies the
     *                         language used by the Query resources to read
     * @param string $modelBuild The SID or unique name of the Model Build to be
     *                           queried
     * @param string $status The status of the resources to read
     * @return ReadQueryOptions Options builder
     */
    public static function read($language = Values::NONE, $modelBuild = Values::NONE, $status = Values::NONE) {
        return new ReadQueryOptions($language, $modelBuild, $status);
    }

    /**
     * @param string $tasks The list of tasks to limit the new query to
     * @param string $modelBuild The SID or unique name of the Model Build to be
     *                           queried
     * @return CreateQueryOptions Options builder
     */
    public static function create($tasks = Values::NONE, $modelBuild = Values::NONE) {
        return new CreateQueryOptions($tasks, $modelBuild);
    }

    /**
     * @param string $sampleSid The SID of an optional reference to the Sample
     *                          created from the query
     * @param string $status The new status of the resource
     * @return UpdateQueryOptions Options builder
     */
    public static function update($sampleSid = Values::NONE, $status = Values::NONE) {
        return new UpdateQueryOptions($sampleSid, $status);
    }
}

class ReadQueryOptions extends Options {
    /**
     * @param string $language The ISO language-country string that specifies the
     *                         language used by the Query resources to read
     * @param string $modelBuild The SID or unique name of the Model Build to be
     *                           queried
     * @param string $status The status of the resources to read
     */
    public function __construct($language = Values::NONE, $modelBuild = Values::NONE, $status = Values::NONE) {
        $this->options['language'] = $language;
        $this->options['modelBuild'] = $modelBuild;
        $this->options['status'] = $status;
    }

    /**
     * The [ISO language-country](https://docs.oracle.com/cd/E13214_01/wli/docs92/xref/xqisocodes.html) string that specifies the language used by the Query resources to read. For example: `en-US`.
     *
     * @param string $language The ISO language-country string that specifies the
     *                         language used by the Query resources to read
     * @return $this Fluent Builder
     */
    public function setLanguage($language) {
        $this->options['language'] = $language;
        return $this;
    }

    /**
     * The SID or unique name of the [Model Build](https://www.twilio.com/docs/autopilot/api/model-build) to be queried.
     *
     * @param string $modelBuild The SID or unique name of the Model Build to be
     *                           queried
     * @return $this Fluent Builder
     */
    public function setModelBuild($modelBuild) {
        $this->options['modelBuild'] = $modelBuild;
        return $this;
    }

    /**
     * The status of the resources to read. Can be: `pending-review`, `reviewed`, or `discarded`
     *
     * @param string $status The status of the resources to read
     * @return $this Fluent Builder
     */
    public function setStatus($status) {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Autopilot.V1.ReadQueryOptions ' . implode(' ', $options) . ']';
    }
}

class CreateQueryOptions extends Options {
    /**
     * @param string $tasks The list of tasks to limit the new query to
     * @param string $modelBuild The SID or unique name of the Model Build to be
     *                           queried
     */
    public function __construct($tasks = Values::NONE, $modelBuild = Values::NONE) {
        $this->options['tasks'] = $tasks;
        $this->options['modelBuild'] = $modelBuild;
    }

    /**
     * The list of tasks to limit the new query to. Tasks are expressed as a comma-separated list of task `unique_name` values. For example, `task-unique_name-1, task-unique_name-2`. Listing specific tasks is useful to constrain the paths that a user can take.
     *
     * @param string $tasks The list of tasks to limit the new query to
     * @return $this Fluent Builder
     */
    public function setTasks($tasks) {
        $this->options['tasks'] = $tasks;
        return $this;
    }

    /**
     * The SID or unique name of the [Model Build](https://www.twilio.com/docs/autopilot/api/model-build) to be queried.
     *
     * @param string $modelBuild The SID or unique name of the Model Build to be
     *                           queried
     * @return $this Fluent Builder
     */
    public function setModelBuild($modelBuild) {
        $this->options['modelBuild'] = $modelBuild;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Autopilot.V1.CreateQueryOptions ' . implode(' ', $options) . ']';
    }
}

class UpdateQueryOptions extends Options {
    /**
     * @param string $sampleSid The SID of an optional reference to the Sample
     *                          created from the query
     * @param string $status The new status of the resource
     */
    public function __construct($sampleSid = Values::NONE, $status = Values::NONE) {
        $this->options['sampleSid'] = $sampleSid;
        $this->options['status'] = $status;
    }

    /**
     * The SID of an optional reference to the [Sample](https://www.twilio.com/docs/autopilot/api/task-sample) created from the query.
     *
     * @param string $sampleSid The SID of an optional reference to the Sample
     *                          created from the query
     * @return $this Fluent Builder
     */
    public function setSampleSid($sampleSid) {
        $this->options['sampleSid'] = $sampleSid;
        return $this;
    }

    /**
     * The new status of the resource. Can be: `pending-review`, `reviewed`, or `discarded`
     *
     * @param string $status The new status of the resource
     * @return $this Fluent Builder
     */
    public function setStatus($status) {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Autopilot.V1.UpdateQueryOptions ' . implode(' ', $options) . ']';
    }
}