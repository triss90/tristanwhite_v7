	<footer>

	</footer>  

	<!--Javascripts-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script type="text/javascript">
	$(function() {
	    var endDate = "June 15, 2015 14:00:00";
	    $('.getting-started').countdown({
          date: endDate,
          render: function(data) {
            $(this.el).html(
            	"<div>" + this.leadingZeros(data.days, 2) + " <span>dage</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>timer</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>minutter</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>sekunder</span></div>");
          }
        });
	});
	</script>

</body>
</html>