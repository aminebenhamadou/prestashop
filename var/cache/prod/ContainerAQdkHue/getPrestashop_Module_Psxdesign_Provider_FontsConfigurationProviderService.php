<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.psxdesign.provider.fonts_configuration_provider' shared service.

return $this->services['prestashop.module.psxdesign.provider.fonts_configuration_provider'] = new \PrestaShop\Module\PsxDesign\Provider\ThemeConfiguration\FontsConfigurationProvider(($this->services['prestashop.module.psxdesign.repository.psxdesign_fonts_repository'] ?? $this->load('getPrestashop_Module_Psxdesign_Repository_PsxdesignFontsRepositoryService.php')), ($this->services['prestashop.module.psxdesign.utility.theme_configuration.font_utility'] ?? $this->load('getPrestashop_Module_Psxdesign_Utility_ThemeConfiguration_FontUtilityService.php')), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->shop->id);
