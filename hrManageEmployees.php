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
            <h3 class="kt-portlet__head-title"> قائمة الموظفين </h3>
          </div>
        </div>
        <!--END:: TITLE-->

        <!--START: NEW USER DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="standard table table-responsive-sm">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th class="text-center" style="width: 130px !important;"> الاسم </th>
                <th>المسمي الوظيفي</th>
                <th>البريد الإلكتروني</th>
                <th>العنوان</th>
                <th>رقم الهاتف</th>
                <th class="action" style="width: 85px !important;">إجراء</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">1</td>
                <td class="text-center"> 
                  <p class="mb-1"> محمد عيد </p>
                  <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill kt-badge--rounded" style="height: 25px; width: 80%">
                    مستخدم للنظام
                  </span>
                </td>
                <td> Back-End Dev </td>
                <td>mohamed@localhost.com</td>
                <td>عنوان محمد عيد</td>
                <td>0100000010</td>
                <td align="right">
                  <a href="#" class="kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تاريخ العمليات">
                    <i class="la la-calendar"></i>
                  </a>
                  <a href="#" class="kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="سجل الحضور و الانصراف">
                    <i class="la la-clock-o"></i>
                  </a>
                  <a href="#" class="kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="سجل تعاقدات المشاريع">
                    <i class="la la-file-text-o"></i>
                  </a>
                  <a href="#" class="kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title=" المهام ">
                    <i class="la la-slack"></i>
                  </a>
                  <a href="hrSalaryDetails.php" class="kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="مفردات المرتب">
                    <i class="la la-dollar font-weight-bold"></i>
                  </a>
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
                <td class="text-center">2</td>
                <td class="text-center"> 
                  <p class="mb-1"> محمود سليمان </p>
                  <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded" style="height: 25px; width: 80%">
                    غير مستخدم للنظام
                  </span>
                </td>
                <td> Front-End Dev </td>
                <td>siliman@localhost.com</td>
                <td>عنوان محمود سليمان</td>
                <td>0100000011</td>
                <td align="right">
                  <a href="#" class="kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تاريخ العمليات">
                    <i class="la la-calendar"></i>
                  </a>
                  <a href="#" class="kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="سجل الحضور و الانصراف">
                    <i class="la la-clock-o"></i>
                  </a>
                  <a href="#" class="kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="سجل تعاقدات المشاريع">
                    <i class="la la-file-text-o"></i>
                  </a>
                  <a href="#" class="kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title=" المهام ">
                    <i class="la la-slack"></i>
                  </a>
                  <a href="hrSalaryDetails.php" class="kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="مفردات المرتب">
                    <i class="la la-dollar font-weight-bold"></i>
                  </a>
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