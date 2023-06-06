@extends('plataform')
@section('pageCurrent')
<link rel="stylesheet" href="stile7.css">

</head>
<body>

<div class="preview-wrapper">
  <canvas id="canvas"></canvas>
</div>
<div class="filter-buttons">
  <div class="filter-group">
    <button id="brightness-dec">-</button>
    <span class="filter-name">Brightness</span>
    <button id="brightness-inc">+</button>
  </div>
  <div class="filter-group">
    <button id="contrast-dec">-</button>
    <span class="filter-name">Contrast</span>
    <button id="contrast-inc">+</button>
  </div>
  <div class="filter-group">
    <button id="saturation-dec">-</button>
    <span class="filter-name">Saturation</span>
    <button id="saturation-inc">+</button>
  </div>
  <div class="filter-group">
    <button id="vibrance-dec">-</button>
    <span class="filter-name">Vibrance</span>
    <button id="vibrance-inc">+</button>
  </div>
  <div class="filter-group">
    <button id="exposure-dec">-</button>
    <span class="filter-name">Exposure</span>
    <button id="exposure-inc">+</button>
  </div>
  <div class="filter-group">
    <button id="noise-dec" class="disabled">-</button>
    <span class="filter-name">Noise</span>
    <button id="noise-inc">+</button>
  </div>
  <div class="filter-group">
    <button id="sharpen-dec" class="disabled">-</button>
    <span class="filter-name">Sharpen</span>
    <button id="sharpen-inc">+</button>
  </div>
  <div class="filter-group">
    <button id="sepia-dec" class="disabled">-</button>
    <span class="filter-name">Sepia</span>
    <button id="sepia-inc">+</button>
  </div>
  <div class="filter-group">
    <button id="hue-dec" class="disabled">-</button>
    <span class="filter-name">Hue</span>
    <button id="hue-inc">+</button>
  </div>
  <div class="filter-group">
    <button id="blur-dec" class="disabled">-</button>
    <span class="filter-name">Blur</span>
    <button id="blur-inc">+</button>
  </div>
  <div class="filter-group">
    <button id="gamma-dec" class="disabled">-</button>
    <span class="filter-name">Gamma</span>
    <button id="gamma-inc">+</button>
  </div>
  <div class="filter-group">
    <button id="clip-dec" class="disabled">-</button>
    <span class="filter-name">Clip</span>
    <button id="clip-inc">+</button>
  </div>
</div>
<div class="editor-buttons">
  <input type="file" id="upload-file" placeholder="Upload a Picture" />
  <label for="upload-file">Upload a Picture</label>
  <button id="download-btn">Download Image</button>
  <br/>
  <button id="vintage-btn">Vintage</button>
  <button id="lomo-btn">Lomo</button>
  <button id="clarity-btn">Clarity</button>
  <button id="sincity-btn">Sin City</button>
  <button id="crossprocess-btn">Cross Process</button>
  <button id="pinhole-btn">Pinhole</button>
  <button id="nostalgia-btn">Nostalgia</button>
  <button id="majestic-btn">Her Majesty</button>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/camanjs/4.1.2/caman.full.min.js'></script><script  src="script4.js"></script>
@csrf
@endsection