
    //Insert event button
    //SOBRE

        $('#insert-button').click(function(){
            $('.janela_insert').css('display','block');
        });

        $('#janela_insert').click(function(){
            $('#janela_insert').css('display','none');
        });

        $('.botao_editar').click(function(){
            $('.janela_editar').css('display','block');
        });

        $('#janela_editar').click(function(){
            $('#janela_editar').css('display','none');
        });


/*
    //Click nos botões de delete
    $('.delete-link').click(function(e){
        var resposta = confirm('Deseja apagar este artigo?');
        if( !resposta ){
            e.preventDefault();
        }
    });*/
