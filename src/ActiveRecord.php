<?php

/**
 * @link http://poodev.github.io/
 * @copyright Copyright (c) 2019 MPu Technology
 * @license http://poodev.github.io/license/
 */

namespace poo\db;

/**
 * ActiveRecord is the base class for classes representing relational data in terms of objects.
 * 
 * This class wrapping 'findX' function that return ActiveQuery with 'queryX' function.
 * Aimed for name consistency.
 * So, findX function only result data (array). Maybe will be replace with fetchX function.
 * 
 * @author Agus Suhartono <agus.suhartono@gmail.com>
 * @since 1.0.0-alpha1
 */
class ActiveRecord extends \yii\db\ActiveRecord
{

    /**
     * Return ActiveQueri of ActiveRecord
     * 
     * @return yii/db/ActiveQuery the newly created [[yii/db/ActiveQuery]] instance.
     */
    public static function query()
    {
        return static::find();
    }    
    
    /**
     * Creates an [[ActiveQuery]] instance with a given SQL statement.
     * 
     * @param string $sql the SQL statement to be executed
     * @param array $params parameters to be bound to the SQL statement during execution.
     * @return yii/db/ActiveQuery the newly created [[yii/db/ActiveQuery]] instance.
     */
    public static function queryBySql($sql, $params = [])
    {
        return static::findBySql($sql, $params);
    }       
   
    /**
     * Get ActiveQuery of ActiveRecord with condition
     * 
     * @param mixed $condition please refer to [[findOne()]] for the explanation of this parameter
     * @return yii/db/ActiveQuery the newly created [[yii/db/ActiveQuery]] instance.
     */
    protected static function queryByCondition($condition) 
    {
        return static::findByCondition($condition);
    }

}
