<?php
include_once 'config.php';
?>
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link href="css/style.css" rel="stylesheet" media="screen"/>
    <title>Employees</title>
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1 id="page-title">All Employees</h1>
        </div>
        <div class="employee-form">
            <div id="create-employee" class="btn btn-primary create-employee">Create Employee</div>
            <div id='page-content'></div>
        </div>

            <div id="all-employees">
                <table class="table table-border">
                    <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Skill</th>
                    <th>Salary</th>
                    <th colspan="2">Operations</th>
                    </tr>
                    <?php
                    $sql_query="SELECT * FROM employees";
                    $result_set=$connection->prepare($sql_query);
                    $result_set->execute();

                    while ($row=$result_set->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <tr>
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['skill']; ?></td>
                            <td><?php echo $row['salary']; ?></td>
                            <td align="center">
                                <a id="<?php echo $row['id']; ?>" class="edit-employee" href="#" title="Edit">Edit</a>
                            </td>
                            <td align="center">
                                <a id="<?php echo $row['id']; ?>" class="delete-employee" href="#" title="Delete">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
    </div>

<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        $('#create-employee').click(function(){
                $('#page-content').load('create_form.php');
        });

        $(document).on('submit', '#create-employee-form', function() {
            $.post("create.php", $(this).serialize())
                .done(function(data) {
                    $('#page-content').hide();
                });
            $('#all-employees').refresh();
        });

        //edit
        $('.edit-employee').click(function(){
            var employee_id = $(this).attr("id");
            $('#page-content').load('edit_form.php?employee_id='+employee_id);
            $('#create-employee').hide()
        });

        $(document).on('submit', '#update-employee-form', function() {
            $.post("update.php", $(this).serialize())
                .done(function(data) {
                    $('#page-content').hide();
                });
            $('#all-employees').refresh();
        });

        //Delete
        $(document).on('click', '.delete-employee', function(){
            if(confirm('Are you sure?')){
                // get the id
                var id = $(this).attr("id");
                // trigger the delete file
                $.post("delete.php", { id: id })
                    .done(function(data){
                        console.log(data);
                    });
            }
            $('#all-employees').reload();
        });
    });
</script>
</body>

</html>

