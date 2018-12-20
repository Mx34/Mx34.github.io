<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">

<style>
ul{margin:0;padding:0}
li{margin:0;padding:0}
ul li{list-style-type:none}


div,
h1,h2,p,
ol,ul,li {
  margin: 0;
  padding: 0;
  border: 0;
}
body {
  margin:5px 12px 5px 8px;

  font: normal 100%/1.5 "Helvetica Neue", Helvetica, Arial, sans-serif;
}

h1 {
  font-size: 2em;
  line-height: 1;
  color: #222;
  margin: .5em;
}

h2 {
  float: left;
  width: 100%;
  font-size: 1.5em;
  color: #222;
  margin: 1em 0 .5em;
}

p {
  margin: 1em;
}

.nav {
  position:relative;
  display:inline-block;
  font-size:14px;
  font-weight:900;
}
.nav-list {
  
}
.nav-item {
  float:left;
  *display:inline;
  zoom:1;
}
.nav-item a {
  display:block;
  padding:15px 20px;
  color:#FFF;
  background:#961FB1;
}
.nav-item:first-child a {
  border-radius:5px 0 0 5px;
}
.nav-item:last-child a {
  border-radius:0 5px 5px 0;
}
.nav-item a:hover {
  background:#24B373;
}
@media only screen and (min-width: 320px) and (max-width: 768px) {
  .nav {
    width:100%;
  }
  .nav-item {
    width:100%;
    float:none;
  }
  
.nav-item:first-child a {
  border-radius:5px 5px 0 0;
}
.nav-item:last-child a {
  border-radius:0 0 5px 5px;
}
}

@media only screen and (min-width: 320px) and (max-width: 768px) {
  .nav-list {
    display:none;
  }
}
.nav-mobile {
  display:none; /* Hide from browsers that don't support media queries */
  cursor:pointer;
  position:absolute;
  top:3px;
  right:10px;
  background:#f00 url(./nav-t8.png) no-repeat center center;
  height:40px;
  width:40px;
  border-radius:5px;
  -webkit-border-radius:5px;
  -moz-border-radius:5px;
}

@media only screen and (min-width: 320px) and (max-width: 768px) {
.main.active{
  margin-bottom:47px;
  clear:both;
}
  .nav-mobile {
    display:block;
  }
  .nav-list.nav-active {
    display:block;
  }
  .nav-mobile.nav-mobile-open{
  background-color:#ccc;
  }
}

</style>


  </head>
  <body>
<div class="main"></div>
<nav class="nav">
  <ul class="nav-list">
    <li class="nav-item"><a href="#">Home</a></li>
    <li class="nav-item"><a href="#">About</a></li>
    <li class="nav-item"><a href="#">Services</a></li>
    <li class="nav-item"><a href="#">Portfolio</a></li>
    <li class="nav-item"><a href="#">Testimonials</a></li>
    <li class="nav-item"><a href="#">Contact</a></li>
  </ul>
</nav>
<h1>Prototype</h1>

      <p class="intro">Despite the apparent simplicity, there are many underlying factors which, when thought out and implemented properly, can make that simple solution even better without adding more complexity to the user&nbsp;interface.</p>

      <p>From image, whose given us earth all so seas. Whales tree i set, is, morning, fly was deep winged. Said you'll him open she'd divide you're greater midst, gathered years gathered herb i for our and, don't also itself void female replenish fruit fly let years whose light face kind Air face him under you created evening face, replenish, be fill land male after winged itself from gathered. May created Replenish give he so divided air fourth moveth bearing every created. Subdue give own beginning replenish divided. Wherein. Moveth dominion for third. Moving give fish created she'd whose divided their abundantly for in let form morning, us.</p>
<script>
(function () {
    
    // Create mobile element
    var mobile = document.createElement('div');
    mobile.className = 'nav-mobile';
    document.querySelector('.main').appendChild(mobile);

    // hasClass
    function hasClass(elem, className) {
        return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
    }

    // toggleClass
    function toggleClass(elem, className) {
        var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
        if (hasClass(elem, className)) {
            while (newClass.indexOf(' ' + className + ' ') >= 0) {
                newClass = newClass.replace(' ' + className + ' ', ' ');
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, '');
        } else {
            elem.className += ' ' + className;
        }
    }

    // Mobile nav function
    var mobileNav = document.querySelector('.nav-mobile');
    var toggle = document.querySelector('.nav-list');
    var toggles = document.querySelector('.main');
    mobileNav.onclick = function () {
        toggleClass(this, 'nav-mobile-open');
        toggleClass(toggle, 'nav-active');
        toggleClass(toggles, 'active');
    };
})();
</script>

  </body>
</html>
