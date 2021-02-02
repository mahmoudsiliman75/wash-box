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
            <h3 class="kt-portlet__head-title"> رفع ملف الحضور </h3>
          </div>
        </div>
        <!--END:: TITLE-->

        <!--START:: ADD NEW HOSTING FORM-->
        <form class="kt-form p-3">
          <div class="row">

            <div class="form-group col-12 col-md-4">
              <div class="input-group">
                <div class="row">
                  <label class="col-form-label col-12">تاريخ بداية الفترة الزمنية</label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-calendar" style="font-size: 18px"></i> </span>
                    <input type="text" class="form-control" readonly value="05/20/2017" id="kt_datepicker_3" />
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="input-group">
                <div class="row">
                  <label class="col-form-label col-12">تاريخ نهاية الفترة الزمنية</label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-calendar" style="font-size: 18px"></i> </span>
                    <input type="text" class="form-control" readonly value="05/20/2017" id="kt_datepicker_3" />
                  </div>
                </div>
              </div>
            </div>

              <div class="form-group col-12 col-md-4 px-4">
                <div class="input-group">
                  <div class="row">
                    <label class="col-form-label col-12">اضافة ملف بصيغة xlsx/xls/csv</label>
                    <div class="input-group-prepend col-12 row">
                      <div class="dropzone dropzone-multi col-12" id="attendance-file">

                        <div class="dropzone-panel">
                          <a class="dropzone-select btn btn-label-brand btn-bold btn-sm">اضافه ملف</a>
                        </div>

                        <div class="dropzone-items">
                          <div class="dropzone-item" style="display:none">

                            <div class="dropzone-file">
                              <div class="dropzone-filename" title="some_image_file_name.jpg"><span data-dz-name>some_image_file_name.jpg</span> <strong>(<span  data-dz-size>340kb</span>)</strong></div>
                              <div class="dropzone-error" data-dz-errormessage></div>
                            </div>

                            <div class="dropzone-progress">
                              <div class="progress">
                                <div class="progress-bar kt-bg-brand" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress></div>
                              </div>
                            </div>

                            <div class="dropzone-toolbar">
                              <span class="dropzone-start"><i class="flaticon2-arrow"></i></span>
                              <span class="dropzone-cancel" data-dz-remove style="display: none;"><i class="flaticon2-cross"></i></span>
                              <span class="dropzone-delete" data-dz-remove><i class="flaticon2-cross"></i></span>
                            </div>

                          </div>
                        </div>

                      </div>

                    </div>
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