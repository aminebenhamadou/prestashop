<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mbo.modules.transition_applier' shared service.

return $this->services['mbo.modules.transition_applier'] = new \PrestaShop\Module\Mbo\Module\Workflow\TransitionApplier(($this->services['mbo.modules.transitions_manager'] ?? $this->load('getMbo_Modules_TransitionsManagerService.php')), ($this->services['translator'] ?? $this->getTranslatorService()));
