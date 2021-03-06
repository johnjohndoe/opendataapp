<?php
$listarray = array ( 
                     array ( 'label' => 'WT',
                             'name' => 'weekday', 
                             'width' => 100, 
                             'type' => 'wday',
                             'dbfield' => 'flddatum' ),
                     array ( 'label' => 'Datum',
                             'name' => 'datum', 
                             'width' => 100, 
                             'type' => 'date',
                             'dbfield' => 'flddatum' ),
                     array ( 'label' => 'Von Uhrzeit',
                             'name' => 'vonuhrzeit', 
                             'width' => 20, 
                             'type' => 'text',
                             'dbfield' => 'fldvonuhrzeit' ),
                     array ( 'label' => 'Bis Uhrzeit',
                             'name' => 'bisuhrzeit', 
                             'width' => 20, 
                             'type' => 'text',
                             'dbfield' => 'fldbisuhrzeit' ),
                     array ( 'label' => 'Bezeichnung',
                             'name' => 'bez', 
                             'width' => 200, 
                             'type' => 'text',
                             'dbfield' => 'fldbez' ),
                     array ( 'label' => 'Status',
                             'name' => 'status', 
                             'default' => 'offen',
                             'width' => 50, 
                             'type' => 'selectid',
                             'dbtable' => 'tblstatus',
                             'seldbfield' => 'fldbez',
                             'seldbindex' => 'fldindex',
                             'dbfield' => 'fldid_status' ),
                     array ( 'label' => '',
                             'width' => 5, 
                             'type' => 'icon',
                             'func' => 'mark.php',
                             'dbfield' => 'icon-book' ));
                             
$filterarray = array ( array ( 'label' => 'Status',
                             'name' => 'status', 
                             'width' => 10, 
                             'type' => 'selectid',
                             'sign' => '=',
                             'dbtable1' => 'tblstatus as stat,tblstat_grp as grp,tblstat_zuord as zuord',
                             'dbtable' => 'tblstatus',
                             'seldbstr' => 'fldindex as statindex,fldbez',
                             'seldbfield' => 'fldbez',
                             'seldbasindex1' => 'stat.fldindex as statindex',
                             'seldbid' => 'statindex',
                             'seldbindex' => 'fldindex',
                             'selwhere1' => 'stat.fldindex=zuord.fldid_status AND grp.fldindex=zuord.fldid_grp AND grp.fldindex=33',
                             'dbasfield1' => 'zuord',
                             'dbfield' => 'fldid_status' ));


$pararray = array ( 'headline' => 'Stundenplan',
                    'dbtable' => 'tblstundenplan',
                    'orderby' => 'flddatum,fldvonuhrzeit',
                    'strwhere' => '',
                    'markseldb' => '3',
                    'markfield' => 'fldid_status',
                    'fldindex' => 'fldindex');
?>