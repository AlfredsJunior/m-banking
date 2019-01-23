<?php
$servername = "localhost";
    $database = "m_banking";
    $username = "root";
    $password = "";

    // Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM transaction");

echo "<table class="tb-balance"  border='0'>
<tr>
<th>A/C No:</th>
<th>Name:</th>
th>Bal Amount:</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Account_Number'] . "</td>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Balance_Amount'] . "</td>";
 
  
  echo "</tr>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>

<link rel="stylesheet" type="text/css" href="../css/main.css">
<section>
  <div>
    <h1>Balance Enquiry</h1> <br><br>
    <table class="tb-balance" border="0">
      <tr>
        <td> <label  for="account_number">A/C No:</label></td>
        <td><input type="text" name="account_number" readonly="readonly"></td>
      </tr>
      <tr>
        <td> <label for="name"> Name:</label></td>
        <td> <input type="text" name="name" readonly="readonly"></td>
      </tr>
      <tr>
        <td> <label for="balance_amount">Balance Amount:</label></td>
        <td> <input type="" name="balance_amount" readonly="readonly"></td>
      </tr>
    </table> <br> <br>
    <a href="m_banking_service.thml"><button>Back</button></a>
    <a href="m_banking_service.thml"><button>OK</button></a>
  </div>
</section>
