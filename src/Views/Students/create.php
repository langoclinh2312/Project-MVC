<h1>Create students</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="Name">Student Name</label>
        <input type="text" class="form-control" id="Name" placeholder="Enter a Name" name="name">
    </div>

    <div class="form-group">
        <label for="dob">dob</label>
        <input type="date" class="form-control" id="dob" placeholder="Enter a brith day" name="dob">
    </div>
    <div class="form-group">
        <label for="gender">gender: </label>
        <label>
            <input type="radio" name="gender" value="0"> Nam
        </label>
        <label>
            <input type="radio" name="gender" value="1"> Nữ
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>