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
            <h3 class="kt-portlet__head-title"> قائمة المتابعات </h3>

            <div class="btns-box">
              <a href="add-follow-up.php" type="button" class="btn btn-outline-success mx-1 mb-1"> <i class="la la-plus"></i> إضافة متايعة جديدة </a>
            </div>
          </div>
        </div>
        <!-- START:: TITLE -->

        <!--START: FOLOW UP DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="standard table table-responsive-sm">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th>  اسم العميل </th>
                <th>  موظف الشركة </th>
                <th>  نوع الاجراء </th>
                <th> التاريخ </th>
                <th> الساعة </th>
                
                <th class="action text-center">إجراء</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>  TechnoMasr </td>
                <td>  محمد عيد </td> 
                <td>   اتصال </td> 
                <td> 
                  <p class="mb-1">1 - 1 - 2020 </p> 
                  <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill kt-badge--rounded" style="height: 25px; width: 85%">
                    العميل 
                  </span>
                </td>
                <td> 30 : 3 </td>
                
                <td align="center">
                  <button class="kt-badge kt-badge--outline kt-badge--primary" data-toggle="modal" data-target="#edit-follow-up" title="تعديل">
                    <i class="la la-edit"></i>
                  </button>

                  <button class="delete kt-badge kt-badge--outline kt-badge--danger" title="حذف">
                    <i class="la la-trash"></i>
                  </button>
                </td>
              </tr>
              <!-- <tr>
                <td colspan="7"> 
                  <p> تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست  </p>
                </td>
              </tr> -->

              <tr>
                <td>2</td>
                <td>  TechnoMasr </td>
                <td>  محمد عيد </td> 
                <td>   اتصال </td> 
                <td> 
                  <p class="mb-1">15 - 1 - 2020 </p> 
                  <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill kt-badge--rounded" style="height: 25px; width: 85%">
                    الشركة
                  </span>
                </td>
                <td> 30 : 3 </td>
                
                <td align="center">
                  <button class="kt-badge kt-badge--outline kt-badge--primary" data-toggle="modal" data-target="#edit-follow-up" title="تعديل">
                    <i class="la la-edit"></i>
                  </button>

                  <button class="delete kt-badge kt-badge--outline kt-badge--danger" title="حذف">
                    <i class="la la-trash"></i>
                  </button>
                </td>
              </tr>
              <!-- <tr>
                <td colspan="7"> 
                  <p> تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست تست  </p>
                </td>
              </tr> -->
            </tbody>
          </table>

          <!-- START:: MODAL -->
          <div class="modal fade" id="edit-follow-up" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">تعدبل المتابعة </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button>
                </div>

                <div class="modal-body">
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

              </div>
            </div>
          </div>
          <!-- END:: MODAL -->

        </div>
        <!--END:  FOLOW UP DATATABLE-->

      </div>  
    </div>

	</div>

	<!-- END:: CONTENT -->
</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->