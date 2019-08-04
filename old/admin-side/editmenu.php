<!DOCTYPE html>
<html>
<?php
$page_name ="menu";
include("includes/head.php"); ?>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
<body>
<form method="post">
  <textarea id="summernote" name="editordata"></textarea>
</form>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
        tabsize: 2,
        height: 300,
                          // set editor height
  		minHeight: 300,             // set minimum height of editor
  		maxHeight: 300,             // set maximum height of editor
  		focus: true  });
    });
</script>
</body>
</html>