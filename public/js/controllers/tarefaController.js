var urlEditar;


function abrirModalEditarTarefa() {
    $('#modalEditar').modal('show');
}

atualizarTabelaTarefas ();
function atualizarTabelaTarefas (){

    $.ajax({
        method:'get',
        url: 'http://localhost:8000/tarefas', 
        data:dados,
        dataType:'html',
        success: function(data) {
            $('#tabelaTarefa').html(data);
        }
      });


}

function buscarTarefa(url, urlEdicao){

    urlEditar = urlEdicao;
    
        $.ajax({
            method:'get',
            url: url, 
            data:dados,
            dataType:'json',
            success: function(data) {
                abrirModalEditarTarefa();
                $('#nomeTarefa').val(data.nome);
                
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
    
    function salvarEdicaoTarefa() {
    
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
