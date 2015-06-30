<?php

class PimTools_ImportReport extends Pimcore_Model_Abstract {

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var int
     */
    public $importDate;

    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $type;

    /**
     * @var boolean
     */
    public $state;

    /**
     * @var int
     */
    public $processedDate;


    /** Optional log message
     * @var
     */
    public $message;


    /**
     * @var int
     */
    public $userId;


    public static function getById($id) {
        try {
            $importReport = new self();
            $importReport->getResource()->getById($id);
            return $importReport;
        } catch(Exception $ex) {
            Logger::debug($ex->getMessage());
            return null;
        }
    }

    public static function getActions() {
        try {
            $importReport = new self();
            return $importReport->getResource()->getActions();
        } catch(Exception $ex) {
            Logger::debug($ex->getMessage());
            return null;
        }
    }

    public static function getTypes() {
        try {
            $importReport = new self();
            return $importReport->getResource()->getTypes();
        } catch(Exception $ex) {
            Logger::debug($ex->getMessage());
            return null;
        }
    }


    /**
     * @param array $values
     * @return PimTools_ImportReport
     */
    public static function create($values = array()) {
        $template = new self();
        $template->setValues($values);
        return $template;
    }

    /**
     * @return void
     */
    public function save() {
       // $this->setModificationDate(time());
        $this->getResource()->save();
    }

    /**
     * @return void
     */
    public function delete() {
        $this->getResource()->delete();
    }

    public function __toString() {
        return ucfirst("ImportReport " . $this->getId());
    }

    /**
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $importDate
     */
    public function setImportDate($importDate)
    {
        $this->importDate = $importDate;
    }

    /**
     * @return int
     */
    public function getImportDate()
    {
        return $this->importDate;
    }

    /**
     * @param int $processedDate
     */
    public function setProcessedDate($processedDate)
    {
        $this->processedDate = $processedDate;
    }

    /**
     * @return int
     */
    public function getProcessedDate()
    {
        return $this->processedDate;
    }

    /**
     * @param int $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param boolean $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return boolean
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param $message
     */
    public function setMessage($message) {
        $this->message = $message;
    }

    /** returns the message.
     * @return string|null
     */
    public function getMessage() {
        return $this->message;
    }



}
