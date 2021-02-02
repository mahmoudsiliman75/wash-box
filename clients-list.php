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
            <h3 class="kt-portlet__head-title"> قائمة العملاء </h3>

            <div class="btns-box">
              <button type="button" class="btn btn-outline-success mx-1 mb-1" data-toggle="modal" data-target="#search-filter"> <i class="la la-search"></i>  بحث عن عميل  </button>
              <a href="new-deal.php" type="button" class="btn btn-outline-success mx-1 mb-1"> <i class="la la-plus"></i>  اضافة عميل </a>
            </div>
          </div>
        </div>
        <!-- END:: TITLE -->

        <!-- START:: SEARCH FILTER MODAL -->
        <div class="modal fade" id="search-filter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> ابحث  عن عميل </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
              </div>
              <div class="modal-body">
                <form class="kt-form pb-0 p-3">

                  <div class="row">
                  
                  <div class="form-group col-12 col-md-6">
                    <div class="row">
                      <label class="col-form-label col-12">  نوع العميل  </label>
                      <div class="input-group-prepend col-12">
                        <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                        <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                          <option> اختار نوع العميل</option>
                          <option value="1"> نوع 1 </option>
                          <option value="2"> نوع 2</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group col-12 col-md-6">
                    <div class="row">
                      <label class="col-form-label col-12">  الموظف  </label>
                      <div class="input-group-prepend col-12">
                        <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                        <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                          <option> اختار اسم الموظف</option>
                          <option value="1"> محمود سليمان </option>
                          <option value="2"> محمد عيد</option>
                        </select>
                      </div>
                    </div>
                  </div>

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

        <!--START: LEADS DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="standard table table-responsive-sm">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th> اسم العميل </th>
                <th>رقم الهاتف</th>
                <th>البريد الإلكترونى</th>
                <th> تاريخ اخر توتصل </th>
                <th class="action text-center">إجراء</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td> 
                  <a href="client-profile.php" class="kt-link kt-link--state kt-link--success"> محمود سليمان </a> 
                </td>
                <td> 01000000010 </td>
                <td>mahmoudsiliman@localhost.com</td>
                <td> 2021 - 1 - 15 </td>
                <td align="right">
                  <div class="row">

                    <div class="col-6 p-0 text-right">
                      <a href="#" class="kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="التعاقدات">
                        <i class="la la-database"></i>
                      </a>
                    </div>

                    <div class="col-6 p-0">
                      <a href="#" class="col-6 kt-badge kt-badge--outline kt-badge--primary" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حسابات العميل">
                        <i class="la la-dollar"></i>
                      </a>
                    </div>

                    <div class="col-6 p-0 text-right">
                      <a href="follow-up-list.php" class="col-6 kt-badge kt-badge--outline kt-badge--primary" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تاريخ المتابعات">
                        <i class="la la-hdd-o"></i>
                      </a>
                    </div>

                    <div class="col-6 p-0">
                      <button class="delete col-6 kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
                        <i class="la la-trash"></i>
                      </button>
                    </div>

                  </div>
                </td>
              </tr>
            </tbody>
          </table>

        </div>
        <!--END: LEADS DATATABLE-->

      </div>  
    </div>

	</div>

	<!-- END:: CONTENT -->
</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->