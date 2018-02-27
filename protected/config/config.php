<?php
return array(
    'components'=>array(
        //Database of Magento1
        'mage1' => array(
            'connectionString' => 'mysql:host=172.20.0.3;dbname=erosm1',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'tablePrefix' => '',
            'class' => 'CDbConnection'
        ),
        //Database of Magento2 beta
        'mage2' => array(
            'connectionString' => 'mysql:host=172.20.0.3;dbname=eros3',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'tablePrefix' => '',
            'class' => 'CDbConnection'
        )
    ),

    'import'=>array(
        //This can change for your magento1 version if needed
        //'application.models.db.mage18x.*',
        'application.models.db.mage19x.*',
    )
);
