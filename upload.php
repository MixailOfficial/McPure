if(isset($_FILES['file'])){
   // Переместить загруженный файл в папку со скриптом
   move_uploaded_file($_FILES['file']['tmp_name'], './' . $_FILES['file']['name']);
   echo 'Success!';
}
else echo 'Error';