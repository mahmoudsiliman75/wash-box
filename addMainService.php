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
            <h3 class="kt-portlet__head-title">  إضافة خدمة رئيسية </h3>
          </div>
        </div>
        <!--END:: TITLE -->

        <!--START:: ADD NEW MAIN SERVICE FORM-->
        <form class="kt-form p-3" style="margin-top: 5%">
          <div class="row justify-content-center">

            <div class="form-group col-10">
              <div class="row">
                <label class="col-form-label col-12 text-center">اسم الخدمة </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-pencil"></i> </span>
                  <input type="text" class="form-control" placeholder="اسم الخدمة">
                </div>
              </div>
            </div>

            <div class="form-group col-10 px-4">
              <div class="input-group">
                <div class="row">
                  <button type="submit" class="btn btn-success" style="background-color:#17b978; border:none;">حفظ</button> 
                </div>
              </div>
            </div>

          </div>
        </form>
        <!--END:: ADD NEW MAIN SERVICE FORM-->

      </div>  
    </div>

	</div>
  <!-- END:: CONTENT -->

</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->