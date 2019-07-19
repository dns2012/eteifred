// Header Scroll Add Class

$(window).on('scroll',function() {    
    let scroll = $(window).scrollTop();
    if (scroll < 10) {
        $(".header").removeClass("fixed-white");
    }else{
        $(".header").addClass("fixed-white");
    }
});

$(document).ready(function(){
    let navbarToggler = $('#sidebar-toggler');
    let collapseItem = $('.nav-item').find('.collapse');

    navbarToggler.click(function(){
        $('body').toggleClass('sidebar-icon-only');
        collapseItem.removeClass('show');
    });

    let sidebar = $('.sidebar');
    let navItem = sidebar.find('.nav-item');

    navItem.hover(function(){
        let hoverOpen = $(this).toggleClass('hover-open');
    });

    // navItem.hover(
    //     function() {
    //         let hoverOpen = $(this).toggleClass('hover-open');
    //         collapseItem.collapse('show');
    //     }, function() {
    //         collapseItem.collapse('hide');
    //     }
    // );
});

tinymce.init({
    selector: 'textarea.tinymce',
    height: 200,
    menubar: false,
    plugins: [
      'advlist autolink lists link image charmap print preview anchor textcolor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table paste code help wordcount'
    ],
    toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
    content_css: [
      '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
      '//www.tiny.cloud/css/codepen.min.css'
    ]
});
  

// Select2
$('.select2').select2();

// Dropify
$('.dropify').dropify({
    messages: {
        'default': 'Drag and drop a file here or click',
        'replace': 'Drag and drop or click to replace',
        'remove':  'Remove',
        'error':   'Ooops, something wrong happended.'
    },
    error: {
        'fileSize': 'The file size is too big ({{ value }} max).',
        'minWidth': 'The image width is too small ({{ value }}}px min).',
        'maxWidth': 'The image width is too big ({{ value }}}px max).',
        'minHeight': 'The image height is too small ({{ value }}}px min).',
        'maxHeight': 'The image height is too big ({{ value }}px max).',
        'imageFormat': 'The image format is not allowed ({{ value }} only).'
    }
});