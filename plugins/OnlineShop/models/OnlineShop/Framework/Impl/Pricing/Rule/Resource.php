<?php

class OnlineShop_Framework_Impl_Pricing_Rule_Resource extends \Pimcore\Model\Resource\AbstractResource
{

    const TABLE_NAME = 'plugin_onlineshop_pricing_rule';

    /**
     * Contains all valid columns in the database table
     *
     * @var array
     */
    protected $validColumns = array();

    /**
     * @var array
     */
    protected $fieldsToSave = array('name', 'label', 'description', 'behavior', 'active', 'prio', 'condition', 'actions');

    /**
     * @var array
     */
    protected $localizedFields = array('label', 'description');

    /**
     * Get the valid columns from the database
     *
     * @return void
     */
    public function init()
    {
        $this->validColumns = $this->getValidTableColumns(self::TABLE_NAME);
    }

    /**
     * @param $id
     *
     * @throws Exception
     */
    public function getById($id)
    {
        $classRaw = $this->db->fetchRow('SELECT * FROM ' . self::TABLE_NAME . ' WHERE id=' . $this->db->quote($id));
        if(empty($classRaw)) {
            throw new Exception('pricing rule ' . $id . ' not found.');
        }
        $this->assignVariablesToModel($classRaw);
    }


    /**
     * Create a new record for the object in database
     *
     * @return boolean
     */
    public function create()
    {
        $this->db->insert(self::TABLE_NAME, array());
        $this->model->setId($this->db->lastInsertId());

        $this->save();
    }

    /**
     * Save object to database
     *
     * @return void
     */
    public function save()
    {
        if ($this->model->getId())
            return $this->update();

        return $this->create();
    }

    /**
     * @return void
     */
    public function update()
    {
        foreach ($this->fieldsToSave as $field) {
            if (in_array($field, $this->validColumns)) {
                $getter = 'get' . ucfirst($field);

                if(in_array($field, $this->localizedFields))
                {
                    // handle localized Fields
                    $localizedValues = array();
                    foreach(Pimcore_Tool::getValidLanguages() as $lang)
                    {
                        $localizedValues[ $lang ] = $value = $this->model->$getter($lang);
                    }
                    $value = $localizedValues;
                }
                else
                {
                    // normal case
                    $value = $this->model->$getter();
                }

                if (is_array($value) || is_object($value)) {
                    $value = serialize($value);
                } else  if(is_bool($value)) {
                    $value = (int)$value;
                }
                $data[$field] = $value;
            }
        }

        $this->db->update(self::TABLE_NAME, $data, 'id=' . $this->db->quote($this->model->getId()));
    }

    /**
     * Deletes object from database
     *
     * @return void
     */
    public function delete()
    {
        $this->db->delete(self::TABLE_NAME, 'id=' . $this->db->quote($this->model->getId()));
    }

    /**
     * @param array $fields
     */
    public function setFieldsToSave(array $fields)
    {
        $this->fieldsToSave = $fields;
    }

}
