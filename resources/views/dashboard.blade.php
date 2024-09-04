<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Portal SMST') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                      {{$titulo="SOS-TI",
                        $descricao="Abertura de Chamados - TI",
                        $nomedoevento="SOS-TI",
                        $imagem="https://iphosting.com.br/wp-content/uploads/2020/07/IPHOSTING-GESTAO-DE-TI-2020-353x353-1.png",
                        $url=route('admin.problemas'),
                      }}
                      <div class="card col-md-4">
                          <img src="{{$imagem}}" alt="{{$titulo}}" width="300" height="400" class="card-img-top">
                          <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">{{$descricao}}</p>
                            <a class="btn btn-block btn-primary" href="{{$url}}">Ver mais</a>
                            <br><br><br><br>
                          </div>
                      </div>
                      {{$titulo="PESSOAS",
                        $descricao="Identidade Funcional",
                        $nomedoevento="Identidade Funcional",
                        $imagem="https://boavista.rr.gov.br/storage/Noticias/2023/MAIO/guarda7.jpg",
                        $url=route('pessoa.index'),
                      }}
                      <div class="card col-md-4">
                        <img src="{{$imagem}}" alt="{{$titulo}}" width="300" height="400" class="card-img-top">
                          <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">{{$descricao}}</p>
                            <a class="btn btn-block btn-primary" href="{{$url}}">Ver mais</a>
                            <br><br><br><br>
                          </div>
                      </div>
                      {{$titulo="USUÁRIOS",
                          $descricao="Gerenciamento de Usuários",
                          $nomedoevento="Usuários",
                          $imagem="https://cdn.pixabay.com/photo/2017/06/30/10/14/social-media-2457842_1280.png",
                          $url=route('admin.users'),
                      }}
                      <div class="card col-md-4">
                            <img src="{{$imagem}}" alt="{{$titulo}}" width="300" height="400" class="card-img-top">
                            <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">{{$descricao}}</p>
    
                              <a class="btn btn-block btn-primary" href="{{$url}}">Ver mais</a>
                            </div>
                      </div>
                </div>
           </div>
         </div>
    </div>
</x-app-layout>
