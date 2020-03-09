@switch($inscription->inscription->person->type_document)
    @case(1)
        <!-- Tipo de Documento DNI -->
        {{ __('DNI') }} : {{ $inscription->inscription->person->num_document }} 
            @break
    @case(2)
        <!-- Tipo de Documento CARNET DE EXTRANJERIA -->
        {{ __('CARNET DE EXTRANJERIA') }} : {{ $inscription->inscription->person->num_document }}   
            @break
    @case(3)
        <!-- Tipo de Documento PASAPORTE -->
        {{ __('PASAPORTE') }} : {{ $inscription->inscription->person->num_document }}   
            @break
    @case(4)
        <!-- Tipo de Documento PART. DE NACIMIENTO-IDENTIDAD -->
        {{ __('PART. DE NACIMIENTO-IDENTIDAD') }} : {{ $inscription->inscription->person->num_document }}   
            @break
    @default
        <!-- Tipo de Documento OTROS -->
        {{ __('Otros') }} : {{ $inscription->inscription->person->num_document }}
@endswitch