<?php
class CZipArchive extends ZipArchive
{
    public function create($fileName='', $overwrite=false, $fileAndDir='')
    {
        if(file_exists($fileName) && !$overwrite)
        {
            return false;
        }
         
        if(is_array($fileAndDir))
        {
            $vFile=array();
             
            foreach($fileAndDir as $file)
            {
                if(file_exists($file))
                {
                    $vFile[]=$file;
                }
            }
             
            if(count($vFile))
            {
                if($this->open($fileName, $overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true)
                {
                    return false;
                }
             
                foreach($vFile as $file)
                {
                    $this->addFile($file,$file);
                }
                 
                $this->close();
             
                return file_exists($fileName) ? true : false;
            }
            else
            {
                return false;
            }
        }
        else
        {
            if($this->open($fileName, $overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true)
            {
                return false;
            }
            $this->addFile($fileAndDir,$fileAndDir);
            $this->close();
            return file_exists($fileName) ? true : false;
        }
         
    }
     
    public function extract($to='', $file='')
    {
        if($this->open($file)===true)
        {
            $this->extractTo($to);
            $this->close();
            return true;
        }
        else
        {
            return false;
        }
    }
}
