<?php  
    
/**
* 
*/
class AppActiveRecord extends CActiveRecord
{
    protected function beforeValidate()
    {
        if ($this->isNewRecord) {
            
            $this->created = new CDbExpression('NOW()');
            
            $this->user_id = Yii::app()->user->id;
        }
        
        return parent::beforeValidate();
    }
}


?>