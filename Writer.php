<?php

namespace TodoMove\Service\ServiceName;

use TodoMove\Intercessor\Contracts\Service\Reader;
use TodoMove\Intercessor\Folder;
use TodoMove\Intercessor\Project;
use TodoMove\Intercessor\Service\AbstractWriter;
use TodoMove\Intercessor\Tag;
use TodoMove\Intercessor\Task;

class Writer extends AbstractWriter
{
    public function _construct()
    {
        $this->name('ServiceName');
    }

    // TODO: How will we handle live updates of progress?  We'll need to mark each item as 'synced', then laravel echo can be used to say what's been synced?
    // TODO: Maybe we need an event/callback: $project->onSync(function($project) { echo::default('project.synced', $project); });

    /** @inheritdoc */
    public function syncFrom(Reader $reader)
    {
        $this->syncTags($reader->tags());
        $this->syncFolders($reader->folders());
        $this->syncProjects($reader->projects());
        $this->syncTasks($reader->tasks());
    }

    public function syncFolder(Folder $folder)
    {
        // TODO: Implement syncFolder() method.
    }

    public function syncProject(Project $project)
    {
        // TODO: Implement syncProject() method.
    }

    public function syncTask(Task $task)
    {
        // TODO: Implement syncTask() method.
    }

    public function syncTag(Tag $tag)
    {
        // TODO: Implement syncTag() method.
    }


    protected function syncFolders(array $folders)
    {
        //TODO: Loop, and use $this->syncFolder(Folder $folder) to hit appropriate API's to add folders / throw exceptions.  Handling errors will be tough?
    }

    protected function syncProjects(array $projects)
    {
        //TODO: Loop, and use $this->syncProject(Project $project) to hit appropriate API's to add folders / throw exceptions.  Handling errors will be tough?
    }

    protected function syncTags(array $tags)
    {
        //TODO: Loop, and use $this->syncTag(Tag $tag) to hit appropriate API's to add folders / throw exceptions.  Handling errors will be tough?
    }

    protected function syncTasks(array $tasks)
    {
        //TODO: Loop, and use $this->syncTask(Task $task) to hit appropriate API's to add folders / throw exceptions.  Handling errors will be tough?
    }
}
