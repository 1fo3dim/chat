<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
        <script src="Json.js" type="text/javascript"></script>
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
		height: 650px;
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
			
			width: 150px;
			font-size:25px;
			padding:10px;
		}
                textarea{
                   height: 250px; 
                   width: 500px;
                   
                } 
                #envoi {
                    background-color: goldenrod;
                    color:white;
                    height: 50px;
                    width: 300px;
                    font-size:25px;
                } 
                a {
		color:  brown;
                font-size:15px;
		text-align: center;
		}
                .chatB{
                   height: 100px; 
                   width: 500px;
        </style>
        <title></title>
    <h1>Bienvenue sur "Chat Boulette" !</h1><hr>
    
    </head>
    <body>
        
        <fieldset>
        <div id="messages">
            <!-- les messages du tchat -->
        </div>
        <h2>Pour les gens qui aiment la boulette : <?php echo $_SESSION['pseudo'] ?></h2>
	<form> <div id="messages">
            <!-- les messages du tchat -->
        </div>
	    
	    Message :<textarea name="message" id="message_post"></textarea><br /><br /> 
            <a>Tapez votre message :</a><input type="text" name="message" id="message" class="chatB"/><br /><br />
            <input type="button" name="submit" value="Envoyez votre message !" id="envoi" />
        </form>
        </fieldset>
    </body>
</html>