<div class="col-sm-2 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>{{ trans('info.about') }}</h4>
        <p>Dit is het <em>praat portaal</em> over onze 7e lustrumreis. De Luco behoudt zich het recht voor ongepaste uitingen te verwijderen.</p>
    </div>
    <div class="sidebar-module">
        <h4>{{ trans('info.archives') }}</h4>
        <ol class="list-unstyled">
            @foreach ($archives as $stats)
                <li>
                    <a href="/posts?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                        {{ $stats['month']. ' '.$stats['year'] }}
                    </a>
                </li>
            @endforeach
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>{{ trans('info.tags') }}</h4>
        <ol class="list-unstyled">
            @foreach ($tags as $tag)
                <li>
                    <a href="/posts?tag={{ $tag }}">
                        {{ $tag }}
                    </a>
                </li>
            @endforeach
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Links</h4>
        <ol class="list-unstyled">
            <li><a href="/georgia_map">Google maps</a></li>
            <li><a href="/program">Programma</a></li>
            <li><a href="/joiners">Deelnemers</a></li>
        </ol>
    </div>
</div>