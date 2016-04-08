<form id='create-employee-form' class="employee-head" action='#' method='post'>
    <div class="employee">
        <div class="col-sm-6">
            <label>First Name</label>
            <input type='text' name='first_name' class='form-control' required />
        </div>
        <div class="col-sm-6">
            <label>Last Name</label>
            <input type='text' name='last_name' class='form-control' required />
        </div>
        <div class="col-sm-6">
            <label>Email</label>
            <input type="text" name="email" class="form-control" required />
        </div>
        <div class="col-sm-6">
            <label>Mobile</label>
            <input type="text" name="mobile" class="form-control numeric" required />
        </div>
        <div class="col-sm-6" >
            <label>skill</label>
                <input type="checkbox" name="skill[]" value="C/C++"><label>C/C++</label>
                <input type="checkbox" name="skill[]" value="Java"><label>Java</label>
                <input type="checkbox" name="skill[]" value="PHP"><label>PHP</label>
                <input type="checkbox" name="skill[]" value="HTML/CSS"><label>HTML/CSS</label>
            
        </div>
        <div class="col-sm-6">
            <label>Salary</label>
            <input type="text" name="salary" class="form-control numeric" required />
        </div>
        <div class="submit">
                <button type='submit' class='btn btn-primary'>Submit</button>
        </div>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function () {
        //called when key is pressed in textbox
        $(".numeric").keypress(function (e) {
            //if the letter is not digit then display error and don't type anything
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                //display error message
                $("#errmsg").html("Digits Only").show().fadeOut("slow");
                return false;
            }
        });
    });
</script>