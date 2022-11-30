
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.1.0/tinymce.min.js" referrerpolicy="origin"></script> --}}
<script src="{{asset('backend/assets/plugins/custom/tinymce/tinymce.bundle.js')}}"></script>

<script>
    var editor_config = {
        path_absolute : "/",
        selector:"textarea.tinymce-editor",
        plugins: [
            "advlist autolink lists link charmap print preview hr anchor pagebreak image",
            "searchreplace visualblocks code fullscreen",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime nonbreaking save table contextmenu directionality",
            "paste textcolor colorpicker textpattern",
            "insertdatetime media table paste code help wordcount",
            // 'image',
            // 'emoticons template',
            'media',
            'lists',
            // 'insertdatetime',
            'code',
            // 'codesample',
            'link',
            'searchreplace',
            'wordcount',
        ],
        toolbar: "insertfile undo redo |codesample | ltr rtl | formatselect | styleselect | numlist bullist | bold italic |backcolor |removeformat |alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media |code |searchreplace|visualchars |wordcount",
        relative_urls: false,
        content_css: '//www.tiny.cloud/css/codepen.min.css'

    };

    tinymce.init(editor_config);
</script>
<style>

.tox.tox-tinymce{
    height: 200px !important;
}
    .tox-statusbar__branding{
        display: none;
    }

    /* .tox-notifications-container {display: none !important;} */

</style>
