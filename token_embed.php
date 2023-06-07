<!DOCTYPE HTML>
<html>
<title>Video embedding with xauth</title>
<head>

</head>
  <body>
    <center>
      <h2>Test page for player embedding with token based auth</h2>
      <table>
      <tr>
      <td>
      <div id="player-holder"></div>
      <div id="error-message" style="color:red"></div>
      <?php
        $service_domain = "";
        $gconfid = "";
        $xt = "";
        $params = array();
        if(isset($_REQUEST["sd"])) {
          $service_domain = $_REQUEST["sd"];
        } else {
          echo '<script type="text/javaScript">
           document.getElementById("error-message").innerHTML = "Service domain is missing";
           </script>';
        }

        if(isset($_REQUEST["vid"])) {
            $gconfid = $_REQUEST["vid"];
        } else {
           echo '<script type="text/JavaScript">
           document.getElementById("error-message").innerHTML = "Video id is missing";
           </script>';
        }

        if(isset($_REQUEST["token"])) {
            $xt = $_REQUEST["token"];
            $params["xt"] = $xt;
        } else {
            echo '<script type="text/javaScript">
              document.getElementById("error-message").innerHTML = "Xauth token is missing";
              </script>';
        }

        $param_string = json_encode($params);
        echo "<div data-video-params='$param_string' data-video-host='$service_domain'
              data-kvideo-id='$gconfid' style='width:640px;height:360px' ></div>
              <script type='text/javascript' src='//assets.zencite.com/orca/media/embed/player-silk.js'></script>";
      ?>
      </td>
      </tr>
      </table>
    </center>
  </body>
</html>
