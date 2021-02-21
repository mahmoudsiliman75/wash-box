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
              <h3 class="kt-portlet__head-title">  تفاصيل الطلب </h3>
            </div>
          </div>

        <!--START: REQUEST DETAILS TABLE -->
        <div class="kt-portlet__body kt-portlet__body--fit mb-4 px-4">

          <table class="table mt-5">
            <thead class="thead-dark text-center">
              <tr>
                <th> تفاصيل الطلب </th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr class="border-bottom">
                <td>
                  <p> 
                    <span class="kt-font-warning kt-font-bolder mx-2"> اسم العميل : </span>
                    <a href="ClientProfile.php" class="kt-link kt-link--state kt-link--info"> محمد عيد </a>
                  </p>

                  <p> 
                    <span class="kt-font-warning kt-font-bolder mx-2"> اسم السائق : </span>
                    <a href="DriverProfile.php" class="kt-link kt-link--state kt-link--info"> محمود سليمان </a>
                  </p>

                  <p> 
                    <span class="kt-font-warning kt-font-bolder mx-2">  وقت التوصيل : </span>
                    00 : 3
                  </p>

                  <p> 
                    <span class="kt-font-warning kt-font-bolder mx-2">   رقم هاتف المستلم : </span>
                    01000000001
                  </p>

                  <span class="custome-badge kt-badge kt-badge--success kt-badge--inline kt-badge--pill kt-badge--rounded p-2" style="width: auto; height: auto;">
                    تم التوصيل
                  </span>
                </td>
              </tr>
            </tbody>
          </table>

        </div>
        <!--END: REQUEST DETAILS TABLE -->

        <div class="col-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6837.839986769664!2d31.36790517858886!3d31.02847864267623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1613946526157!5m2!1sar!2seg" style="border:0; width: 100%; height: 450px;" allowfullscreen="" loading="lazy"></iframe>
        </div>

      </div>  
    </div>

	</div>
  <!-- END:: CONTENT -->

</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->