@foreach ($produtos as $p)
            <tr id="linhadel{{$p->codpro}}">
                <th scope="row">{{$p->codpro}}</th>
                <td>{{$p->nome}}</td>
                <td style="display:flex">
                    <button onclick="return buscarProduto('{{route('produto.edit', $p->codpro)}}', '{{route('produto.update', $p->codpro)}}');" class="btn btn-primary">
                        <i class="ik ik-edit"></i> Editar
                    </button>
                            <form action="" method="post" id="del{{$p->codpro}}">

                            @csrf
                            @method('DELETE')
                        </form>
                    <button  style="margin-left:5px" class="btn btn-danger" onclick="return deletarProduto('del{{$p->codpro}}','{{route('produto.destroy', $p->codpro)}}')">
                        <i class="ik ik-trash"></i> Excluir
                    </button>
                
                </td>

            </tr>
 @endforeach