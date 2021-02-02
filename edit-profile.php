<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid row">

    <div class="kt-portlet kt-portlet--height-fluid- col-12 justify-content-center align-items-center">

      <div class="kt-portlet__body">
        <!--begin::Widget -->
        <div class="kt-widget kt-widget--user-profile-2">

          <div class="kt-widget__head d-flex flex-column mt-0">
            <div class="kt-widget__media">
              <img class="mb-3 image-preview" src="assets/media//users/300_14.jpg" alt="profile image" width="150">
            </div>
            <input type="file" class="image" style="margin-right: 7rem">
          </div>

          <div class="kt-widget__body">

            <!--START:: ADD NEW EMPLOYEE FORM-->
            <form class="kt-form p-3">
              <div class="row">

                <div class="form-group col-12 col-md-6">
                  <div class="row">
                    <label class="col-form-label col-12">الإسم </label>
                    <div class="input-group-prepend col-12">
                      <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i> </span>
                      <input type="text" class="form-control" placeholder="الإسم">
                    </div>
                  </div>
                </div>

                <div class="form-group col-12 col-md-6">
                  <div class="row">
                    <label class="col-form-label col-12">البريد الإلكترونى</label>
                    <div class="input-group-prepend col-12">
                      <span class="input-group-text"> <i class="la la-at" style="font-size: 18px"></i> </span>
                      <input type="text" class="form-control" placeholder="البريد الإلكترونى">
                    </div>
                  </div>
                </div>

                <div class="form-group col-12 col-md-6">
                  <div class="row">
                    <label class="col-form-label col-12"> العنوان</label>
                    <div class="input-group-prepend col-12">
                      <span class="input-group-text"> <i class="la la-map-marker" style="font-size: 18px"></i> </span>
                      <input type="text" class="form-control" placeholder=" العنوان">
                    </div>
                  </div>
                </div>

                <div class="form-group col-12 col-md-6">
                  <div class="row">
                    <label class="col-form-label col-12"> رقم الهاتف</label>
                    <div class="input-group-prepend col-12">
                      <span class="input-group-text"> <i class="la la-mobile" style="font-size: 18px"></i> </span>
                      <input type="text" class="form-control" placeholder=" رقم الهاتف">
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
            <!--END::ADD NEW EMPLOYEE FORM-->

          </div>
        </div>
        <!--end::Widget -->

      </div>
    </div>

	</div>
	<!-- END:: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->