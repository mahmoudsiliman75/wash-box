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
              <h3 class="kt-portlet__head-title"> المحافظات و المناطق </h3>
              <div class="btns-box">
                <a href="javascript:;" type="button" class="btn btn-outline-success mx-1 mb-1" data-toggle="modal" data-target="#add_gov"> <i class="la la-plus"></i> إضافة محافظة </a>
                <a href="javascript:;" type="button" class="btn btn-outline-success mx-1 mb-1" data-toggle="modal" data-target="#add_area"> <i class="la la-plus"></i> إضافة منطقة </a>
              </div>
            </div>
          </div>

        <!--START: CLIENTS DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="standard table table-responsive-sm" width="100%">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th> المحافظة </th>
                <th> المنطقة </th>
                <th class="action">إجراء</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td> محافظة 1 </td>
                <td> منطقه 1  </td>
                <td align="right">
                  <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
                    <i class="la la-trash"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>

          <!-- START:: ADD GOV MODAL -->
          <div class="modal fade" id="add_gov" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> اضافة محافظة </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button>
                </div>

                <div class="modal-body">
                  <form>
                    <div class="row">
                      <div class="form-group col-12 col-md-6">
                        <div class="row">
                          <label class="col-form-label col-12"> اسم المحافظة بالعربية </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-map-marker" style="font-size: 18px"></i> </span>
                            <input type="text" class="form-control" placeholder=" اسم المحافظة بالعربية ">
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-12 col-md-6">
                        <div class="row">
                          <label class="col-form-label col-12"> اسم المحافظة بالانجليزية </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-map-marker" style="font-size: 18px"></i> </span>
                            <input type="text" class="form-control" placeholder=" اسم المحافظة بالانجليزية ">
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
                </div>

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> المحافظات المضافة </h5>
                </div>

                <div class="modal-body">
                  <table class="standard table table-responsive-sm" width="100%">
                    <thead class="thead-dark">
                      <tr>
                        <th>#</th>
                        <th> الاسم بالعربية </th>
                        <th> الاسم بالانجليزية </th>
                        <th class="action">إجراء</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td> محافظة 1 </td>
                        <td> Government 1  </td>
                        <td align="right">
                          <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
                            <i class="la la-trash"></i>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- END:: ADD GOV MODAL -->

          <!-- START:: ADD AREA MODAL -->
          <div class="modal fade" id="add_area" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> إضافة منطقة </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button>
                </div>

                <div class="modal-body">
                  <form>
                    <div class="row">
                      <div class="form-group col-12">
                        <div class="row">
                          <label class="col-form-label col-12">  المحافظة </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-map-marker" style="font-size: 18px"></i> </span>
                            <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                              <option> اختار المحافظة  </option>
                              <option value="1">  محافظة 1 </option>
                              <option value="2"> محافظة 2 </option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-12 col-md-6">
                        <div class="row">
                          <label class="col-form-label col-12"> اسم المنطقة بالعربية </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-map-marker" style="font-size: 18px"></i> </span>
                            <input type="text" class="form-control" placeholder=" اسم المنطقة بالعربية ">
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-12 col-md-6">
                        <div class="row">
                          <label class="col-form-label col-12"> اسم المنطقة بالانجليزية </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-map-marker" style="font-size: 18px"></i> </span>
                            <input type="text" class="form-control" placeholder=" اسم المنطقة بالانجليزية ">
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
                </div>

              </div>
            </div>
          </div>
          <!-- END:: ADD AREA MODAL -->

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