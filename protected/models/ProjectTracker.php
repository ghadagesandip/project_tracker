<?php

abstract class ProjectTracker extends CActiveRecord{

    protected function beforeValidate(){

        if($this->getIsNewRecord()){
        	if($this->hasAttribute('created')){
        		$this->created = new CDbExpression('now()');	
        	}
            
        	
//            $this->create_user_id = Yii::app()->user->id;
        }else{
            if($this->hasAttribute('created')){
        		$this->modified = new CDbExpression('now()');	
        	}
  //          $this->update_user_id = Yii::app()->user->id;
        }
        return parent::beforeValidate();
    }
}