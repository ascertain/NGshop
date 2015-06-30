<?php

class Website_Theme extends Object_Theme {

    public static function getTopLevelThemes() {
       //Pimcore_Config::getWebsiteConfig()->shopCategoriesFolder;
		$themes=new Object_Theme_List();
        $productthemes = array();
        foreach($themes as $theme) {
           
                $productthemes[] = $theme;
         
        }
        return $productthemes;
    }

  public function getNavigationPath() {

        $topLevel = $this;
        $categories = array();
        $root = Object_Abstract::getById(47); //Pimcore_Config::getWebsiteConfig()->shopCategoriesFolder;
        while($topLevel && $topLevel->getId() != $root->getId()) {
            $categories[] = $topLevel;
            $topLevel = $topLevel->getParent();
        }

        $categories = array_reverse($categories);

        $path = '';

        foreach($categories as $category) {
            $path .= Website_Tool_Text::toUrl($category->getText()).'/';
        }

        $path = substr($path, 0, strlen($path)-1);

        return $path;

    }



}