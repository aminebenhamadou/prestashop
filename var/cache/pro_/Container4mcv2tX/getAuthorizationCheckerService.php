<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\Mbo\Api\Security\AuthorizationChecker' shared service.

return $this->services['PrestaShop\\Module\\Mbo\\Api\\Security\\AuthorizationChecker'] = new \PrestaShop\Module\Mbo\Api\Security\AuthorizationChecker(($this->services['doctrine.cache.provider'] ?? $this->getDoctrine_Cache_ProviderService()), ($this->services['mbo.cdc.client.distribution_api'] ?? $this->load('getMbo_Cdc_Client_DistributionApiService.php')), ($this->services['mbo.security.admin_authentication.provider'] ?? $this->load('getMbo_Security_AdminAuthentication_ProviderService.php')));
