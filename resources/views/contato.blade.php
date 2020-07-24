@extends('layouts.app')

@section('conteudo')

<div id="conteudo" class="container my-4">
        <!-- inicio conteudo -->

        <h1 class="text-center mb-5">ATENDIMENTO</h1>

        <div id="" class="mx-auto w-75">
            <form action="" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nome Completo" id="">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="E-mail para Contato" id="">
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control" size="10" maxlength="11" placeholder="Telefone para Contato" id="">
                </div>
                <div class="form-group">
                    <input type="id" class="form-control" size="6" maxlength="11" placeholder="CPF" id="">
                </div>
                <div class="form-group">
                    <select type="id" class="form-control" placeholder="Como gostaria de receber retorno?">
                        <option>Como gostaria de receber retorno?</option>
                        <option>Contato por E-mail</option>
                        <option>Contato Telefonico</option>
                        <option>Mensagem por WhatsApp</option>
                        <option>SMS</option>
                    </select>
                </div>
                <div class="form-group" id="msg">
                    <textarea rows="10" cols="101" maxlength="1000" class="form-control" placeholder="Deixe aqui a sua mensagem"></textarea>
                </div>
                <div class="text-center"></div>
                <button type="submit" id="botao" class="btn btn-success">Enviar Mensagem</button>
        </div>

        </form>
    </div>


    </div> <!-- fim conteudo -->


@endsection
