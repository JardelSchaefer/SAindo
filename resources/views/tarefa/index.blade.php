@extends('layout')
@section('conteudo') 

<div class="main-content" sytle="width: 100%">
                <div style="margin: 0 0 20px 15px;">
                    <h1>Listagem e cadastro de tarefas</h1>
                    <button onclick="abrirModalIncluir();" class="btn btn-success"> <i class="ik ik-file"></i> Incluir
                        novo</button>
                </div>

                <div class=" col-lg-12 col-md-12" style="margin-top: 70px;">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Tarefa</th>
                                <th scope="col">

                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>
                                    <a class="btn btn-danger">
                                        <i class="ik ik-trash"></i> Excluir
                                    </a>
                                    <button onclick="abrirModalEditar();" class="btn btn-primary">
                                        <i class="ik ik-edit"></i> Editar
                                    </button>
                                </td>

                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
         <footer class="footer">
            </footer>

<div id="modalIncluir" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cadastro de tarefas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nome">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modalEditar" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar tarefa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nome">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>

<!-- //funções javascript -->
<script type="text/javascript">
    function abrirModalIncluir() {
        $('#modalIncluir').modal('show');
    }
    function abrirModalEditar() {
        $('#modalEditar').modal('show');
    }
</script>



 @stop