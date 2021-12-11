<!DOCTYPE html>
<html>
    <head>
        <title>entête pour mes contenu du cours de php</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">
        <style>
            header{
                height: 190px;
                border-bottom: solid ;
                border-bottom-color: rgba(30,120,220,0.5);
                border-bottom-width: thin;
                background-color: rgba(237, 240, 245,0.3);
            }
            *{
                margin: 0px;
                padding: 0px;
            }
            .liste{
                list-style: none;
            }
            #logo{
                height: 90px;
                width: 70px ;
                float: left ;
                top: 15px;
                left: 70px; 
               /* border: solid 3px;*/
                position: relative;
            }
            #menu{
                height: 30px ;
                width: 300px ;
              /*  border: solid 3px;*/
                position: absolute;
                left: 38%;
                right: 38.5%;
                margin: 150px 0px 20px 0px ;
                text-align: center;
                font-family: 'Roboto Slab', serif;
                font-size: 19px;
                text-transform: capitalize;
                color: rgba(25,90,180,0.9)
            }
            #menu ul li{
                display: inline-block;
                margin: 0px 10px 0px 10px;
                
            }
            
            #langues{
                height: 30px;
                width: 300px;
                float: right;
                right: 30px;
                top: 50px;
                /*border: solid 3px; */
                position: relative;
                align-content: center;
                text-align: center;
            }
            #langues ul li{
                display: inline-block;
                margin: 0px 4px 0px 4px;
                
            }
            
            
        </style>
    </head>
    
    <body>
        <header>
            <div id="logo">
                <img src="../images/LogoMakr-8MqsYe.png" width="70px" height="80px">
            </div>
            <div id="menu">
                <ul class="liste">
                    <li>Accueil</li>
                    <li>Contact</li>
                </ul>
            </div>
            <div id="langues">
                <ul class="liste">
                    <li><a href="#"> <img src="../images/flag-button-round-250.png" height="15px" width="15" alt="Français"></a></li>
                    <li><a href="#"><img src="../images/flag-button-round-250%20(1).png" width="15" height="15" alt="Anglais"></a></li>
                    <li><a href="#"><img src="../images/png-clipart-flag-of-germany-germany-national-football-team-flag-miscellaneous-flag.png" width="15" height="15" alt="Allemand"></a></li>
                </ul>
            </div>
        </header>
    </body>
</html>