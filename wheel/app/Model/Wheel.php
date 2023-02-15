<?php
App::uses('AuthComponent', 'Controller/Component');

class Wheel extends AppModel {
    var $name = "Wheel";
    var $belongsTo = array(
        'Box' => array(
            'className' => 'Box',
            'foreignKey' => 'box_id',
            'conditions' => '',
            'fields' => array('Box.name', 'Box.id'),
            'order' => ''
        ),
        'Location' => array(
            'className' => 'Location',
            'foreignKey' => 'location_id',
            'conditions' => '',
            'fields' => array('Location.name', 'Location.id'),
            'order' => ''
        )
        
       
    );
}
?>