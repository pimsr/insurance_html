(function($){
  $base_url = $('body').attr('data-base-url');
  $timeout = null;
  setEditor();
  setTableData();
  setForm();
  setSelect2();
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
    var parents = $(this).parents('.in_editor');
    parents.find('.in').removeClass('active');
    $(this).addClass('active');
    tinymce.remove();
    parents.find('.editor').hide();
    parents.find('.editor').eq(index).show();
    setEditor();
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
  }).on('click', '.delete_package', function(){
    var parent = $(this).parents('.portlet');
    var parents = $(this).parents('.box_package');
    parent.find('.input-status').val(-1);
    parent.hide();
    if(parents.find('.portlet:visible').length == 0){
      parents.find('.package-empty').removeClass('hide');
    }
  });

  // form
  $('body').on('submit', '.form-submit', function(e){
    e.preventDefault();
    var url = $(this).attr('action');
    var table = $(this).attr('data-table');
    var re_form = $(this).parents('.box-form');
    var re_link = re_form.attr('data-load');
    var formData = new FormData(this);
    $.ajax({
        type: "POST",
        url: url,
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          var res = JSON.parse(response);
          // console.log(res);
          if(res.status == 1){
            $.Notification.notify('success','top right', 'Successful', res.msg);
            re_form.load( re_link );
            reloadTable(table);
            clearTimeout($timeout);
            $timeout = setTimeout(function(){
              tinymce.remove();
              setEditor();
              setTags();
              setSelect2();
            }, 500);
          }else{
            $.Notification.notify('error','top right', 'Error', res.msg);
          }
        },
        error: function(errResponse) {
          $.Notification.notify('error','top right', 'Error', errResponse);
        }
    });
  }).on('submit', '.form-submit-table', function(e){
    e.preventDefault();
    var url = $(this).attr('action');
    var table = $(this).attr('data-table');
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
            $.Notification.notify('success','top right', 'Successful' ,res.msg);
            reloadTable(table);
          }else{
            $.Notification.notify('error','top right', 'Error', res.msg);
          }
        },
        error: function(errResponse) {
          $.Notification.notify('error','top right', 'Error', errResponse);
        }
    });
  }).on('click', '.on-edit', function(e){
    e.preventDefault();
    var link = $(this).attr('href');
    var boxForm = $(this).attr('data-form');
    
    reloadForm(boxForm, link);
  }).on('click', '.on-delete', function(e){
    e.preventDefault();
    if(confirm("คุณต้องการลบหรือไม่ ?")){
      var url = $(this).attr('href');
      var tr = $(this).parents('tr');
      var table = $(this).parents('.box-table');
      var link = table.attr('data-load');
      $.ajax({
        type: "POST",
        url: url,
        data: "",
        processData: false,
        contentType: false,
        success: function(response) {
          var res = JSON.parse(response);
          if(res > 0) {
            table.load( link );
          }
        }
      });
    }
  }).on('click', '.on-cancel', function(){
    var form = $(this).parents('.box-form');
    var link = form.attr('data-load');
    form.load( link );
    clearTimeout($timeout);
    $timeout = setTimeout(function(){
      tinymce.remove();
      setEditor();
      setTags();
      setSelect2();
    }, 500);
  }).on('submit', '.form-submit-update', function(e){
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
          // console.log(res);
          if(res.status == 1){
            $.Notification.notify('success','top right', 'Successful', res.msg);
          }else{
            $.Notification.notify('error','top right', 'Error', res.msg);
          }
        }
    });
  });
  
  function reloadTable(table){
    var link = $('.'+table).attr('data-load');
    $('.'+table).load( link );
  }

  function setTableData(){
    if($('.box-table').length > 0){
			$('.box-table').each(function(){
        var html = $(this).attr('data-load');
				if(html !== undefined || html !== null || html !== ''){
					$(this).load( html );
				}
			});
		}
  }

  function reloadForm(form, link){
    console.log('reloadForm');
    $('.'+form).load( link );
    clearTimeout($timeout);
    $timeout = setTimeout(function(){
      tinymce.remove();
      setEditor();
      setTags();
      setSelect2();
    }, 500);
    $('html,body').animate({
      scrollTop: $('.'+form).offset().top - 180
    }, 'fast');
  }

  function setForm(){
    if($('.box-form').length > 0){
			$('.box-form').each(function(){
        var html = $(this).attr('data-load');
				if(html !== undefined || html !== null || html !== ''){
          $(this).load( html , function(){
            tinymce.remove();
            setEditor();
            setTags();
            setSelect2();
          });
				}
			});
		}
  }

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
        content_css: $base_url+"assets/backend/css/css_frontend.css",
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
        content_css: $base_url+"assets/backend/css/css_frontend.css",
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
        content_css: $base_url+"assets/backend/css/css_frontend.css",
        statusbar: false,
      });
    }
  }

  function  setTags() {
    console.log('setTags');
    if($('input[data-role="tagsinput"]').length > 0){
      $('input[data-role="tagsinput"]').tagsinput();
    }
  }

  function setSelect2() {
    if($('.select2').length > 0) {
      $(".select2").select2({
        placeholder: "กรุณาเลือกจังหวัด",
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
  var num = 0;
  $('.box_package .portlet').each(function(){
    var id = parseInt($(this).attr('data-id'));
    if( num < id ){
      num = id;
    }
  });

  $('.box_package').append(`<div class="portlet" data-id="${num+1}">
                              <div class="portlet-heading portlet-default">
                                  <div class="portlet-title text-dark in_packname" data-toggle="collapse" data-parent="#accordion${num+1}" class="collapsed" aria-expanded="false">
                                      <input type="text" class="seq form-control" maxlength="2" value="0" name="seq[]">
                                      <div class="row_half">
                                          <div class="col_half">
                                              <input name="title_th[]" value="" type="text" class="form-control" placeholder="แพ็คเกจภาษาไทย">
                                          </div>
                                          <div class="col_half">
                                              <input name="title_en[]" value="" type="text" class="form-control" placeholder="แพ็คเกจภาษาอังกฤษ">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="portlet-widgets">
                                      <a data-toggle="collapse" data-parent="#accordion${num+1}" href="#pack${num+1}" class="collapsed" aria-expanded="false"><i class="ion-minus-round"></i></a>
                                  </div>
                                  <div class="clearfix"></div>
                              </div>
                              <div id="pack${num+1}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                  <div class="portlet-body">
                                      <div class="in_editor">
                                          <div class="lang">
                                              <div class="in active">ไทย</div>
                                              <div class="in">Eng</div>
                                          </div>
                                          <textarea name="desc_th[]" class="editor th"></textarea>
                                          <textarea name="desc_en[]" class="editor en" style="display:none;"></textarea>
                                      </div>
                                      <div class="text-right mt-5">
                                          <input type="hidden" name="id[]" value="0">
                                          <input type="hidden" class="input-status" name="status[]" value="1">
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
    content_css: $base_url+"assets/backend/css/css_frontend.css",
    statusbar: false
  });

  $('.package-empty').addClass('hide');
}

