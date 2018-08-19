<?php

class ExportCsv implements Export
{
    private $filename;
    private $delimiter;

    public function export($data)
    {
        $this->headers($this->filename);
        
        $tmp_memory = fopen('php://memory', 'w');
        foreach($data as $line)
        {
            fputcsv($tmp_memory, $line, $this->delimiter);
        }
        fseek($temp_memory, 0);

        fpassthru($tmp_memory);
    }

    private function headers(string $filename)
    {
        header('Content-type: text/csv');
        header("Content-Disposition: attachment; filename=" . $filename . ".cvs");
        header("Pragma: no-cache");
        header("Expires: 0");
    }

    public function setFilename(string $filename)
    {
        $this->filename = $filename;
    }

    public function setDelimiter(string $delimiter)
    {
        $this->delimiter = $delimiter;
    }
}