<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
<link rel="stylesheet" href="/css/"/>
<title>Page Title</title>
<style>

body{
    background-color: white;
    text-align:center;
    display: block;
}

.menu-list-item{
    display:inline-block;
    margin:0 15px;
    line-height: 60px;
    display:inline-block;
    transform:translate(40px);
}

.menu-list-item > a:hover{
display:inline-block;
text-decoration:none;
}

.menu-list-item > a{
text-decoration: none;
z-index:1000;
color:gray;
font-size:20px;

}
.menu{
    z-index:1000;
    float: left;
    font-size:15px;
    position:absolute;
    top:0;
    right:0;
    transform: translateX(-190px);
    
}

.class{
    z-index: 10000;
    float:left;
    font-size:1px;
    position:absolute;
    transform:translateX(900px);
   
}

.class-list-item > a{
    text-decoration:none;
    
}

.class-list-item > a:hover{
text-decoration:none;

}

.class-list-item{
    display:inline-block;
    margin:0 15px;
    line-height: 60px;
    transform:translateY(-80px);
    font-size:25px;
    display:inline-block;
    
}

.c1{
    transform:translate(230px, -30px);
    width:1400px;
    height:550px;
    
}

.l1{
    transform: translate(-300px,-20px);
    background-color:blue;
    width:670px;
    height:80px; 
    z-index: 1000;
}

.h1{
    color:white;
    transform: translate(250px,20px);
    font-size:24.5px;
}

.c2{
    transform:translate(230px, -430px);
    width:100px;
    height:100px;
}

.h2{
    z-index:10000px;
    transform:translate(730px, -430px);
    color:white;
    width: 425.5px;
    height: 53px;
    font-size: 24px;
    font-weight: normal; 
    font-style: normal;
    text-align: center;

}

.l2{
    transform: translate(-300px,-1000px);
    background-color:blue;
    width:670px;
    height:80px; 
    z-index: 1000;
}

.l3{
    transform:translate(1px, -210px);
}

.c3{
    width:300px;
    height:130px;
    
}

.h3{
    color:black;
    width: 400px;
    height: 55px;
    font-weight: normal;  
    transform:translate(500px);
}

.l4{
    transform:translate(250px, -900px);
    
}

.h4{
    transform:translate(700px, -1400px);
    color:black;
    width: 400px;
    height: 55px;
    font-weight: normal;
    font-size:16px;
}
.c5{
    transform:translate(200px, -2300px);
    width:720px;
    height:250px;
}
.h5{
    z-index:1000;
    transform:translate(750px, -2450px);
    width: 303px;
  height: 49.5px;
  font-size: 15px;
  font-style: normal;
  text-align: center;
  color:white;
}
.div1{
    width:45px;
    height:20px;
    background-color:#d90445;
    z-index:1000;
    transform:translate(540px, -2440px); 
    position:fixed;
}
.div3{
    
    width:45px;
    height:20px;
    background-color:#1a54e7;
    z-index:1000;
    color:black;
    transform:translate(100px, 500px);
}
.c6{
    width:236px;
    height:150px;
    transform:translate(-40px, -2370px); 

}
.h6{
    transform:translate(-40px, -2380px); 
    font-size: 9px;
}

.dd{
    z-index:10000;
    background-color:#d90445;
    color:white;
    transform:translate(540px, -2440px);
    width:50px;
}
.c7{
    width:236px;
    height:150px;
    transform:translate(290px, -16px); 
 
}
.h8{
    transform:translate(-990px, -3000px);
    font-style: normal;
    text-align: center;
    font-size: 9px;
  width: 184.5px;
  height: 24px;
}
.l6{
    transform:translate(83px, -2560px);
}
.c8{
    width:236px;
    height:150px;
    transform:translate(220px, -15px);
}
.h9{
    width: 184.5px;
  height: 23.5px;
  font-size: 9px;
    transform:translate(500px, -2900px);
}
.l7{
    transform:translate(370px, -2715px);
}
.l8{
    font-size:39px;
    transform:translate(210px, -2700px);
}
.s1{
    width:236px;
    height:150px;
}
.s2{
    width:236px;
    height:150px;
}
.s3{
    width:236px;
    height:150px;
}
.l33{
    transform:translate(1px, -2610px);
}

.c33{
    width:300px;
    height:130px;
    
}

.h33{
    color:black;
    width: 400px;
    height: 55px;
    font-weight: normal;  
    transform:translate(500px, 1PX);
}

.l44{
    transform:translate(200px, -3300px);
    
}

.h44{
    transform:translate(700px, -1400px);
    color:black;
    width: 400px;
    height: 55px;
    font-weight: normal;
    font-size:16px;
}
.lg{
    width: 1090px;
  height: 210.5px;
  background-color: #1a54e7;
  transform:translate(338px, -4600px);
}
.h11{
  color:white;
  width: 30px;
  height: 3px;
  font-size: 12px;
  text-align: center;
  font-size: 24px;
  line-height: 1.25;
}

.hhh{
  font-size: 25px;
  color:white;
  transform:translate(1px, 100px);
}
.ooo{
    width: 166.5px;
  height: 25px;
  border-radius: 12.5px;
  background-color: #2c6cff;
  transform:translate(400px, 100px);
}
.ttt{
    width: 70px;
    height: 22px;
    color:#2c6cff;
    border-radius: 12.5px;
    background-color:white;
    transform:translate(550px, 77px);
}
.h13{
    color:#2c6cff;
    border-radius: 12.5px;
    transform:translate(550px, 77px);
}
.ragac{
    transform:translate(365px, 30px);
    width: 327px;
  height: 38.5px;
  font-size: 12px;
  font-size: 20px;
}
.nc{
    transform:translate(200px, -4550px);
    width: 333px;
  height: 26.5px;
  font-size: 9px;
  color: #a7acbc;
}
.ncc{
    transform:translate(200px, -4550px);
}
</style>
</head>
<body>

<div class="l1">
<h1 class="h1">Blog Template</h1>
</div>

<div class="l2">People</div>
<nav class="menu">
<ul class="menu-list">
<li class="menu-list-item">
    <a href="#link">about</a></li>
        <li class="menu-list-item">
            <a href="#link">cooperation</a></li>
                <li class="menu-list-item">
             <a href="#link">contact     |</a></li>
          </ul>

<nav class="class">
 <ul class="class-list">
  <li class="class-list-item">
   <a href="#link">nature</a></li>
    <li class="class-list-item">
     <a href="#link">people</a></li>
      <li class="class-list-item">
       <a href="#link">trips</a></li>
          <li class="class-list-item">
       <a href="#link">animals</a></li> 
      <li class="class-list-item">
     <a href="#link">fashion</a></li>
    <li class="class-list-item">
   <a href="#link">tech</a></li>
  <li class="class-list-item">
 <a href="#link">...</a></li>
</ul>
</nav>
      <div class="div2">
      <img class="c1" src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/937B4627-FF01-4674-BE07-95E911D87627.png" />
      <img class="c2" src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/9F8AFAFA-4E35-4CEF-BB79-7025846C6A4C.png"/>
<h2 class="h2">Maecenas quis lobortis nunc. Nullam sit
vel odio congue vulputate a ut nisi.</h2>

</div>

<div class="l3">
<img class="c3" src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/54638BD2-67CD-4B51-8B69-464AC1CB4E2C.png"/>
<h4 class="h3">Donec elementum dui semper, pretium dui quis, pretium nisl. Nunc quis ornare odio.</h4>
</div>

<div class="l4">
<img class="c4" src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/43747E81-6873-48F8-A718-B880AFB07813.png"/>
<h5 class="h4">Maecenas quis lobortis nunc. Nullam sit amet augue vel odio congue vulputate a ut nisi.</h5>
</div>

<div class="l5">
<img class="c5" src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/EB584EA9-4B30-4B02-BBA5-E55134D6C6FD.png"/>
<h5 class="h5">PROIN CONGUE ELIT FRINGILLA     
SODales tellus interdum fermentum nulla. Aliquam vitae arcu condimentum,
consectetur diam sed, ultrices urna. </h5>
<div class="dd">Tips</div>
</div>


<div>
<img class="c6" src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/99C21F73-5EED-42AA-ADE0-99869CEB7EB5.png"/>
<h6 class="h6">Donec elementum dui semper, pretium dui quis, pretium nisl.</h6>
</div>

<div class="l6">
<img class="c7" src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/5AF47E1B-E82D-4BAC-AE62-ADC6B15B468B.png"/>
<h8 class="h8">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</h8>
</div>

<div class="l7">
<img class="c8" src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/45EB835B-84A3-429D-9BF0-CCE0239E28BF.png"/>
<h9 class="h9">Sed arcu ipsum, convallis quis porttitor bibendum, convallis non enim.</h9>
</div>

<div class="l8">
<img class="s1" src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/63B2E387-A080-4521-81C1-4A6944664068.png"/>
<img class="s2" src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/46F2E21D-6ADF-4A5D-9F37-3DF3C4BA1E26.png"/>
<img class="s3" src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/58C9BA21-DFC7-4421-9674-908955720A3A.png"/>
</div>
<div class="l33">
<img class="c33" src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/54638BD2-67CD-4B51-8B69-464AC1CB4E2C.png"/>
<h4 class="h33">Donec elementum dui semper, pretium dui quis, pretium nisl. Nunc quis ornare odio.</h4>
</div>

<div class="l44">
<img class="c44" src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/43747E81-6873-48F8-A718-B880AFB07813.png"/>
<h5 class="h44">Maecenas quis lobortis nunc. Nullam sit amet augue vel odio congue vulputate a ut nisi.</h5>
</div>

<div class="lg">
<div class="ragac">
<h12 class="hhh">NEWSLETTER
DONEC elementum dui semper, pretium dui quis, pretium nisl.</h12>
</div>
<div class="ooo"></div>

<div class="ttt">

<h13 class="h13">Sign in</h13></div>

</div>
<div class="ncc">
<h14 class="nc">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
Try awsome tool for desgners symu.co</h14>
</div>
</body>
</html>