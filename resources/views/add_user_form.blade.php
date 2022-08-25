<?php
$pagename="admin_dashboard";
?>
@include('layouts.header')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium ml-3">
        Add User Information
    </h2>
</div>
<div class="intro-y box pb-10">
    <div class="px-5 sm:px-20 mt-2 pt-10 border-gray-200">
        <form action="" class="validate-form grid grid-cols-12" method="post" enctype="multipart/form-data">
            @csrf
            <div class="intro-y col-span-12 sm:col-span-5 px-2 my-4">
                <input type="text" name="Username" class="input w-full border-b flex-1 " style=" border-color:#246EE9;" 
                    value=""  placeholder="Username*" required>
            </div>
            <br>
            <div class="intro-y col-span-12 sm:col-span-5 px-2 my-4">
                <input type="password" name="password" class="input w-full border-b flex-1" style=" border-color:#246EE9;" 
                    value=""  placeholder="Password*" required>
            </div>
            
            <div class="intro-y col-span-12 sm:col-span-2 px-2 my-4">
                <input type="email" name="email" class="input w-full border-b flex-1" style=" border-color:#246EE9;" 
                    value=""  placeholder="Email*" required>
            </div>
            <br>
            <div class="intro-y col-span-12 sm:col-span-2 px-2 my-4">
                <input type="number" name="mob_num" class="input w-full border-b flex-1" style=" border-color:#246EE9;" 
                    value=""  placeholder="Mobile Number*" required>
            </div>
            <br>
            <div class="intro-y col-span-12 sm:col-span-2 px-2 my-4">
               
                <input type="text" name="division" class="input w-full border-b flex-1" style=" border-color:#246EE9;" 
                    value=""  placeholder="Division*" required>
            </div>
            <br>
            <div class="intro-y col-span-12 sm:col-span-2 px-2 my-4">
                <input type="text" name="administrator" class="input w-full border-b flex-1" style=" border-color:#246EE9;" 
                    value=""  placeholder="Administrator*" required>
            </div>
            <br>
            <div class="intro-y col-span-12 sm:col-span-2 px-2 my-4">

                <select type="text" name="bussiness" class="input w-full border-b flex-1" style=" border-color:#246EE9;" required>
                    <option value="" disabled selected>Bussiness*</option>
                    <option value="volvo">Software house</option>
                    <option value="saab">Marketting</option>
                    <option value="mercedes">Showroom</option>
                    <option value="audi">Shop Holder</option>
                </select>

            </div>
            <br>
              <div class="intro-y col-span-12 sm:col-span-2 px-2 my-4">

                <select type="text" name="province" class="input w-full border-b flex-1" style=" border-color:#246EE9;" required>
                    <option value="" disabled selected>Province*</option>
                    <option value="volvo">Punjab</option>
                    <option value="saab">Sindh</option>
                    <option value="mercedes">Sarhad</option>
                    <option value="audi">KPK</option>
                </select>
                
            </div>
            <br>
            <div class="intro-y col-span-12 sm:col-span-2 px-2 my-4">
                
                <input type="text" name="user" class="input w-full border-b flex-1" style=" border-color:#246EE9;" 
                    value=""  placeholder="User*" required>
            </div>
            <br>
            <div class="intro-y col-span-12 sm:col-span-2 px-2 my-4">
           
                <input type="date" name="dob" class="input w-full border-b flex-1" style=" border-color:#246EE9;" 
                    value=""  placeholder="Date of Birth*" required>
            </div>
            <div class="intro-y col-span-12 sm:col-span-5 px-2 my-4">
           
                <input type="text" name="area" class="input w-full border-b flex-1" style=" border-color:#246EE9;" 
                    value=""  placeholder="Area*" required>
            </div>
            <br>
            <div class="intro-y col-span-12 sm:col-span-2 px-2 my-4">
            
                <input type="text" name="status" class="input w-full border-b flex-1" style=" border-color:#246EE9;" 
                    value=""  placeholder="Status*" required>
            </div>
            <br>
            <div class="intro-y col-span-12 sm:col-span-2 px-2 my-4">
               
                <input type="text" name="last_seen" class="input w-full border-b flex-1" style=" border-color:#246EE9;" 
                    value=""  placeholder="Last Seen*" required>
            </div>
            <br>
    
            <div class="intro-y col-span-12 sm:col-span-2 px-2 my-4">
               
                <input type="text" name="imei" class="input w-full border-b flex-1" style=" border-color:#246EE9;" 
                    value=""  placeholder="IMEI Number*" required>
            </div>
            <br>
            <div class="intro-y col-span-12 sm:col-span-2 px-2 my-4">
              
                <input type="text" name="id_num" class="input w-full border-b flex-1" style=" border-color:#246EE9;" 
                    value=""  placeholder="ID Number*" required>
            </div>
            <br>
            <div class="intro-y col-span-12 sm:col-span-2 px-2 my-4">
            
                <input type="text" name="buss_unit" class="input w-full border-b flex-1" style=" border-color:#246EE9;" 
                    value=""  placeholder="Bussiness Unit*" required>
            </div>
            <br>
            <div class="intro-y col-span-12 sm:col-span-2 px-2 my-4">
          
                <input type="text" name="active" class="input w-full border-b flex-1" style=" border-color:#246EE9;" 
                    value=""  placeholder="Active*" required>
            </div>
            <br>
            <div class="intro-y col-span-12 sm:col-span-5 px-2 my-4">
                <input type="file" name="img" class="input w-full border-b flex-1" style=" border-color:#246EE9;" 
                    value=""  placeholder="Upload Image*" required>
            </div>
            <br>
            <div class="intro-y col-span-12 sm:col-span-2 px-2 my-4">
             
                <input type="text" name="edit_user" class="input w-full border-b flex-1" style=" border-color:#246EE9;" 
                    value=""  placeholder="Edit User*" required>
            </div>
            <br>
            <div class="intro-y col-span-12 sm:col-span-2 px-2 my-4">
             
                <input type="text" name="org" class="input w-full border-b flex-1" style=" border-color:#246EE9;" 
                    value=""  placeholder="Orgnization*" required>
            </div>


            <div class="intro-y col-span-12 items-center justify-center sm:justify-end mt-5">
                <button class="button w-30 justify-center block bg-theme-42 text-white ml-2"> Save</button>
            </div>
        </form>
    </div>
</div>

@include('layouts.footer')