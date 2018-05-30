<form id="editform" action="<?=$URL?>editSave?id=<?= $_GET['id']?>"  method="post" enctype="multipart/form-data" required>
    Name<input type="text" name="persoon" value="<?= $data[0]['person']?>" required>
    day<input type="number" name="dag" value="<?= $data[0]['day']?>" min="1" max="31" required>
    month<input type="number" name="maand" value="<?= $data[0]['month']?>" min="1" max="12" required>
    Year of birth<input type="number" name="jaar" value="<?= $data[0]['year']?>" min="1" required>
    <input type="submit" value="edit">
</form>
