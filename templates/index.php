<?php

declare(strict_types=1);

use OCP\Util;

Util::addScript(OCA\NextcloudCRM\AppInfo\Application::APP_ID, OCA\NextcloudCRM\AppInfo\Application::APP_ID . '-main');
Util::addStyle(OCA\NextcloudCRM\AppInfo\Application::APP_ID, OCA\NextcloudCRM\AppInfo\Application::APP_ID . '-main');

?>

<div id="nextcloudcrm"></div>
