<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap 4 Footer with Social icons</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <style>
    /*FOOTER*/

    footer {
      background: #273044;
      color: white;
    }

    footer a {
      color: #fff;
      font-size: 14px;
      transition-duration: 0.2s;
    }

    footer a:hover {
      color: #FA944B;
      text-decoration: none;
    }

    .copy {
      font-size: 12px;
      padding: 10px;
    }

    .footer-middle {
      padding-top: 2em;
      color: white;
    }

    /*SOCİAL İCONS*/

    /* footer social icons */

    ul.social-network {
      list-style: none;
      display: inline;
      margin-left: 0 !important;
      padding: 0;
    }

    ul.social-network li {
      display: inline;
      margin: 0 5px;
    }


    /* footer social icons */

    .social-network a.icoFacebook:hover {
      background-color: #3B5998;
    }

    .social-network a.icoLinkedin:hover {
      background-color: #007bb7;
    }

    .social-network a.icoFacebook:hover i,
    .social-network a.icoLinkedin:hover i {
      color: #fff;
    }

    .social-network a.socialIcon:hover,
    .socialHoverClass {
      color: #44BCDD;
    }

    .social-circle li a {
      display: inline-block;
      position: relative;
      margin: 0 auto 0 auto;
      -moz-border-radius: 50%;
      -webkit-border-radius: 50%;
      border-radius: 50%;
      text-align: center;
      width: 30px;
      height: 30px;
      font-size: 15px;
    }

    .social-circle li i {
      margin: 0;
      line-height: 30px;
      text-align: center;
    }

    .social-circle li a:hover i,
    .triggeredHover {
      -moz-transform: rotate(360deg);
      -webkit-transform: rotate(360deg);
      -ms--transform: rotate(360deg);
      transform: rotate(360deg);
      -webkit-transition: all 0.2s;
      -moz-transition: all 0.2s;
      -o-transition: all 0.2s;
      -ms-transition: all 0.2s;
      transition: all 0.2s;
    }

    .social-circle i {
      color: #595959;
      -webkit-transition: all 0.8s;
      -moz-transition: all 0.8s;
      -o-transition: all 0.8s;
      -ms-transition: all 0.8s;
      transition: all 0.8s;
    }

    .social-network a {
      background-color: #F9F9F9;
    }
  </style>
</head>

<body>

  <footer class="mainfooter" role="contentinfo">
    <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <!--Column1-->
            <div class="footer-pad">
              <h4 style="padding-bottom: 13px;">TENTANG KAMI</h4>
              <ul class="list-unstyled">
                <p style="font-size: 13px;line-height: 20px;">Japan site adalah sebuah media yang memberikan informasi tentang materi belajar bahasa dan budaya jepang.<br><br>
                  Adapun materi yang akan kami bahasa pada website ini adalah tata bahasa, kosakata, huruf, bahasa jepang untuk bisnis dan JLPT quiz. Ayo mulai pelajari materi.</p>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!--Column2-->
            <div class="footer-pad">
              <h4 style="padding-bottom: 13px;">PROFIL PERUSAHAAN</h4>
              <ul class="list-unstyled">
                <p style="font-size: 13px;line-height: 20px;">PT. APPKEY adalah perusahaan yang bergerak di bidang IT. Menawarkan jasa pembuatan aplikasi dan website yang berlokasi di Denpasar-Bali, Indonesia. Menggunakan teknologi canggih, kemampuan dan pengalaman dalam pengembangan yang kaya serta memanfaatkan Bali sebagai tempat yang strategis bertujuan untuk “Menciptakan Produk” yang memiliki perspektif global.</p>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!--Column1-->
            <div class="footer-pad">
              <h4 style="padding-bottom: 13px;">MENU</h4>
              <ul class="list-unstyled">
                <li><a href="#">Kamus</a></li>
                <li><a href="https://jepang-indonesia.co.id/vocab">Vocab</a></li>
                <li><a href="https://jepang-indonesia.co.id/kanjiname/index">Kanji Name</a></li>
                <li><a href="https://jepanginfo.co.id/">Jepang Guide</a></li>
                <li><a href="https://appshop.link/demo/japansite/blog/">Blog</a></li>
                <li><a href="https://appshop.link/demo/japansite/#">Sekolah</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!--Column1-->
            <div class="footer-pad">
              <h4 style="padding-bottom: 13px;">KONTAK</h4>
              <ul class="list-unstyled">
                <p style="font-size: 13px;line-height: 20px;">JL Batu Sari No.3 -3 Renon,Denpasar, Bali - Indonesia Post code：80226<br><br>
                  TEL： 0361-23-8091<br>
                  info@appkey.co.id
                </p>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 copy">
            <p class="text-center">&copy; Copyright © 2021 PT. APPKEY. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>