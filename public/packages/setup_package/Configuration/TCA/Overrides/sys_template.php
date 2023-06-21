<?php
defined('TYPO3') or die();
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(function()
{
   /**
    * Extension key
    */
   $extensionKey = 'setup_package';

   /**
    * Default TypoScript
    */
   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
      $extensionKey,
      'Configuration/TypoScript',
      'Typoscript constants & setup in folder packages'
   );
});