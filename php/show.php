
<?php include "connect.php"; ?>
<style type="text/css">
    
  
    tr {
        font-size: 1.2em;


    }


    tr:hover {
        background-color: black;
        color: white;


    }

    th {
        color: tomato;
        font-size: 1.3em;
    }

    .del {
        color: red;
        text-decoration: none;
    }

    .del:hover {
        color: blue;
        text-decoration: none;
        text-shadow: 2px 3px 2px #FFFFFF;
    }

    .content {
        position: relative;
        top: 100px;
        left: 370px;
        padding-right: 450px;
    }
</style>

<div class="content">
    <div class="container">

        <div class="row">

        </div>
        <div class="row">
            <div class="col">

                

                <h1 style="color:black"> <b>Student List</b></h1>
            </div>
           

            <table border=1 width="100%" cellspacing="3" cellpadding="5" style="box-shadow: 2px 4px 10px 2px;">

                <tr>
                   <th>Id</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Roll</th>
                    <th>Registration</th>
                    <th>Session</th>
                    <th>Hall</th>
                    <th>Email</th>
                    <th>Phone</th>
                   
                   
                </tr>
                <?php
                $s = mysqli_query($con, "select * from student");
                while ($r = mysqli_fetch_array($s)) {
                ?>
                    <tr align=center>
                        <td><?php echo $r['id']; ?></td>
                        <td><?php echo $r['name']; ?></td>
                        <td><?php echo $r['department']; ?></td>
                        <td><?php echo $r['roll']; ?></td>
                        <td><?php echo $r['reg']; ?></td>
                        <td><?php echo $r['session']; ?></td>

                        <td><?php echo $r['hall']; ?></td>
                        <td><?php echo $r['email']; ?></td>
                        <td><?php echo $r['phone']; ?></td>

                    </tr>
                <?php
                }
                ?>


            </table>
<button style="padding:10px 30px; text-decoration:none;margin-top:20px;"><a href="../index.php">Back</a></button>

        </div>
        