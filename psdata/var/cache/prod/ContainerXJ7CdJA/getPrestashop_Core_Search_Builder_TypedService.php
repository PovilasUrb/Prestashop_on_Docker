<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.search.builder.typed' shared service.

return $this->services['prestashop.core.search.builder.typed'] = new \PrestaShop\PrestaShop\Core\Search\Builder\TypedFiltersBuilder(($this->services['prestashop.core.search.builder.class'] ?? ($this->services['prestashop.core.search.builder.class'] = new \PrestaShop\PrestaShop\Core\Search\Builder\ClassFiltersBuilder())), new RewindableGenerator(function () {
    yield 0 => ($this->services['prestashop.core.search.builder.typed_builder.product_combination_filters_builder'] ?? ($this->services['prestashop.core.search.builder.typed_builder.product_combination_filters_builder'] = new \PrestaShop\PrestaShop\Core\Search\Builder\TypedBuilder\ProductCombinationFiltersBuilder()));
}, 1));