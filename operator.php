<?php
$file_path= "text.php";

if (isset($_POST['text'])) {
  $data_to_write = $_POST['text']; 
  // Write the contents back to the file         
  file_put_contents($file_path, $data_to_write);
}

?>
<form method="post">
Tulisan : <textarea name="text" style="width: 400px; height: 250px;"><?php echo $data_to_write; ?></textarea>
<button type="submit">submit</button>
</form>