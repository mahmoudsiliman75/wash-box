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
            <h3 class="kt-portlet__head-title">  إضافة باقة </h3>
          </div>
        </div>
        <!--END:: TITLE -->

        <!--START:: ADD NEW PACKAGE FORM-->
        <form class="kt-form p-3" style="margin-top: 5%">
          <div class="row justify-content-center">

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12 text-center">اسم الباقة </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-pencil" style="font-size: 19px;"></i> </span>
                  <input type="text" class="form-control" placeholder="اسم الباقة">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12 text-center">التكلفة  </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-dollar" style="font-size: 19px;"></i> </span>
                  <input type="text" class="form-control" placeholder=" التكلفة">
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
        <!--END:: ADD PACKAGE SERVICE FORM-->

      </div>  
    </div>

	</div>
  <!-- END:: CONTENT -->

</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->