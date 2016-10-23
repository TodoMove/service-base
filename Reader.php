<?php
namespace TodoMove\Service\ServiceName;

use TodoMove\Intercessor\Project;
use TodoMove\Intercessor\ProjectFolder;
use TodoMove\Intercessor\Repeat;
use TodoMove\Intercessor\Tag;
use TodoMove\Intercessor\Tags;
use TodoMove\Intercessor\Task;

class Reader extends \TodoMove\Intercessor\Service\AbstractReader
{
    /**
     * Reader constructor.
     *
     * Modify the constructor to accept whatever it is you need to be able to parse.
     *
     * For OmniFocus this is XML, for Wunderlist it might be a configured Wunderlist API class
     *
     */
    public function __construct($xml)
    {
        $this->name('ServiceName');

        $this->parseTags(); // Must be first as Projects/Tasks utilise them
        $this->parseFolders(); // Folders before projects, as we attach the projects to the folders
        $this->parseProjects(); // This attaches projects to folders
        $this->parseTasks(); // This attaches tasks to projects
    }

    /**
     * @return $this
     */
    public function parseTags()
    {
        // TODO: Add \TodoMove\Intercessor\Tag's to the tags array, keyed by id: $this->addTag($tag);
        return $this;
    }

    /**
     * @return $this
     */
    protected function parseProjects()
    {
        // TODO: Add \TodoMove\Intercessor\Project's to the projects array, keyed by id: $this->addProject($project);

        return $this;
    }

    /**
     * @return $this
     */
    public function parseFolders()
    {
        // TODO: Add \TodoMove\Intercessor\ProjectFolder's to the projects array, keyed by id: $this->addFolder($folder);

        return $this;
    }

    /**
     * @return $this
     */
    public function parseTasks()
    {
        // TODO: Add \TodoMove\Intercessor\Project's to the projects array, keyed by id: $this->addTask($task);

        return $this;
    }
}
