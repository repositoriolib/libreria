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
body{
    background: rgb(51, 198, 243);
    font-family: "BebasNeue";
}
header{
    display: block;
    width: 95% ;
    height: 65px;
    line-height: 68px;
    text-align: center;
    font-family: "BebasNeue";
    font-size: 30px;
    font-weight: normal;
    letter-spacing: 2px;
    background: white;
    margin-top: 20px;
    margin-bottom: 15px;
    margin-left:30px ;
    border-radius: 10px 10px 10px 10px;
}

p{
    margin-bottom:25px ;
}
a{
    text-decoration: none;
    font-size:15px;
    color:white;
    transition: all 200ms;
}
a:hover{
    text-decoration: underline;
    color:rgb(64, 64, 163);
    transform: scale(2,2) 
}

#ingresar{
    display: block;
    height: 30px;
    line-height: 30px;
    font-size: 30px;
    font-weight: normal;
    color:rgb(64, 64, 163);
}
#mostrar{
    display: block;
    height: 30px;
    line-height: 30px;
    font-size: 30px;
    font-weight: normal;
    color:rgb(64, 64, 163);
    
}
#reportes{
    display: block;
    width: 20% ;
    height: 65px;
    line-height: 68px;
    text-align: center;
    font-family: "BebasNeue";
    font-size: 30px;
    font-weight: normal;
    letter-spacing: 2px;
    background: white;
    margin-top: 20px;
    margin-bottom: 15px;
    border-radius: 10px 10px 10px 10px;
}
#pdf{
    display: block;
    height: 30px;
    line-height: 30px;
    font-size: 30px;
    font-weight: normal;
    color:rgb(64, 64, 163);
}
#excel{
    display: block;
    height: 30px;
    line-height: 30px;
    font-size: 30px;
    font-weight: normal;
    color:rgb(64, 64, 163);
}