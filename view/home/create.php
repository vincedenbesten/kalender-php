<body>
    <form action="<?=URL?>Home/Create" method="post" enctype="multipart/form-data">
        Name<input type="text" name="persoon" required>
        day<input type="number" name="dag" min="1" max="31" required>
        month<input type="number" name="maand" min="1" max="12" required>
        Year of birth<input type="number" name="jaar" required>
        Create<input type="submit">
    </form>
  </body>
