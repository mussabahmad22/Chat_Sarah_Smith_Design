<?php
$pagename="admin_dashboard";
?>
@include('layouts.header')
<style>
    .dot {
        height: 15px;
        width: 15px;
        background-color: rgb(41, 190, 21);
        border-radius: 50%;
        display: inline-block;
    }
</style>

<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto ml-2">
        List of Users
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <button class="button text-white bg-theme-42 shadow-md mr-2"><a href="{{route('show_add_user')}}">CSV
                Import</a></button>
    </div>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <button class="button text-white bg-theme-42 shadow-md mr-2"><a href="{{route('show_add_user')}}">Add
                New</a></button>
    </div>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">

    </div>
</div>
<!-- BEGIN: Datatable -->
<div class="intro-y datatable-wrapper box p-5 mt-5">
    <table class="table table-report table-report--bordered display datatable w-full">
        <thead>
            <tr>
                <th class="border-b-2 whitespace-no-wrap">Status</th>
                <th class="border-b-2 whitespace-no-wrap">Last Seen</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Days Last Seen</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Administrator</th>
                <th class="border-b-2 whitespace-no-wrap">User</th>
                <th class="border-b-2 whitespace-no-wrap">ID Number</th>
                <th class="border-b-2 whitespace-no-wrap">DOB(date Of Birth)</th>
                <th class="border-b-2 whitespace-no-wrap">Username</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Password</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td class="border-b">
                    <div class="dot mx-3"></div>
                </td>
                <td class="text-center border-b ">7/8/2022 14:25</td>

                <td class="text-center border-b">
                    2
                </td>

                <td class="border-b w-5"> Abdul Manan</td>
                <td class="border-b w-5"> Inzeman Ulhaqe</td>
                <td class="border-b w-5"> 87236872368723</td>
                <td class="border-b w-5"> 15-Nov-80</td>
                <td class="border-b w-5"> manan12</td>
                <td class="border-b w-5"> P@assword1</td>
            </tr>

        </tbody>
    </table>
</div>
<!-- END: Datatable -->
</div>
@include('layouts.footer')