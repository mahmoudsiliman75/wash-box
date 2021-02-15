<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

<div id="kt_repeater_1">
  <div class="form-group form-group-last row" id="kt_repeater_1">
    <div data-repeater-list="" class="col-lg-6">
      <div data-repeater-item class="form-group row align-items-center">

        <div class="col-12">
          <div class="kt-form__group--inline">
            <div class="kt-form__label">
              <label>اسم الخدمة</label>
            </div>
            <div class="kt-form__control">
              <input type="text" class="form-control" placeholder="اسم الخدمة">
            </div>
          </div>
          <div class="d-md-none kt-margin-b-10"></div>
        </div>

        <div class="col-12">
          <div class="kt-form__group--inline">
            <div class="kt-form__label">
              <label class="kt-label m-label--single"> سعر عادى </label>
            </div>
            <div class="kt-form__control">
              <input type="text" class="form-control" placeholder="سعر عادى">
            </div>
          </div>
          <div class="d-md-none kt-margin-b-10"></div>
        </div>

        <div class="col-12">
          <div class="kt-form__group--inline">
            <div class="kt-form__label">
              <label class="kt-label m-label--single">سعر مستعجل</label>
            </div>
            <div class="kt-form__control">
              <input type="text" class="form-control" placeholder="سعر مستعجل">
            </div>
          </div>
          <div class="d-md-none kt-margin-b-10"></div>
        </div>

        <div class="col-md-4">
          <a href="javascript:;" data-repeater-delete="" class="btn-sm btn btn-label-danger btn-bold">
            <i class="la la-trash-o"></i>
            حذف
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="form-group form-group-last row">
    <label class="col-lg-2 col-form-label"></label>
    <div class="col-lg-4">
      <a href="javascript:;" data-repeater-create="" class="btn btn-bold btn-sm btn-label-brand">
        <i class="la la-plus"></i> اضافة خدمة
      </a>
    </div>
  </div>
</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->