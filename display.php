<?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "consulate";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 


           if(isset($_POST["loadbtn"]))
        {

            $id = (integer) $_POST["bid"];

               $query = "SELECT ptype,status FROM count WHERE bid = '$bid' ";
            $result = mysqli_query($conn, $query);
            $details = mysql_fetch_array($result);

            $ptype = $details["ptype"];
            $status = $details["status"];
        }

        $sql = "SELECT * count";

        $result = mysqli_query($conn, $sql);

         echo '<form id="form" method="post">';
            echo "<select name ='id'>";
            echo "<option value=''>Selecione Número ficha Obra</option>";

            while($row = mysqli_fetch_array($result))

              {
              echo "<option value='" . $row['bid'] . "'>" . $row['bid'] . "</option>";
              }
              echo "</select>";

            $conn->close();
            ?> 


          <input type="submit" value="Load" name="loadbtn">
          <table width="300" border="0">
    
        
    </table>
</div>
<br/>

</form>