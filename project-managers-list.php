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
            <h3 class="kt-portlet__head-title"> قائمة مديرين المشاريع </h3>
          </div>
        </div>
        <!--END:: TITLE -->

        <!--START: LEADS DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="standard table table-responsive-sm">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th> اسم المشروع </th>
                <th>مدير المشروع</th>
                <th>مسؤل الفريق</th>
                <th class="action text-center">إجراء</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td> U Care </td>
                <td> محمد عيد </td>
                <td>محمود سليمان</td>
                <td align="center">

                  <button class="kt-badge kt-badge--outline kt-badge--primary" data-skin="dark" data-toggle="modal" data-target="#edit-team-leader" title="تغيير مسؤل الفريق">
                    <i class="la la-edit"></i>
                  </button>

                  <!-- <button type="button" class="btn btn-bold btn-label-brand btn-sm" data-toggle="modal" data-target="#kt_modal_4">Launch Modal</button> -->

                  <button class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
                    <i class="la la-trash"></i>
                  </button>

                </td>
              </tr>
            </tbody>
          </table>

          <!-- START:: EDIT  TEAM LEADER -->
          <div class="modal fade" id="edit-team-leader" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> تغيير مسؤل الفريق </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group"> 
                      <label for="team-leader-name" class="form-control-label d-block text-center"> مسؤل الفريق </label>
                      <input type="text" class="form-control" id="team-leader-name">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="done btn btn-primary"> تغيير </button>
                </div>
              </div>
            </div>
          </div>
          <!-- END:: EDIT  TEAM LEADER -->

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