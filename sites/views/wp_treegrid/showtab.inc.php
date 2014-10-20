<?php
$listarray = array ( array ( 'label' => 'Bezeichnung',
                             'name' => 'bez', 
                             'width' => 100, 
                             'type' => 'text',
                             'dbfield' => 'fldbez' ),
                     array ( 'label' => 'Adresse',
                             'name' => 'adresse', 
                             'width' => 20, 
                             'type' => 'selectid',
                             'sign' => '=',
                             'dbtable' => 'tbladr_liste',
                             'seldbfield' => 'fldcompany',
                             'seldbindex' => 'fldindex',
                             'dbfield' => 'fldan_ind' ),
                     array ( 'label' => 'Datum',
                             'name' => 'datum', 
                             'width' => 20, 
                             'type' => 'date',
                             'dbfield' => 'fldversendet' ),
                     array ( 'label' => 'Datei',
                             'name' => 'datei', 
                             'fieldhide' => 'true',
                             'width' => 20, 
                             'type' => 'text',
                             'dbfield' => 'fldfilename' ),
                     array ( 'label' => '',
                             'width' => 5, 
                             'type' => 'icon',
                             'func' => 'pdffunc.php',
                             'dbfield' => 'icon-file' ) );

$pararray = array ( 'headline' => 'Korrespondenz',
                    'dbtable' => 'tbldocman_brfverkehr',
                    'treegrid' => 'true',
                    'orderby' => 'fldsort',
                    'strwhere' => '',
                    'fldindex' => 'fldindex');
?>