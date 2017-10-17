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
                    alert(data);
                }
            })
        }
    });
});