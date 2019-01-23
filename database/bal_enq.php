
<?php 
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "m_banking"; 
$mysqli = new mysqli($servername, $username, $password, $database); 
$query = "SELECT Name, Account_Number, Balance_Amount * FROM transaction ";
 
 
echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Value1</font> </td> 
          <td> <font face="Arial">Value2</font> </td> 
          <td> <font face="Arial">Value3</font> </td> 
          <td> <font face="Arial">Value4</font> </td> 
          <td> <font face="Arial">Value5</font> </td> 
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $acount_number = $row["account"];
        $name = $row["name"];
        $balance_amount = $row["Balance_Amount"];
        
         
 
        echo '<tr> 
                  <td>'.$acount_number.'</td> 
                  <td>'.$name.'</td> 
                  <td>'.$balance_amount.'</td> 
              </tr>';
    }
    $result->free();
} 

