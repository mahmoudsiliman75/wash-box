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
            <h3 class="kt-portlet__head-title">  الإستضافات </h3>
            <a href="addhosting.php" type="button" class="btn btn-outline-success"> <i class="la la-plus"></i> إضافة إستضافة </a>
          </div>
        </div>
        <!--END:: TITLE -->

        <!--START: HOSTING DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="standard table table-responsive-sm" width="100%">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th> المشروع  </th>
                <th> العميل  </th>
                <th> الباقة  </th>
                <th> تاريخ الإنتهاء  </th>
                <th>  ملاحظات  </th>
                <th class="action">إجراء</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td> CRM </td>
                <td> TechnoMasr </td>
                <td>  باقة بلاتينوم </td>
                <td>  
                  <p class="mb-1"> 31 - 1 - 2021 </p> 
                  <span class="kt-badge kt-badge--dark kt-badge--inline kt-badge--pill kt-badge--rounded w-50" style="height: 25px">
                    باقي سنه
                  </span> 
                </td>
                <td>  بلا بلا بلا بلا بلا </td>

                <td align="right">

                  <a href="#" class="kt-badge kt-badge--outline kt-badge--primary" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="" data-original-title="تعديل">
                    <i class="la la-edit"></i>
                  </a>

                  <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="" data-original-title="حذف">
                    <i class="la la-trash"></i>
                  </a>

                </td>
              </tr>

              <tr class="table-danger">
                <td>2</td>
                <td> Website </td>
                <td> TechnoMasr </td>
                <td>  باقة بلاتينوم </td>
                <td>
                  <p class="mb-1"> 20 - 1 - 2020 </p> 
                  <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded w-50" style="height: 25px">
                    باقى 3 ايام
                  </span>
                </td>
                <td>  بلا بلا بلا بلا بلا </td>

                <td align="right">

                  <a href="#" class="kt-badge kt-badge--outline kt-badge--primary" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="" data-original-title="تعديل">
                    <i class="la la-edit"></i>
                  </a>

                  <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="" data-original-title="حذف">
                    <i class="la la-trash"></i>
                  </a>

                </td>
              </tr>

              <tr class="table-warning">
                <td>3</td>
                <td> U Care </td>
                <td> TechnoMasr </td>
                <td>  باقة بلاتينوم </td>
                <td>
                  <p class="mb-1"> 1 - 2 - 2020 </p>
                  <span class="kt-badge kt-badge--warning kt-badge--inline kt-badge--pill kt-badge--rounded w-50" style="height: 25px">
                    باقي شهر
                  </span>
                </td>
                <td>  بلا بلا بلا بلا بلا </td>

                <td align="right">

                  <a href="#" class="kt-badge kt-badge--outline kt-badge--primary" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="" data-original-title="تعديل">
                    <i class="la la-edit"></i>
                  </a>

                  <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="" data-original-title="حذف">
                    <i class="la la-trash"></i>
                  </a>

                </td>
              </tr>

            </tbody>
          </table>

        </div>
        <!--END: HOSTING DATATABLE-->

      </div>  
    </div>

	</div>
  <!-- END:: CONTENT -->

</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->