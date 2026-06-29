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
                    <h1 class="mb-0" x-text="translations.messages.nvocc_schedule"></h1>
                </div>
            </div>
        </div>
        <!-- End Page Title -->
        <!-- NVOCC Schedule Section -->
        <section id="nvocc-schedule" class="nvocc-schedule section">
            <div class="container section-title">
                <h2 class="text-uppercase" x-text="translations.messages.july"></h2>
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
                            <tr>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        GSL
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        INFERRO
                                    </div>
                                </td>
                                <td class="align-middle">043 W</td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        15:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        26 <span x-text="translations.messages.june"></span>
                                    </div>
                                </td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        09:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        30 <span x-text="translations.messages.june"></span>
                                    </div>
                                </td>
                                <td class="align-middle">30 <span x-text="translations.messages.june"></span></td>
                                <td class="align-middle">01 <span x-text="translations.messages.july"></span></td>
                                <td class="align-middle">04 <span x-text="translations.messages.july"></span></td>
                            </tr>
                            <tr>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        GSL
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        YM INTERACTION
                                    </div>
                                </td>
                                <td class="align-middle">292 W</td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        15:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        28 <span x-text="translations.messages.june"></span>
                                    </div>
                                </td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        09:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        02 <span x-text="translations.messages.july"></span>
                                    </div>
                                </td>
                                <td class="align-middle">02 <span x-text="translations.messages.july"></span></td>
                                <td class="align-middle">03 <span x-text="translations.messages.july"></span></td>
                                <td class="align-middle">06 <span x-text="translations.messages.july"></span></td>
                            </tr>
                            <tr>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        GSL
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        MTT SANDAKAN
                                    </div>
                                </td>
                                <td class="align-middle">077 W</td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        15:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        10 <span x-text="translations.messages.july"></span>
                                    </div>
                                </td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        09:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        14 <span x-text="translations.messages.july"></span>
                                    </div>
                                </td>
                                <td class="align-middle">14 <span x-text="translations.messages.july"></span></td>
                                <td class="align-middle">15 <span x-text="translations.messages.july"></span></td>
                                <td class="align-middle">18 <span x-text="translations.messages.july"></span></td>
                            </tr>
                            <tr>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        GSL
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        YM INTERACTION
                                    </div>
                                </td>
                                <td class="align-middle">293 W</td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        15:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        17 <span x-text="translations.messages.july"></span>
                                    </div>
                                </td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        09:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        21 <span x-text="translations.messages.july"></span>
                                    </div>
                                </td>
                                <td class="align-middle">21 <span x-text="translations.messages.july"></span></td>
                                <td class="align-middle">22 <span x-text="translations.messages.july"></span></td>
                                <td class="align-middle">25 <span x-text="translations.messages.july"></span></td>
                            </tr>
                            <tr>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        GSL
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        INFERRO
                                    </div>
                                </td>
                                <td class="align-middle">044 W</td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        15:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        17 <span x-text="translations.messages.july"></span>
                                    </div>
                                </td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        09:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        21 <span x-text="translations.messages.july"></span>
                                    </div>
                                </td>
                                <td class="align-middle">21 <span x-text="translations.messages.july"></span></td>
                                <td class="align-middle">22 <span x-text="translations.messages.july"></span></td>
                                <td class="align-middle">25 <span x-text="translations.messages.july"></span></td>
                            </tr>
                            <tr>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        COSCO
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        XIN YANG PU
                                    </div>
                                </td>
                                <td class="align-middle">203 W</td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        08:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        26 <span x-text="translations.messages.june"></span>
                                    </div>
                                </td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        03:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        30 <span x-text="translations.messages.june"></span>
                                    </div>
                                </td>
                                <td class="align-middle">30 <span x-text="translations.messages.june"></span></td>
                                <td class="align-middle">01 <span x-text="translations.messages.july"></span></td>
                                <td class="align-middle">08 <span x-text="translations.messages.july"></span></td>
                            </tr>
                            <tr>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        COSCO
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        HALLEY
                                    </div>
                                </td>
                                <td class="align-middle">014 W</td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        08:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        06 <span x-text="translations.messages.july"></span>
                                    </div>
                                </td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        03:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        10 <span x-text="translations.messages.july"></span>
                                    </div>
                                </td>
                                <td class="align-middle">10 <span x-text="translations.messages.july"></span></td>
                                <td class="align-middle">11 <span x-text="translations.messages.july"></span></td>
                                <td class="align-middle">17 <span x-text="translations.messages.july"></span></td>
                            </tr>
                            <tr>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        COSCO
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        XIN YANG PU
                                    </div>
                                </td>
                                <td class="align-middle">204 W</td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        08:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        09 <span x-text="translations.messages.july"></span>
                                    </div>
                                </td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        03:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        13 <span x-text="translations.messages.july"></span>
                                    </div>
                                </td>
                                <td class="align-middle">13 <span x-text="translations.messages.july"></span></td>
                                <td class="align-middle">14 <span x-text="translations.messages.july"></span></td>
                                <td class="align-middle">20 <span x-text="translations.messages.july"></span></td>
                            </tr>
                            <tr>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        COSCO
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        XIN HANG ZHOU
                                    </div>
                                </td>
                                <td class="align-middle">216 W</td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        08:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        16 <span x-text="translations.messages.july"></span>
                                    </div>
                                </td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        03:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        20 <span x-text="translations.messages.july"></span>
                                    </div>
                                </td>
                                <td class="align-middle">20 <span x-text="translations.messages.july"></span></td>
                                <td class="align-middle">21 <span x-text="translations.messages.july"></span></td>
                                <td class="align-middle">27 <span x-text="translations.messages.july"></span></td>
                            </tr>
                            <tr>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        COSCO
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        CELSIUS EINDHOVEN
                                    </div>
                                </td>
                                <td class="align-middle">033 W</td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        08:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        23 <span x-text="translations.messages.july"></span>
                                    </div>
                                </td>
                                <td>
                                    <span
                                        class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                        03:00
                                    </span>
                                    <div class="margin-10px-top font-size14">
                                        27 <span x-text="translations.messages.july"></span>
                                    </div>
                                </td>
                                <td class="align-middle">27 <span x-text="translations.messages.july"></span></td>
                                <td class="align-middle">28 <span x-text="translations.messages.july"></span></td>
                                <td class="align-middle">03 <span x-text="translations.messages.august"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- /NVOCC Schedule Section -->
    </main>
@endsection