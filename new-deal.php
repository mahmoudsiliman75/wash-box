<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid row">

    <div class="col-12">

      <!--START::PORTEL-->
      <div class="kt-portlet">

      <!-- START:: TITLE -->
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title"> اضافة تعاقد جديد </h3>
          </div>
        </div>
        <!-- END:: TITLE -->

        <!--START:: ADD NEW USER FORM-->
        <form class="kt-form p-3">
          <div class="row">

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12">الخدمة </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-star-o" style="font-size: 18px"></i> </span>
                  <select class="form-control kt-select2" id="client-services" name="param" multiple="multiple" placeholder="اختار الصلاحيات">
                    <option value="1"> تصميم موقع </option>
                    <option value="2">  تطبيق موبايل </option>
                    <option value="3"> استضافة </option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12">اسم العميل </label>
                <div class="input-group-prepend col-12">
                <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                  <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                    <option>اختار اسم العميل</option>
                    <option value="1">عميل 1</option>
                    <option value="2">عميل 2</option>
                    <option value="3"> عميل 3 </option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12">مسؤل المبيعات </label>
                <div class="input-group-prepend col-12">
                <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                  <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                    <option>اختار مسؤل المبيعات</option>
                    <option value="1">كريم حسام</option>
                    <option value="2">محمد عيد</option>
                    <option value="3"> عمر ايهاب </option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12">اسم المشروع </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-bookmark" style="font-size: 18px"></i> </span>
                  <input type="text" class="form-control" placeholder="اسم المشروع">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12">تاريخ التعاقد </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-calendar" style="font-size: 18px"></i> </span>
                  <input type="text" class="form-control" readonly="" value="05/20/2017" id="kt_datepicker_3">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12">مدير المشروع </label>
                <div class="input-group-prepend col-12">
                <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                  <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                    <option>اختار مدير المشروع</option>
                    <option value="1">كريم حسام</option>
                    <option value="2">محمد عيد</option>
                    <option value="3"> عمر ايهاب </option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12">تكلفة المشروع </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-dollar" style="font-size: 18px"></i> </span>
                  <input id="total-cost" type="text" class="form-control" value="0" placeholder="تكلفة المشروع">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12"> المقدم </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-dollar" style="font-size: 18px"></i> </span>
                  <input id="down-payment" type="text" class="form-control" value="0" placeholder=" المقدم">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12"> الباقى </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-dollar" style="font-size: 18px"></i> </span>
                  <input id="the-remaining" type="text" class="form-control" placeholder=" الباقى" disabled>
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4 px-4">
              <div class="input-group">
                <div class="row">
                  <label class="col-form-label col-12">اضافة ملف العقد</label>
                  <div class="input-group-prepend col-12 row">
                    <div class="dropzone dropzone-multi col-12" id="newDeal">

                      <div class="dropzone-panel">
                        <a class="dropzone-select btn btn-label-brand btn-bold btn-sm">اضافه ملف</a>
                      </div>

                      <div class="dropzone-items">
                        <div class="dropzone-item" style="display:none">

                          <div class="dropzone-file">
                            <div class="dropzone-filename" title="some_pdf_file_name.pdf"><span data-dz-name>some_pdf_file_name.pdf</span> <strong>(<span  data-dz-size>340kb</span>)</strong></div>
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
                    <span class="form-text text-muted col-12">  الملف بصيغة pdf </span>
                  </div>
                </div>
              </div>

            </div>

            <div class="form-group col-12 col-md-12">
              <div class="row">
                <label class="col-form-label col-12"> ملاحظات </label>
                <div class="input-group-prepend col-12">
                  <textarea class="default">
                  </textarea>
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
        <!--END::ADD NEW USER FORM-->

      <div>
      <!--END::PORTEL-->

    </div>

	</div>
  <!-- END:: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->