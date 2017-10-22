$(document).ready(function(){
    // Associar evento de click no botão de Tweet
    $('#btn_tweet').click(function(){
        if($('#input_tweet').val().length > 0){
            $.ajax({
                url: 'incluir_tweet.php',
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
            url: 'get_tweet.php',
            success: function(data) {
                $('#tweets').html(data);
            }
        })
    }
    atualizarTweet();
    
    $('#btn_procurar_pessoa').click(function(){
        if($('#nome_pessoa').val().length > 0){
            $.ajax({
                url: 'get_pessoas.php',
                method: 'post',
                data: $('#form_procurar_pessoas').serialize(),
                success: function(data){
                    $('#pessoas').html(data);               
                }
            })
        }
    });  
});