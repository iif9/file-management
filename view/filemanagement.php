<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/style.css">
<div style="height:100vh" class='d-flex flex-column'>

<?php require_once "db/ConnDb.php";?>

    <div dir='rtl' style="flex: auto; " class="row p-0 m-0 bg-dark d-flex col-12">

        <!--  menu bar -->
        <div id='folders' dir="rtl" class="col-lg-3  col-md-4 col-12 p-3  bg-light d-flex flex-column">

            <div class=" mb-3 d-flex align-items-center">

                <span class="ms-2 text-dark material-symbols-outlined">
                    filter_alt
                </span>
                <span class="fw-bold">تصفية :</span>

            </div>
            <div class=" d-flex flex-column col-12">
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
                            <input required placeholder="من" onfocus="(this.type='date')" onblur="(this.type='text')" style="outline:none; border:none; border-bottom:solid #0004;" type="text" name="date_form" id="file_name" class="ms-4 col-lg-5 col-12 p-2 rounded-0 ">
                            <input required placeholder="الى" onfocus="(this.type='date')" onblur="(this.type='text')" style="outline:none; border:none; border-bottom:solid #0004;" type="text" name="date_to" id="file_name" class=" col-lg-5 col-12 p-2 rounded-0 ">

                        </div>

                    </div>

                    <button style="background-color: var(--colors);" class="btn col-12 text-light d-flex align-items-center  rounded-sm-2 mt-5">
                        <span style="text-align: right;" class="col-5  material-symbols-outlined">
                            search
                        </span>
                        <span>
                            تطبيق
                        </span>
                    </button>
                </form>

                <form id='form-logout' method="GET" action="/logout.php">
                    <button style="background-color: var(--danger);" class="btn col-12 text-light d-flex align-items-center  rounded-sm-2 mt-5">
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
        <br>

        <!-- show files -->
        <div style="background-color:var(--secondary)" class="col-lg-9 col-md-8 ">

            <ul class="nav nav-tabs " id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button style="color:var(--colors)" class="nav-link  activeColor" id="home-tab" data-bs-toggle="tab" data-bs-target="#uploadFile" type="button" role="tab" aria-controls="" aria-selected="true">تحميل الملفات</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="text-dark active nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#showfile" type="button" role="tab" aria-controls="profile" aria-selected="false">عرض الملفات</button>
                </li>

            </ul>


            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade   p-3 pt-5" id="uploadFile" role="tabpanel">

                    <div style="max-height: 500px; overflow-y:auto;" class="bg-light d-flex  flex-column align-items-center  p-4">
                        <div id='file-zone' class="p-3 col-12 d-flex align-items-center" style='border-radius:15px; background-color:var(--secondary)'>
                            <span class="ms-2 col-2  text-dark material-symbols-outlined">
                                upload
                            </span>
                            <span class=" me-3">قم بافلات الملفات هنا للتحميل</span>

                        </div>
                        <div id="display-files" class="col-12 d-flex flex-row  mt-4 flex-wrap"></div>
                        <button id='upload-btn' class="btn col-5 mt-4" style="background-color: var(--colors);">تحميل</button>

                    </div>

                </div>
                <div class="tab-pane active fade show" id="showfile" role="tabpanel" aria-labelledby="profile-tab">

                    <div class="row">
                        <?php

                        for ($i = 0; $i < 3; $i++) {
                            echo ' <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"> ادرة الفريق</h5>
                    <p class="card-text">يستطيع المدير أن يمنح موظفيه الإلهام والحافز للتركيز والعمل كفريق واحد؛ من خلال تحديد هدف محدد لفريق العمل بالكامل؛</p>
                    <div class="card-body">

                    <div class="flex-container">
                        <div><a href="#"><img src="/image/download.gif" height="20px" width="20px"></a></div>
                        <div><a href="#"><img src="/image/trash-can.gif" height="20px" width="20px"></a></div>
                        <div><a href="#"><img src="/image/eye.png" height="30px" width="30px"></a></div> 
                         <div><h5>pdf</h5></div>
                    </div>
                    
                 </div>
                  </div>
                </div>
              </div>';
                        }

                        ?>


                    </div>
                </div>
            </div>


        </div>

    </div>

</div>


<script src="./assets/script.js"></script>