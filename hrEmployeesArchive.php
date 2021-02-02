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
            <h3 class="kt-portlet__head-title"> قائمة ارشيف الموظفين </h3>
          </div>
        </div>
        <!--END:: TITLE-->

        <!--START: EMPLOYEES ARCHIVE DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

        <table class="standard table table-responsive-sm">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th> الاسم </th>
              <th>المسمي الوظيفي</th>
              <th>البريد الإلكتروني</th>
              <th>العنوان</th>
              <th>رقم الهاتف</th>
              <th>الراتب</th>
              <th>تاريخ بداية التوظيف</th>
              <th class="action">إجراء</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Land Rover</td>
              <td>Range Rover</td>
              <td>Orange</td>
              <td>Orange</td>
              <td>Orange</td>
              <td>Orange</td>
              <td>Orange</td>
              <td align="right">
                <a href="#" class="restore kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="إسترجاع">
                  <i class="la la-rotate-left"></i>
                </a>

                <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="" data-original-title="حذف">
                  <i class="la la-trash"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>GMC</td>
              <td>Jimmy</td>
              <td>Goldenrod</td>
              <td>Goldenrod</td>
              <td>Goldenrod</td>
              <td>Goldenrod</td>
              <td>Goldenrod</td>
              <td align="right">
                <a href="#" class="restore kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="إسترجاع">
                  <i class="la la-rotate-left"></i>
                </a>

                <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="" data-original-title="حذف">
                  <i class="la la-trash"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>

        </div>
        <!--END: EMPLOYEES ARCHIVE DATATABLE-->

      </div>  
    </div>

	</div>
  <!-- END:: CONTENT -->
</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->