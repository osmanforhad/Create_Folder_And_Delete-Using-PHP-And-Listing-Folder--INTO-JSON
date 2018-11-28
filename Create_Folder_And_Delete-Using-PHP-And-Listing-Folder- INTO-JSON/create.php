<?php 
$dir = $_POST['folder_name'];

if(isset($_POST) == $dir){
     mkdir($dir,777);
      if(file_exists('folder_list.json'))  
           {  
                $current_data = file_get_contents('folder_list.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'folder_name'               =>     $_POST['folder_name'] 
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('folder_list.json', $final_data))  
                {  
                     
                }  
           }  
           
}
   

header("Location:index.php");
?>
