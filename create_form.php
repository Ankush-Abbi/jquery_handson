
<div class="col-md-12">
    <form id='create-employee-form' class="employee-head" action='#' method='post'>
        <div class="employee">
            <div class="row">
                <div class="col-md-6">
                <label>First Name</label>
                <input type='text' name='first_name' class='form-control' required />
            </div>
                <div class="col-md-6">
                <label>Last Name</label>
                <input type='text' name='last_name' class='form-control' required />
            </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" required />
                </div>
                <div class="col-md-6">
                    <div>
                        <label>Mobile</label>
                        <input type="text" name="mobile" class="form-control numeric" required />
                    </div>
                    <div class="errmsg"> </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6" >
                        <label>Skills</label>
                    <div class="col-md-12">
                        <div class="col-sm-3"><input type="checkbox" name="skill[]" value="C/C++"> C/C++</div>
                        <div class="col-sm-3"><input type="checkbox" name="skill[]" value="Java"> Java</div>
                        <div class="col-sm-3"><input type="checkbox" name="skill[]" value="PHP"> PHP</div>
                        <div class="col-sm-3"><input type="checkbox" name="skill[]" value="HTML/CSS"> HTML/CSS</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <label>Salary</label>
                        <input type="text" name="salary" class="form-control numeric" required />
                    </div>
                    <div class="errmsg"> </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type='submit' class='btn btn-primary col-md-12'>Submit</button>
                </div>
            </div>

        </div>
    </form>
</div>



<script type="text/javascript">
    $(document).ready(function () {
        //called when key is pressed in textbox
        $(".numeric").keypress(function (e) {
            //if the letter is not digit then display error and don't type anything
            if (e.which < 43 || e.which > 57 || (e.which>43 && e.which<48)) {
                //display error message
                $(this).parent().next().html("<li class='text-danger'>Digits Only</li>").show().fadeOut("slow");
                return false;
            }
        });
    });
</script>