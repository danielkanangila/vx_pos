{{-- */$i=2;/* --}}
@foreach(session('menu') as $menu)
        <!-- item {{ $menu->name  }} -->
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="{{ sprintf("heading%s", $i) }}">
        <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="{{ sprintf("#collapse%s", $i) }}" aria-expanded="false" aria-controls="{{ sprintf("collapse%s", $i) }}">
                <i class="{{ $menu->icon  }}"></i> {{ $menu->name  }}
                <i class="pull-right fa fa-caret-down"></i>
            </a>
        </h4>
    </div>
    <div aria-expanded="false" id="{{ sprintf("collapse%s", $i) }}" class="panel-collapse collapse @if(isset($position) && $position == $i) in @endif" role="tabpanel" aria-labelledby="{{ sprintf("heading%s", $i) }}">
        <div>
            @foreach($menu->sub_menu as $item)
                <a href="{{ route($item->target) }}" class="list-group-item">{{ $item->name }}</a>
            @endforeach
        </div>
    </div>
</div>
{{-- */$i++;/* --}}
        <!-- end item {{ $menu->name }} -->
@endforeach