<x-app-layout>
<html lang="ja">
<!-- 最初の設定は終わっています　必要な方は触ってください -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BIV</title>
  <link rel="stylesheet" href="resources/css/reset.css">
  <link rel="stylesheet" href="resources/css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/main.js"></script>
</head>
<!-- 最初の設定は終わっています　必要な方は触ってください -->

<body>
<!-- ここからheader -->
  <div class="header">
    <img class="logo" src="img/logo.png">
    <h1>about us</h1>
    <h1>service</h1>
    <h1>cost</h1>
    <h1>support</h1>
    <div class="navbar-header"><a class="navbar-brand" href="login.php">login</a></div>
  </div>

<!-- ここからmain -->
  <div class="main">
    <div class="area">
    </div>
    <h1>Building<br>Information<br>Visualizing</h1>
    <h2>建築に関する数字を提供するサービス</h2>
    
  </div>

<!-- ここからcenter -->
<div class="center__text">
  <h1>建築数量を見える化する</h1>
  <h2>本サービスはPDFやCADからBIMデータを作成することで、図面では分からない数量を可視化します<br>
      作成したBIMデータはブラウザで閲覧可能なデータとして提供します<br>
      可視化した数量を基に建設時のCO2排出量や一次エネルギー消費量（BEI）も算出可能です</h2>

  <div class="center__explain">
    <img width="400px" class="flow1" src="img/flow1.png">
    <video width="200px" class="automation" src="mov/automation.mp4" autoplay muted loop></video>
    <img width="400px" class="flow2" src="img/flow2.png">
  </div>
</div>
<!-- ここからmiddle -->
<div class="middle__course">
  <div class="course1">
    <br><h1>建築数量の可視化</h1>
    <br><br><h2>PDFやCADから建築材料の数量を算出し可視化します</h2>
  </div>
  <div class="course2">
    <br><h1>エネルギーの可視化</h1>
    <br><br><h2>算出した数量から一次エネルギー消費量を可視化します</h2>
    </div>
  <div class="course3">
    <br><h1>CO2排出量の可視化</h1>
    <br><br><h2>算出した数量からCO2排出量を可視化します</h2>
  </div>
</div>

  
    <!-- <div class="wrap">
      <label for="label1">▼入力フォーム</label>
      <input type="checkbox" id="label1" class="switch" />
        <div class="content"> -->
      <div class="center__form">
        <h1>建築情報入力フォーム</h1>
        <h3>下記情報はBIM作成/CO2排出量/一次エネルギー消費量算出のために必要な情報です<br>
            CADやPDFはファイルをアップロードしてください
        </h3>
        <div class="form">
          <div class="step1">
          <h2>STEP1：用途/構造情報の入力</h2>
          <div class="center__select">
            用途：<select class="usage" id="usage">
              <option>用途を選択してください
              <option>共同住宅</option>
              <option>事務所</option>
              <option>商業</option>
              <option>ホテル</option>
              </option>
            </select><br>
            構造：<select class="str" id="str">
              <option>構造を選択してください
              <option>RC</option>
              <option>S</option>
              </option>
            </select>
          </div>
        </div>
          <div class="plan">
            <div class="step2">
            <h2>STEP2：スパン/高さの入力</h2>
            <div class="planx" id="planx">
              X方向のスパン入力：<input type='button' id='btnAdd1'/>
              <input type='button' id='btnDel1'/>
              <div id='dvContentArea1'></div>
            </div>
            <div class="plany">
              Y方向のスパン入力：<input type='button' id='btnAdd2'/>
              <input type='button' id='btnDel2'/>
              <div id='dvContentArea2'></div>
            </div>
            <div class="sec">
              Z方向の階高さ入力：<input type='button' id='btnAdd3'/>
              <input type='button' id='btnDel3'/>
              <div id='dvContentArea3'></div>
            </div>
          </div>
        </div>
          <div class="center__input">
            <div class="step3">
            <h2>STEP3：PDF等のアップロード</h2>
            <form action="" method="post" enctype="multipart/form-data" >
              <div>
                <input type="file" name="test">
              </div>
              <div>
                <!-- <input type="submit" value="upload" id="send"> -->
                <button class="sel" id="send">upload</button>
              </div>
            </form>
          </div>
        </div>
    

      <div class="output">
        <p class="line" id="output"></p>
      </div>
    </div>
 
    </div>
</body>

</html>
</x-app-layout>