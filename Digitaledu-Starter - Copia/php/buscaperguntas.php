<?php



           $tip     = $_POST['tip'];
           $sql = "SELECT DISTINCT obs FROM pergunta";
                $qr = mysql_query($sql);
                while($ln = mysql_fetch_array($qr)){
                    echo '<option  value="'.$ln['obs'].'"> '.$ln['obs'].'</option>';
                }

   echo "<tr><th>".$tip."</th></tr>"  ;
 

?>

