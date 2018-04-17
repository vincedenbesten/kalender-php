<form id="editform" action="<?=$URL?>Home/editSave?id=<?= $_GET['id']?>"  method="post" enctype="multipart/form-data">
    Name<input type="text" name="persoon" value="<?= $data[0]['person']?>">
    day<input type="number" name="dag" value="<?= $data[0]['day']?>">
    month<input type="number" name="maand" value="<?= $data[0]['month']?>">
    Year of birth<input type="number" name="jaar" value="<?= $data[0]['year']?>">
    <input type="submit" value="edit">
</form>
