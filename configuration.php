<?php

use Icinga\Application\Icinga;
use Icinga\Authentication\Auth;


$themingConfig = Icinga::app()->getConfig()->getSection('themes');
$defaultTheme = $themingConfig->get('default');

$theme = null;
if ($defaultTheme !== null) {
  $theme = $defaultTheme;
}

if (! (bool) $themingConfig->get('disabled', false)) {
  $auth = Auth::getInstance();
  if ($auth->isAuthenticated()) {
    $userTheme = $auth->getUser()->getPreferences()->getValue('icingaweb', 'theme');
    if ($userTheme !== null) {
      $theme = $userTheme;
    }
  }
}

if ($theme == "unicorn/unicorn") {
  $this->provideJsFile('unicorn.js');
}
?>
