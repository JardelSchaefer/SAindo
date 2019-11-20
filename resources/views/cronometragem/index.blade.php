@extends ('layout')

@section ('conteudo')
<div class="wrapper">
        <header class="header-top" header-theme="light">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <div class="top-menu d-flex align-items-center">
                        <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                        <button type="button" id="navbar-fullscreen" class="nav-link"><i
                                class="ik ik-maximize"></i></button>
                    </div>
                </div>
            </div>
        </header>
        <div class="page-wrap">
            <div class="app-sidebar colored">
                <div class="sidebar-header">
                    <a class="header-brand" href="index.html">
                        <div class="logo-img">
                            <i class="ik ik-clock"></i>
                        </div>
                        <span class="text">Cronômetro <br>de processos</span>
                    </a>
                    <button type="button" class="nav-toggle"><i data-toggle="expanded"
                            class="ik ik-toggle-right toggle-icon"></i></button>
                    <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                </div>

                <div class="sidebar-content">
                    <div class="nav-container">
                        <nav id="main-menu-navigation" class="navigation-main">
                            <div class="nav-lavel">Navigation</div>
                            <div class="nav-item">
                                <a href="operacao.html"><i class="ik ik-bar-chart-2"></i><span>Operações</span></a>
                            </div>
                            <div class="nav-item">
                                <a href="tarefa.html"><i class="ik ik-menu"></i><span>Tarefas</span> </a>
                            </div>
                            <div class="nav-item">
                                <a href="produto.html"><i class="ik ik-layers"></i><span>Produto</span> </a>
                            </div>
                            <div class="nav-item has-sub">
                                <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Cronometragem</span></a>
                                <div class="submenu-content">
                                    <a href="cronometro.html" class="menu-item">Cronometro</a>
                                    <a href="listagemCronometro.html" class="menu-item">Listagem</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
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

             
            </div>
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