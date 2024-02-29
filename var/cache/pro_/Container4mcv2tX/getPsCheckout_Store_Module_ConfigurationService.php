<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.store.module.configuration' shared service.

return $this->services['ps_checkout.store.module.configuration'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ConfigurationModule(($this->services['ps_checkout.pay_later.configuration'] ?? $this->load('getPsCheckout_PayLater_ConfigurationService.php')), ($this->services['ps_checkout.express_checkout.configuration'] ?? $this->load('getPsCheckout_ExpressCheckout_ConfigurationService.php')), ($this->services['ps_checkout.paypal.configuration'] ?? $this->load('getPsCheckout_Paypal_ConfigurationService.php')), ($this->services['ps_checkout.funding_source.provider'] ?? $this->load('getPsCheckout_FundingSource_ProviderService.php')), ($this->services['ps_checkout.module'] ?? $this->load('getPsCheckout_ModuleService.php')));