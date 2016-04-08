<?php
//include to get database connection
include 'config.php';
if(isset($_GET['employee_id'])) {
    $id = $_GET['employee_id'];
    $sql_query="SELECT * FROM employees WHERE id=:id";
    $result_set=$connection->prepare($sql_query);
    $result_set->execute([':id'=>$id]);
    $row = $result_set->fetch(PDO::FETCH_ASSOC);
}
?>

<div class="btn btn-primary">Edit Employee</div>
<form id='update-employee-form' action='#' class="employee-head" method='post' border='0'>
    <div class="employee">
        <input type='hidden' name='id' value='<?php echo $row['id']; ?>' />
        <div class="col-sm-6">
            <label>First Name</label>
            <input type='text' name='first_name' class='form-control' value="<?php echo $row['first_name']; ?>" />
        </div>
        <div class="col-sm-6">
            <label>Last Name</label>
            <input type='text' name='last_name' class='form-control' value="<?php echo $row['last_name']; ?>" required />
        </div>
        <div class="col-sm-6">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>" required />
        </div>
        <div class="col-sm-6">
            <label>Mobile</label>
            <input type="text" name="mobile" class="form-control" value="<?php echo $row['mobile']; ?>" required />
        </div>
        <div class="col-sm-6">
            <label>skill</label>
            <?php $skill = explode(',', $row['skill']); ?>
                <input type="checkbox" name="skill[]" value="C/C++" <?php if(in_array('C/C++', $skill)){ echo 'checked'; } else { echo "" ;} ?> /><label>C/C++</label>
                <input type="checkbox" name="skill[]" value="Java" <?php if(in_array('Java', $skill)){echo "checked"; } else { echo ""; } ?> /><label>Java</label>
                <input type="checkbox" name="skill[]" value="PHP" <?php if(in_array('PHP', $skill)){echo "checked"; } else { echo ""; } ?>/><label>PHP</label>
                <input type="checkbox" name="skill[]" value="HTML/CSS" <?php if(in_array('HTML/CSS', $skill)){echo "checked"; } else { echo ""; } ?> /><label>HTML/CSS</label>

        </div>
        <div class="col-sm-6">
            <label>Salary</label>
            <input type="text" name="salary" class="form-control"  value="<?php echo $row['salary']; ?>" required />
        </div>
        <div>
            <button type='submit' class='btn btn-primary'>Update</button>
        </div>
    </div>
</form>