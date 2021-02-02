<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="row">
      <div class="col-12">
        <!--START::PORTEL-->
        <div class="kt-portlet">

        <!-- START:: TITLE -->
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label title-container d-flex justify-content-between w-100">
            <h3 class="kt-portlet__head-title"> إضافة إستضافة </h3>
          </div>
        </div>
        <!--END:: TITLE -->

        <!--START:: ADD NEW HOSTING FORM-->
        <form class="kt-form p-3">
          <div class="row">

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12">اسم المشروع </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i> </span>
                  <input type="text" class="form-control" placeholder="اسم المشروع ">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12">اسم العميل </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i> </span>
                  <input type="text" class="form-control" placeholder="اسم العميل ">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12">الباقة  </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-star-o" style="font-size: 18px"></i> </span>
                  <select class="form-control kt-select2" id="package_select2_3" name="param" multiple="multiple" placeholder="اختار الباقة">
                    <option value="1"> باقة بلاتينوم </option>
                    <option value="2">باقة بريميم</option>
                    <option value="3">باقة دايموند</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-6">
                <div class="row">
                  <label class="col-form-label col-12">  تاريخ الإنتهاء</label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-calendar" style="font-size: 18px"></i> </span>
                    <input type="text" class="form-control" readonly value="05/20/2017" id="kt_datepicker_3" />
                  </div>
                </div>
            </div>

            <div class="form-group col-12">
                <div class="row">
                  <label class="col-form-label col-12"> ملاحظات </label>
                  <div class="input-group-prepend col-12">
                    <textarea class="default" name="kt-ckeditor-1"></textarea>
                  </div>
                </div>
            </div>

            <div class="form-group col-12 px-4">
              <div class="input-group">
                <div class="row">
                  <button type="submit" class="btn btn-success" style="background-color:#17b978; border:none;">حفظ</button> 
                </div>
              </div>
            </div>

          </div>
        </form>
        <!--END::ADD NEW HOSTING FORM-->

      </div>  
    </div>

	</div>
  <!-- END:: CONTENT -->

</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->