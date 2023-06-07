<!DOCTYPE HTML>
<html>

<style>

td.name {
  width: 200px;
}

td.inp {
  width: 300px;
}

tr{
  height: 30px;
}

input.data{
  width: 100%;
  height: 100%;
}

input[type = submit] {
    width: 64em;  height: 2em;
}
select {
  width: 100%;
  height: 100%;
}
</style>


<head>
<script type="text/javascript">
function validate()
{
 var error="";
 var name = document.getElementById( "name" );
 if( name.value == "" )
 {
        error = " Please enter a valid name. ";
        document.getElementById( "error_para" ).innerHTML = error;
        return false;
      }
 var type = document.getElementById( "type" );
 var typ=type.options[type.selectedIndex].value;
 typ=String(typ);
 if(typ=="ONLY EMAIL")
 {
        var email = document.getElementById( "email" );
        if( email.value == "")
        {
                error = " Please enter a valid email address. ";
                document.getElementById( "error_para" ).innerHTML = error;
                return false;
        }
 }

 if(typ=="ONLY ACCOUNT NUMBER")
 {
        var acno = document.getElementById( "acno" );
        if( acno.value == "" )
        {
                error = " Please enter a valid account number. ";
                document.getElementById( "error_para" ).innerHTML = error;
                return false;
        }
 }

 if(typ=="EMAIL AND ACCOUNT NUMBER")
 {
        var email = document.getElementById( "email" );
        if( email.value == "")
        {
                error = " Please enter a valid email address. ";
                document.getElementById( "error_para" ).innerHTML = error;
                return false;
        }
        var acno = document.getElementById( "acno" );
        if( acno.value == "" )
        {
                error = " Please enter a valid account number. ";
                document.getElementById( "error_para" ).innerHTML = error;
                return false;
        }
      }

}
if(typ=="EMAIL AND USER ID")
{
       var email = document.getElementById( "email" );
       if( email.value == "")
       {
               error = " Please enter a valid email address. ";
               document.getElementById( "error_para" ).innerHTML = error;
               return false;
       }
       var acno = document.getElementById( "user_id" );
       if( acno.value == "" )
       {
               error = " Please enter a valid user id. ";
               document.getElementById( "error_para" ).innerHTML = error;
               return false;
       }
}
if(typ=="EMAIL AND ACCOUNT NUMBER AND USER ID")
{
       var email = document.getElementById( "email" );
       if( email.value == "")
       {
               error = " Please enter a valid email address. ";
               document.getElementById( "error_para" ).innerHTML = error;
               return false;
       }
       var acno = document.getElementById( "user_id" );
       if( acno.value == "" )
       {
               error = " Please enter a valid user id. ";
               document.getElementById( "error_para" ).innerHTML = error;
               return false;
       }
       var acno = document.getElementById( "acno" );
       if( acno.value == "" )
       {
               error = " Please enter a valid account number. ";
               document.getElementById( "error_para" ).innerHTML = error;
                return false;
        }
 }
 if(typ=="EMAIL AND USER ACCOUNT NUMBER")
 {
        var email = document.getElementById( "email" );
        if( email.value == "")
        {
                error = " Please enter a valid email address. ";
                document.getElementById( "error_para" ).innerHTML = error;
                return false;
        }
        var acno = document.getElementById( "acno" );
        if( acno.value == "" )
        {
                error = " Please enter a valid account number. ";
                document.getElementById( "error_para" ).innerHTML = error;
                return false;
        }
 }

 var name = document.getElementById( "domain_name" );
 if( name.value == "" )
 {
        error = " Please enter the domain name. ";
        document.getElementById( "error_para" ).innerHTML = error;
        return false;
 }
 var name = document.getElementById( "client_id" );
 if( name.value == "" )
 {
        error = " Please enter the client id. ";
        document.getElementById( "error_para" ).innerHTML = error;
        return false;
 }
 var name = document.getElementById( "secret_key" );
 if( name.value == "" )
 {
        error = " Please enter the secret key. ";
        document.getElementById( "error_para" ).innerHTML = error;
        return false;
 }
 else
 {
        return true;
 }
}
</script>
</head>

<body>

<br>
<br>
<center>
<h2>Token Validation</h2>
<table>
        <tr>
                <td class="name">
                 Select Token Type
                </td>
                <td class="inp">
                 <form action="" method="POST" onsubmit="return validate();">
                 <select name="type" id="type" background="red" class="data">
                     <option value="ONLY EMAIL" selected>ONLY EMAIL</option>
                     <option value="ONLY ACCOUNT NUMBER">ONLY ACCOUNT NUMBER</option>
                     <option value="EMAIL AND ACCOUNT NUMBER">EMAIL AND ACCOUNT NUMBER</option>
                     <option value="EMAIL AND USER ID">EMAIL AND USER ID</option>
                     <option value="EMAIL AND ACCOUNT NUMBER AND USER ID">EMAIL AND ACCOUNT NUMBER AND USER ID</option>
                     <option value="EMAIL AND USER ACCOUNT NUMBER">EMAIL AND USER ACCOUNT NUMBER</option>
                </select>
              </td>
            </tr>
            <tr>
                    <td class="name">
                     Display Name
                    </td>
                    <td class="inp">
                     <input type="text" name="name" id="name" class="data"><br>
                    </td>
                    <td>
                     &nbsp  &nbsp  &nbsp  eg. Jhon Smith, Sophia Williams, Robert Davis
                    </td>
            </tr>
            <tr>
                    <td class="name">
                     E-mail
                    </td>
                    <td class="inp">
                     <input type="text" name="email" id="email" class="data"><br>
                    </td>
                    <td>
                      &nbsp  &nbsp  &nbsp eg. test.user@kpoint.com, testname@kpoint.com
                    </td>
            </tr>
            <tr>
                    <td class="name">
                     Account Number
                    </td>
                    <td class="inp">
                     <input type="text" name="acno" id="acno" class="data"><br>
                    </td>
                    <td>
                      &nbsp  &nbsp  &nbsp eg. 117144605, 117144611, 117144686
                    </td>
            </tr>
            <tr>
                    <td class="name">
                     User - ID
                    </td>
                    <td class="inp">
                     <input type="text" name="user_id" id="user_id" class="data"><br>
                    </td>
                    <td>
                      &nbsp  &nbsp  &nbsp eg. KTPLTU-001, KTPLTU-020, KTPLTU-120
                    </td>
            </tr>
            <tr>
                    <td class="name">
                     Service domain
                    </td>
                    <td class="inp">
                     <input type="text" name="domain_name" id="domain_name" value="" class="data"><br>
                    </td>
            </tr>
            <tr>
                    <td class="name">
                     Client - ID
                    </td>
                    <td class="inp">
                     <input type="text" name="client_id" id="client_id" value="" class="data"><br>
                    </td>
            </tr>
            <tr>
                    <td class="name">
                     Secret Key
                    </td>
                    <td class="inp">
                     <input type="text" name="secret_key" id="secret_key" value="" class="data"><br>
                    </td>
            </tr>
            <tr>
                    <td class="name">
                     gconfid(video id)
                    </td>
                    <td class="inp">
                     <input type="text" name="video_id" id="video_id" value="" class="data"><br>
                    </td>
                    <td>
                      &nbsp  &nbsp  &nbsp eg. gcc-123
                    </td>
            </tr>
    </table>
    <br>
    <input type="submit" name="submit" id="submit">
  </form>
  <font color="red"><p id="error_para"></p></font>
  
  <?php
  
  if(isset($_POST['submit']))
  {
  
  $CLIENT_ID=$_POST["client_id"];
  $SECRET_KEY=$_POST["secret_key"];
  
  
  $type=$_POST["type"];
  $displayname1=$_POST["name"];
  $displayname=utf8_encode("$displayname1");
  $domain=$_POST["domain_name"];
  $gconfid=$_POST["video_id"];
  
  echo "Domain : $domain<br>";
  echo "Display Name : $displayname<br>";
  echo "Type : <b>$type</b><br>";
  
  
  if ( $type == "ONLY EMAIL" )
  {
  $email = $_POST["email"];;
  echo "Email : $email<br>";
  $challenge = time();
  
  
  //step 1
  $data = "$CLIENT_ID:$email:$displayname:$challenge";
  
  //step 2
  $xauth_token = hash_hmac("md5", $data, $SECRET_KEY, true);
  
  $b64token = base64_encode($xauth_token);
$b64token = str_replace("=","", $b64token);
$b64token = str_replace("+","-", $b64token);
$b64token = str_replace("/","_", $b64token);

//step 4
$xtencode= "client_id=$CLIENT_ID&user_email=$email&user_name=$displayname&challenge=$challenge&xauth_token=$b64token";

//step 5
$xt= base64_encode($xtencode);
$xt = str_replace("=","", $xt);
$xt = str_replace("+","-", $xt);
$xt = str_replace("/","_", $xt);

}

if ( $type == "ONLY ACCOUNT NUMBER" )
{
$account_number=$_POST["acno"];;
echo "Account Number : $account_number<br>";
$challenge = time();

//step1
$data = "$CLIENT_ID:$email:$displayname:$challenge:$account_number";

//step 2
$xauth_token = hash_hmac("md5", $data, $SECRET_KEY, true);

//step 3
$b64token = base64_encode($xauth_token);
$b64token = str_replace("=","", $b64token);
$b64token = str_replace("+","-", $b64token);
$b64token = str_replace("/","_", $b64token);

//step 4
$xtencode= "client_id=$CLIENT_ID&user_name=$displayname&challenge=$challenge&user_account_number=$account_number&xauth_token=$b64token";

//step 5
$xt= base64_encode($xtencode);
$xt = str_replace("=","", $xt);
$xt = str_replace("+","-", $xt);
$xt = str_replace("/","_", $xt);

}


if ( $type == "EMAIL AND ACCOUNT NUMBER" )
{
$email = $_POST["email"];;
echo "Email : $email<br>";
$account_number=$_POST["acno"];;
echo "Account Number : $account_number<br>";
$challenge = time();

//step 1
$data = "$CLIENT_ID:$email:$displayname:$challenge:$account_number";

//step 2
$xauth_token = hash_hmac("md5", $data, $SECRET_KEY, true);

//step 3
$b64token = base64_encode($xauth_token);
$b64token = str_replace("=","", $b64token);
$b64token = str_replace("+","-", $b64token);
$b64token = str_replace("/","_", $b64token);

//step 4
$xtencode= "client_id=$CLIENT_ID&user_email=$email&user_name=$displayname&challenge=$challenge&user_account_number=$account_number&xauth_token=$b64token";

//step 5
$xt= base64_encode($xtencode);
$xt = str_replace("=","", $xt);
$xt = str_replace("+","-", $xt);
$xt = str_replace("/","_", $xt);
}

if ( $type == "EMAIL AND USER ID" )
{
$email = $_POST["email"];;
echo "Email : $email<br>";
$user_id = $_POST["user_id"];;
echo "User ID : $user_id<br>";


$challenge = time();

//step 1
$data = "$CLIENT_ID:$email:$displayname:$challenge";

//step 2
$xauth_token = hash_hmac("md5", $data, $SECRET_KEY, true);

//step 3
$b64token = base64_encode($xauth_token);
$b64token = str_replace("=","", $b64token);
$b64token = str_replace("+","-", $b64token);
$b64token = str_replace("/","_", $b64token);

//step 4
$xtencode= "client_id=$CLIENT_ID&user_email=$email&user_name=$displayname&challenge=$challenge&xauth_token=$b64token&user_id=$user_id";

//step 5
$xt= base64_encode($xtencode);
$xt = str_replace("=","", $xt);
$xt = str_replace("+","-", $xt);
$xt = str_replace("/","_", $xt);
}

if ( $type == "EMAIL AND ACCOUNT NUMBER AND USER ID" )
{
$email = $_POST["email"];;
echo "Email : $email<br>";
$user_id = $_POST["user_id"];;
echo "User ID : $user_id<br>";
$account_number=$_POST["acno"];;
echo "Account Number : $account_number<br>";
$challenge = time();
//step 1
$data = "$CLIENT_ID:$email:$displayname:$challenge:$account_number";

//step 2
$xauth_token = hash_hmac("md5", $data, $SECRET_KEY, true);

//step 3
$b64token = base64_encode($xauth_token);
$b64token = str_replace("=","", $b64token);
$b64token = str_replace("+","-", $b64token);
$b64token = str_replace("/","_", $b64token);

//step 4
$xtencode= "client_id=$CLIENT_ID&user_email=$email&user_name=$displayname&challenge=$challenge&xauth_token=$b64token&user_id=$user_id&user_account_number=$account_number";

//step 5
$xt= base64_encode($xtencode);
$xt = str_replace("=","", $xt);
$xt = str_replace("+","-", $xt);
$xt = str_replace("/","_", $xt);
}

if ( $type == "EMAIL AND USER ACCOUNT NUMBER" )
{
$email = $_POST["email"];;
echo "Email : $email<br>";
$account_number=$_POST["acno"];;
echo "Account Number : $account_number<br>";
$challenge = time();

//step 1
$data = "$CLIENT_ID:$email:$displayname:$challenge:$account_number";

//step 2
$xauth_token = hash_hmac("md5", $data, $SECRET_KEY, true);

//step 3
$b64token = base64_encode($xauth_token);
$b64token = str_replace("=","", $b64token);
$b64token = str_replace("+","-", $b64token);
$b64token = str_replace("/","_", $b64token);

//step 4
$xtencode= "client_id=$CLIENT_ID&user_email=$email&user_name=$displayname&challenge=$challenge&user_account_number=$account_number&xauth_token=$b64token";

//step 5
$xt= base64_encode($xtencode);
$xt = str_replace("=","", $xt);
$xt = str_replace("+","-", $xt);
$xt = str_replace("/","_", $xt);
}


}
?>
<table>
<tr>
<td>
<?php
  if ( "$xt" != "" ){
    $domain=substr($domain,8);
    echo "<a href='https://$domain/api/v1/xapi/users/me?xt=\"$xt\"'  target='_blank'><b>Check user api</b></a>";
    echo "</br>";
    if(isset($gconfid)) {
      echo "<a href='https://m42controller.zencite.com/files/token_embed.php?sd=$domain&vid=$gconfid&token=$xt'  target='_blank'><b>Check video embedding with xauth</b></a>";
      #echo "<a href='https://$domain/files/token_embed.php?sd=\"$domain\"&vid=\"$gconfid\"&token=\"$xt\'  target='_blank'>Check ideo embedding with xauth</a>";
    }
  }
?>
</td>
</tr>
</table>
</center>
</body>
</html>
