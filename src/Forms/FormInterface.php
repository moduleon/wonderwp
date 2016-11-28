<?php

namespace WonderWp\Forms;

use WonderWp\Forms\Fields\FieldInterface;

/**
 * Interface FormInterface
 * @package WonderWp\Forms
 */
interface FormInterface
{
    /**
     * @return mixed
     */
    public function getName();

    /**
     * @param string $name
     * @return mixed
     */
    public function setName($name);

    /**
     * @return mixed
     */
    public function getFields();

    /**
     * @param mixed $fields
     */
    public function setFields($fields);

    /**
     * @return mixed
     */
    public function getErrors();

    /**
     * @param mixed $errors
     */
    public function setErrors($errors);

    /**
     * @param fieldInterface $field
     * @return mixed
     */
    public function addField(FieldInterface $field = null);

    /**
     * @param $fieldName
     * @return mixed
     */
    public function getField($fieldName);

    /**
     * @return mixed
     */
    public function getGroups();

    /**
     * @param $groups
     * @return mixed
     */
    public function setGroups($groups);

    /**
     * @param FormGroup $group
     * @return mixed
     */
    public function addGroup(FormGroup $group);

    public function fill(array $data);

}