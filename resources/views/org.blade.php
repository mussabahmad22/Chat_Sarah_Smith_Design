<?php
$pagename="org";
?>
@include('layouts.header')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto ml-2">
        List of Orgnizations
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <button class="button text-white bg-theme-42 shadow-md mr-2"><a href="{{route('add_org')}}">Create new
                Orgnization</a></button>
    </div>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">

    </div>
</div>
<!-- BEGIN: Datatable -->
<div class="intro-y datatable-wrapper box p-5 mt-5">
    <table class="table table-report table-report--bordered display datatable w-full">
        <thead>
            <tr>

            </tr>

        </thead>
        <tbody>

            <tr>
                <td class="border-b w-5">
                    <div class="font-bold bg-theme-42 text-white whitespace-no-wrap"
                        style="margin-right: 950px ; text-align: center;">1-Orgnization A</div>
                </td>

            </tr>
            <tr>
                <td class="border-b w-5">
                    <div class="font-bold bg-theme-42 text-white whitespace-no-wrap"
                        style="margin-right: 950px ; text-align: center;">2-Orgnization B</div>
                </td>

            </tr>
            <tr>
                <td class="border-b w-5">
                    <div class="font-bold bg-theme-42 text-white whitespace-no-wrap" style="margin-right: 950px ; text-align: center;">3-Orgnization C</div>
                </td>

            </tr>
            <tr>
                <td class="border-b w-5">
                    <div class="font-bold bg-theme-42 text-white whitespace-no-wrap"
                        style="margin-right: 950px ; text-align: center;">4-Orgnization D</div>
                </td>

            </tr>
            <tr>
                <td class="border-b w-5">
                    <div class="font-bold bg-theme-42 text-white whitespace-no-wrap"
                        style="margin-right: 950px ; text-align: center;">5-Orgnization E</div>
                </td>

            </tr>
            <tr>
                <td class="border-b w-5">
                    <div class="font-bold bg-theme-42 text-white whitespace-no-wrap"
                        style="margin-right: 950px ; text-align: center;">6-Orgnization F</div>
                </td>

            </tr>
            <tr>
                <td class="border-b w-5">
                    <div class="font-bold bg-theme-42 text-white whitespace-no-wrap"
                        style="margin-right: 950px ; text-align: center;">7-Orgnization G</div>
                </td>

            </tr>

        </tbody>
    </table>
</div>
<!-- END: Datatable -->
<!-- BEGIN: Datatable -->

@include('layouts.footer')