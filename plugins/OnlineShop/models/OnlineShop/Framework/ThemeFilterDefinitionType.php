<?php

/**
 * Abstract base class for filter definition type field collections for category filter
 */
abstract class OnlineShop_Framework_ThemeFilterDefinitionType extends OnlineShop_Framework_AbstractFilterDefinitionType {

    /**
     * @return string
     */
    public function getField() {
        if($this->getIncludeParentTheme()) {
            return "theme";
        } else {
            return "theme";
        }
    }

    /**
     * @return bool
     */
    public function getIncludeParentTheme() {
        return false;
    }

}