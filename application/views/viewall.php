<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</head>
<body>

    <a href="<?php echo base_url('/index.php/CrudController/create')?>" type="button" class="btn btn-primary m-5 " >Add New</a>
<table id="myTable" class="display" style="width:70%">
    <thead>
        <tr>
            <th>Count</th>
            <th>name</th>
            <th>address</th>
            <th>phone</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
<!-- 
            <?php
        $i=1;
        foreach($h as $row)
        {
           
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$row->name."</td>";
        echo "<td>".$row->address."</td>";
        echo "<td>".$row->phone."</td>";
        echo "<td>".$row->stdid."</td>";
        echo "<td>".'<a href="">Delete</a>'."</td>";
        echo "</tr>";
        $i++;
        }
        ?> -->

<?php  

         foreach ($h as $row)  
       
         {  
            
            ?>
            
            <tr>  
                <td><?php echo  $row->stdid;?></td> 
                <td><?php echo $row->name;?></td>  
                <td><?php echo $row->address;?></td>
                <td><?php echo $row->phone;?></td>
                
                <td><a href="<?php echo base_url('/index.php/processController/edit/')?><?php echo $row->stdid;?>"  data-toggle="modal" data-target="#product">Edit </a> </td>
                <td><a href="<?php echo base_url('/index.php/processController/delete/')?><?php echo $row->stdid;?>"  data-toggle="modal" data-target="#product">Delete </a> </td>
            </tr> 
         
         <?php
          
            } 

          ?>
          
        
        
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );

</script>

</body>



</html>