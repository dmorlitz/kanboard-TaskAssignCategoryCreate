<?php
namespace Kanboard\Plugin\TaskAssignCategoryCreate;
use Kanboard\Core\Plugin\Base;
use Kanboard\Plugin\TaskAssignCategoryCreate\Action\TaskAssignCategoryCreate;
class Plugin extends Base
{
    public function initialize()
    {
        $this->actionManager->register(new TaskAssignCategoryCreate($this->container));
    }
    public function getPluginName()
    {
        return 'TaskAssignCategoryCreate';
    }

    public function getPluginDescription()
    {
        return t('Automatically assign a category when a task is created');
    }

    public function getPluginAuthor()
    {
        return 'David Morlitz';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

    public function getPluginHomepage()
    {
        return '';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.44';
    }
}
