<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.performance.optional_features' shared service.

return $this->services['form.type.performance.optional_features'] = new \PrestaShopBundle\Form\Admin\AdvancedParameters\Performance\OptionalFeaturesType(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getLanguages(), ${($_ = isset($this->services['prestashop.adapter.combination_feature']) ? $this->services['prestashop.adapter.combination_feature'] : $this->load('getPrestashop_Adapter_CombinationFeatureService.php')) && false ?: '_'}->isUsed());
