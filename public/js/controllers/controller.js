//Variaveis globais

var urlEditar = '';


// Funções ao iniciar a página
atualizarTabelaProduto();

// <---------------------------- Funções produtos -------------------------->



function abrirModalIncluirProduto() {
    $('#modalIncluirProduto').modal('show');
}

function abrirModalEditarProduto() {
    $('#modalEditarProduto').modal('show');
}

function deletarProduto(id, url){
var confirma = false;

    $.confirm({
        title: 'Atenção!',
        content: 'Deseja realmente excluir esse produto?',
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
            text: 'Produto excluído com sucesso!',
            position: 'top-right',
            icon: 'success',
            hideAfter: 3000,
       
        })
        },
        error:function (argument){
            $.toast({
                heading: 'Erro!',
                text: 'Não foi possível excluir o produto!',
                position: 'top-right',
                icon: 'error',
                hideAfter: 3000,
           
            })
        }
      });
            }

}

function buscarProduto(url, urlEdicao){

urlEditar = urlEdicao;

    $.ajax({
        method:'get',
        url: url, 
        data:dados,
        dataType:'json',
        success: function(data) {
            abrirModalEditarProduto();
            $('#nomeProduto').val(data.nome);
            
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

function salvarEdicaoProduto() {

    dados = $('#formEditar').serialize();
    $.ajax({
        method:'post',
        url: urlEditar, 
        data:dados,
        dataType:'json',
        success: function(data) {
            $.toast({
                heading: 'Sucesso!',
                text: 'Produto editado com sucesso!',
                position: 'top-right',
                icon: 'success',
                hideAfter: 3000,
           
            })
            $('#modalEditarProduto').modal('hide');
            atualizarTabelaProduto();
        },
        error:function (argument){
            $.toast({
                heading: 'Erro!',
                text: 'Não foi possível editar o produto!',
                position: 'top-right',
                icon: 'error',
                hideAfter: 3000,
           
            })
        }
      });

}

function AdicionarProduto(url) {

    dados = $('#formAdicionar').serialize();
    
    $.ajax({
        method:'post',
        url: url, 
        data:dados,
        dataType:'html',
        success: function(data) {
            $.toast({
                heading: 'Sucesso!',
                text: 'Produto adicionado com sucesso!',
                position: 'top-right',
                icon: 'success',
                hideAfter: 3000,
           
            })
            atualizarTabelaProduto();
        },
        error:function (argument){
            alert("falha");
        }
      });

      $('#modalIncluirProduto').modal('hide');

}

function atualizarTabelaProduto (){

    $.ajax({
        method:'get',
        url: 'http://localhost:8000/produtos', 
        data:dados,
        dataType:'html',
        success: function(data) {
            $('#tabelaProduto').html(data);
        }
      });


}


<<<<<<< HEAD
// <---------------------------- Funções produtos -------------------------->

function abrirModalIncluir() {
    $('#abrirModalIncluir').modal('show');
}
=======
// <---------------------------- Funções produtos -------------------------->
>>>>>>> origin/master
