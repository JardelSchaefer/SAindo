//Variaveis globais

var urlEditar = '';


// Funções ao iniciar a página
//atualizarTabelaOperacao();

// <---------------------------- Funções Operacaos -------------------------->



function abrirModalIncluirOperacao() {
    $('#modalIncluirOperacao').modal('show');
}

function abrirModalEditarOperacao() {
    $('#modalEditarOperacao').modal('show');
}

function deletarOperacao(id, url){
var confirma = false;

    $.confirm({
        title: 'Atenção!',
        content: 'Deseja realmente excluir esse Operacao?',
        type: 'red',
        typeAnimated: true,
        buttons: {
            sucess: {
                text:'Confirmar',
                action: function(){
                confirma = true;
                confirmarExclusao(confirma,id,url);
                }
            },

            close:{
             text:'cancelar',
             action:function () {
                confirma = false;
            }
        }
        }
    });
}

function confirmarExclusao (confirma,id,url){

    if(confirma){
        dados = $('#'+id).serialize();
    
    $.ajax({
        method:'post',
        url: url, 
        data:dados,
        dataType:'html',
        success: function(data) {
          $('#linha'+id).remove();
    
          $.toast({
            heading: 'Sucesso!',
            text: 'Operacao excluído com sucesso!',
            position: 'top-right',
            icon: 'success',
            hideAfter: 3000,
       
        })
        },
        error:function (argument){
            $.toast({
                heading: 'Erro!',
                text: 'Não foi possível excluir o Operacao!',
                position: 'top-right',
                icon: 'error',
                hideAfter: 3000,
           
            })
        }
      });
            }

}

function buscarOperacao(url, urlEdicao){

urlEditar = urlEdicao;

    $.ajax({
        method:'get',
        url: url, 
        data:dados,
        dataType:'json',
        success: function(data) {
            abrirModalEditarOperacao();
            $('#nomeOperacao').val(data.nome);
            
        },
        error:function (argument){
            $.toast({
                heading: 'Atenção!',
                text: 'Erro na solicitação, tente novamente!',
                position: 'top-right',
                icon: 'error',
                hideAfter: 3000,
           
            })
        }
      });

}

function salvarEdicaoOperacao() {

    dados = $('#formEditar').serialize();
    $.ajax({
        method:'post',
        url: urlEditar, 
        data:dados,
        dataType:'json',
        success: function(data) {
            $.toast({
                heading: 'Sucesso!',
                text: 'Operacao editado com sucesso!',
                position: 'top-right',
                icon: 'success',
                hideAfter: 3000,
           
            })
            $('#modalEditarOperacao').modal('hide');
            //atualizarTabelaOperacao();
        },
        error:function (argument){
            $.toast({
                heading: 'Erro!',
                text: 'Não foi possível editar o Operacao!',
                position: 'top-right',
                icon: 'error',
                hideAfter: 3000,
           
            })
        }
      });

}

function AdicionarOperacao(url) {

    dados = $('#formAdicionar').serialize();
    
    $.ajax({
        method:'post',
        url: url, 
        data:dados,
        dataType:'html',
        success: function(data) {
            $.toast({
                heading: 'Sucesso!',
                text: 'Operacao adicionado com sucesso!',
                position: 'top-right',
                icon: 'success',
                hideAfter: 3000,
           
            })
           // atualizarTabelaOperacao();
        },
        error:function (argument){
            alert("falha");
        }
      });

      $('#modalIncluirOperacao').modal('hide');

}

function atualizarTabelaOperacao (){

    $.ajax({
        method:'get',
        url: 'http://localhost:8000/Operacao', 
        data:dados,
        dataType:'html',
        success: function(data) {
            $('#tabelaOperacao').html(data);
        }
      });


}


// <---------------------------- Funções Operacaos -------------------------->

