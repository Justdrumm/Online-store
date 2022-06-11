<div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-bottom">

    </div>
</footer><!--/Footer-->



<script src="/test3/template-html/js/jquery.js"></script>
<script src="/test3/template-html/js/jquery.cycle2.min.js"></script>
<script src="/test3/template-html/js/jquery.cycle2.carousel.min.js"></script>
<script src="/test3/template-html/js/bootstrap.min.js"></script>
<script src="/test3/template-html/js/jquery.scrollUp.min.js"></script>
<script src="/test3/template-html/js/price-range.js"></script>
<script src="/test3/template-html/js/jquery.prettyPhoto.js"></script>
<script src="/test3/template-html/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>