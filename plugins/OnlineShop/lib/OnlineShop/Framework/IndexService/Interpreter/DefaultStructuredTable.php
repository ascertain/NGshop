<?php

class OnlineShop_Framework_IndexService_Interpreter_DefaultStructuredTable implements OnlineShop_Framework_IndexService_Interpreter {

    public static function interpret($value, $config = null) {
        if($value instanceof \Pimcore\Model\Object\Data\StructuredTable) {
            $data = $value->getData();
            return $data[$config->row][$config->column];
        }
        return null;
    }
}
