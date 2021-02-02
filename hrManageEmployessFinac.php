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
            <h3 class="kt-portlet__head-title">  إعدادات الموظفين </h3>

            <div class="btns-box">
              <button type="button" class="btn btn-outline-success mx-1 mb-1" data-toggle="modal" data-target="#search-filter"> <i class="la la-search"></i>  تحديد فترة زمنية  </button>
              <a href="hrMonthesFinancDetails.php" type="button" class="btn btn-outline-success mx-1 mb-1"> <i class="la la-database"></i> جدول المكافئات والخصومات </a>
            </div>
          </div>
        </div>
        <!--END:: TITLE-->

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

        <div class="row">
          <div class="col-12">

              <!--START:: ADD NEW USER FORM-->
              <form class="kt-form p-3">
                <div class="row">

                  <div class="form-group col-12 col-md-3">
                    <div class="row">
                      <label class="col-form-label col-12">  اسم الموظف  </label>
                      <div class="input-group-prepend col-12">
                        <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
												<select class="form-control kt-select2" id="kt_select2_1">
													<option> اختار اسم الموظف</option>
													<option value="1">محمد عيد</option>
													<option value="2">محمود سليمان</option>
												</select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group col-12 col-md-3">
                      <div class="row">
                        <label class="col-form-label col-12">  الشهر</label>
                        <div class="input-group-prepend col-12">
                          <span class="input-group-text"> <i class="la la-calendar" style="font-size: 18px"></i> </span>
                          <input type="text" class="form-control" readonly value="05/20/2017" id="kt_datepicker_3" />
                        </div>
                      </div>
                  </div>

                  <div class="form-group col-12 col-md-3">
                    <div class="row">
                      <label class="col-form-label col-12">الإجراء </label>
                      <div class="input-group-prepend col-12">
                        <span class="input-group-text"> <i class="la la-clipboard" style="font-size: 18px"></i> </span>
                        <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                          <option> اختار الإجراء </option>
                          <option value="1">اضافة سلفة</option>
                          <option value="2"> اضافة حافز</option>
                          <option value="3">اضافة خصم</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group col-12 col-md-3">
                    <div class="row">
                      <label class="col-form-label col-12"> القيمة</label>
                      <div class="input-group-prepend col-12">
                        <span class="input-group-text"> <i class="la la-dollar"  style="font-size: 18px"></i> </span>
                        <input type="text" class="form-control" placeholder=" القيمة">
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

          </div>
        </div>

        <!--START: EMPLOYEES DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="standard table table-responsive-sm" width="100%">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th> اسم الموظف </th>
                <th> الشهر</th>
                <th>سلفه</th>
                <th>حوافز</th>
                <th>خصم</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td> محمد عيد </td>
                <td>ديسمبر </td>
                <td>100</td>
                <td>300</td>
                <td>0</td>
              </tr>
              <tr>
                <td>2</td>
                <td>عمر إيهاب</td>
                <td>ديسمبر</td>
                <td>50</td>
                <td>200</td>
                <td>0</td>
              </tr>
            </tbody>
          </table>

        </div>
        <!--END: EMPLOYEES DATATABLE-->

      </div>  
    </div>

	</div>
  <!-- END:: CONTENT -->

</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->