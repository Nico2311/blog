<?php
namespace BlogFram;

class NotNullValidator extends Validator
{
    public function isValid($value)
    {
        return $value != '';
    }
}