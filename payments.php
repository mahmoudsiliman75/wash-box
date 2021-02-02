<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class=" accounting-cards row mb-2">

      <div class="col-12">
        <div class="financ-container kt-portlet kt-iconbox kt-iconbox--danger kt-iconbox--animate-fast">
          <div class="kt-portlet__body">
            <div class="kt-iconbox__body">

              <div class="kt-iconbox__icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <path d="M17,8 C16.4477153,8 16,7.55228475 16,7 C16,6.44771525 16.4477153,6 17,6 L18,6 C20.209139,6 22,7.790861 22,10 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,9.99305689 C2,7.7839179 3.790861,5.99305689 6,5.99305689 L7.00000482,5.99305689 C7.55228957,5.99305689 8.00000482,6.44077214 8.00000482,6.99305689 C8.00000482,7.54534164 7.55228957,7.99305689 7.00000482,7.99305689 L6,7.99305689 C4.8954305,7.99305689 4,8.88848739 4,9.99305689 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,10 C20,8.8954305 19.1045695,8 18,8 L17,8 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 8.000000) scale(1, -1) rotate(-180.000000) translate(-12.000000, -8.000000) " x="11" y="2" width="2" height="12" rx="1"/>
                        <path d="M12,2.58578644 L14.2928932,0.292893219 C14.6834175,-0.0976310729 15.3165825,-0.0976310729 15.7071068,0.292893219 C16.0976311,0.683417511 16.0976311,1.31658249 15.7071068,1.70710678 L12.7071068,4.70710678 C12.3165825,5.09763107 11.6834175,5.09763107 11.2928932,4.70710678 L8.29289322,1.70710678 C7.90236893,1.31658249 7.90236893,0.683417511 8.29289322,0.292893219 C8.68341751,-0.0976310729 9.31658249,-0.0976310729 9.70710678,0.292893219 L12,2.58578644 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 2.500000) scale(1, -1) translate(-12.000000, -2.500000) "/>
                    </g>
                </svg>
              </div>

              <div class="kt-iconbox__desc">
                <h4 class="kt-iconbox__title">
                  إجمالى مصروفات الشهر
                </h4>
                <div class="kt-iconbox__content">
                  <h3> 1000 </h3>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-12">

        <div class="kt-portlet">

        <!-- START:: TITLE -->
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label d-flex justify-content-between w-100">
            <h3 class="kt-portlet__head-title"> المصروفات </h3>
            <div class="btns-box">
              <button type="button" class="btn btn-outline-success mx-1 mb-1" data-toggle="modal" data-target="#add-payments"> <i class="la la-plus"></i>  اضافة مصروفات  </button>
              <button type="button" class="btn btn-outline-success mx-1 mb-1" data-toggle="modal" data-target="#search-filter"> <i class="la la-search"></i>  تحديد فترة زمنية  </button>
            </div>
          </div>
        </div>
        <!--START::TITLE-->

        <!-- START:: ADD PAYMENT MODAL -->
        <div class="modal fade" id="add-payments" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> ابحث خلال فتر زمنية </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
              </div>
              <div class="modal-body">
                <form class="kt-form pb-0 p-3">

                  <div class="row">

                    <div class="form-group col-12 col-md-4">
                      <div class="row">
                        <label class="col-form-label col-12"> اسم الموظف </label>
                        <div class="input-group-prepend col-12">
                          <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                          <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                            <option value="1"> محمد عيد </option>
                            <option value="2"> محمود سليمان </option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-12 col-md-4">
                      <div class="input-group">
                        <div class="row">
                          <label class="col-form-label col-12"> التاريخ </label>
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
                          <label class="col-form-label col-12"> القيمة </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-dollar" style="font-size: 18px"></i> </span>
                            <input type="text" class="form-control" placeholder="القيمة" />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-12 col-md-12">
                      <div class="row">
                        <label class="col-form-label col-12"> السبب </label>
                        <div class="input-group-prepend col-12">
                          <textarea class="default">
                          </textarea>
                        </div>
                      </div>
                    </div>

                  </div>

                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                <button type="button" class="done btn btn-success"> اضافة </button>
              </div>
            </div>
          </div>
        </div>
        <!-- END:: ADD PAYMENT MODAL -->

        <!-- START:: SEARCH FILTER MODAL -->
        <div class="modal fade" id="search-filter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> ابحث خلال فتر زمنية </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
              </div>
              <div class="modal-body">
                <form class="kt-form pb-0 p-3">

                  <div class="row">

                    <div class="form-group col-12 col-md-6">
                      <div class="row">
                        <label class="col-form-label col-12">سنوات  </label>
                        <div class="input-group-prepend col-12">
                          <span class="input-group-text"> <i class="la la-calendar" style="font-size: 18px"></i> </span>
                          <select class="form-control kt-select2" id="years" multiple="multiple">
                            <option value="1">2018</option>
                            <option value="2">2019</option>
                            <option value="3">2020</option>
                            <option value="4">2021</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-12 col-md-6">
                      <div class="row">
                        <label class="col-form-label col-12">شهور  </label>
                        <div class="input-group-prepend col-12">
                          <span class="input-group-text"> <i class="la la-calendar" style="font-size: 18px"></i> </span>
                          <select class="form-control kt-select2" id="monthes" multiple="multiple">
                            <option value="1">يناير</option>
                            <option value="2">فبراير</option>
                            <option value="3">مارس</option>
                            <option value="4">ابريل</option>
                            <option value="5">مايو</option>
                            <option value="6">يونيو</option>
                            <option value="7">يوليو</option>
                            <option value="8">اغسطس</option>
                            <option value="9">سبتمبر</option>
                            <option value="10">اكتوبر</option>
                            <option value="11">نوفمبر</option>
                            <option value="12">ديسمبر</option>
                          </select>
                        </div>
                      </div>
                    </div>

                  </div>

                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                <button type="button" class="btn btn-success"> بحث </button>
              </div>
            </div>
          </div>
        </div>
        <!-- END:: SEARCH FILTER MODAL -->

        <!--START: ARCHIVE USERS DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="standard table table-responsive-sm" width="100%">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th> الموظف </th>
                <th> التاريخ </th>
                <th>قيمة المصروفات</th>
                <th> السبب </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td> محمد عيد </td>
                <td> 2021 - 1 - 17 </td>
                <td> 1000 </td>
                <td> مستلزمات مكتب </td>
              </tr>
            </tbody>
          </table>

        </div>
        <!--END: ARCHIVE USERS DATATABLE-->

      </div>  
    </div>

	</div>
  <!-- END:: CONTENT -->
</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->