<h1>Edit students</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" class="form-control" id="Name" placeholder="Enter a Name" name="name" value="<?php if ($student->getName() != null) echo $student->getName(); ?>">
    </div>

    <div class="form-group">
        <label for="dob">dob</label>
        <input type="date" class="form-control" id="dob" placeholder="Enter a brith day" name="dob" value="<?php if ($student->getDob() != null) echo $student->getDob(); ?>">
    </div>
    <div class="form-group">
        <label for="gender">gender: </label>
        <label>
            <input type="radio" name="gender" value="1" <?php if ($student->getGender() == 1) echo "checked"; ?>> Nam
        </label>
        <label>
            <input type="radio" name="gender" value="0" <?php if ($student->getGender() == 0) echo "checked"; ?>> Nữ
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>