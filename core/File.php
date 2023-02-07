<?php

class File
{
    public string $file_name;
    public string $directory = "/dist/";
    private string $document_root;
    private string $file_path;

    function __construct()
    {
        $this->document_root = $_SERVER['DOCUMENT_ROOT'];
    }

    public function file__exists(): bool
    {
        $this->file_path = $this->document_root.$this->directory.$this->file_name;
        return file_exists($this->file_path);
    }

    /**
     * @return string
     */
    public function get__file():string
    {
        //$_SERVER['HTTP_HOST'] to detect host without d:/www directory, then generate file from url not from directory
        $execution_file = $_SERVER['HTTP_HOST'].$this->directory.$this->file_name;
        if(str_starts_with($this->file_name, '/') || !file_exists($this->file_path)) return $this->directory;
        $mtime = filemtime($this->file_path);
        return preg_replace('{\\.([^./]+)$}', ".$mtime.\$1", $execution_file);
    }
}