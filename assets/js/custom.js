$(document).ready( function () {
  // START:: CHANGE PROFILE PAGE
  $(".image").on('change', function() {
    if (this.files && this.files[0]) {
      var reader = new FileReader();
  
      reader.onload = (e) => {
        $('.image-preview').attr('src', e.target.result);
      }
  
      reader.readAsDataURL(this.files[0]);
    };
  });
  // END:: CHANGE PROFILE PAGE

  // START:: CHANGE OFFER PIC
  $(".offer-image").on('change', function() {
    if (this.files && this.files[0]) {
      var reader = new FileReader();
  
      reader.onload = (e) => {
        $('.offer-image-preview').attr('src', e.target.result);
      }
  
      reader.readAsDataURL(this.files[0]);
    };
  });
  // END:: CHANGE OFFER PIC

  $('#remove-offer-pic').on('click', function() {
    $(this).parent().parent().empty();
  });

  // START:: SELECT2 OPTIONS
  $('#permissions_select2_3').select2({
  placeholder: "اختار الصلاحيات",
  });

  $('#services_select2_3').select2({
  placeholder: "اختار الخدمات",
  });

  $('#package_select2_3').select2({
  placeholder: "اختار الباقة",
  });

  $('#client-services').select2({
  placeholder: "اختار الخدمات",
  });

  $('#years').select2({
    placeholder: "سنوات",
    });

  $('#monthes').select2({
    placeholder: "شهور",
  });
  // START:: SELECT2 OPTIONS

  // START:: DATATABLES OPTIONS
  $('.standard').DataTable({
    "oLanguage": {
      "sSearch": "",
    },
    language: {
      searchPlaceholder: "إبحث هنا",
      'paginate': {
        'previous': 'السابق',
        'next': 'التالى'
      },
      "lengthMenu": "عرض _MENU_ فى الصفحة",
      "info": "عرض  _PAGE_ من _PAGES_ صفحات",
    },
  });
  // END:: DATATABLES OPTIONS

  //  START:: SWEET ALERT
  $('.done').click(function(e) {
    swal.fire({
      title: 'تم التاكيد ',
      type: 'success',
      showCancelButton: false,
      confirmButtonText: 'تم'
    })
  });

  $('.confirm').click(function(e) {
      swal.fire({
        title: 'تأكيد التعاقد',
        type: 'question',
        showCancelButton: true,
        cancelButtonText: 'إلغاء',
        confirmButtonText: 'تأكيد'
      }).then(function(result) {
        if (result.value) {
          swal.fire(
            'تم التأكيد',
            '',
            'success'
          )
        }
      });
  });

  $('.delete').click(function(e) {
    swal.fire({
      title: "تأكيد الحذف  ",
      text: "",
      type: "error",
      buttonsStyling: false,
      confirmButtonText: "حذف",
      confirmButtonClass: "btn btn-danger",
      showCancelButton: true,
      cancelButtonText: "إلغاء",
      cancelButtonClass: "btn btn-default"
    }).then(function(result) {
    if (result.value) {
      swal.fire(
        'تم الحذف',
        '',
        'success'
      )
      }
    });
  });

  $('.archive').click(function(e) {
    swal.fire({
      title: "تأكيد الأرشفة  ",
      text: "",
      type: "warning",
      buttonsStyling: false,
      confirmButtonText: "أرشفة",
      confirmButtonClass: "btn btn-danger",
      showCancelButton: true,
      cancelButtonText: "إلغاء",
      cancelButtonClass: "btn btn-default"
    }).then(function(result) {
    if (result.value) {
      swal.fire(
        'تمت الأرشفة',
        '',
        'success'
      )
      }
    });
  });

  $('.restore').click(function(e) {
    swal.fire({
      title: "تأكيد الإستعادة  ",
      text: "",
      type: "question",
      buttonsStyling: false,
      confirmButtonText: "إستعادة",
      confirmButtonClass: "btn btn-success",
      showCancelButton: true,
      cancelButtonText: "إلغاء",
      cancelButtonClass: "btn btn-default"
    }).then(function(result) {
    if (result.value) {
      swal.fire(
        'تمت الإستعادة',
        '',
        'success'
      )
      }
    });
  });

  $('.collect-mone').click(function(e) {
    swal.fire({
      title: "تم التحصيل ",
      text: "",
      type: "success",
      buttonsStyling: false,
      confirmButtonText: "تم",
      confirmButtonClass: "btn btn-success",
      showCancelButton: false,
    })
  });

    $('.cancel-collect-mone').click(function(e) {
    swal.fire({
      title: "تم إلغاء العملية ",
      text: "",
      type: "error",
      buttonsStyling: false,
      confirmButtonText: "تم",
      confirmButtonClass: "btn btn-danger",
      showCancelButton: false,
    })
  });
  // END:: SWEET ALERT

  // START:: TEXT EDITOR
  ClassicEditor
  .create( document.querySelector( '.default' ) )
  .then( editor => {
    console.log( editor );
  } )
  .catch( error => {
    console.error( error );
  } );
  // END:: TEXT EDITOR

  // START:: CALC THE REMAINING OF NEW DEAL
  let calcTheRemaining = () => {
    let totalCost = parseInt( $('#total-cost').val() );
    let downPayment = parseInt( $('#down-payment').val() );
    $('#the-remaining').val( totalCost - downPayment );
  };

  $('#total-cost').on('input', calcTheRemaining);
  $('#down-payment').on('input', calcTheRemaining)
  // END:: CALC THE REMAINING OF NEW DEAL

  // START:: ADD SYSTEM USER INFO
  $('.system-user').css('display', 'none');
  $('#system-user-status-selector').on('change', function() {
    let optionValue = $('#system-user-status-selector').children('option:checked').val();
    if( optionValue == 0 ) {
      $('.system-user').css('display', 'none');
    } else if ( optionValue == 1 ) {
      $('.system-user').css('display', 'block');
    }
  });
  // END:: ADD SYSTEM USER INFO
});