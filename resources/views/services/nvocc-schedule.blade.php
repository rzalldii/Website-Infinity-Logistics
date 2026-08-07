@extends('layouts.app')
@section('title', __('messages.nvocc_schedule_title'))
@section('meta_description', __('messages.nvocc_schedule_meta_description'))
@section('canonical', route('nvocc-schedule'))
@section('content')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <a href="{{ route('nvocc') }}" class="more-details-btn me-3" aria-label="NVOCC">
                        <i class="bi bi-arrow-left"></i>
                    </a>
                    <h2 class="mb-0" x-text="translations.messages.nvocc_schedule"></h2>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        @php
            $scheduleMonth = 'august';

            $schedules = [
                [
                    'line' => 'GSL',
                    'vessel' => 'YM INTERACTION',
                    'voyage' => '293W',
                    'open_stack' => ['time' => '15:00', 'day' => '27', 'month' => 'july'],
                    'closing' => ['time' => '09:00', 'day' => '31', 'month' => 'july'],
                    'eta_sur' => ['day' => '31', 'month' => 'july'],
                    'etd_sur' => ['day' => '01', 'month' => 'august'],
                    'eta_klang' => ['day' => '04', 'month' => 'august'],
                ],
                [
                    'line' => 'GSL',
                    'vessel' => 'MTT SANDAKAN',
                    'voyage' => '78W',
                    'open_stack' => ['time' => '15:00', 'day' => '07', 'month' => 'august'],
                    'closing' => ['time' => '09:00', 'day' => '11', 'month' => 'august'],
                    'eta_sur' => ['day' => '11', 'month' => 'august'],
                    'etd_sur' => ['day' => '12', 'month' => 'august'],
                    'eta_klang' => ['day' => '15', 'month' => 'august'],
                ],
                [
                    'line' => 'GSL',
                    'vessel' => 'INFERRO',
                    'voyage' => '045W',
                    'open_stack' => ['time' => '15:00', 'day' => '13', 'month' => 'august'],
                    'closing' => ['time' => '09:00', 'day' => '17', 'month' => 'august'],
                    'eta_sur' => ['day' => '17', 'month' => 'august'],
                    'etd_sur' => ['day' => '18', 'month' => 'august'],
                    'eta_klang' => ['day' => '21', 'month' => 'august'],
                ],

                [
                    'line' => 'COSCO',
                    'vessel' => 'XIN HANG ZHOU',
                    'voyage' => '216W',
                    'open_stack' => ['time' => '08:00', 'day' => '30', 'month' => 'july'],
                    'closing' => ['time' => '03:00', 'day' => '03', 'month' => 'august'],
                    'eta_sur' => ['day' => '03', 'month' => 'august'],
                    'etd_sur' => ['day' => '04', 'month' => 'august'],
                    'eta_klang' => ['day' => '10', 'month' => 'august'],
                ],
                [
                    'line' => 'COSCO',
                    'vessel' => 'HALLEY',
                    'voyage' => '015W',
                    'open_stack' => ['time' => '08:00', 'day' => '02', 'month' => 'august'],
                    'closing' => ['time' => '03:00', 'day' => '06', 'month' => 'august'],
                    'eta_sur' => ['day' => '06', 'month' => 'august'],
                    'etd_sur' => ['day' => '07', 'month' => 'august'],
                    'eta_klang' => ['day' => '13', 'month' => 'august'],
                ],
                [
                    'line' => 'COSCO',
                    'vessel' => 'XIN YANG PU',
                    'voyage' => '205W',
                    'open_stack' => ['time' => '08:00', 'day' => '12', 'month' => 'august'],
                    'closing' => ['time' => '03:00', 'day' => '16', 'month' => 'august'],
                    'eta_sur' => ['day' => '16', 'month' => 'august'],
                    'etd_sur' => ['day' => '17', 'month' => 'august'],
                    'eta_klang' => ['day' => '22', 'month' => 'august'],
                ],
                [
                    'line' => 'COSCO',
                    'vessel' => 'XIN HANG ZHOU',
                    'voyage' => '217W',
                    'open_stack' => ['time' => '08:00', 'day' => '20', 'month' => 'august'],
                    'closing' => ['time' => '03:00', 'day' => '24', 'month' => 'august'],
                    'eta_sur' => ['day' => '24', 'month' => 'august'],
                    'etd_sur' => ['day' => '24', 'month' => 'august'],
                    'eta_klang' => ['day' => '29', 'month' => 'august'],
                ],
                [
                    'line' => 'COSCO',
                    'vessel' => 'CELSIUS EINDHOVEN',
                    'voyage' => '034W',
                    'open_stack' => ['time' => '08:00', 'day' => '21', 'month' => 'august'],
                    'closing' => ['time' => '03:00', 'day' => '25', 'month' => 'august'],
                    'eta_sur' => ['day' => '25', 'month' => 'august'],
                    'etd_sur' => ['day' => '25', 'month' => 'august'],
                    'eta_klang' => ['day' => '31', 'month' => 'august'],
                ],
            ];
        @endphp

        <!-- NVOCC Schedule Section -->
        <section id="nvocc-schedule" class="nvocc-schedule section">
            <div class="container section-title">
                <h2 class="text-uppercase" x-text="translations.messages.{{ $scheduleMonth }}"></h2>
            </div>
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th class="text-uppercase" x-text="translations.messages.vessel"></th>
                                <th class="text-uppercase" x-text="translations.messages.voyage"></th>
                                <th class="text-uppercase" x-text="translations.messages.open_stack"></th>
                                <th class="text-uppercase" x-text="translations.messages.closing_cargo"></th>
                                <th class="text-uppercase" x-text="translations.messages.eta_surabaya"></th>
                                <th class="text-uppercase" x-text="translations.messages.etd_surabaya"></th>
                                <th class="text-uppercase" x-text="translations.messages.eta_klang"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedules as $item)
                                <tr>
                                    <td>
                                        <span
                                            class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                            {{ $item['line'] }}
                                        </span>
                                        <div class="margin-10px-top font-size14">
                                            {{ $item['vessel'] }}
                                        </div>
                                    </td>
                                    <td class="align-middle">{{ $item['voyage'] }}</td>
                                    <td>
                                        <span
                                            class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                            {{ $item['open_stack']['time'] }}
                                        </span>
                                        <div class="margin-10px-top font-size14">
                                            {{ $item['open_stack']['day'] }}
                                            <span x-text="translations.messages.{{ $item['open_stack']['month'] }}"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <span
                                            class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                            {{ $item['closing']['time'] }}
                                        </span>
                                        <div class="margin-10px-top font-size14">
                                            {{ $item['closing']['day'] }}
                                            <span x-text="translations.messages.{{ $item['closing']['month'] }}"></span>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        {{ $item['eta_sur']['day'] }}
                                        <span x-text="translations.messages.{{ $item['eta_sur']['month'] }}"></span>
                                    </td>
                                    <td class="align-middle">
                                        {{ $item['etd_sur']['day'] }}
                                        <span x-text="translations.messages.{{ $item['etd_sur']['month'] }}"></span>
                                    </td>
                                    <td class="align-middle">
                                        {{ $item['eta_klang']['day'] }}
                                        <span x-text="translations.messages.{{ $item['eta_klang']['month'] }}"></span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- /NVOCC Schedule Section -->
    </main>
@endsection