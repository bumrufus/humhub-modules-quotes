<?php

use humhub\modules\dashboard\widgets\Sidebar;

return [
    'id' => 'quotes',
    'class' => 'humhub\modules\quotes\Module',
    'namespace' => 'humhub\modules\quotes',
    'events' => [
        ['class' => Sidebar::className(), 'event' => Sidebar::EVENT_INIT, 'callback' => ['humhub\modules\quotes\Module', 'onSidebarInit']],
    ],
];
