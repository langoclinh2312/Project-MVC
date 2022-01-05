<h1>Students</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
            <a href="/mvc/students/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new students</a>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Brith Day</th>
                <th>Gender</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <?php
        foreach ($students as $student) {
            echo '<tr>';
            echo "<td>" . $student->getId() . "</td>";
            echo "<td>" . $student->getName() . "</td>";
            echo "<td>" . $student->getDob() . "</td>";
            if ($student->getGender() == 0){
                echo "<td>" . "nữ" . "</td>";
            } else {
                echo "<td>" . "nam" . "</td>";
            }
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvc/students/edit/" . $student->getId() . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/mvc/students/delete/" . $student->getId() . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>