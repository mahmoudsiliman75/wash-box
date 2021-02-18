<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

<!-- START:: CONTENT -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
  <div class="row">
    <div class="col-12">

      <div class="kt-portlet__head mb-4">
        <div class="kt-portlet__head-label d-flex justify-content-between w-100">
          <h4 class="kt-portlet__head-title">  تفاصيل العميل <q class="kt-font-warning"> محمد عيد </q> </h4>
        </div>
      </div>

      <!-- START:: ADRESSES SECTION -->
      <div class="kt-portlet">

        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label justify-content-center w-100">
            <h3 class="kt-portlet__head-title kt-font-bolder">  العناوين </h3>
          </div>
        </div>

        <!--START: ADRESSES TABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="standard table table-responsive-sm" width="100%">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th> العنوان </th>
                <th class="action">إجراء</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td> العنوان الاول للعميل </td>
                <td align="right">
                  <button type="button" class="kt-badge kt-badge--outline kt-badge--primary" data-skin="dark" data-toggle="modal" data-target="#edit-cat"  title="تعديل">
                    <i class="la la-edit"></i>
                  </button>

                  <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
                    <i class="la la-trash"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>

          <!--begin:: Edit Modal-->
          <div class="modal fade" id="edit-cat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> تعديل </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button>
                </div>
                <div class="modal-body">
                  <!--START:: ADD PRICE LIST FORM-->
                  <form class="kt-form pb-0 p-3">
                    <div class="row">

                      <div class="form-group col-12">
                        <div class="row">
                          <label class="col-form-label text-center col-12">  العنوان </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-map-marker" style="font-size: 18px"></i> </span>
                            <input type="text" class="form-control" placeholder=" العنوان ">
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-12 px-4">
                        <div class="input-group">
                          <div class="row">
                            <button type="submit" class="btn btn-success" style="background-color:#17b978; border:none;">حفظ</button> 
                          </div>
                        </div>
                      </div>

                    </div>
                  </form>
                  <!--END::ADD PRICE LIST FORM-->
                </div>
              </div>
            </div>
          </div>
          <!--end:: Edit Modal-->

        </div>
        <!--END: ADRESSES TABLE-->
      </div>  
      <!-- END:: ADRESSES SECTION -->

      <!-- START:: SUBSCRIPTIONS SECTION -->
      <div class="kt-portlet">

        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label justify-content-center w-100">
            <h3 class="kt-portlet__head-title kt-font-bolder">  الاشتراكات </h3>
          </div>
        </div>

        <!--START: ADRESSES TABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="standard table table-responsive-sm" width="100%">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th> اسم الباقة </th>
                <th> التاريخ </th>
                <th class="action">إجراء</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td> الباقة المميزة </td>
                <td> 2021 - 5 - 30 </td>
                <td align="right">
                  <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
                    <i class="la la-trash"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>

        </div>
        <!--END: ADRESSES TABLE-->
      </div> 
      <!-- END:: SUBSCRIPTIONS SECTION --> 

    </div>
  </div>
</div>
<!-- END:: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->