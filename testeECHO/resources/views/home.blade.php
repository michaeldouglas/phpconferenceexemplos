@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-body">
                <div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">Chat</a>
                        </li>
                        <li role="presentation">
                            <a href="#conversas" aria-controls="conversas" role="tab" data-toggle="tab">Conversas</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="chat">
                            <chat></chat>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="conversas">
                            <br />
                            <p>Você está logado como: <strong>{{ Auth::user()->name }}</strong> </p>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <td><strong>User</strong></td>
                                        <td><strong>Message</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($messages as $message)
                                        <tr>
                                            <td>{{$message->username}}</td>
                                            <td>{{$message->message}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
