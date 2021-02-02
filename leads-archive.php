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
            <h3 class="kt-portlet__head-title"> قائمة ارشيف العملاء المحتملين </h3>
          </div>
        </div>
        <!-- END:: TITLE -->

        <!--START: LEADS DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="standard table table-responsive-sm">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th> اسم العميل </th>
                <th>رقم الهاتف</th>
                <th>البريد الإلكترونى</th>
                <th>الخدمات </th>
                <th>مسؤل المبيعات </th>
                <th> جاى منين </th>
                <th class="action text-center">إجراء</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td> محمود سليمان </td>
                <td> 01000000010 </td>
                <td>mahmoudsiliman@localhost.com</td>
                <td>
                  <ul>
                    <li> تصميم موقع ويب </li>
                    <li> استضافة </li>
                  <ul>
                </td>
                <td> محمد عيد </td>
                <td> Ads </td>
                <td align="right">
                  <div class="row">

                    <div class="col-6 p-0">
                      <a href="#" class="restore kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="إسترجاع">
                        <i class="la la-rotate-left"></i>
                      </a>
                    </div>

                    <div class="col-6 p-0">
                      <button class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
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