<html>
<body>
<form method="POST" action="<?php echo site_url('my_controller/file_upload');?>" enctype='multipart/form-data'>
<label for="file">Filename:</label>
<input type="file" name="userfile[]" id="file" multiple>
<input type="submit" value="upload"></form>
</body>
</html>