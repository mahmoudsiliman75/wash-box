<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="absence-request row">
      <div class="col-12">
        <!--START::PORTEL-->
        <div class="kt-portlet">
          <div class="kt-portlet__head">
            <div class="kt-portlet__head-label title-container d-flex justify-content-between w-100">
              <h3 class="kt-portlet__head-title"> إضاف طلب اجازة </h3>
            </div>
          </div>
        <div>
        <!--START::PORTEL-->

        <!-- START:: PERMISSION FORM -->
        <form class="kt-form p-3">
          <div class="row">

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12">اسم الموظف </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i> </span>
                  <input type="text" class="form-control" placeholder="اسم الموظف ">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12"> من يوم </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-calendar" style="font-size: 18px"></i> </span>
                  <input type="text" class="form-control" readonly="" value="05/20/2017" id="kt_datepicker_3">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12"> الى يوم </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-calendar" style="font-size: 18px"></i> </span>
                  <input type="text" class="form-control" readonly="" value="05/20/2017" id="kt_datepicker_3">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12">  عدد الأيام </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-calendar" style="font-size: 18px"></i> </span>
                  <input class="form-control" type="number" value="3" id="days-num">                
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12">  الخصم </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-calendar" style="font-size: 18px"></i> </span>
                  <input class="form-control" type="number" value="100" id="deducation">                
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-12">
              <div class="row">
                <label class="col-form-label col-12"> البيان </label>
                <div class="input-group-prepend col-12">
                  <textarea class="default">
                  </textarea>
                </div>
              </div>
            </div>

            <div class="form-group col-12 px-4">
              <div class="input-group">
                <div class="row">
                  <button type="submit" class="btn btn-success" style="background-color:#17b978; border:none;">إضافة</button> 
                </div>
              </div>
            </div>

          </div>
        </form>
        <!-- END:: PERMISSION FORM -->

      </div>  
    </div>

    <div class="absence-record row">
      <div class="col-12">
        <!--START::PORTEL-->
        <div class="kt-portlet">
          <div class="kt-portlet__head">
            <div class="kt-portlet__head-label title-container d-flex justify-content-between w-100">
              <h3 class="kt-portlet__head-title"> سجل الاجازات </h3>
            </div>
          </div>
        <div>
        <!--START::PORTEL-->

        <!--START: ATTENDENCE RECORDS DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="table table-responsive-sm" id="hrAccounting">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th> الاسم </th>
                <th class="w-25"> الاجازة </th>
                <th> الخصم </th>
                <th class="w-25"> البيان </th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td>1</td>
                <td> محمد عيد </td>
                <td> 
                  <p> 3 أيام </p>
                  <p>  من : 2020 - 12 - 15  </p>
                  <p>  الى : 2020 - 12 - 18 </p>
                </td>
                <td>  100 </td>
                <td> سبب الاجازة </td>
              </tr>

              <tr>
                <td>2</td>
                <td> محمود سليمان </td>
                <td> 
                  <p> 3 أيام </p>
                  <p>  من : 2020 - 12 - 15  </p>
                  <p>  الى : 2020 - 12 - 18 </p>
                </td>
                <td>  100 </td>
                <td> سبب الاجازة </td>
              </tr>

            </tbody>
          </table>

        </div>
        <!--END: ATTENDENCE RECORDS DATATABLE-->

      </div>  
    </div>

	</div>
	<!-- END:: CONTENT -->
</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->