@include('layouts.header')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto ml-2">
        List of Admin Pannel CSV Export
    </h2>
    <!-- <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <button class="button text-white bg-theme-42 shadow-md mr-2"><a href="{{route('show_add_user')}}"></a></button>
    </div> -->
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">

    </div>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <button style="border:none;" type="button" class="button text-white bg-theme-42 shadow-md mr-2"><a
                class=" flex items-center " href="javascript:;" data-toggle="modal" data-target="#addmodal">
                CSV Export </a>
        </button>
    </div>
</div>
<!-- BEGIN: Datatable -->
<div class="intro-y datatable-wrapper box p-5 mt-5">
    <table class="table table-report table-report--bordered display datatable w-full">
        <thead>
            <tr>
                <th class="border-b-2 whitespace-no-wrap">Status ID</th>
                <th class="border-b-2 whitespace-no-wrap">Status</th>
                <th class="border-b-2 whitespace-no-wrap">Last Seen</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Day Last Seen</th>
                <th class="border-b-2 whitespace-no-wrap">Admin ID</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Administrator</th>
                <th class="border-b-2 whitespace-no-wrap">User ID</th>
                <th class="border-b-2 whitespace-no-wrap">User</th>
                <th class="border-b-2 whitespace-no-wrap">ID Number ID</th>
                <th class="border-b-2 whitespace-no-wrap">ID Number</th>

            </tr>
        </thead>
        <tbody>

            <tr>
                <td class="border-b">
                    <div class="font-medium whitespace-no-wrap mx-3">1</div>
                </td>
                <td class="text-center border-b">Online</td>

                <td class="text-center border-b">
                    7/6-2022 14:25
                </td>

                <td class="border-b w-5"> 0</td>
                <td class="border-b w-5"> 001</td>
                <td class="border-b w-5"> Abdul Manan</td>
                <td class="border-b w-5"> 003</td>
                <td class="border-b w-5"> Inzeman Ulhaqe</td>
                <td class="border-b w-5"> 005</td>
                <td class="border-b w-5"> 9323687638</td>
            </tr>

        </tbody>
    </table>

    <!-- ==============================ADD Category Modal============================================ -->
    <div class="modal" id="addmodal">
        <div class="modal__content">
            <div class="p-5 text-center">
                <div class="text-3xl mt-5">Add File</div>

            </div>
            <div class="px-5 pb-8 ">
                <form type="submit" action="" method="post" enctype="multipart/form-data">
                    @csrf
                
                    <div class="intro-y col-span-12 sm:col-span-6 px-2">
                        <div class="mb-2 mt-3"> CSV File*</div>
                        <input class="input w-full border flex-1" type="file" name="img" accept="image/*" required>
                        <span class="text-theme-6">
                            @error('img')
                            {{ 'File is required' }}
                            @enderror
                        </span>
                    </div>
                    <div class="text-center">
                        <button type="button" data-dismiss="modal"
                            class="button w-24 border text-gray-700 mr-1 mt-6">Cancel</button>
                        <button type="submit" class="button w-24 bg-theme-42 text-white  pl-5 pr-5">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Datatable -->
</div>
@include('layouts.footer')