@extends('layouts.master')
@section('page_class')@parent- {{ trans('about.contact_us') }}@stop
@section('navigation')
    @include('partial.navigation_basic')
@stop
@section('panel_left_content')

    <style type="text/css">
        .tile {
            width: 100%;
            display: inline-block;
            box-sizing: border-box;
            background: #fff;
            padding: 20px;
            margin-bottom: 30px;
        }

        .tile.green {
            background: #244753;
        }

        .tile.green:hover {
            background: #244753;
        }
    </style>

    @if(Route::currentRouteName()=='index')
        <div class="row">
            <?php $menu = \Menu::backend(true);?>
            @foreach ($menu as $item)
                <div class="col-sm-3">
                    <center>
                        <a class="tile green {{isset($item['class'])?$item['class']:''}} {{ Utility::active($item['route']) }}"
                           href='{{$item['route']}}'>
                            @if(isset($item['icon']))
                                <span class="{{$item['icon']}}"></span> &nbsp;&nbsp;&nbsp;
                            @endif
                            {{$item['text']}}
                            @if(isset($item['cont'])&&$item['cont']>0)
                                <span class="badge pull-right">{{$item['cont']}}</span>
                            @endif
                        </a>
                    </center>
                </div>
            @endforeach
        </div>
    @else
        <div class="list-group">
            <?php $menu = \Menu::backend(true);?>
            @foreach ($menu as $item)
                <a class="list-group-item {{isset($item['class'])?$item['class']:''}} {{ Utility::active($item['route']) }}"
                   href='{{$item['route']}}'>@if(isset($item['icon']))<span
                            class="{{$item['icon']}}"></span>@endif {{$item['text']}} @if(isset($item['cont'])&&$item['cont']>0)
                        <span class="badge pull-right">{{$item['cont']}}</span>@endif </a>
            @endforeach
        </div>
    @endif


@stop
@section('footer')
    @parent
@stop