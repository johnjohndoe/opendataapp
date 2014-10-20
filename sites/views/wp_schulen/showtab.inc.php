<?php
$listarray = array ( array ( 'label' => 'Nr',
                             'width' => 50, 
                             'type' => 'nummer',
                             'dbfield' => 'dummy' ),
                     array ( 'label' => 'PLZ',
                             'name' => 'plz', 
                             'width' => 90, 
                             'type' => 'text',
                             'dbfield' => 'fldpostzustellbezirk' ),
                     array ( 'label' => 'Stadt',
                             'name' => 'stadt', 
                             'width' => 500, 
                             'type' => 'text',
                             'dbfield' => 'fldstadt' ),
                     array ( 'label' => 'Stadtbezirk',
                             'name' => 'bez', 
                             'width' => 500, 
                             'type' => 'text',
                             'dbfield' => 'fldstadtbezirk' ),
                     array ( 'label' => 'Stadtteil',
                             'name' => 'stadtteil', 
                             'width' => 500, 
                             'type' => 'text',
                             'dbfield' => 'fldstadtteil' ),
                     array ( 'label' => 'Adresse',
                             'name' => 'adresse', 
                             'width' => 500, 
                             'type' => 'text',
                             'dbfield' => 'fldadresse' ),
                     array ( 'label' => 'Name',
                             'name' => 'name',
                             'width' => 500, 
                             'type' => 'text',
                             'linkfield' => 'fldlink',
                             'dbfield' => 'fldname' ),
                     array ( 'label' => 'Schulart',
                             'name' => 'schulart',
                             'width' => 250, 
                             'type' => 'text',
                             'dbfield' => 'fldschulart' ),
                     array ( 'label' => 'Schultyp',
                             'name' => 'schultyp',
                             'width' => 50, 
                             'type' => 'text',
                             'dbfield' => 'fldschultyp' ),
                     array ( 'label' => 'X-Koor',
                             'name' => 'xkoor',
                             'width' => 50, 
                             'type' => 'text',
                             'fieldhide' => 'true1',
                             'dbfield' => 'fldxkoor' ),
                     array ( 'label' => 'Y-Koor',
                             'name' => 'ykoor',
                             'width' => 50, 
                             'type' => 'text',
                             'fieldhide' => 'true1',
                             'dbfield' => 'fldykoor' ),
                     array ( 'label' => 'Link',
                             'name' => 'link',
                             'width' => 50, 
                             'type' => 'text',
                             'fieldhide' => 'true1',
                             'dbfield' => 'fldlink' ),
                     array ( 'label' => '',
                             'width' => 5, 
                             'type' => 'icon',
                             'func' => 'singlegooglemap.php',
                             'dbfield' => 'icon-book' ) );

$filterarray = array ( 
//                       array ( 'label' => 'Stadt:',
//                               'name' => 'stadt', 
//                               'width' => 10, 
//                               'type' => 'select',
//                               'sign' => '=',
//                               'dbtable' => 'tblorte',
//                               'seldbfield' => 'fldbez',
//                               'dbfield' => 'fldstadt' ),
                       array ( 'label' => 'Schultyp:',
                               'name' => 'schultyp', 
                               'width' => 10, 
                               'type' => 'select',
                               'sign' => '=',
                               'dbtable' => 'tblschultyp',
                               'seldbfield' => 'fldbez',
                               'dbfield' => 'fldschultyp' ),
                       array ( 'label' => 'Schulart:',
                               'name' => 'schulart', 
                               'width' => 10, 
                               'type' => 'select',
                               'sign' => '=',
                               'dbtable' => 'tblschulart',
                               'seldbfield' => 'fldbez',
                               'dbfield' => 'fldschulart' ),
//                       array ( 'label' => 'Stadtteil:',
//                               'name' => 'stadtteil', 
//                               'width' => 10, 
//                               'type' => 'select',
//                               'sign' => '=',
//                               'dbtable' => 'tblstadtteil',
//                               'seldbfield' => 'fldbez',
//                               'selorder' => 'fldbez',
//                               'dbfield' => 'fldschulart' ),
                       array ( 'label' => 'Stadtbezirk:',
                               'name' => 'schulbezirk', 
                               'width' => 10, 
                               'type' => 'select',
                               'sign' => '=',
                               'dbtable' => 'tblstadtbezirk',
                               'seldbfield' => 'fldbez',
                               'dbfield' => 'fldstadtbezirk' ));


$pararray = array ( 'headline' => 'Schulen',
                    'dbtable'  => 'tblschulen',
                    'orderby'  => 'fldstadtbezirk',
                    'strwhere' => '',
                    'fldindex' => 'fldindex');
?>