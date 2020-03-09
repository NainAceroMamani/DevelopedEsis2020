@switch($inscription->status_pre_inscription)
    @case(1)
        <!-- Estado : Pendiente -->
        <span class="badge badge-danger">{{ __('Pendiente') }}</span>   
            @break
    @case(2)
        <!-- Estado : Inscrito -->
        <span class="badge badge-primary">{{ __('Inscrito') }}</span>   
            @break
    @default
        <!-- Estado : Pendiente -->
        <span class="badge badge-priamry">{{ __('Pendiente') }}</span>
@endswitch