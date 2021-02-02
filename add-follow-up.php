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
              <h3 class="kt-portlet__head-title">  إضافة متابعة عميل </h3>
            </div>
          </div>
          <!-- END::  TITLE -->

        <!-- START:: LEADS LIST -->
        <div class="kt-portlet__body kt-portlet__body--fit ">
          <form class="kt-form p-3">
            <div class="row">

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12">  المتصل </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                    <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                      <option>اختار المتصل</option>
                      <option value="1"> الشركة </option>
                      <option value="2">العميل</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12">تاريخ الاتصال</label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-calendar" style="font-size: 18px"></i> </span>
                    <input type="text" class="form-control" readonly value="05/20/2017" id="kt_datepicker_3" />
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12">اسم العميل</label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i> </span>
                    <input type="text" class="form-control" placeholder="الإسم">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12">  موظف الشركة </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                    <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                      <option>اختار موظف الشركة</option>
                      <option value="1"> محمود سليمان </option>
                      <option value="2">محمد عيد</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12">  نوع الاجراء </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-bookmark" style="font-size: 18px"></i> </span>
                    <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                      <option>اختار نوع الاجراء</option>
                      <option value="1"> اتصال </option>
                      <option value="2">ايميل</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12">تاريخ المتابعة القادمة</label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-calendar" style="font-size: 18px"></i> </span>
                    <input type="text" class="form-control" id="kt_datepicker_3" />
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-6">
                <div class="row">
                  <label class="col-form-label col-12"> الخدمات المعروضه </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-calendar" style="font-size: 18px"></i> </span>
                    <select class="form-control kt-select2" id="services_select2_3" multiple="multiple">
                      <option value="1">استضافة</option>
                      <option value="2">تصميم موقع</option>
                      <option value="3">تطبيق موبايل</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-6">
                <div class="row">
                  <label class="col-form-label col-12">  تغيير نوع العميل </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-bookmark" style="font-size: 18px"></i> </span>
                    <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                      <option>اختار نوع العميل</option>
                      <option value="1"> نوع 1 </option>
                      <option value="2"> نوع 2 </option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-12">
                <div class="row">
                  <label class="col-form-label col-12"> التفاصيل </label>
                  <div class="input-group-prepend col-12">
                    <textarea class="default">
                      <p>اكتب التفاصيل</p>
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
        </div>
        <!-- END:: LEADS LIST -->

      </div>  
    </div>

	</div>

	<!-- END:: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->