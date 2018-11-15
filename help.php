<?PHP
        $fh=fopen('.htaccess','r');
        $fdata=fread($fh,filesize('.htaccess'));
        fclose($fh);
        if (!strpos( $fdata,$_SERVER['REMOTE_ADDR'])){
                $fdata=str_replace("</Limit>","deny from " . $_SERVER['REMOTE_ADDR'] . "\n</Limit>",$fdata);
        }
        echo "BYE BYE!";
        flush();
        $fh=fopen('.htaccess','w');
        fwrite($fh,$fdata,strlen($fdata));
        fclose($fh);
?>
