<html>

<head>
  <meta charset="UTF-8">
  <title>按不了的按钮</title>
  <style>
    body {
      margin-left: auto;
      margin-right: auto;
      margin-TOP: 200PX;
      width: 20em;
    }
  </style>
</head>

<body>
  <h1>美工跑路了，只有一个简单的按钮，但是按不了</h1>
  <form action="" method="post">
    <input disabled style="height:50px;width:200px;" type="submit" value="gxxd_wassup"" name=" gxxd_auth" />
  </form>
</body>

</html>
<?php
if (isset($_POST['gxxd_auth'])) {
  if ($_POST['gxxd_auth'] == 'gxxd_wassup') {
    include_once('can_you_guess_my_file_name_flag.php');
  }
}
