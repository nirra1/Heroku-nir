<div id="header">
<?php 
    // integer starts at 12 before counting
    $i = 12; 
    $dir = 'sahib/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // prints out how many were in the directory
    echo "Active Users : $i ";
?>
</div>
