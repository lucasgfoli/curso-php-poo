    <?php 
        interface Publicacao { // Interface???? !!!! Implementação !!! Classe abstrata?

            function abrir();
    
            function fechar();
        
            function folhear($pagina);
        
            function avancarPag();
        
            function voltarPag();
        }
    ?>