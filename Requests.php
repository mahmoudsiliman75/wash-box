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
              <h3 class="kt-portlet__head-title"> قائمة الطلبات </h3>
            </div>
          </div>

        <!--START: CLIENTS DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="standard table table-responsive-sm" width="100%">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th> الاسم </th>
                <th> الوقت </th>
                <th> الحالة </th>
                <th class="action">إجراء</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td> 
                  <a href="ClientProfile.php" class="kt-link kt-link--state kt-link--info">  عميل 1 </a> 
                </td>
                <td> 00 : 3  </td>
                <td> 
                  <span class="custome-badge kt-badge kt-badge--success kt-badge--inline kt-badge--pill kt-badge--rounded p-2" style="width: auto; height: auto;">
                  تم التوصيل
                  </span>
                </td>
                <td align="right">
                  <a href="RequestDetails.php" class="kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" title="تفاصيل">
                    <i class="la la-expand"></i>
                  </a>

                  <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
                    <i class="la la-trash"></i>
                  </a>
                </td>
              </tr>

              <tr>
                <td>2</td>
                <td> 
                  <a href="ClientProfile.php" class="kt-link kt-link--state kt-link--info">  عميل 2 </a> 
                </td>
                <td> 00 : 6  </td>
                <td> 
                  <span class="custome-badge kt-badge kt-badge--warning kt-badge--inline kt-badge--pill kt-badge--rounded p-2" style="width: auto; height: auto;">
                  فى الانتظار
                  </span>
                </td>
                <td align="right">
                  <a href="RequestDetails.php" class="kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" title="تفاصيل">
                    <i class="la la-expand"></i>
                  </a>

                  <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
                    <i class="la la-trash"></i>
                  </a>
                </td>
              </tr>

              <tr>
                <td>3</td>
                <td> 
                  <a href="ClientProfile.php" class="kt-link kt-link--state kt-link--info">  عميل 3 </a> 
                </td>
                <td> 00 : 8  </td>
                <td> 
                  <span class="custome-badge kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded p-2" style="width: auto; height: auto;">
                  تم الالغاء
                  </span>
                </td>
                <td align="right">
                  <a href="RequestDetails.php" class="kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" title="تفاصيل">
                    <i class="la la-expand"></i>
                  </a>

                  <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
                    <i class="la la-trash"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>

        </div>
        <!--END: CLIENTS DATATABLE-->

      </div>  
    </div>

	</div>
  <!-- END:: CONTENT -->

</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->