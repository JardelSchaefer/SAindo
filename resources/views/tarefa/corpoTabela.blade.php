@foreach ($tarefas as $p)
            <tr id="linhadel{{$p->codele}}">
                <th scope="row">{{$p->codele}}</th>
                <td>{{$p->nome}}</td>
                <td style="display:flex">
                    <button onclick="return buscarTarefa('{{route('tarefa.edit', $p->codele)}}', '{{route('tarefa.update', $p->codele)}}');" class="btn btn-primary">
                        <i class="ik ik-edit"></i> Editar
                    </button>
                            <form action="" method="post" id="del{{$p->codele}}">

                            @csrf
                            @method('DELETE')
                        </form>
                    <button  style="margin-left:5px" class="btn btn-danger" onclick="return deletarProduto('del{{$p->codele}}','{{route('tarefa.destroy', $p->codele)}}')">
                        <i class="ik ik-trash"></i> Excluir
                    </button>
                
                </td>

            </tr>
 @endforeach