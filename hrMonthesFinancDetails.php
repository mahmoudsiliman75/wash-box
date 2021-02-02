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
            <h3 class="kt-portlet__head-title"> التفاصيل المالية للموظفين </h3>
          </div>
        </div>
        <!--END:: TITLE-->

        <!--START: EMPLOYEES MONTHES FINANCIALS DATATABLE-->
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
                <td>نوفمبر</td>
                <td>50</td>
                <td>200</td>
                <td>0</td>
              </tr>
              <tr>
                <td>3</td>
                <td>محمود سليمان</td>
                <td>اكتوبر</td>
                <td>50</td>
                <td>100</td>
                <td>0</td>
              </tr>
            </tbody>
          </table>

        </div>
        <!--END: EMPLOYEES MONTHES FINANCIALS DATATABLE-->

      </div>  
    </div>

	</div>
  <!-- END:: CONTENT -->

</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->