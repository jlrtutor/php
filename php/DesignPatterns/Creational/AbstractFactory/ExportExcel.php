<?php

class ExportExcel implements Export
{
    private $filename;

    public function export($data)
    {
        $this->headers($this->filename);
        echo $data;
    }

    public function headers(string $filename)
    {
        header('Content-type: application/vnd.ms-excel');
        header("Content-Disposition: attachment; filename=" . $filename . ".xls");
        header("Pragma: no-cache");
        header("Expires: 0");
    }

    public function setFilename(string $filename)
    {
        $this->filename = $filename;
    }
}