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
              <h3 class="kt-portlet__head-title"> الرسائل </h3>
            </div>
          </div>

        <!--START: CLIENTS DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="standard table table-responsive-sm" width="100%">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th> اسم العميل </th>
                <th> الرسالة </th>
                <th class="action">إجراء</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td> 
                  <a href="ClientProfile.php" class="kt-link kt-link--state kt-link--warning"> محمد عيد </a> 
                </td>
                <td>  
                  <a href="javascript:;" type="button" class="kt-link kt-font-bold" data-toggle="modal" data-target="#message">
                  لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج ....
                  </a>
                </td>
                <td align="right">
                  <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
                    <i class="la la-trash"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>

          <!-- START:: ADD MESSAGE MODAL -->
          <div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">  الرسالة </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button>
                </div>

                <div class="modal-body">
                  <div class="message-content lead text-justify py-3">
                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس
                    أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END:: ADD MESSAGE MODAL -->

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