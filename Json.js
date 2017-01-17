 $( function(){
        
        // enregistrement message
        $('#envoi').click(clicBouton);
        
        // Rafraichit zone messages tts secondes
        setInterval(rafraichirZoneMessage, 1000);
        
        function clicBouton(){// Bouton ajouter message
            
            var params = $('form').serialize();
            $("#message").val("");
            
            $.post("ajaxAjouterMessage.php",params );
            
            
        } 
        
        
        function callback(messages){
           
            var html = "";                  
            
            for(i=0;i<messages.length;i++){
              
                var message= messages[i];
                
                html+=message.pseudo+" : "+ message.date +"\n "+message.message+"\n "; 
                
            } 
            
            $("#message_post").html(html);
            
            
        }
           
        
        function rafraichirZoneMessage(){
            $.getJSON("ajaxMessage.php",
            "",
            callback
             );
             
             
        }
        
     
        affichemsg();
        
        
        
        
        
    
    });/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


