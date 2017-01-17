
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            h1:hover{
            background-color: steelblue;
            text-shadow: 8px 8px 8px #404040;
            }
            h1 {
		color:  brown;
		
		font-size:50px;
		text-align: center;
			text-shadow: 8px 8px 8px #737373;
			-moz-transition: all 2s linear;
			-webkit-transition: all 2s linear;
			-o-transition: all 2s linear;
			transition: all 2s linear;
		height: 100px;
		padding:3px;
		background-color: #ff6666;
		background-image: linear-gradient( white, rgba(255,255,255,0));
            }
            fieldset:hover{
            background-color: steelblue;
            text-shadow: 8px 8px 8px #404040;
            }
            fieldset {
		color:  brown;
		
		font-size:50px;
		text-align: center;
			text-shadow: 8px 8px 8px #737373;
			-moz-transition: all 2s linear;
			-webkit-transition: all 2s linear;
			-o-transition: all 2s linear;
			transition: all 2s linear;
		height: 500px;
		padding:3px;
		 background-color: #ff6666;
		background-image: linear-gradient( white, rgba(255,255,255,0));
            }
            
            h2 {
		color:  brown;
                font-size:35px;
		text-align: center;
		}
            form
		{
			display: inline-block;
			width: 150px;
			font-size:25px;
			padding:10px;
		}
                #envoi {
                    background-color: goldenrod;
                    color:white;
                    height: 50px;
                    width: 150px;
                    font-size:25px;
                }        
        </style>
        <title></title>
    <h1>Bienvenue sur "Chat Boulette" ! </h1><hr>
    
    </head>
    <body>
        <fieldset>
        <div id="messages">
            <!-- les messages du tchat -->
        </div>
        
	<form method="POST" action="traitementPseudo.php"> <div id="messages">
            <!-- les messages du tchat -->
        </div>
	    Pseudo : <input type="text" name="pseudo" id="pseudo" /><br /><br />
	    
	    <input type="submit" name="submit" value="Envoyez" id="envoi" />
        </form><br>
        </fieldset>
    </body>
</html>