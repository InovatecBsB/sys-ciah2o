<div class="row main-left mb-0">
    <div class="col">
        <div class="alert alert-{{ $type }}">
            {{ session()->get('verifica_papel') }}
            {{ session()->get('sucessos') }}
        </div>
    </div>
</div>
