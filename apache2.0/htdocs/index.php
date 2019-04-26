<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fast Share</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./material/css/materialize.min.css">
    <script src="./material/js/materialize.min.js"></script>
    <link rel="stylesheet" href="./material/css/flexbox.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="/favicon.jfif"/>
    <style>
       /* fallback */
       body{
         font-family: 'Nunito', sans-serif;
       }
@font-face {
    font-family: 'Material Icons';
    font-style: normal;
    font-weight: 400;
    src: url(./material/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2');
  }
  
  .material-icons {
    font-family: 'Material Icons';
    font-weight: normal;
    font-style: normal;
    font-size: 24px;
    line-height: 1;
    letter-spacing: normal;
    text-transform: none;
    display: inline-block;
    white-space: nowrap;
    word-wrap: normal;
    direction: ltr;
    -webkit-font-feature-settings: 'liga';
    -webkit-font-smoothing: antialiased;
  }
    </style>
</head>
<body>
    
  <nav style="background-color: #3F3D55;" class="">
    <div class="nav-wrapper">
      <a href="#" style="padding:0px 100px;" class="brand-logo">FastShare</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="http://localhost:8345/index.php">Home</a></li>
        <a href="http://localhost:8345/develope.php" class="waves-effect waves-light purple"><i class="material-icons left">person</i>Developnment</a>
      </ul>
    </div>
  </nav>
    <!-- <section class="container">
       <h3>Fast Share for Desktops.</h3>
    </section>
 -->
    <br>

    <section class="container-fluid">
       <div class="row middle-md middle-sm middle-xs middle-lg">
          <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 center-md center-xs center-sm center-lg">
          <a href="http://localhost:8345/share/push.php" class="waves-effect waves-light btn-large purple darken-1"><i class="material-icons left">cloud_upload</i>Send</a>
          <h5>Send files to your mere friend faster</h5>
          <p>Desktop transfer, faster than ever</p>
          </div>
          <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 center-md center-xs center-sm center-lg">
              <center><img src="./material/undraw_files_sent_oeqg.png" style="width:80%;"></center>
          </div>

          <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 center-md center-xs center-sm center-lg">
           <a href="http://localhost:8345/share/recieve.php" class="waves-effect waves-light btn-large purple darken-1"><i class="material-icons left">cloud_download</i>Recieve</a>
           <h5>Recieve files from your friend faster</h5>
          <p>Desktop transfer, faster than ever</p>
          </div>
       </div>
    </section>
    

    <section class="container">
        <h4>Open Source</h4>
        
        <div class="row middle-md middle-sm middle-xs middle-lg">
          <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 center-md center-xs center-sm center-lg">
             <img style="width:80%;" src="./material/undraw_open_source_1qxw.png">
          </div>
          <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
             MIT License<br>

            Copyright (c) 2019 Fast Share<br>

            Permission is hereby granted, free of charge, to any person obtaining a copy
            of this software and associated documentation files (the "Software"), to deal
            in the Software without restriction, including without limitation the rights
            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
            copies of the Software, and to permit persons to whom the Software is
            furnished to do so, subject to the following conditions:<br>

            The above copyright notice and this permission notice shall be included in all
            copies or substantial portions of the Software.<br>

            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
            SOFTWARE.
          </div>
        </div>
    </section>    
    <section class="container">
        <h4>Important Note :</h4>
        <p style="color:red;">The files you want to share should be in the ./apache2.0/htdocs/files folder from the root.</p>
    </section>

    <br>


        <footer style="background-color: #3F3D55;" class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Fast Share</h5>
                <p class="grey-text text-lighten-4">A wireless data transfer solution</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Home</a></li>
                  <li><a class="grey-text text-lighten-3" href="./develope.php">Develope</a></li>
                  <li><a class="grey-text text-lighten-3" href="http://github.com/Desktop-FastShare">Github</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.google.com/search?q=fast+share+for+desktops">Google us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 Copyright FastShare
            </div>
          </div>
        </footer>
            
</body>
</html>