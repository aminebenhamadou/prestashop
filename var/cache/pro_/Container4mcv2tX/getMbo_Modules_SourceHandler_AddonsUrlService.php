<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mbo.modules.source_handler.addons_url' shared service.

return $this->services['mbo.modules.source_handler.addons_url'] = new \PrestaShop\Module\Mbo\Module\SourceHandler\AddonsUrlSourceHandler(($this->services['mbo.modules.source_retriever.url'] ?? $this->load('getMbo_Modules_SourceRetriever_UrlService.php')), ($this->services['prestashop.module.sourcehandler.zip'] ?? $this->load('getPrestashop_Module_Sourcehandler_ZipService.php')));
