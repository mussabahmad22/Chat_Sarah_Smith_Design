<?php
$pagename="org";
?>
@include('layouts.header')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium ml-3">
        Add Orgnization
    </h2>
</div>
<div class="intro-y box pb-10">
    <div class="px-5 sm:px-20  pt-10 border-gray-200">
        <form action="" class="validate-form grid grid-cols-12" method="post" enctype="multipart/form-data">
            @csrf
            <div class="intro-y col-span-12  sm:col-span-7  my-4">
                <input type="text" name="org_name" class="input w-full border-b flex-1 " style=" border-color:#246EE9;" 
                    value=""  placeholder="Orgnization Name*" required>
            </div>
            <br>
            <div class="intro-y col-span-12  sm:col-span-7">
                <input type="text" name="add_user" class="input w-full border-b flex-1" style=" border-color:#246EE9;" 
                    value=""  placeholder="Add user*" required>
            </div>

            <div class="intro-y col-span-12 mt-6">
                <button class="button w-30 justify-center block bg-theme-42 text-white "> Save</button>
            </div>
        </form>
    </div>
</div>

@include('layouts.footer')