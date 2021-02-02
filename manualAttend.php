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
            <h3 class="kt-portlet__head-title">  الحضور و الإنصراف </h3>
          </div>
        </div>
        <!--END:: TITLE-->

        <!--START: ATTENDANCE DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="standard table table-responsive-sm" width="100%">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th class="w-50"> الاسم  </th>
                <th class="action">حضور</th>
                <th class="action">إنصراف</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td> عمر إيهاب </td>

                <td align="right">

                  <button type="button" class="kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="modal" data-target="#attendance-modal" data-placement="top" title="تعديل" data-original-title="تعديل">
                    <i class="la la-check"></i>
                  </button>

                  <a href="#" class="kt-badge btn-secondary btn-elevate btn-circle btn-icon" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="" data-original-title="إنصراف">
                    <i class="la la-check"></i>
                  </a>

                  <a href="#" class="kt-badge btn-outline-success btn-elevate btn-icon" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="" data-original-title="لا يمكنك التعديل" style="cursor: not-allowed">
                    <i class="la la-check"></i>
                  </a>

                </td>

                <td align="right">

                  <button type="button" class="kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="modal" data-target="#leaving-modal" data-placement="top" title="تعديل" data-original-title="تعديل">
                    <i class="la la-check"></i>
                  </button>

                  <a href="#" class="kt-badge btn-secondary btn-elevate btn-circle btn-icon" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="" data-original-title="إنصراف">
                    <i class="la la-check"></i>
                  </a>

                  <a href="#" class="kt-badge btn-outline-danger btn-elevate btn-icon" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="" data-original-title="لا يمكنك التعديل" style="cursor: not-allowed">
                    <i class="la la-check"></i>
                  </a>

                </td>
              </tr>

            </tbody>
          </table>

          <!-- START:: ATTENDANCE MODAL -->
          <div class="modal fade" id="attendance-modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-center w-100" id="exampleModalLabel"> الحضور </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <div class="row">
                        <label class="col-form-label col-12"> ساعة الحضور </label>
                        <div class="input-group-prepend col-12">
                          <span class="input-group-text"> <i class="la la-clock-o" style="font-size: 18px"></i> </span>
                          <input class="form-control" id="kt_timepicker_2" readonly="" placeholder=" اختار وقت " type="text">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn  prime-bg ">حفظ</button>
                  <button type="button" class="btn   btn-danger" data-dismiss="modal">إلغاء</button>
                </div>

              </div>
            </div>
          </div>
          <!-- END:: ATTENDANCE MODAL -->

          <!-- START:: LEAVING MODAL -->
          <div class="modal fade" id="leaving-modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-center w-100" id="exampleModalLabel"> الإنصراف </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <div class="row">
                        <label class="col-form-label col-12"> ساعة الإنصراف </label>
                        <div class="input-group-prepend col-12">
                          <span class="input-group-text"> <i class="la la-clock-o" style="font-size: 18px"></i> </span>
                          <input class="form-control" id="kt_timepicker_2" readonly="" placeholder=" اختار وقت " type="text">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn  prime-bg ">حفظ</button>
                  <button type="button" class="btn   btn-danger" data-dismiss="modal">إلغاء</button>
                </div>

              </div>
            </div>
          </div>
          <!-- END:: LEAVING MODAL -->

        </div>
        <!--END: ATTENDANCE DATATABLE-->

      </div>  
    </div>

	</div>
  <!-- END:: CONTENT -->

</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->