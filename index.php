<?php  //  メールフォーム
  $to = $_POST['to_mail'];          // 相手メールアドレス
  $subject = 'お問い合わせ内容';  //メール題名
  $name = $_POST['name'];           //名前受信
  $content = $_POST['content'];
  $send = $_POST['send'];
  $message = ' //メール本文
  <html>
<head>
  <title>お問い合わせ内容</title>
</head>
<body>
  <h1>お問い合わせ内容</h1>
  <table>
  <tbody>
      <tr>
          <th>氏名</th>
          <td><?php $name; ?></td>
      </tr>
       <tr>
          <th>メールアドレス</th>
          <td><?php $to; ?></td>
      </tr>
       <tr>
          <th>お問い合わせ内容</th>
          <td><?php $content; ?></td>
      </tr>
  </tbody>
</table>
</body>
</html>
  '
  ;

  // HTML メールを送信するには Content-type ヘッダが必須
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// 追加のヘッダ
$headers[] = 'To: Mary <g191062@ezweb.ne.jp>, Kelly <kelly@example.com>';
$headers[] = 'From: Birthday Reminder <paul-miko.0916@ezweb.ne.jp';
$headers[] = 'Cc: paul-miko.0916@ezweb.ne.jp';
$headers[] = 'Bcc: paul-miko.0916@ezweb.ne.jp';
if(isset($send)) { //編集ボタンを押したとき
  mail('g191062@hi-tech.ac.jp', $subject, $message, $headers);
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
         <li class="wow slideInRight"><a id="profile_button">profile</a></li>
         <li class="wow slideInRight"><a id="brand_button">BRAND</a></li>
         <li class="wow slideInRight"><a id="project_button">PROJECT</a></li>
         <li class="wow slideInRight"><a id="contact_button">CONTACT</a></li>
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




<!--  メイン  -->
<div class="content">

    <!--  メイン画像  -->
    <div class="top-img wow fadeInDown">
        <span class="red">※1</span>できれば会社を象徴する画像<br>
        か<br>
        会社紹介
    </div><!--  top-img  -->


<div class="message-wrapper">
    <div class="inner">
       <h1 class="heading wow fadeInDown hover">profile</h1>

   <div class="textarea">
       <p class="wow fadeInDown">
        <span class="red">※2</span>会社簡単なプロフィール会社簡単なプロフィール会社簡単なプロフィール
           会社簡単なプロフィール会社簡単なプロフィール 会社簡単なプロフィール会社簡単なプロフィール
           会社簡単なプロフィール会社簡単なプロフィール会社簡単なプロフィール
        </p>
   </div>
   </div><!--  inner  -->
</div><!--  message-wrapper  -->



<div class="photo-wrapper wow fadeInDown">
    <div class="inner_photo">
    <h1 class="delete"><span class="red">※3</span>下に会社の簡単な画像この文削除</h1>
    <img src="https://github.com/mikosawayuta0916/sample/blob/main/images/photo01.jpg?raw=true" alt="会社簡単な画像"><img src="https://github.com/mikosawayuta0916/sample/blob/main/images/photo02.jpg?raw=true" alt="会社簡単な画像"><img src="https://github.com/mikosawayuta0916/sample/blob/main/images/photo03.jpg?raw=true" alt="会社簡単な画像">
    <img src="https://github.com/mikosawayuta0916/sample/blob/main/images/photo04.jpg?raw=true" alt="会社簡単な画像"><img src="https://github.com/mikosawayuta0916/sample/blob/main/images/photo05.jpg?raw=true" alt="会社簡単な画像"><img src="https://github.com/mikosawayuta0916/sample/blob/main/images/photo06.jpg?raw=true" alt="会社簡単な画像">
    <span><img class="big" src="https://github.com/mikosawayuta0916/sample/blob/main/images/photo07.jpg?raw=true" alt="会社簡単な画像"></span>
    <img src="https://github.com/mikosawayuta0916/sample/blob/main/images/photo08.jpg?raw=true" alt="会社簡単な画像"><img src="https://github.com/mikosawayuta0916/sample/blob/main/images/photo09.jpg?raw=true" alt="会社簡単な画像"><img src="https://github.com/mikosawayuta0916/sample/blob/main/images/photo10.jpg?raw=true" alt="会社簡単な画像">
    <img src="https://github.com/mikosawayuta0916/sample/blob/main/images/photo11.jpg?raw=true" alt="会社簡単な画像"><img src="https://github.com/mikosawayuta0916/sample/blob/main/images/photo12.jpg?raw=true" alt="会社簡単な画像"><img src="https://github.com/mikosawayuta0916/sample/blob/main/images/photo13.jpg?raw=true" alt="会社簡単な画像">
    </div><!--  inner  -->
</div><!--  photo-wrapper  -->




<div class="brand-wrapper">
    <div class="inner">
    <h1 class="delete"><span class="red">※4</span>下に、主な会社の仕事内容</h1>
    <h1 class="heading wow fadeInDown hover">BRAND</h1>

    <div class="brand-contents wow fadeInDown">

        <div class="contents-item">
            <img src="https://github.com/mikosawayuta0916/sample/blob/main/images/logo01.png?raw=true">
            <p>ホームページサンプル株式会社では最動かす企業を目指します</p>
        </div>

        <div class="contents-item">
            <img src="https://github.com/mikosawayuta0916/sample/blob/main/images/logo02.png?raw=true">
            <p>革新的な技術で世の中を動かす企業を目します。世の中を動かす。</p>
        </div>

        <div class="contents-item">
            <img src="https://github.com/mikosawayuta0916/sample/blob/main/images/logo03.png?raw=true">
            <p>株式会社では最動かす企業を目指しますージン企業を目指します。</p>
        </div>

        <div class="contents-item">
            <img src="https://github.com/mikosawayuta0916/sample/blob/main/images/logo04.png?raw=true">
            <p>株式会社では最動かす企業を指しますージサン企業を目指します。</p>
        </div>

    </div><!--  brand-contents  -->
    </div><!--  inner  -->
</div><!--  brand-wrapper  -->





<div class="project-wrapper">
<div class="inner">
    <h1 class="heading wow fadeInDown hover">PROJECT</h1>
    <div class="project-contents">

        <h1 class="delete"><span class="red">※5</span>下に、貴社が何を目指しているかなど</h1>
        <div class="project-item">
            <img id="project-item-img" class="project-item-img wow fadeInLeft" src="https://github.com/mikosawayuta0916/sample/blob/main/images/photo14.jpg?raw=true">
            <p class="wow fadeInRight">
                ホームページサンプル株式会社では最新技術と自然との調和を目指します。革新的な革新的な革新的な技術で世の中を技術で世の中を技術で世の中を動かす企業を目指します。<br><br>

                ホームページサンプル株式会社。ホームページサンプル最新技術と自然との調和を目指します。革新的な技術で世の中を動かす企業を目指します。ホームページサンプル株式会社。ホームページサンプル最新技術と自然との調和を目指し調和を目指し調和を目指します。革新的な技術で世の中を動かす企業を目指します。</p>
        </div>

    </div><!--  project-contents  -->
    </div><!--  inner  -->
</div><!--  project-wrapper  -->




    <div class="contact">
    <div class="inner">
        <h1 class="heading hover wow fadeInDown">CONTACT</h1>
        <div class="contact_flex">
<div class="flex_left">
    <div class="font_box wow slideInLeft">
        <div class="box_left"><i class="fas fa-phone fa-2x"></i></div>
        <div class="box_right"><span class="red">※8</span>aaaaa-aaa@aaa.jp</div>
    </div>
    <div class="font_box wow slideInLeft">
        <div class="box_left"><i class="fas fa-envelope fa-2x"></i></div>
        <div class="box_right"><span class="red">※9</span>000-0000-0000</div>
    </div>
</div><!--  flex_left  -->


<div class="flex_right">
<form action="https://mikosawayuta0916.github.io/sample/contact.php" method="POST">
    <input type="text" placeholder="Name" name="name" required>
    <input type="email" placeholder="Email" name="to_mail" required>
    <textarea placeholder="Message" name="content" required></textarea>
    <input class="opacity" name="send" type="submit" value="送信">
</form>
</div><!--  flex_right  -->

        </div><!--  contact_flex  -->
    </div><!--  inner  -->
    </div><!--  contact  -->
    



<div class="company-wrapper">
    <div class="inner">
    <h1 class="heading">COMPANY</h1>
    <div class="company-contents">
        <div class="company-item">
            <p class="wow slideInLeft">
                <span class="red">※6</span>〒郵便番号<br>
                会社住所<br>
                
                営業時間 10:00〜20:00（水曜定休）<br>
                
                ※都合により休業する場合がございます
            
            </p>

                <div class="gg-map wow slideInRight">
                    <div class="iframe">
<span class="red">※7会社地図埋め込み　width="550" height="200" </span> 
</div><!--  iframe  -->
                </div><!--  gg-map  -->

        </div><!--  company-item  -->
    </div><!--  company-contents  -->
</div><!--  inner  -->
</div><!--  company-wrapper  -->

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


    <!--  共通  -->
</body>
</html>
