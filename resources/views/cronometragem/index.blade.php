@extends ('layout')

@section ('conteudo')
            <div class="main-content col-lg-12" style="width: 100%">

                <div class="text-center col-lg-8" style="margin: auto; margin-top: 50px">
                    <div class="form-group col-lg-6">
                        <label style="float: left; font-size:16px ;">Selecione a operacao</label>
                        <select class="custom-select" name="" id="">
                            <option value="">Camiseta branca</option>
                            <option value="">Camiseta manga comprida</option>
                        </select>
                    </div>

                    <div id="cronometro" class="col-lg-12 shadow-lg p-3 mb-5 bg-white rounded">
                        <div id="reloj" class="text-center" style="font-size: 28px"> 00 : 00 : 00</div>
                        <form class="form-group" style="margin-top: 5px" name="cron" action='#'>
                            <input type="button" class="btn btn-lg btn-cronometro btn-outline-primary" value="Começar"
                                name="empieza" />
                            <input type="button" class="btn btn-lg btn-cronometro btn-outline-warning" value="Parar"
                                name="para" />
                            <input type="button" class="btn btn-cronometro btn-outline-dark" value="Próximo"
                                name="continua" />
                            <input type="button" class="btn btn-cronometro btn-outline-danger" value="Reiniciar"
                                name="reinicia" />
                        </form>
                    </div>
                </div>

                <table id="teste" data-striped="true" data-sortable="true"
                    data-classes="table table-hover table-condensed" data-refresh="true">
                    <thead>
                        <tr>
                            <th data-field="codigo" data-sortable="true">Código</th>
                            <th data-field="tempo" data-sortable="true">Tempo</th>
                            
                        </tr>
                    </thead>

                </table>

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
                    </div>
                </div>
            </div>

            <script src="../js/cronometro.js"></script>
            <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
          @stop