<ul class="views">
    <li <?= $this->app->checkMenuSelection('ProjectOverviewController') ?>>
        <i class="fa fa-eye fa-fw"></i>
        <?= $this->url->link(t('Overview'), 'ProjectOverviewController', 'show', array('project_id' => $project['id'], 'search' => $filters['search']), false, 'view-overview', t('Keyboard shortcut: "%s"', 'v o')) ?>
    </li>
    <li <?= $this->app->checkMenuSelection('Board') ?>>
        <i class="fa fa-th fa-fw"></i>
        <?= $this->url->link(t('Board'), 'board', 'show', array('project_id' => $project['id'], 'search' => $filters['search']), false, 'view-board', t('Keyboard shortcut: "%s"', 'v b')) ?>
    </li>
    <li <?= $this->app->checkMenuSelection('Calendar') ?>>
        <i class="fa fa-calendar fa-fw"></i>
        <?= $this->url->link(t('Calendar'), 'CalendarController', 'show', array('project_id' => $project['id'], 'search' => $filters['search']), false, 'view-calendar', t('Keyboard shortcut: "%s"', 'v c')) ?>
    </li>
    <li <?= $this->app->checkMenuSelection('TaskListController') ?>>
        <i class="fa fa-list fa-fw"></i>
        <?= $this->url->link(t('List'), 'TaskListController', 'show', array('project_id' => $project['id'], 'search' => $filters['search']), false, 'view-listing', t('Keyboard shortcut: "%s"', 'v l')) ?>
    </li>
    <?php if ($this->user->hasProjectAccess('gantt', 'project', $project['id'])): ?>
    <li <?= $this->app->checkMenuSelection('Gantt') ?>>
        <i class="fa fa-sliders fa-fw"></i>
        <?= $this->url->link(t('Gantt'), 'gantt', 'project', array('project_id' => $project['id'], 'search' => $filters['search']), false, 'view-gantt', t('Keyboard shortcut: "%s"', 'v g')) ?>
    </li>
    <?php endif ?>
</ul>
