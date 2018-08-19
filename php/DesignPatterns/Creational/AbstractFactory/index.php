<?php

require_once 'ExportInterface.php';
require_once 'ExportExcel.php';
require_once 'ExportCsv.php';

$csv_data = array(
    array(1, "Mary"),
    array(2, "Larry")
);

$objCsv = new ExportCsv();
$objCsv->setFilename('example_csv_file');
$objCsv->setDelimiter(',');
$objCsv->export($csv_data);