@extends('layouts.app')

@section('styles')
    <style>
        .icone-acao{
            width: 1rem;
            margin: 5px;
        }

        th{
            font-size: 1rem;
        }

        td{
            padding: 20px;
        }
    </style>

@endsection

@section('conteudo')

    <!-- início conteúdo -->
    <h1 class="text-center">Carrinho</h1>

    <div class="my-2 mx-auto">
        @if(session('cart'))
            <table style="width: 100%" class="table-hover">
                <thead>
                <tr>
                    <th id="foto-produto"></th>
                    <th style="width: 50%">Produto</th>
                    <th class="text-center" style="width: 20%">Preco</th>
                    <th style="width: 20%" class="text-center">Quantidade</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach(session('cart') as $id=> $detalhes)
                    <tr class="tr-produto" data-id="{{$detalhes['produto']->id}}">
                        <td><img src="{{asset('Imagens\Produtos\LatasBarris\berçobarril (1).jpg')}}" width="100px" class="mr-2 mt-2 img-responsive"></td>
                        <td>{{$detalhes['produto']->descricao}}</td>
                        <td class="text-center">R${{str_replace('.',',',$detalhes['produto']->preco)}}</td>
                        <td class="text-center"><input type="number" step="1" min="1" name="" class="text-center w-25 quantidade" value="{{$detalhes['quantidade']}}"></td>
                        <td>
                            <span><a href="" class="atualizar-carrinho" data-toggle="tooltip" data-placement="top" title="Atualizar"><img class="icone-acao" src="{{asset('imagens\icons\svg\check.svg')}}" alt="" ></a></span>
                            <span><a href="" class="deletar-carrinho" data-toggle="tooltip" data-placement="top" title="Deletar"><img class="icone-acao" src="{{asset('imagens\icons\svg\trash.svg')}}" alt="" ></a></span>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="row align-content-end flex-column">
                <div>
                    <span style="font-size: 1.2rem;">Total: R${{str_replace('.',',',session('total'))}}</span>
                </div>
                <div>
                    <button class="btn btn-success btn-comprar">
                        Fechar pedido
                    </button>
                </div>
            </div>
        @else
            <h4 class="m-5">Carrinho vazio</h4>
        @endif
    </div>

    <!-- fim conteúdo -->

@endsection

@section('scripts')
    <script type="text/javascript">
        $(".atualizar-carrinho").click(function (e) {
            console.log('atualizar');
            e.preventDefault();

            let elemento = this.closest('tr');

            $.ajax({
                url: '{{ route('produtos.update.carrinho') }}',
                method: "PUT",
                data: {_token: '{{ csrf_token() }}',
                    id: elemento.dataset.id,
                    quantidade: elemento.getElementsByClassName('quantidade')[0].value
                },
                success: function (response) {
                    console.group('Sucesso atualizar')
                    console.log(response);
                    console.groupEnd();
                },
                error: function (response){
                    console.group('Erro atualizar')
                    console.log(response);
                    console.groupEnd();
                }
            });
        });

        $(".deletar-carrinho").click(function (e) {
            console.log('remover');
            e.preventDefault();

            let elemento = this.closest('tr');

            $.ajax({
                url: '{{ route('produtos.delete.carrinho') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}',
                    id: elemento.dataset.id
                },
                success: function (response) {
                    console.group('Sucesso deletar')
                    console.log(response);
                    console.groupEnd();
                },
                error: function (response){
                    console.group('Erro deletar')
                    console.log(response);
                    console.groupEnd();
                }
            });

        });

    </script>
@endsection

