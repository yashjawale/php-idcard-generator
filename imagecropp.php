<html>

<head>
  <title>Choose your image</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="croppie.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/exif-js"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="croppie.css" />
  <link rel="stylesheet" href="stylesnew.css" />
</head>

<body>
  <div style="text-align: center;">
    <img src="header.jpeg" style="max-width: 100%;">
  </div>
  <div class="container">
    <br />
    <h3 align="center" style="font-size: 36px">Choose an image for your profile</h3>
    <br />
    <br />
    <div class="panel panel-default">
      <div class="panel-heading" align="center" style="font-size: 24px;">Select Profile Image</div>
      <div class="panel-body" align="center">
        <input type="file" name="insert_image" id="insert_image" accept="image/*" style="  font-size: 16px;
  font-weight: bold;

  color: #FFFFFF;
  background-color: #5995DA;

  border: none;
  border-radius: 3px;

  padding: 10px 40px;
  cursor: pointer;" />
        <br />
        <div id="store_image"></div>
      </div>
    </div>
  </div>
</body>

</html>

<div id="insertimageModal" class="modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="font-size: 16px; font-weight: bold; color: #FFFFFF; background-color: #5995DA;

  border: none;
  border-radius: 3px;

  padding: 10px 40px;
  cursor: pointer;">&times;</button>
        <h4 class="modal-title">Crop & Insert Image</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 text-center">
            <div id="image_demo" style="width:350px; margin-top:30px"></div>
          </div>
          <div class="col-md-4" style="padding-top:30px;">
            <br />
            <br />
            <br />
            <button class="btn btn-success crop_image" style="  font-size: 16px;
  font-weight: bold;

  color: #FFFFFF;
  background-color: #5995DA;

  border: none;
  border-radius: 3px;

  padding: 10px 40px;
  cursor: pointer;">Crop & Insert Image</button>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="  font-size: 16px;
  font-weight: bold;

  color: #FFFFFF;
  background-color: #5995DA;

  border: none;
  border-radius: 3px;

  padding: 10px 40px;
  cursor: pointer;">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {

    $image_crop = $('#image_demo').croppie({
      enableExif: true,
      viewport: {
        width: 200,
        height: 250,
        type: 'square' //circle
      },
      boundary: {
        width: 300,
        height: 300
      }
    });

    $('#insert_image').on('change', function() {
      var reader = new FileReader();
      reader.onload = function(event) {
        $image_crop.croppie('bind', {
          url: event.target.result
        }).then(function() {
          console.log('jQuery bind complete');
        });
      }
      reader.readAsDataURL(this.files[0]);
      $('#insertimageModal').modal('show');
    });

    $('.crop_image').click(function(event) {
      $image_crop.croppie('result', {
        type: 'canvas',
        size: 'viewport',
        format: 'jpeg'
      }).then(function(response) {
        $.ajax({
          url: 'imageprocess.php',
          type: 'POST',
          data: {
            "image": response
          },
          success: function(data) {
            $('#insertimageModal').modal('hide');
            //load_images();
            //alert(data);
            location.href = "imageprocess.php"
          }
        })
      });
    });

    //load_images();

    function load_images() {
      $.ajax({
        url: "fetch_images.php",
        success: function(data) {
          $('#store_image').html(data);
        }
      })
    }

  });
</script>