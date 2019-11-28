@extends('layout')
@section('conteudo')
 



            <div class="main-content" sytle="width: 100%">
                <div style="margin: 0 0 20px 15px;">
                    <h1>Listagem e cadastro de operações</h1>
                    <button onclick="abrirModalIncluirOperacao();" class="btn btn-success"> <i class="ik ik-file"></i> Incluir
                        novo</button>
                </div>

                <div class=" col-lg-12 col-md-12" style="margin-top: 70px;">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Código Operação</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Maquina</th>
                                <th scope="col">Tipo de Estudo</th>
                                <th scope="col">Cronometrista</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
            

                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($operacoes as $o)
                            <tr id="linhadel{{$o->codope}}" >
                                <th scope="col">{{$o->produto_codpro}}</th>
                                <th scope="col">{{$o->nome}}</th>
                                <th scope="col">{{$o->maquina}}</th>
                                <th scope="col">{{$o->tipoEstudo}}</th>
                                <th scope="col">{{$o->cronometista}}</th>
                                <td style="display:flex;">
                                   <button onclick="return buscarOperacao('{{route('operacao.edit', $o->codope)}}', '{{route('operacao.update', $o->codope)}}');" class="btn btn-primary">
                        <i class="ik ik-edit"></i>Editar
                    </button>
                            <form action="" method="post" id="del{{$o->codope}}">

                            @csrf
                            @method('DELETE')
                        </form>
                    <button  style="margin-left:5px" class="btn btn-danger" onclick="return deletarOperacao('del{{$o->codope}}','{{route('operacao.destroy', $o->codope)}}')">
                        <i class="ik ik-trash"></i>Excluir
                    </button>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            <footer class="footer">
            </footer>
      
    <div id="modalIncluirOperacao" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cadastro de operações</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                     <form id="formAdicionar" method="post" action="">
                    @csrf
                    
                        <div class="form-group col-md-12">
                            <label for="nome">Nome</label>
                            <input name="nome" type="email" class="form-control" id="nome"
                                aria-describedby="emailHelp" placeholder="Nome">
                        </div>
                    <div class="form-group col-md-12">
                            <label for="produto_codpro">codope</label>
                            <input name="produto_codpro" type="email" class="form-control" id="produto_codpro"
                                aria-describedby="emailHelp" placeholder="codope">
                        </div>
                     <div class="form-group col-md-12">
                            <label for="produto_codpro">maquina</label>
                            <input name="maquina" type="email" class="form-control" id="produto_codpro"
                                aria-describedby="emailHelp" placeholder="codope">
                        </div>
                     <div class="form-group col-md-12">
                            <label for="produto_codpro">tipo de estuda</label>
                            <input name="tipoEstudo" type="email" class="form-control" id="produto_codpro"
                                aria-describedby="emailHelp" placeholder="codope">
                        </div>
                     <div class="form-group col-md-12">
                            <label for="produto_codpro">cronometrista</label>
                            <input name="cronometista" type="email" class="form-control" id="produto_codpro"
                                aria-describedby="emailHelp" placeholder="codope">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button onclick="AdicionarOperacao('{{route('operacao.store')}}')" type="button" class="btn btn-primary" >Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modalEditarOperacao" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar operação</h5>
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

 @stop