<?php
$listarray = array ( array ( 'label' => 'Nr',
                             'width' => 10, 
                             'type' => 'nummer',
                             'dbfield' => 'dummy' ),
                     array ( 'label' => 'Bezeichnung',
                             'name' => 'bez',
                             'width' => 500, 
                             'type' => 'text',
                             'dbfield' => 'fldname' ),                     
                     array ( 'label' => 'Stadtbezirk',
                             'name' => 'stadtbezirk', 
                             'width' => 500, 
                             'type' => 'text',
                             'dbfield' => 'fldstadtbezirk'), 
                     array ( 'label' => 'Stadtteil',
                             'name' => 'stadtteil', 
                             'width' => 500, 
                             'type' => 'text',
                             'dbfield' => 'fldstadtteil'), 
                     array ( 'label' => 'Spielplatzpaten',
                             'name' => 'spielplatzpaten', 
                             'width' => 5, 
                             'type' => 'text',
                             'dbfield' => 'fldspielplatzpaten'), 
                     array ( 'label' => 'Tischtennis',
                             'name' => 'tischtennis', 
                             'width' => 5, 
                             'type' => 'text',
                             'dbfield' => 'fldtischtennis'), 
                     array ( 'label' => 'X-Koor',
                             'name' => 'xkoor',
                             'width' => 10, 
                             'type' => 'text',
                             'dbfield' => 'fldxkoor' ),
                     array ( 'label' => 'Y-Koor',
                             'name' => 'ykoor',
                             'width' => 10, 
                             'type' => 'text',
                             'dbfield' => 'fldykoor' ),
                     array ( 'label' => 'Type',
                             'name' => 'type',
                             'fieldhide' => 'true', 
                             'width' => 20, 
                             'type' => 'text',
                             'dbfield' => 'fldtype' ),
                     array ( 'label' => '',
                             'width' => 5, 
                             'type' => 'icon',
                             'func' => 'singlegooglemap.php',
                             'dbfield' => 'icon-book' ) );

$filterarray = array ( 
                       array ( 'label' => 'Stadtbezirk:',
                               'name' => 'stadtbezirk', 
                               'width' => 10, 
                               'type' => 'select',
                               'sign' => '=',
                               'dbtable' => 'tblstadtbezirk',
                               'seldbfield' => 'fldbez',
                               'dbfield' => 'fldstadtbezirk' ),
                       array ( 'label' => 'Stadtteil:',
                               'name' => 'fltstadtteil', 
                               'width' => 10, 
                               'type' => 'select',
                               'sign' => '=',
                               'dbtable' => 'tblstadtteil',
                               'seldbfield' => 'fldbez',
                               'selorder' => 'fldbez',
                               'dbfield' => 'fldstadtteil' ));


$pararray = array ( 'headline' => 'Spielpl&aumltze',
                    'dbtable' => 'tblmarkers',
                    'orderby' => '',
                    'strwhere' => '',
                    'fldindex' => 'fldindex');
?>