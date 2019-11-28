<<<<<<< HEAD
@extends ('layout')

@section ('conteudo')
            <div class="main-content" sytle="width: 100%">
                <div style="margin: 0 0 20px 15px;">
                    <h1>Operações cronometradas</h1>

                </div>

                <div class=" col-lg-12 col-md-12" style="margin-top: 70px;">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">1ºOperação</th>
                                <th scope="col">2ºOperação</th>
                                <th scope="col">3ºOperação</th>
                                <th scope="col">4ºOperação</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
                             <td><button type="button" class="btn btn-outline-danger ik ik-trash">Excluir</button>
                                    <button type="button" onclick="abrirModalEditar()" class="ik ik-edit btn btn-primary">
                                            Editar</button></td>

                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>

                              <td><button type="button" class="btn btn-outline-danger ik ik-trash">Excluir</button>
                                    <button type="button" onclick="abrirModalEditar()" class="ik ik-edit btn btn-primary">
                                            Editar</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>

                                <td><button type="button" class="btn btn-outline-danger ik ik-trash">Excluir</button>
                                    <button type="button" onclick="abrirModalEditar()" class="ik ik-edit btn btn-primary">
                                            Editar</button></td>
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
                    <h5 class="modal-title">Cadastro de operações</h5>
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
=======
@extends ('layout')

@section ('conteudo')
            <div class="main-content" sytle="width: 100%">
                <div style="margin: 0 0 20px 15px;">
                    <h1>Operações cronometradas</h1>

                </div>

                <div class=" col-lg-12 col-md-12" style="margin-top: 70px;">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">1ºOperação</th>
                                <th scope="col">2ºOperação</th>
                                <th scope="col">3ºOperação</th>
                                <th scope="col">4ºOperação</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
                             <td><button type="button" class="btn btn-outline-danger ik ik-trash">Excluir</button>
                                    <button type="button" onclick="abrirModalEditar()" class="ik ik-edit btn btn-primary">
                                            Editar</button></td>

                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>

                              <td><button type="button" class="btn btn-outline-danger ik ik-trash">Excluir</button>
                                    <button type="button" onclick="abrirModalEditar()" class="ik ik-edit btn btn-primary">
                                            Editar</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>

                                <td><button type="button" class="btn btn-outline-danger ik ik-trash">Excluir</button>
                                    <button type="button" onclick="abrirModalEditar()" class="ik ik-edit btn btn-primary">
                                            Editar</button></td>
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
                    <h5 class="modal-title">Cadastro de operações</h5>
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
>>>>>>> origin/master
@stop
