@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="{{ $dataType->icon }}"></i> {{ $dataType->getTranslatedAttribute('display_name_plural') }}
        </h1>
        @include('vendor.voyager.bread.partials.browse.buttons.add')
        @include('vendor.voyager.bread.partials.browse.buttons.bulk_delete')
        @include('vendor.voyager.bread.partials.browse.buttons.edit')
        @include('vendor.voyager.bread.partials.browse.buttons.soft_delete')
        @include('vendor.voyager.bread.partials.browse.buttons.mass_actions')
        @include('voyager::multilingual.language-selector')
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        @include('vendor.voyager.bread.partials.browse.server_side.filter')
                        @include('vendor.voyager.bread.partials.browse.table')
                        @include('vendor.voyager.bread.partials.browse.server_side.status')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('vendor.voyager.bread.partials.browse.modals.delete')
@stop

@section('css')
    @include('vendor.voyager.bread.partials.browse.assets.css')
@stop

@section('javascript')
   @include('vendor.voyager.bread.partials.browse.assets.js')
@stop
