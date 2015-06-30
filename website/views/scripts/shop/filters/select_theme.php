<?php
// init
$values = $this->values;

// resort values
$valuesIndex = array();
foreach($this->values as $entry)
{
    $valuesIndex[ $entry['value'] ] = $entry['count'];
}

// category to show
if($this->currentValue)
{
    $current = Object_Theme::getById( $this->currentValue );
}
?>
<div class="filterSection gradient js_filterparent" id="filter-categories">
    <h4 class="title"><?=   $this->label ?></h4>
    <?php if($current): ?>
    <input type="hidden" name="themeid" value="<?= $current->getId() ?>" />
    <?php endif; ?>

    <?php
    $view = $this;
    /**
     * @param Object_ProductCategory_List $categories
     * @param integer                     $level
     */
    $printThemes = function($themes, $level) use (&$printThemes, $current, $valuesIndex, $view){
        ?>
        <ul class="level-<?= $level ?>">
            <?php

            $front = Zend_Controller_Front::getInstance();
            $request = $front->getRequest();

            foreach($themes as $theme): /* @var Object_ProductCategory $category */

                // init
                $classes = array();

                // ...
               


                // print category name
                $link = sprintf('<a href="%s" class="name">%s</a>',
                    $view->url(array('country' => $request->getParam('country'), 'name' => $theme->getNavigationPath(), 'theme' => $theme->getId()), "ngeshop-theme-products", true),
                    $theme->getText()
                );



                ?>
                <li class="<?= implode(' ', $classes) ?>">
                    <?php
                    echo $link;

                
                    ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <?php
    };

    // print root categorys
    $printThemes( Website_Theme::getTopLevelThemes(), 0 );
    ?>
</div>
