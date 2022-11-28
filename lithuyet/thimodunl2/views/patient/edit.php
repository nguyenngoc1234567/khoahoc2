<h1>update</h1>
<form action="" method="post">
    patient: <input type="text" name="patient"value="<?= $row->patient; ?>"> <br>
    day_hoppital: <input type="text" name="day_hoppital"value="<?= $row->day_hoppital; ?>"> <br>
    status: <input type="text" name="status"value="<?= $row->status; ?>"> <br>
    information_patient: <input type="text" name="information_patient"value="<?= $row->information_patient; ?>"> <br>
    gender: <input type="text" name="gender"value="<?= $row->gender; ?>"> <br>
    class: <input type="text" name="class"value="<?= $row->class; ?>"> <br>
    <input type="submit" value="Them">
</form>