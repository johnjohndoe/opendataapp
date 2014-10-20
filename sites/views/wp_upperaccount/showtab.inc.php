<?php
$listarray = array ( array ( 'label' => 'Bezeichnung',
                             'name' => 'bez', 
                             'width' => 100, 
                             'type' => 'text',
                             'dbfield' => 'fldBez' ),
//                     array ( 'label' => 'Kurz',
//                             'name' => 'kurz', 
//                             'width' => 100, 
//                             'type' => 'text',
//                             'dbfield' => 'fldKurz' ),
                     array ( 'label' => 'Kontengruppe',
                             'name' => 'kontengruppe',
                             'fieldhide' => 'true1', 
                             'default' => '(ohne)',
                             'width' => 100, 
                             'type' => 'selectid',
                             'dbtable' => 'tblktogrp_liste',
                             'seldbfield' => 'fldbez',
                             'seldbindex' => 'fldindex',
                             'dbfield' => 'fldid_ktogrp' ),
                     array ( 'label' => 'Typ',
                             'name' => 'typ', 
                             'width' => 100, 
                             'type' => 'text',
                             'dbfield' => 'fldTyp' ));

$filterarray = array ( array ( 'label' => 'Kontengruppe:',
                               'name' => 'fltktogrp', 
                               'value' => '',
                               'width' => 10, 
                               'type' => 'selectid',
                               'dbtable' => 'tblktogrp_liste',
                               'seldbfield' => 'fldbez',
                               'seldbindex' => 'fldindex',
                               'sign' => '=',
                               'dbfield' => 'fldid_ktogrp' ));

$pararray = array ( 'headline' => 'Oberkonten',
                    'dbtable' => 'tblktooberkonten',
                    'orderby' => '',
                    'strwhere' => '',
                    'fldindex' => 'fldIndex');
?>