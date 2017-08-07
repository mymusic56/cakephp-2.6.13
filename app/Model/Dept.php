<?php
class Dept extends AppModel {
    public $hasMany = array(
            'User' => array(
                    'className' => 'User',
                    'foreignKey' => 'dept_id'
//                     'conditions' => array('Dept.approved' => '1'),
//                     'order' => 'Recipe.created DESC'
            )
    );
}