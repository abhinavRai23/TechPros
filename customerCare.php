<?php
include "include/header.php";
?>
<h1 class="page-header">
    Customer-Care
</h1>

<div class="panel panel-default">
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Contact no</th>
                        <th>Email-Id</th>
                        <th>Massege</th>
                        <th>Delete</th>
                    </tr>
                </thead>

        <?php

            if (isset($_POST["id"]) && isset($_POST["customerName"]))
        {
            $customerName = mysqli_real_escape_string($db_server, $_POST["customerName"]);
            $id = mysqli_real_escape_string($db_server, $_POST["id"]);
            $query = "DELETE FROM customercare WHERE customerName ='$customerName' && id='$id'";
            if (!mysqli_query($db_server,$query))
            echo "DELETE failed: $query<br>" .
            mysqli_error($db_server) . "<br><br>";
        }

        $query = "SELECT * FROM `customerCare` ORDER BY `Id` ASC";
		$run = mysqli_query($db_server, $query);

		if(!$run) die (mysqli_error($db_server));

		$rows=mysqli_num_rows($run);
		echo "<tbody>";
		if($rows!=0)
		{
			for ($j = 0 ; $j < $rows ; ++$j)
			{
				$row = mysqli_fetch_row($run);
				echo "
				<tr>
                    <td>".$row[0]."</td>
                    <td>".$row[1]."</td>
                    <td>".$row[2]."</td>
                    <td>".$row[3]."</td>
                    <td>".$row[4]."</td>
                    <td>
                        <form action='customerCare.php' method='post'>
                        <input type='hidden' name='id' value='$row[0]'>
                        <input type='hidden' name='customerName' value='$row[1]'>
                        <input type='submit' class='btn btn-success' value='DELETE'></form>
                    </td>
                </tr>
				";
			}	
		}
        ?>        
                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
</div>

<?php
include "include/footer.php";
?>