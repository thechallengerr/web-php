<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <title>Liên hệ | Mật Ong Rừng Tây Bắc</title>
  <?php include 'views/header.php'; ?>
</head>

<body class="contact-page sidebar-collapse">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.google.com/maps/embed/v1/place?q=87+Lĩnh+Nam,+Mai+Động,+Hoàng+Mai,+Hà+Nội,+Việt+Nam&key=AIzaSyBSFRN6WWGYwmFi498qXXsD2UwkbmD74v4" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
  <nav class="navbar fixed-top  navbar-expand-lg bg-dark" color-on-scroll="100" id="sectionsNav">
    <?php include 'views/navbar.php'; ?>
  </nav>
  <div id="contactUsMap" class="big-map"></div>
  <div class="main main-raised">
    <div class="contact-content">
      <div class="container">
        <h2 class="title">Liên hệ</h2>
        <div class="row">
          <div class="col-md-6">
            <p class="description">Quý khách Bạn có thể liên hệ với chúng tôi với bất cứ điều gì liên quan đến Sản phẩm của chúng tôi. Chúng tôi sẽ liên lạc với quý khách sớm nhất có thể.
              <br>
              <br>
            </p>
            <form role="form" id="contact-form" method="post">
              <div class="form-group">
                <label for="name" class="bmd-label-floating">Tên của bạn</label>
                <input type="text" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmails" class="bmd-label-floating">Email</label>
                <input type="email" class="form-control" id="exampleInputEmails">
                <span class="bmd-help">Chúng tôi sẽ không bao giờ chia sẻ thông tin của bạn cho người khác.</span>
              </div>
              <div class="form-group">
                <label for="phone" class="bmd-label-floating">Số điện thoại</label>
                <input type="text" class="form-control" id="phone">
                <span class="bmd-help">Chúng tôi sẽ không bao giờ chia sẻ thông tin của bạn cho người khác.</span>
              </div>
              <div class="form-group label-floating">
                <label class="form-control-label bmd-label-floating" for="message"> Lời nhắn</label>
                <textarea class="form-control" rows="6" id="message"></textarea>
              </div>
              <div class="submit text-center">
                <input type="submit" class="btn btn-danger btn-raised btn-round" value="Gửi đi">
              </div>
            </form>
          </div>
          <div class="col-md-4 ml-auto">
            <div class="info info-horizontal">
              <div class="icon icon-danger">
                <i class="material-icons">pin_drop</i>
              </div>
              <div class="description">
                <h4 class="info-title">Văn phòng đại diện</h4>
                <p> 87 Lĩnh Nam
                  <br> Hoàng Mai,
                  <br> Hà Nội
                </p>
              </div>
            </div>
            <div class="info info-horizontal">
              <div class="icon icon-danger">
                <i class="material-icons">phone</i>
              </div>
              <div class="description">
                <h4 class="info-title">Điện thoại liên hệ</h4>
                <p> Nguyễn Duy Anh
                  <br> 0981831288
                  <br> Thứ 2 - Thứ 7, 8:00-22:00
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'views/footer.php'; ?>
  <!--   Core JS Files   -->
  <script src="/views/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="/views/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="/views/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="/views/assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="/views/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="/views/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGat1sgDZ-3y6fFe6HD7QUziVC6jlJNog"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <!--	Plugin for Sharrre btn -->
  <script src="/views/assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="/views/assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="/views/assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="/views/assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
  <!--	Plugin for Small Gallery in Product Page -->
  <script src="/views/assets/js/plugins/jquery.flexisel.js" type="text/javascript"></script>
  <!-- Plugins for presentation and navigation  -->
  <script src="/views/assets/demo/modernizr.js" type="text/javascript"></script>
  <script src="/views/assets/demo/vertical-nav.js" type="text/javascript"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
  <script src="/views/assets/demo/demo.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="/views/assets/js/material-kit.min1036.js?v=2.1.1" type="text/javascript"></script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
  <script>
    $().ready(function() {
      materialKitDemo.initContactUsMap();
    });
  </script>
</body>

</html>
