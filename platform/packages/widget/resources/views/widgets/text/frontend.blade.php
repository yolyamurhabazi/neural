<div class="panel panel-default">
    <div class="panel-title">
        <h3>{!! BaseHelper::clean($config['name']) !!}</h3>
    </div>
    <div class="panel-content">
        @if ($config['content'])
            <div>{!! BaseHelper::clean(shortcode()->compile($config['content'])) !!}</div>
        @endif
    </div>
</div>
