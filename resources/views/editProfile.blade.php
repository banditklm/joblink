<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
</head>
<body>
  <div class="container-fluid">
    <div class="face1">
      <div>
        <img src="{{asset('assets\photos\file.png')}}" onClick="triggerClick()" id="postDisplay" style="width:20%;height: auto; margin-left:5%;margin-top:2%;border-radius:8px;">
        <input type="file" name="image_donate" onChange="displayImage(this)" id="postImage" class="form-control" style="display: none;">
      </div>
    </div>
    <div class="face2"></div>
  </div>
</body>
</html>