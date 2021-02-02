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
          <div class="kt-portlet__head-label d-flex justify-content-between w-100">
            <h3 class="kt-portlet__head-title">  إضافة عميل محتمل </h3>
          </div>
        </div>
        <!-- END:: TITLE -->

        <!-- START:: LEADS LIST -->
        <div class="kt-portlet__body kt-portlet__body--fit ">
          <form class="kt-form p-3">
            <div class="row">

              <div class="form-group col-12 col-md-6">
                <div class="row">
                  <label class="col-form-label col-12">اسم العميل </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i> </span>
                    <input type="text" class="form-control" placeholder="اسم المستخدم ">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-6">
                <div class="row">
                  <label class="col-form-label col-12"> رقم الهاتف </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-phone" style="font-size: 18px"></i> </span>
                    <input type="text" class="form-control" placeholder="رقم الهاتف">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-6">
                <div class="row">
                  <label class="col-form-label col-12">البريد الإلكترونى </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-at" style="font-size: 18px"></i> </span>
                    <input type="text" class="form-control" placeholder="البريد الإلكترونى">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-6">
                <div class="row">
                  <label class="col-form-label col-12"> جاى منين </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-bookmark" style="font-size: 18px"></i> </span>
                    <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                      <option>اختار جاى منين</option>
                      <option value="1"> Facebook </option>
                      <option value="2">Ads</option>
                      <option value="3">Word Of Mouth</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-6">
                <div class="row">
                  <label class="col-form-label col-12"> الخدمات </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-star-o" style="font-size: 18px"></i> </span>
                    <select class="form-control kt-select2" id="services_select2_3" multiple="multiple" placeholder="اختار الخدمات">
                      <option value="1"> تصميم موقع ويب</option>
                      <option value="2"> استضافة</option>
                      <option value="3"> تطبيق موبايل</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-6">
                <div class="row">
                  <label class="col-form-label col-12"> مسؤل المبيعات </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                    <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                      <option>اختار مسؤل المبيعات</option>
                      <option value="1"> مبيعات 1</option>
                      <option value="2">مبيعات 2</option>
                      <option value="3"> مبيعات 3</option>
                    </select>
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
</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->