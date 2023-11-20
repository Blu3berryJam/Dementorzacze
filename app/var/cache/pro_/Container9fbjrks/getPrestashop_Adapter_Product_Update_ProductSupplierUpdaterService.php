<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.update.product_supplier_updater' shared service.

return $this->services['prestashop.adapter.product.update.product_supplier_updater'] = new \PrestaShop\PrestaShop\Adapter\Product\Update\ProductSupplierUpdater(${($_ = isset($this->services['prestashop.adapter.product.repository.product_repository']) ? $this->services['prestashop.adapter.product.repository.product_repository'] : $this->load('getPrestashop_Adapter_Product_Repository_ProductRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.product.combination.repository.combination_repository']) ? $this->services['prestashop.adapter.product.combination.repository.combination_repository'] : $this->load('getPrestashop_Adapter_Product_Combination_Repository_CombinationRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.supplier.repository.supplier_repository']) ? $this->services['prestashop.adapter.supplier.repository.supplier_repository'] : ($this->services['prestashop.adapter.supplier.repository.supplier_repository'] = new \PrestaShop\PrestaShop\Adapter\Supplier\Repository\SupplierRepository())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.product.repository.product_supplier_repository']) ? $this->services['prestashop.adapter.product.repository.product_supplier_repository'] : $this->load('getPrestashop_Adapter_Product_Repository_ProductSupplierRepositoryService.php')) && false ?: '_'});