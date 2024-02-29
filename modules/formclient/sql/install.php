<?php
/**
* 2007-2023 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2023 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

//$sql[] = 'ALTER TABLE `' . _DB_PREFIX_ . 'customer` ADD `societe` VARCHAR(255) NOT NULL AFTER `lastname`;';
/*$sql = array();
$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'formclient` (
    `id_formclient` int(10) NOT NULL AUTO_INCREMENT,
    `id_customer` INT(10) NOT NULL,
    `societe` varchar(255) NOT NULL,
    
    PRIMARY KEY  (`id_formclient`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

foreach ($sql as $query) {
    if (false == Db::getInstance()->execute($query)) {
        return false;
    }
}

return true;
*/

$sql = array();
$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'formclient` (
    `id_formclient` int(10) NOT NULL AUTO_INCREMENT,
    `id_customer` INT(10) NOT NULL,
    `societe` varchar(255) NOT NULL,
    `Telephone` varchar(255) NOT NULL,
    `Pays` varchar(255) NOT NULL,
    `image` varchar(255) NOT NULL, 

    PRIMARY KEY  (`id_formclient`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

foreach ($sql as $query) {
    if (false == Db::getInstance()->execute($query)) {
        return false;
    }
}

// Jointure avec la table customer
$sql = 'SELECT *
        FROM `' . _DB_PREFIX_ . 'formclient` AS fc
        INNER JOIN `' . _DB_PREFIX_ . 'customer` AS c ON fc.id_customer = c.id_customer';

$result = Db::getInstance()->executeS($sql);

if ($result === false) {
    return false;
}

return true;
