<?php
/**
 * Created by JetBrains PhpStorm.
 * User: cfasching
 * Date: 21.11.11
 * Time: 14:16
 * To change this template use File | Settings | File Templates.
 *
 * @see http://www.pimcore.org/en/resources/extensions/edit/OnlineShop
 */
 
if($revision == 18) {

    $db = Pimcore_Resource::get();

    $db->query("ALTER TABLE plugin_onlineshop_cartitem
      ADD comment LONGTEXT ASCII AFTER parentItemKey;
    ");
}

if($revision == 38) {

    $db = Pimcore_Resource::get();

    $db->query("ALTER TABLE plugin_onlineshop_cartitem
      ADD `addedDateTimestamp` int(10) NOT NULL AFTER comment;
    ");
}

if($revision == 47) {

    $db = Pimcore_Resource::get();

    $db->query("ALTER TABLE plugin_onlineshop_cart
      ADD `modificationDateTimestamp` int(10) NOT NULL AFTER creationDateTimestamp;
    ");
}