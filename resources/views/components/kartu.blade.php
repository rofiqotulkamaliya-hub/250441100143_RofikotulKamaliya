<div class="kartu">
    @if ($judul)
        <h3>{{ $judul }}</h3>
    @endif

    <div>
        {{ $slot }}
    </div>

    @if (isset($footer))
        <div class="kaki">
            {{ $footer }}
        </div>
    @endif
</div>