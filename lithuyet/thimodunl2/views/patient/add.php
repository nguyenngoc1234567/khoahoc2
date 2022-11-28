<h1>Add new</h1>
<form action="" method="post">
    ID :<input type="text" name="ID"> <br>
    patient: <input type="text" name="patient"> <br>
    day_hoppital: <input type="date" name="day_hoppital"> <br>
    status: <input type="text" name="status"> <br>
    information_patient: <input type="text" name="information_patient"> <br>
    gender: <input type="text" name="gender"> <br>

    class: <th><select name="class" >
                    <?php if (isset($rows1)) : ?>
                        <?php foreach ($rows1 as $row) { ?>
                            <option value="<?= $row->ID ?>"><?= $row->Name_prevention?></option>
                        <?php  } ?>
                        <?php else : "";
                    endif; ?>
    <input type="submit" value="Them">
</form>