<?php
header("Content-Type: text/css; charset: UTF-8");
?>
@font-face{
    font-family: "TrebuchetMS";
    src: url("TrebuchetMS.ttf");
    font-weight: normal;
    font-style: normal;

}
@font-face{
    font-family: "BebasNeue";
    src: url("BebasNeue.otf");
    font-weight: normal;
    font-style: normal;
}
*{
    font-family: "TrebuchetMS";

}
a{
    color:rgb(64, 64, 163);;
}
body{
    background: rgb(51, 198, 243);
    font-family: "BebasNeue";
}

table {
    background:white;
    color:rgb(64, 64, 163);
  table-layout: fixed;
  width: 70%;
  border-collapse: collapse;
  border: 3px solid black;
}

thead th:nth-child(1) {
  width: 30%;
}

thead th:nth-child(2) {
  width: 20%;
}

thead th:nth-child(3) {
  width: 15%;
}

thead th:nth-child(4) {
  width: 35%;
}

th, td {
  padding: 20px;
}

#link{
    margin-top:15px;
    float:left;
    font-size:20px;
    padding-left:5px;
}