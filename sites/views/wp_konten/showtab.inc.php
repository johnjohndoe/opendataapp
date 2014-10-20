<?php
$listarray = array ( array ( 'label' => 'Kurz',
                             'name' => 'kurz',
                             'width' => 50, 
                             'type' => 'text',
                             'dbfield' => 'fldKurz' ),                     
                     array ( 'label' => 'Bezeichnung',
                             'name' => 'bez',
                             'width' => 100, 
                             'type' => 'text',
                             'dbfield' => 'fldBez' ),
                     array ( 'label' => 'Oberkonten',
                             'name' => 'gruppe',
                             'width' => 20, 
                             'type' => 'selectid',
                             'dbtable' => 'tblktooberkonten',
                             'seldbfield' => 'fldBez',
                             'seldbindex' => 'fldIndex',
                             'dbfield' => 'fldid_oberkonto' ),
                     array ( 'label' => 'Farbe',
                             'name' => 'farbe',
                             'width' => 100, 
                             'type' => 'text',
                             'dbfield' => 'fldfarbe' ),
                     array ( 'label' => 'Typ',
                             'name' => 'typ',
                             'width' => 50, 
                             'type' => 'text',
                             'dbfield' => 'fldTyp' ));

$filterarray = array ( 
                      array ( 'label' => 'Oberkonten:',
                             'name' => 'oberkonten', 
                             'width' => 10, 
                             'type' => 'selectid',
                             'sign' => '=',
                             'dbtable' => 'tblktooberkonten',
                             'seldbfield' => 'fldBez',
                             'seldbindex' => 'fldIndex',
                             'dbfield' => 'fldid_oberkonto' ),
                       array ( 'label' => 'Typ:',
                             'name' => 'typ', 
                             'value' => '(ohne)',
                             'width' => 10, 
                             'type' => 'select',
                             'sign' => '=',
                             'dbtable' => 'tblktoEATyp',
                             'seldbfield' => 'fldBez',
                             'dbfield' => 'fldTyp' ));
                             
$pararray = array ( 'headline' => 'Konten',
                    'dbtable' => 'tblktokonten',
                    'orderby' => 'fldBez',
                    'strwhere' => '',
                    'fldindex' => 'fldIndex');
?>