<style type="text/css">
    #footer {
        height: 6%;
        padding-top: 2%;
        padding-bottom: 2%;
        margin-top: 2%;
        border-color: #E7E7E7;
        background-color: black;
        background-image: -webkit-linear-gradient(top, #000 0%, #000 100%);
        background-image:      -o-linear-gradient(top, #000 0%, #000 100%);
        background-image: -webkit-gradient(linear, left top, left bottom, from(#000), to(#000));
        background-image:         linear-gradient(to bottom, #000 0%, #000 100%);
    }
</style>

<footer id="footer">
    <div class="container">
        <div class="pull-left">
            Copyright &copy; Payo Nge'kost 2016
        </div>
        <div class="pull-right">
            Development by UTOPIC UNICORD
        </div>
    </div>
</footer>

<script type="text/javascript">
    var docHeight = $(window).height();
    var footerHeight = $('#footer').height();
    var footerTop = $('#footer').position().top + footerHeight;

    if (footerTop < docHeight) {
        $('#footer').css('margin-top', (docHeight - footerTop - 15) + 'px');
    }
</script>

</body>
</html>