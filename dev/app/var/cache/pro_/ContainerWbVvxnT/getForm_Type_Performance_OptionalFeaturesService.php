<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.performance.optional_features' shared service.

return $this->services['form.type.performance.optional_features'] = new \PrestaShopBundle\Form\Admin\AdvancedParameters\Performance\OptionalFeaturesType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['prestashop.adapter.combination_feature'] ?? $this->load('getPrestashop_Adapter_CombinationFeatureService.php'))->isUsed());