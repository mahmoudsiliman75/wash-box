<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class=" accounting-cards row mb-2">

      <div class="col-12 col-md-6">
        <div class="financ-container kt-portlet kt-iconbox kt-iconbox--brand kt-iconbox--animate-slow">
          <div class="kt-portlet__body">
            <div class="kt-iconbox__body">

              <div class="kt-iconbox__icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                        <path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000"/>
                    </g>
                </svg>
              </div>

              <div class="kt-iconbox__desc">
                <h4 class="kt-iconbox__title">
                  إجمالى ارباح الشهر
                </h4>
                <div class="kt-iconbox__content">
                  <h3> 20000 </h3>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="financ-container kt-portlet kt-iconbox kt-iconbox--danger kt-iconbox--animate-fast">
          <div class="kt-portlet__body">
            <div class="kt-iconbox__body">

              <div class="kt-iconbox__icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                        <rect fill="#000000" x="6" y="11" width="12" height="2" rx="1"/>
                    </g>
                </svg>
              </div>

              <div class="kt-iconbox__desc">
                <h4 class="kt-iconbox__title">
                  إجمالى خسائر الشهر
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
            <h3 class="kt-portlet__head-title"> الارباح و الخسائر </h3>
            <div class="btns-box">
              <button type="button" class="btn btn-outline-success mx-1 mb-1" data-toggle="modal" data-target="#search-filter"> <i class="la la-search"></i>  تحديد فترة زمنية  </button>
            </div>
          </div>
        </div>
        <!--START::TITLE-->

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
                <th> الشهر </th>
                <th> الارباح </th>
                <th> الخسائر </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>  يناير </td>
                <td> 20000</td>
                <td> 1000 </td>
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