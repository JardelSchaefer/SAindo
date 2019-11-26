@extends('layout')
@section('conteudo')
 <script type="text/javascript">
  
 </script>
       
            
            <div class="main-content" sytle="width: 100%">
                <div style="margin: 0 0 20px 15px;">
                    <h1>Listagem e cadastro de produtos</h1>
                    <button onclick="abrirModalIncluirProduto();" class="btn btn-success"> <i class="ik ik-file"></i> Incluir
                        novo</button>
                </div>

                <div class=" col-lg-12 col-md-12" style="margin-top: 70px;">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Produto</th>
                                <th scope="col">

                                </th>

                            </tr>
                        </thead>
                        <tbody id="tabelaProduto">
                        </tbody>
                    </table>

                </div>
            </div>
            <footer class="footer">
            </footer>
  
    <div id="modalIncluirProduto" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cadastro de produtos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formAdicionar" method="post" action="">

                    @csrf
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Nome</label>
                            <input name="nome" type="text" class="form-control" id="exampleInputEmail1"
                                 placeholder="Nome">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button onclick="AdicionarProduto('{{route('produto.store')}}')" type="button" class="btn btn-primary" >Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modalEditarProduto" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar produto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formEditar" method="post" action="">
                    @csrf
                    @method('patch')
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Nome</label>
                            <input id="nomeProduto" name="nome" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nome">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button onclick="salvarEdicaoProduto()" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>


  
@stop