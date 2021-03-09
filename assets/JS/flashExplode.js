class flashExplode {

     constructor(){
         // Faire disparaître les flashmessages
         function explode(){
             $(".alert-explode").hide(1000);
         }setTimeout(explode, 3000);
     }
 }
 
 new flashExplode;
 