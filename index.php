<!-- this block breaks css autocompletion -->
<style type="text/css">
    .test {
        font-size: 120%;
    }
</style>

<!-- expected behavior: suggest .first, .second and .test -->
<!-- now it only suggests .test -->
<table class=""></table>

