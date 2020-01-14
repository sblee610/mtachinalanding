<?
//보내는 이
  $recipient = "sblee610@naver.com";
//제목 처리
  $subject = '=?UTF-8?B?'.base64_encode($_GET['title']).'?=';
//메일주소
  $mail_from = '=?UTF-8?B?'.base64_encode($_GET['email']).'?=';

//메일내용
  $mail_body = "<table width='600' border='0' cellpadding='0' cellspacing='1' bgcolor='#CCCCCC'>
        <tr>
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>Title</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['title']."</td></tr>".

       " <tr>
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>名称  Name</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['senduser']."</td></tr>".

       " <tr>
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>电话/微信ID Phone/Wechat ID</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['phone']."</td></tr>".

       " <tr>
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>电子邮件 Email</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['email']."</td></tr>".

      " <tr>
         <td width='100' height='30' align='center' bgcolor='#eeeeee'>目前的工作 Current Job</td>
         <td width='400' bgcolor='#FFFFFF'>". $_GET['title']."</td></tr>".

       " <tr>
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>Program</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['body']."</td></tr>".

      "</table>";


//메일 발송처리

  $header = "From:$subject\n";
  $header = "Content-Type: text/html;charset=UTF-8";
  $header .= "From : $mail_from <".$mail_from.">\n";


  $email = mail($recipient, $subject, $mail_body, $header);



  if (!$email)
    echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /> <script>
         window.alert('申请失败了。 请稍后再试。');
         history.go(-1);
         </script>";
  else
    echo "         <script>
         window.alert('申请正常完成。');
         history.go(-1);
         </script>";
?>
