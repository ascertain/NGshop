<div class="filter standard">
    <div class="select js_filterparent <?= $this->currentValue ? 'active' : '' ?>">
        <input class="js_optionvaluefield" type="hidden" name="<?= $this->fieldname ?>" value="<?= $this->currentValue ?>" />
        <div class="selection">
            <div class="head">
                <span class="arrow js_icon <?= $this->currentValue ? 'js_reset_filter' : '' ?>"></span>
                <span class="name"><?= $this->label ?></span>
            </div>
            <div class="actual">
                <span class="value"></span>
                <span class="text js_curent_selection_text"><?= $this->objects[$this->currentValue] ? $this->objects[$this->currentValue]->getName()  : "" ?></span>
            </div>
        </div>
        <div class="options js_options">
            <ul>
                <?php foreach($this->values as $value) { ?>
                    <?php $object =$this->objects[$value['value']] ?>
                    <?php if($object && $object->isPublished()) { ?>
                        <li><span class="option js_optionfilter_option" rel="<?= $value['value'] ?>"><?= $object->getName() ?>  ( <?= $value['count'] ?> ) </span></li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>