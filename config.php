<?php

use humhub\modules\dashboard\widgets\Sidebar;

return [
    'id' => 'quotes',
    'class' => 'humhub\modules\quotes\Module',
    'namespace' => 'humhub\modules\quotes',
    'events' => array(
        array('class' => Sidebar::className(), 'event' => Sidebar::EVENT_INIT, 'callback' => array('humhub\modules\quotes\Module', 'onSidebarInit')),
    ),
];
?>
