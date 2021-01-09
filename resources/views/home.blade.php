<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: white;
}

/* Create 3 equal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 33.3%;
  background-color: #f1f1f1;
  padding-left: 10px;
  padding-right: 10px;
}

/* Middle column */
.middlecolumn {   
  float: left;
  width: 33.3%;
  background-color: #f1f1f1;
  padding-left: 10px;
  padding-right: 10px;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 33.3%;
  background-color: #f1f1f1;
  padding-left: 10px;
  padding-right: 10px;
}


/* Add a card effect for articles */
.card1 {
  background-image: url("assets/other/home_banner.jpg");
  padding: 20px 20px 20px 20px ;
  width: 100%;
  height: 100%;
}
.card2 {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .middlecolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="row">
    <div class="card1">
        <h1>Hello World!</h1>
    </div>
</div>
<div class="row">
    <div class="leftcolumn">
      <img src="assets/other/home_bg.jpg" alt="Bawa kontainer bersih dan kering, lalu timbang" height="100%" width="100%">
      <h3>Bawa kontainer bersih dan kering, lalu timbang</h3>
    </div>
    <div class="middlecolumn">
      <img src="assets/other/home_bg.jpg" alt="Lakukan pengisian sebanyak yang Anda mau" height="100%" width="100%">
      <h3>Lakukan pengisian sebanyak yang Anda mau</h3>
    </div>
    <div class="rightcolumn">
      <img src="assets/other/home_bg.jpg" alt="Timbang kembali lalu bayar" height="100%" width="100%">
      <h3>Timbang kembali lalu bayar</h3>
    </div>
</div>



</body>
</html>
