@extends("usuarios.layout.templateUsuario")

@section("panelPrincipal")
<h1>Fotografias Recientes</h1>
<div class="row">
    @forelse($publicaciones as $p)
        @if(($loop->index+1) %3==0)
        <div class="row">
        @endif
            <div class="box-body box-profile col-md-4">
                <img class="img-responsive " src="{{$p->foto}}" alt="User profile picture">
                <h3 class="profile-username text-center">{{$p->usuario->nombre}}</h3>
                <a href="#" class="btn btn-primary btn-block"><b>Seguir</b></a>
                <a href="{{url('/foto')}}/{{$p->id}}" class="btn btn-primary btn-block"><b>Ver Más</b></a>
            </div>
        @if(($loop->index+1) %3==0)
        </div>
        @endif
    @empty
    <b>No hay Fotografias nuevas</b>
    @endforelse
    
</div>
    <div class="text-center">
        {{ $publicaciones->links() }}
    </div>


@endsection