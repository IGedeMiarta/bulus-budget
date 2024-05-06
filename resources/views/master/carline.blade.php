@extends('layouts.master')

@section('content')
    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">

            <!-- Page Header -->
            @include('master.links')
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="col-span-12 lg:col-span-6">
                <div class="box">
                    <div class="box-header flex justify-between">
                        <h5 class="box-title">{{ $title ?? '' }} List</h5>
                        <button type="button" class="ti-btn ti-btn-primary" data-hs-overlay="#hs-slide-down-animation-modal">
                            <i class="ti ti-plus"></i> Add {{ $title ?? '' }}
                        </button>
                    </div>
                    <livewire:master.carline.form />

                    <livewire:master.carline.table />
                </div>
            </div>
            <!-- End::row-1 -->

        </div>
        <!-- Start::main-content -->

    </div>
@endsection
