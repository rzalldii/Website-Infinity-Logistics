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
            $scheduleMonth = 'july';

            $schedules = [
                [
                    'line' => 'GSL',
                    'vessel' => 'INFERRO',
                    'voyage' => '043 W',
                    'open_stack' => ['time' => '15:00', 'day' => '26', 'month' => 'june'],
                    'closing' => ['time' => '09:00', 'day' => '30', 'month' => 'june'],
                    'eta_sur' => ['day' => '30', 'month' => 'june'],
                    'etd_sur' => ['day' => '01', 'month' => 'july'],
                    'eta_klang' => ['day' => '04', 'month' => 'july'],
                ],
                [
                    'line' => 'GSL',
                    'vessel' => 'YM INTERACTION',
                    'voyage' => '292 W',
                    'open_stack' => ['time' => '15:00', 'day' => '28', 'month' => 'june'],
                    'closing' => ['time' => '09:00', 'day' => '02', 'month' => 'july'],
                    'eta_sur' => ['day' => '02', 'month' => 'july'],
                    'etd_sur' => ['day' => '03', 'month' => 'july'],
                    'eta_klang' => ['day' => '06', 'month' => 'july'],
                ],
                [
                    'line' => 'GSL',
                    'vessel' => 'MTT SANDAKAN',
                    'voyage' => '077 W',
                    'open_stack' => ['time' => '15:00', 'day' => '10', 'month' => 'july'],
                    'closing' => ['time' => '09:00', 'day' => '14', 'month' => 'july'],
                    'eta_sur' => ['day' => '14', 'month' => 'july'],
                    'etd_sur' => ['day' => '15', 'month' => 'july'],
                    'eta_klang' => ['day' => '18', 'month' => 'july'],
                ],
                [
                    'line' => 'GSL',
                    'vessel' => 'YM INTERACTION',
                    'voyage' => '293 W',
                    'open_stack' => ['time' => '15:00', 'day' => '17', 'month' => 'july'],
                    'closing' => ['time' => '09:00', 'day' => '21', 'month' => 'july'],
                    'eta_sur' => ['day' => '21', 'month' => 'july'],
                    'etd_sur' => ['day' => '22', 'month' => 'july'],
                    'eta_klang' => ['day' => '25', 'month' => 'july'],
                ],
                [
                    'line' => 'GSL',
                    'vessel' => 'INFERRO',
                    'voyage' => '044 W',
                    'open_stack' => ['time' => '15:00', 'day' => '17', 'month' => 'july'],
                    'closing' => ['time' => '09:00', 'day' => '21', 'month' => 'july'],
                    'eta_sur' => ['day' => '21', 'month' => 'july'],
                    'etd_sur' => ['day' => '22', 'month' => 'july'],
                    'eta_klang' => ['day' => '25', 'month' => 'july'],
                ],
                [
                    'line' => 'COSCO',
                    'vessel' => 'XIN YANG PU',
                    'voyage' => '203 W',
                    'open_stack' => ['time' => '08:00', 'day' => '26', 'month' => 'june'],
                    'closing' => ['time' => '03:00', 'day' => '30', 'month' => 'june'],
                    'eta_sur' => ['day' => '30', 'month' => 'june'],
                    'etd_sur' => ['day' => '01', 'month' => 'july'],
                    'eta_klang' => ['day' => '08', 'month' => 'july'],
                ],
                [
                    'line' => 'COSCO',
                    'vessel' => 'HALLEY',
                    'voyage' => '014 W',
                    'open_stack' => ['time' => '08:00', 'day' => '06', 'month' => 'july'],
                    'closing' => ['time' => '03:00', 'day' => '10', 'month' => 'july'],
                    'eta_sur' => ['day' => '10', 'month' => 'july'],
                    'etd_sur' => ['day' => '11', 'month' => 'july'],
                    'eta_klang' => ['day' => '17', 'month' => 'july'],
                ],
                [
                    'line' => 'COSCO',
                    'vessel' => 'XIN YANG PU',
                    'voyage' => '204 W',
                    'open_stack' => ['time' => '08:00', 'day' => '09', 'month' => 'july'],
                    'closing' => ['time' => '03:00', 'day' => '13', 'month' => 'july'],
                    'eta_sur' => ['day' => '13', 'month' => 'july'],
                    'etd_sur' => ['day' => '14', 'month' => 'july'],
                    'eta_klang' => ['day' => '20', 'month' => 'july'],
                ],
                [
                    'line' => 'COSCO',
                    'vessel' => 'XIN HANG ZHOU',
                    'voyage' => '216 W',
                    'open_stack' => ['time' => '08:00', 'day' => '16', 'month' => 'july'],
                    'closing' => ['time' => '03:00', 'day' => '20', 'month' => 'july'],
                    'eta_sur' => ['day' => '20', 'month' => 'july'],
                    'etd_sur' => ['day' => '21', 'month' => 'july'],
                    'eta_klang' => ['day' => '27', 'month' => 'july'],
                ],
                [
                    'line' => 'COSCO',
                    'vessel' => 'CELSIUS EINDHOVEN',
                    'voyage' => '033 W',
                    'open_stack' => ['time' => '08:00', 'day' => '23', 'month' => 'july'],
                    'closing' => ['time' => '03:00', 'day' => '27', 'month' => 'july'],
                    'eta_sur' => ['day' => '27', 'month' => 'july'],
                    'etd_sur' => ['day' => '28', 'month' => 'july'],
                    'eta_klang' => ['day' => '03', 'month' => 'august'],
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