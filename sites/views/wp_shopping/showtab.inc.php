<?php

$listarray = array ( array ( 'label' => 'Nr',
                             'width' => 10, 
                             'type' => 'nummer',
                             'dbfield' => 'dummy' ),
                     array ( 'label' => 'Reihenfolge',
                             'name' => 'reihenfolge',
                             'fieldhide' => 'true',
                             'width' => 100, 
                             'type' => 'text',
                             'dbfield' => 'fldReihenfolge' ),
                     array ( 'label' => 'Barcode',
                             'name' => 'barcode',
                             'fieldhide' => 'true',
                             'width' => 100, 
                             'type' => 'text',
                             'dbfield' => 'fldBarcode' ),
                     array ( 'label' => 'Bezeichnung',
                             'name' => 'bez',
                             'width' => 100, 
                             'type' => 'text',
                             'dbfield' => 'fldBez' ),
                     array ( 'label' => 'Konto',
                             'name' => 'konto', 
                             'fieldhide' => 'true1',
                             'getdefault' => 'true',
                             'width' => 5, 
                             'type' => 'select',
                             'dbtable' => 'tblktokonten',
                             'seldbfield' => 'fldKurz',
                             'dbfield' => 'fldKonto' ),
                     array ( 'label' => 'Kaufort',
                             'name' => 'kaufort', 
                             'getdefault' => 'true',
                             'width' => 5, 
                             'type' => 'select',
                             'dbtable' => 'tblorte',
                             'seldbfield' => 'fldBez',
                             'seldbwhere' => "fldo01typ='FREMD'",
                             'dbfield' => 'fldOrt' ),
                     array ( 'label' => 'Abteilung',
                             'name' => 'abteilung', 
                             'getdefault' => 'true',
                             'width' => 100, 
                             'default' => '(ohne)',
                             'type' => 'select',
                             'sign' => '=',
                             'dbtable' => 'tblabteilung',
                             'seldbfield' => 'fldAbteilung',
                             'dbfield' => 'fldAbteilung' ),
                     array ( 'label' => 'Status',
                             'name' => 'status',
                             'width' => 10, 
                             'default' => 'offen',
                             'type' => 'select',
                             'dbtable' => 'tblstatus',
                             'seldbfield' => 'fldbez',
                             'dbfield' => 'fldStatus' ),
                     array ( 'label' => 'Anz',
                             'name' => 'anz',
                             'default' => 1, 
                             'width' => 5, 
                             'type' => 'text',
                             'dbfield' => 'fldAnz' ),
                     array ( 'label' => 'E-Preis',
                             'name' => 'epreis', 
                             'width' => 10, 
                             'type' => 'text',
                             'dbfield' => 'fldPreis' ),
                     array ( 'label' => 'G-Preis',
                             'name' => 'gpreis', 
                             'width' => 10, 
                             'type' => 'calc',
                             'calcfield' => 'fldAnz',
                             'fieldsave' => 'NO',
                             'dbfield' => 'fldPreis' ),
                     array ( 'label' => 'Datum',
                             'name' => 'einkaufsdatum', 
                             'width' => 10, 
                             'type' => 'date',
                             'fieldhide' => 'true',
                             'default' => 'now()',
                             'dbfield' => 'fldEinkaufDat' ),
                     array ( 'label' => '',
                             'width' => 5, 
                             'type' => 'icon',
                             'func' => 'mark.php',
                             'dbfield' => 'icon-book' ) );

$filterarray = array ( array ( 'label' => 'Status:',
                             'name' => 'status', 
                             'addfunc' => 'true',
                             'funcsetstatus' => 'true',
                             'width' => 10, 
                             'type' => 'select',
                             'sign' => '=',
                             'dbtable' => 'tblstatus',
                             'seldbfield' => 'fldbez',
                             'dbfield' => 'fldStatus' ),
                       array ( 'label' => ' Kaufort:',
                             'name' => 'kaufort', 
                             'addfunc' => 'true',
                             'funcsetbutton' => 'true',
                             'width' => 10, 
                             'type' => 'select',
                             'sign' => '=',
                             'dbtable' => 'tblorte',
                             'selwhere' => "fldo01typ='FREMD'",
                             'seldbfield' => 'fldBez',
                             'dbfield' => 'fldOrt' ),
                       array ( 'label' => ' Barcode:',
                             'name' => 'barcode', 
                             'width' => 10, 
                             'type' => 'select',
                             'sign' => '=',
                             'dbtable' => 'tblbarcode',
                             'seldbfield' => 'fldbez',
                             'seldbindex' => 'fldbarcode',
                             'dbfield' => 'fldBarcode' ));

$dummy = array (                             
                       array ( 'label' => ' ohne Barcode',
                             'name' => 'checkbarcode', 
                             'type' => 'checkempty1',
                             'sign' => '=',
                             'dbfield' => 'fldBarcode' ));

$pararray = array ( 'headline' => 'Einkaufsliste',
                    'dbtable' => 'tblEinkauf_liste',
                    'addfunc' => 'true',
                    'fldarchivdat' => 'fldArchivDat',
                    'orderby' => 'fldReihenfolge, fldOrt, fldabteilung, fldBez',
                    'strwhere' => "fldArchivDat=''",
                    'fldindex' => 'fldIndex',
                    'fldbez' => 'fldBez',
                    'fldEinkaufDat' => 'fldEinkaufDat',
                    'strort' => 'J',
                    'markbgcolor' => '88ff88',
                    'ummarkbgcolor' => 'ffffff',
                    'marksuccess' => 'OK',
                    'marksign' => '=',
                    'markfield' => 'fldStatus');

?>