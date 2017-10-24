$(document).ready(function(){
    // Associar evento de click no botão de Tweet
    $('#btn_tweet').click(function(){
        if($('#input_tweet').val().length > 0){
            $.ajax({
                url: '../model/incluirTweet.php',
                method: 'post',
                data: $('#form_tweet').serialize(),
                success: function(data){
                    $('#input_tweet').val('');
                    atualizarTweet();                
                }
            })
        }
    });
    function atualizarTweet() {
        $.ajax({
            url: '../model/getTweet.php',
            success: function(data) {
                $('#tweets').html(data);
            }
        })
    }
    atualizarTweet();
    
    $('#btn_procurar_pessoa').click(function(){
        if($('#nome_pessoa').val().length > 0){
            $.ajax({
                url: '../model/getPessoas.php',
                method: 'post',
                data: $('#form_procurar_pessoas').serialize(),
                success: function(data){
                    $('#pessoas').html(data);
                    
                    $('.btn_seguir').click(function(){
                        var id_usuario = $(this).data('id_usuario');
                        
                        $.ajax({
                            url: '../model/seguirUsuario.php',
                            method: 'post',
                            data: {seguir_id_usuario: id_usuario},
                            success: function(data){
                               alert('Seguindo!');
                            }
                        });                  
                    });
                    $('.btn_deixar_seguir').click(function(){
                        var id_usuario = $(this).data('id_usuario');
                        
                        $.ajax({
                            url: '../model/deixarSeguirUsuario.php',
                            method: 'post',
                            data: {deixar_seguir_id_usuario: id_usuario},
                            success: function(data){
                               alert('Deixou de Seguir!');
                            }
                        });                  
                    });
                }
            })
        }
    });  
});