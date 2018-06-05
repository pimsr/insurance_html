(function($){
  $base_url = $('body').attr('data-base-url');
  setEditor();
  // setTable();
  $('body').on('change', '.preview input', function(input){
    var parents = $(this).parent();
    if (input.target.files && input.target.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        parents.css('background-image', 'url('+e.target.result +')');
      }
      reader.readAsDataURL(input.target.files[0]);
    }
  }).on('click', '.panel-heading', function(){
    if(!$(this).hasClass('no-slide')){
      $(this).parents('.panel').find('.panel-body').slideToggle(300);
      if($(this).hasClass('closed')){
        $(this).removeClass('closed');
      }else{
        $(this).addClass('closed');
      }
    }
  }).on('click', '.in_editor .in', function(){
    var index = $(this).index();
    $('.in_editor .in').removeClass('active');
    $(this).addClass('active');
    $(this).parents('.in_editor').find('.mce-tinymce').hide();
    $(this).parents('.in_editor').find('.mce-tinymce').eq(index).show();
  }).on('click', '.delete_package', function(){
    $(this).parents('.portlet').remove();
  }).on('keydown', '.seq', function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
         // Allow: Ctrl/cmd+A
        (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
         // Allow: Ctrl/cmd+C
        (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
         // Allow: Ctrl/cmd+X
        (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
         // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
             // let it happen, don't do anything
             return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
  });

  // form
  $('body').on('submit', '.form-submit', function(e){
    e.preventDefault();
    var url = $(this).attr('action');
    var formData = new FormData(this);
    $.ajax({
        type: "POST",
        url: url,
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          var res = JSON.parse(response);
          if(res.status == 1){
            $.Notification.notify('success','top right', res.msg);
            setTimeout(function(){
              window.location.reload();
            }, 1000);
          }else{
            $.Notification.notify('error','top right', res.msg);
          }
        },
        error: function(errResponse) {
            console.log('ERR: '+errResponse);
        }
    });
  }).on('click', '.on-edit', function(){
    var tr = $(this).parents('tr');
    var form = $(this).attr('data-form');
    
    tr.find('.for-edit').each(function(){
      var name = $(this).attr('name');
      var value = $(this).attr('value');
      var input = $('.'+form).find('.form-control[name="'+name+'"]');
      if(input.attr('type') == 'file'){
        input.parents('.preview').css('background-image', 'url("'+value+'")');
      }else{
        input.val(value);
      }
    });

    $('html,body').animate({ scrollTop: $("."+form).offset().top-200}, 'fast');
  })

  function setTable(){
    if($('#datatable').length > 0){
      $('#datatable').dataTable({
        lengthChange: false,
        responsive: true,
        searching: false,
        paging: false,
        bInfo: false
      });
    } 
  }

  function setEditor() {
    if($('.editor').length > 0){
      tinymce.init({
        selector: ".editor",
        theme: "modern",
        plugins: [
            "autoresize",
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor"
        ],
        toolbar: "undo redo | styleselect | textcolor | table | bold italic underline | link",
        menubar:false,
        content_css: "../css/css_frontend.css",
        statusbar: false
      });
    }
    if($('.text-only2').length > 0){
      tinymce.init({
        selector: ".text-only2",
        theme: "modern",
        plugins: [
            "autoresize",
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor"
        ],
        toolbar: "undo redo | styleselect | textcolor | bold italic underline | link",
        menubar:false,
        content_css: "../css/css_frontend.css",
        statusbar: false,
        style_formats: [
          {title: 'H1', block: 'h1'},
          {title: 'H2', block: 'h2'},
          {title: 'H3', block: 'h3'},
          {title: 'H4', block: 'h4'},
          {title: 'H5', block: 'h5'},
          {title: 'p', inline: 'p'}
      ],
      });
    }
    if($('.editor_all').length > 0){
      tinymce.init({
        selector: ".editor_all",
        theme: "modern",
        plugins: [
          "autoresize",
          "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
          "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
          "save table contextmenu directionality emoticons template paste textcolor"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
        style_formats: [
          {title: 'Bold text', inline: 'b'},
          {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
          {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
          {title: 'Example 1', inline: 'span', classes: 'example1'},
          {title: 'Example 2', inline: 'span', classes: 'example2'},
          {title: 'Table styles'},
          {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],
        menubar:false,
        content_css: "../css/css_frontend.css",
        statusbar: false,
      });
    }
  }
})(jQuery);

function addCategory() {
  $('tbody').append(`<tr>
                      <td>
                          <input type="text" class="seq form-control" name="seq[]">
                          <input type="hidden" name="id[]" value="0">
                      </td>
                      <td><input type="text" placeholder="Enter Name" class="form-control"  name="title[]"></td>
                      <td class="actions text-center"></td>
                    </tr>`);
}

function addPackage() {
  var num = $('.box_package .portlet').length;
  $('.box_package').append(`<div class="portlet">
                              <div class="portlet-heading portlet-default">
                                  <div class="portlet-title text-dark in_packname" data-toggle="collapse" data-parent="#accordion${num}" class="collapsed" aria-expanded="false">
                                      <input type="text" class="seq form-control" maxlength="2" value="0">
                                      <div class="row_half">
                                          <div class="col_half">
                                              <input type="text" class="form-control" placeholder="แพ็คเกจภาษาไทย">
                                          </div>
                                          <div class="col_half">
                                              <input type="text" class="form-control" placeholder="แพ็คเกจภาษาอังกฤษ">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="portlet-widgets">
                                      <a data-toggle="collapse" data-parent="#accordion${num}" href="#pack${num}" class="collapsed" aria-expanded="false"><i class="ion-minus-round"></i></a>
                                  </div>
                                  <div class="clearfix"></div>
                              </div>
                              <div id="pack${num}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                  <div class="portlet-body">
                                      <div class="in_editor">
                                          <div class="lang">
                                              <div class="in active">ไทย</div>
                                              <div class="in">Eng</div>
                                          </div>
                                          <textarea class="editor th"></textarea>
                                          <textarea class="editor en" style="display:none;"></textarea>
                                      </div>
                                      <div class="text-right mt-5">
                                          <button type="button" class="delete_package btn btn-pinterest waves-effect waves-light">
                                              <i class="fa fa-trash"></i> ลบแพ็คเกจนี้
                                          </button>
                                      </div>
                                  </div>
                              </div>
                            </div>`);
  tinymce.init({
    selector: ".editor",
    theme: "modern",
    plugins: [
        "autoresize",
        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "save table contextmenu directionality emoticons template paste textcolor"
    ],
    toolbar: "undo redo | styleselect | textcolor | table | bold italic underline | link",
    menubar:false,
    content_css: "../css/css_frontend.css",
    statusbar: false
  });
}

