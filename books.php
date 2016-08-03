<?php
include "include/header.php";
?>
<h1 class="page-header">
    Books
    <small>Check orders</small>
</h1>

<div class="panel panel-default">
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Book Name</th>
                        <th>Price</th>
                        <th>Customer Name</th>
                        <th>Customer Address</th>
                        <th>Book Id</th>
                        <th>Payment Mode</th>
                        <th>Delete Order</th>
                    </tr>
                </thead>



        <?php

            if (isset($_POST["id"]) && isset($_POST["customerName"]))
        {
            $customerName = mysqli_real_escape_string($db_server, $_POST["customerName"]);
            $id = mysqli_real_escape_string($db_server, $_POST["id"]);
            $query = "DELETE FROM booksorder WHERE customerName ='$customerName' && id='$id'";
            if (!mysqli_query($db_server,$query))
            echo "DELETE failed: $query<br>" .
            mysqli_error($db_server) . "<br><br>";
        }


        $query = "SELECT * FROM `booksOrder` ORDER BY `Id` ASC";
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
                    <td>".$row[5]."</td>
                    <td>".$row[6]."</td>
                    <td>
                        <form action='books.php' method='post'>
                        <input type='hidden' name='id' value='$row[0]'>
                        <input type='hidden' name='customerName' value='$row[3]'>
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