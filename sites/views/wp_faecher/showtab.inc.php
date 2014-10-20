<?php
$listarray = array ( array ( 'label' => 'Nr',
                             'width' => 20, 
                             'type' => 'nummer',
                             'dbfield' => 'dummy' ),
                     array ( 'label' => 'Bezeichnung',
                             'name' => 'bez', 
                             'width' => 500, 
                             'type' => 'text',
                             'dbfield' => 'fldBez' ),
                     array ( 'label' => 'Kurz',
                             'name' => 'kurz', 
                             'width' => 500, 
                             'type' => 'combi',
                             'dbfield' => 'flddummy' ),
                     array ( 'label' => 'F-Nr',
                             'name' => 'nummer', 
                             'width' => 50, 
                             'type' => 'text',
                             'dbfield' => 'fldnummer' ),
                     array ( 'label' => 'Möbel',
                             'name' => 'moebel', 
                             'fldort' => 'fldind_zimmer',
                             'getdefault' => 'true',
                             'width' => 500, 
                             'type' => 'selectid',
                             'sign' => '=',
                             'dbtable' => 'tblorte',
                             'seldbfield' => 'fldBez',
                             'seldbindex' => 'fldIndex',
                             'seldbwhere' => "fldo01typ='MOEBEL'",
                             'dbfield' => 'fldind_moebel' ),
                     array ( 'label' => 'Zimmer',
                             'name' => 'zimmer', 
                             'width' => 500,
                             'getdefault' => 'true', 
                             'type' => 'selectid',
                             'sign' => '=',
                             'dbtable' => 'tblorte',
                             'seldbfield' => 'fldBez',
                             'seldbindex' => 'fldIndex',
                             'seldbwhere' => "fldo01typ='ZIMMER'",
                             'dbfield' => 'fldind_zimmer' ),
                     array ( 'label' => 'Bild',
                             'name' => 'bild', 
                             'fieldhide' => 'true',
                             'width' => 20, 
                             'type' => 'blobid',
                             'dbfield' => 'fldbildid' ),
                     array ( 'label' => 'Prozent',
                             'name' => 'proz', 
                             'width' => 100, 
                             'type' => 'procent',
                             'dbfield' => 'fldproz' ),
                     array ( 'label' => 'Typ',
                             'name' => 'typ',
                             'default' => 'FACH',
                             'fieldhide' => 'true', 
                             'width' => 500, 
                             'type' => 'text',
                             'dbfield' => 'fldo01typ' ));

$filterarray = array ( array ( 'label' => 'Zimmer:',
                             'name' => 'zimmer', 
                             'width' => 10, 
                             'type' => 'selectid',
                             'sign' => '=',
                             'dbtable' => 'tblorte',
                             'seldbfield' => 'fldBez',
                             'seldbindex' => 'fldIndex',
                             'selwhere' => "fldo01typ='ZIMMER'",
                             'dbfield' => 'fldind_zimmer' ),
                       array ( 'label' => 'Möbel:',
                             'name' => 'moebel', 
                             'width' => 10, 
                             'type' => 'selectid',
                             'sign' => '=',
                             'dbtable' => 'tblorte',
                             'seldbfield' => 'fldBez',
                             'seldbindex' => 'fldIndex',
                             'selwhere' => "fldo01typ='MOEBEL'",
                             'dbfield' => 'fldind_moebel' ));

$pararray = array ( 'headline' => 'Fächer',
                    'dbtable' => 'tblorte',
                    'orderby' => 'fldsort,fldind_moebel',
                    'strwhere' => "fldo01typ='FACH'",
                    'updateaktual' => 'true',
                    'fldindex' => 'fldIndex');
?>