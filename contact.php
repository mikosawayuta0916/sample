<?php
 $name = "";  //名前受信
 if (array_key_exists('name', $_POST)){
     $name = $_POST['name'];
    
     
 }
 
 $to_mail = "";  //メールアドレス受信
 if (array_key_exists('to_mail', $_POST)){
     $to_mail = $_POST['to_mail'];
   
 }
    
  $content = '';  //お問い合わせ内容受信
    if (array_key_exists('content', $_POST)){
        $content = $_POST['content'];
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--     SEO対策     -->
      <meta name="description" content="
      seo対策seo対策seo対策seo対策seo対策seo対策seo対策seo対策seo対策
      ">
      <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <title>コーポレートサイト</title>
    <script src="https://kit.fontawesome.com/fb8f424287.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://mikosawayuta0916.github.io/sample/css/animate.css">
    <link rel="stylesheet" href="https://mikosawayuta0916.github.io/sample/css/style.css">
</head>
<body>

    <!--  共通  -->
<!--  フローティング  -->
<section class="home_button">
    <a href="/">トップへ</a>
    </section>

    <div class="wrapper">
        <!--  ハンバーガーメニュー  -->
                <section class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                  </section>
        
         <!--  メニューバー　　-->
              <div class="sidebar">
                  <div class="side-contents">
             <nav class="header_nav globalMenuSp">     
             <ul class="side-menu">
                <li class="side-logo wow slideInRight"><a href="/"><span class="red">※1</span>会社ロゴ</a></li>
                 <li class="wow slideInRight"><a href="/">HOME</a></li>
                 <li class="wow slideInRight"><a href="#">PROFILE</a></li>
                 <li class="wow slideInRight"><a href="#">CONTACT</a></li>
                 <li class="wow slideInRight"><a href="#"><i class="fab fa-facebook-square fa-2x size"></i></a></li>
                 <li class="wow slideInRight"><a href="#"><i class="fab fa-twitter-square fa-2x size"></i></a></li>
                 <li class="wow slideInRight"><a href="#"><i class="fab fa-instagram-square fa-2x size"></i></a></li>
             </ul>
             </nav>
             <!--  side-icon  -->
                  </div><!--  side-contents  -->
              </div>  <!--  sidevar  -->
              <!--  メニューバー　　-->
        


            

        <!--  共通  -->
<div class="content">
        <div class="complete">
            <section class="inner">
                <h1 class="heading">

                    <?php
                     mb_language("Japanese");
                     mb_internal_encoding("UTF-8");
                     
                     $title = '受付内容';
                     $send_mail = 'g191062@hi-tech.ac.jp';
                     $message = "氏名" . $name  . "<br>" .
                                "メールアドレス" . $to_mail  . "<br>". 
                                "お問い合わせ内容" . $content;
                     
                     if(mb_send_mail($send_mail, $title, $message)){
                       echo "送信完了！";
                     } else {
                       echo "メールの送信に失敗しました";
                     };
                    ?>

                </h1>
                <div class="complete_text">
                    お問い合わせありがとうございます。<br>
                    お問い合わせ内容を確認の上、ご返信させていただきます。
                </div><!--  complete_text  -->
                <table>
                    <tbody>
                        <tr>
                            <th>氏名</th>
                            <td><?php print htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?></td>
                        </tr>
                         <tr>
                            <th>メールアドレス</th>
                            <td><?php print htmlspecialchars($to_mail, ENT_QUOTES, "UTF-8"); ?></td>
                        </tr>
                         <tr>
                            <th>お問い合わせ内容</th>
                            <td class="textarea">
                            <?php print htmlspecialchars($content, ENT_QUOTES, "UTF-8"); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <a href="/index.php">
<button class="complete_button" type="submit">ホームへ</button>
</a>
            </section><!--  inner  -->
        </div><!--  complete  -->
</div><!--  content  -->
    <!--  共通　　-->
<footer>
    <div class="footer_inner">
    <p>Copyright(c) 2016 Sample Inc. All Rights Reserved.</p>
    </div>
</footer>
    </div><!--  wrapper  -->

<!--  jQuery読み込み  -->
    <script src="https://mikosawayuta0916.github.io/sample/js/wow.min.js"></script>
    <script src="//code.jquery.com/jquery-1.12.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://mikosawayuta0916.github.io/sample/js/js.js"></script>

    </body>
    </html>
