<?php
include_once 'Sample_Header.php';

// Template processor instance creation
echo date('H:i:s'), ' Creating new TemplateProcessor instance...', EOL;
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('resources/munkaszerződés_template.docx');

// Variables on different parts of document
$templateProcessor->setValue('név', 'Kerekes Zsolt');
$templateProcessor->setValue('születési_név', 'Kerekes Zsolt');
$templateProcessor->setValue('szül.hely', 'Eger');
$templateProcessor->setValue('szül.idő', '1992.05.14');
$templateProcessor->setValue('anyja_neve', 'Hajnal Adrienn');
$templateProcessor->setValue('lakhely', '1118 Budapest, Bartók Béla út 62. 3.em. 2.');
$templateProcessor->setValue('szig_szám', '................');
$templateProcessor->setValue('taj_szám', '................');
$templateProcessor->setValue('adóazonosító_jel', '................');
$templateProcessor->setValue('bankszámlaszám', '................');
$templateProcessor->setValue('munkakör', 'Műszaki rajzoló, szerkesztő');
$templateProcessor->setValue('munkaviszony_kezdet', '2018.12.05');
$templateProcessor->setValue('első_munkanap', '2018.12.06');
$templateProcessor->setValue('munkaidő', 'teljes munaidő, napi 8 óra');
$templateProcessor->setValue('munkavégzés_helye', '1118 Budapest, Bartók Béla út 60. 4.em.1.');
$templateProcessor->setValue('bér', '380.000 Ft');
$templateProcessor->setValue('bér_betúvel', 'háromszáz-nyolcvanezer');
$templateProcessor->setValue('kelt_hely', 'Budapest');
$templateProcessor->setValue('kelt_dátum', '2018.12.04');

echo date('H:i:s'), ' Saving the result document...', EOL;
$templateProcessor->saveAs('results/Sample_07_TemplateCloneRow.docx');

echo getEndingNotes(array('Word2007' => 'docx'), 'results/Sample_07_TemplateCloneRow.docx');
if (!CLI) {
    include_once 'Sample_Footer.php';
}
