@extends('voyager::master')

@section('page_title', __('voyager::generic.view').' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i> {{ __('voyager::generic.viewing') }} {{ ucfirst($dataType->getTranslatedAttribute('display_name_singular')) }} &nbsp;

        @include('vendor.voyager.bread.partials.read.buttons.edit')
        @include('vendor.voyager.bread.partials.read.modals.delete')
        @include('vendor.voyager.bread.partials.read.buttons.index')
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content read container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered" style="padding-bottom:5px;">
                    @include('vendor.voyager.bread.partials.read.form')
                </div>
            </div>
        </div>
    </div>

    @include('vendor.voyager.bread.partials.read.modals.delete')
@stop

@section('javascript')
    @include('vendor.voyager.bread.partials.read.assets.js')
@stop
