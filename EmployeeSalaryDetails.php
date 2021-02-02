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
        <div class="kt-portlet__head mb-5">
          <div class="kt-portlet__head-label title-container d-flex justify-content-between w-100">
            <h3 class="kt-portlet__head-title">  مفردات مرتب <span class="kt-font-success kt-font-bolder"> (محمود سليمان) </span>  </h3>
          </div>
        </div>
        <!--END:: TITLE-->

        <!--START: EMPLOYEE ACCOUNTING DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <div class="table-responsive m-0 p-3">

            <table class="table table-bordered">
              <thead class="thead-dark text-center">
                <tr>
                  <th> مستحقات </th>
                  <th> المبلغ </th>
                  <th> استقطاعات </th>
                  <th> المبلغ </th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td> راتب ثابت </td>
                  <td> 4000 </td>
                  <td> خصومات ادارية :  <a href="#" class="kt-link kt-link--state kt-link--success"> تفاصيل </a> </td>
                  <td> 0 </td>
                </tr>

                <tr>
                  <td> اجمالى مبيعات </td>
                  <td> 0 </td>
                  <td> سلفيات اعتيادية :  <a href="#" class="kt-link kt-link--state kt-link--success"> تفاصيل </a> </td>
                  <td> 0 </td>
                </tr>

                <tr>
                  <td> عمولة مبيعات </td>
                  <td> 0 </td>
                  <td> سلفيات مشتريات : <a href="#" class="kt-link kt-link--state kt-link--success"> تفاصيل </a> </td>
                  <td> 0 </td>
                </tr>

                <tr>
                  <td> حوافز : <a href="#" class="kt-link kt-link--state kt-link--success"> تفاصيل </a> </td>
                  <td> 0 </td>
                  <td> سلفيات مرحلة مجزأه :  <a href="#" class="kt-link kt-link--state kt-link--success"> تفاصيل </a> </td>
                  <td> لايوجد </td>
                </tr>

                <tr>
                  <td> بدلات : <a href="#" class="kt-link kt-link--state kt-link--success"> تفاصيل </a> </td>
                  <td> 0 </td>
                  <td>تأمينات اجتماعية</td>
                  <td> 0 </td>
                </tr>

                <tr>
                  <td> زيادة فى عدد الساعات : <a href="#" class="kt-link kt-link--state kt-link--success"> تفاصيل </a> </td>
                  <td>
                    <ul class="list-unstyled">
                      <li> <span class="kt-font-info"> عدد الايام : </span> 0 </li>
                      <li> <span class="kt-font-info">  الاضافي : </span> 0 </li>
                    </ul>
                  </td>
                  <td> الغيابات :  <a href="#" class="kt-link kt-link--state kt-link--success"> تفاصيل </a> </td>
                  <td>
                    <ul class="list-unstyled">
                      <li> <span class="kt-font-info"> عدد ايام الحضور : </span> 30 </li>
                      <li> <span class="kt-font-info"> عدد ايام الغياب : </span> 0 || <span class="kt-font-info">   الخصم : </span> 0 </li>
                      <li> <span class="kt-font-info"> عدد ايام الغياب للتاخير : </span> 0 || <span class="kt-font-info">   الخصم : </span> 0 </li>
                    </ul>
                  </td>
                </tr>

                <tr>
                  <td> زيادة تحصيلات </td>
                  <td> 0 </td>
                  <td>تأخير الحضور :  <a href="#" class="kt-link kt-link--state kt-link--success"> تفاصيل </a></td>
                  <td>                    
                    <ul class="list-unstyled">
                      <li> <span class="kt-font-info"> عدد الايام : </span> 0 </li>
                      <li> <span class="kt-font-info">  الخصم : </span> 0 </li>
                    </ul>
                  </td>
                </tr>

                <tr>
                  <td> مكافاّت شهرية : <a href="#" class="kt-link kt-link--state kt-link--success"> تفاصيل </a> </td>
                  <td> 0 </td>
                  <td class="text-white kt-shape-bg-color-3 text-center"> اجمالى مستحقات </td>
                  <td class="text-white kt-shape-bg-color-3 text-center"> 4000 </td>
                </tr>

                <tr>
                  <td> مكافاّت يومية : <a href="#" class="kt-link kt-link--state kt-link--success"> تفاصيل </a></td>
                  <td> 0 </td>
                  <td class="text-white kt-shape-bg-color-3 text-center"> اجمالى راتب مستلم </td>
                  <td class="text-white kt-shape-bg-color-3 text-center"> 0 </td>
                </tr>

                <tr>
                  <td></td>
                  <td></td>
                  <td class="text-white kt-shape-bg-color-3 text-center"> اجمالى مستقطعات </td>
                  <td class="text-white kt-shape-bg-color-3 text-center"> 0 </td>
                </tr>

                <tr>
                  <td></td>
                  <td></td>
                  <td class="text-white kt-shape-bg-color-3 text-center"> صافى الراتب </td>
                  <td class="text-white kt-shape-bg-color-3 text-center"> 4000 </td>
                </tr>
              </tbody>
            </table>

          </div>

        </div>
        <!--END: EMPLOYEE ACCOUNTING DATATABLE-->

      </div>  
    </div>

	</div>
	<!-- END:: CONTENT -->
</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->