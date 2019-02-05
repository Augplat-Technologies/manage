<?php
$files = scandir('XLSX', SCANDIR_SORT_DESCENDING);
file_put_contents('newfile.txt', print_r($files, true));
$dir = "XLSX";         
$pattern = '\.(xlsx)$'; // check only file with these ext.          
$newstamp = 0;            
$newname = "";

if ($handle = opendir($dir)) {               
       while (false !== ($fname = readdir($handle)))  {            
         // Eliminate current directory, parent directory            
         if (ereg('^\.{1,2}$',$fname)) continue;            
         // Eliminate other pages not in pattern            
         if (! ereg($pattern,$fname)) continue;            
         $timedat = filemtime("$dir/$fname");            
         if ($timedat > $newstamp) {
            $newstamp = $timedat;
            $newname = $fname;
          }
         }
        }
closedir ($handle);

// $newstamp is the time for the latest file
// $newname is the name of the latest file
// print last mod.file - format date as you like            
print $newname . " - " . date( "Y/m/d", $newstamp);

?>
