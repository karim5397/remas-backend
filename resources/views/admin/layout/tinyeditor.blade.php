
<script src="{{asset('backend/assets/js/tinymce/tinymce.min.js')}}"></script>
<script>
    tinymce.init({
        selector: "textarea.tinymce-editor",
        toolbar: "insertfile undo redo |codesample |table | ltr rtl | formatselect | styleselect | numlist bullist | bold italic |backcolor |removeformat |alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media |code |searchreplace|visualchars |wordcount",
        plugins: [
                'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
                'media', 'table', 'emoticons', 'template', 'help'
                ],
        height:300,        
    });

</script>
<style>
    .tox-promotion{
        display: none !important;
    }

/* .tox.tox-tinymce{
    height: 300px !important;
} */
    .tox-statusbar__branding{
        display: none;
    }

    /* .tox-notifications-container {display: none !important;} */

</style>
