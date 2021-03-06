<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="row">
      <div class="col-12">

        <div class="kt-portlet">

          <div class="kt-portlet__head">
            <div class="kt-portlet__head-label d-flex justify-content-between w-100">
                <h3 class="kt-portlet__head-title"> قائمة المستخدمين </h3>
                <div class="btns-box">
                  <a href="addNewUser.php" type="button" class="btn btn-outline-success mx-1 mb-1"> <i class="la la-plus"></i> إضافة مستخدم جديد </a>
                  <a href="UsersArchive.php" type="button" class="btn btn-outline-success mx-1 mb-1"> <i class="la la-hdd-o"></i>  ارشيف المستخدمين  </a>
                </div>
            </div>
          </div>

        <!--START: NEW USER DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="standard table table-responsive-sm" width="100%">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th> الاسم </th>
                <th>البريد الالكترونى</th>
                <th>الوظيفة</th>
                <th class="action">إجراء</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Land Rover</td>
                <td>Range Rover</td>
                <td>Orange</td>

                <td align="right">
                  <a href="#" class="kt-badge kt-badge--outline kt-badge--primary" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تعديل">
                    <i class="la la-edit"></i>
                  </a>
                  <a href="#" class="archive kt-badge kt-badge--outline kt-badge--warning" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="اضافة الى الارشيف">
                    <i class="la la-hdd-o"></i>
                  </a>
                  <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
                    <i class="la la-trash"></i>
                  </a>
                </td>
              </tr>

              <tr>
                <td>2</td>
                <td>GMC</td>
                <td>Jimmy</td>
                <td>Goldenrod</td>
                <td align="right">
                  <a href="#" class="kt-badge kt-badge--outline kt-badge--primary" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تعديل">
                    <i class="la la-edit"></i>
                  </a>
                  <a href="#" class="archive kt-badge kt-badge--outline kt-badge--warning" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="اضافة الى الارشيف">
                    <i class="la la-hdd-o"></i>
                  </a>
                  <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
                    <i class="la la-trash"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>

        </div>
        <!--END: NEW USER DATATABLE-->

      </div>  
    </div>

	</div>
  <!-- END:: CONTENT -->

</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->