

<div style="height:100vh" class='d-flex flex-column'>

    <div style="flex:.1; background-color:var(--colors);">
        <?php require_once './view/header.php'; ?>
    </div>

    <div dir='rtl' style="flex: auto; " class="row p-0 m-0 bg-dark d-flex col-12">

    <!--  menu bar -->
        <div id='folders' dir="rtl" class="col-lg-3  col-md-4 col-12 p-3  bg-light d-flex flex-column">

            <div  class="btn mb-3 d-flex align-items-center">
                <span class="fill ms-2  text-dark material-symbols-outlined">
                    folder
                </span>
                <span class="fw-bold">ملفات</span>
            </div>

            <div  id='new_folder' class="btn  mb-3 d-flex align-items-center">

                <span class="fill ms-2 text-dark material-symbols-outlined">
                    create_new_folder
                </span>
                <span class="fw-bold">مجلد جديد</span>

            </div>
            <div id='new_file' class="btn mb-3 d-flex align-items-center">
                <span class="ms-2 text-dark material-symbols-outlined">
                    upload_file
                </span>
                <span class="fw-bold">ملف جديد</span>

            </div>
            <div id='settings' class="btn mb-3 d-flex align-items-center">

                <span class="ms-2 text-dark material-symbols-outlined">
                    settings
                </span>
                <span class="fw-bold">الإعدادات</span>

            </div>
            <div class=" mb-3 d-flex align-items-center">

                <span class="ms-2 text-dark material-symbols-outlined">
                    filter_alt
                </span>
                <span class="fw-bold">تصفية :</span>

            </div>
<div  class=" d-flex flex-column col-12">
            <form id='form-filter' method="GET" action="#filter">

                <div>
                    <label class="mb-1"> الملف </label>
                    <div>
                        <input placeholder="اسم الملف" style="border:none; border-bottom:solid #0004;" type="text" name="file_name" id="file_name" class="form-control rounded-0 shadow-none">
                    </div>

                </div>

                <div class="mt-4">
                    <label class="mb-2"> التاريخ </label>
                    <div class="d-flex row">
                        <input required placeholder="من" onfocus="(this.type='date')" onblur="(this.type='text')"  style="outline:none; border:none; border-bottom:solid #0004;" type="text" name="date_form" id="file_name" class="ms-4 col-lg-5 col-12 p-2 rounded-0 ">
                        <input required placeholder="الى" onfocus="(this.type='date')" onblur="(this.type='text')"  style="outline:none; border:none; border-bottom:solid #0004;" type="text" name="date_to" id="file_name" class=" col-lg-5 col-12 p-2 rounded-0 ">

                    </div>

                </div>

                <button style="background-color: var(--colors);" class="btn col-12 text-light d-flex align-items-center  rounded-sm-2 mt-5" >
                <span style="text-align: right;" class="col-5  material-symbols-outlined">
                    search
                </span>
                <span>
                تطبيق
                </span>
            </button>
            </form>

            <form id='form-logout' method="GET" action="#logout">
            <button style="background-color: var(--danger);" class="btn col-12 text-light d-flex align-items-center  rounded-sm-2 mt-5" >
                <span style="text-align: right;" class="col-5  material-symbols-outlined">
                    logout
                </span>
                <span>
                تسجيل خروج
                </span>
            </button>
            </form>

</div>
          

         

        </div>

            <!-- show files -->
            <div style="background-color:var(--secondary)" class="col-lg-9 col-md-8 "></div>

    </div>



</div>