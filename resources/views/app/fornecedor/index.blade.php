<h3>Fornecedor</h3>

  @isset($fornecedores)
    @for($i = 0 ; $fornecedores[$i]; $i++)
    telefone:({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[0]['telefone'] ??  ''}}
    @endfor
  @endisset


@switch($fornecedores[0]['ddd'])

   @case ('11') 
   São Paulo - SP. 
   @break

  @case('32')
  Juiz de fora - MG. 
  @break

  @case('85')
  Fortaleza - Ceará
  @break

  @default 
  Estado não identificado

@endswitch


<br>


