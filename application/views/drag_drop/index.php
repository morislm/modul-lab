<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CodeIgniter Drag&Drop Reorder Images by CodexWorld</title>

<!-- Include stylesheet file -->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />

<!-- Include jQuery and jQuery UI library -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>

<!-- Mobile touch support -->
<script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>


</head>
<body>
<div class="container">
<a href="javascript:void(0);" class="reorder_link" id="saveReorder">Urutkan Sesuai Prosedur</a>
	<div id="reorderHelper" class="light_box" style="display:none;">1. Drag Prosedur untuk mengurutkan<br>2. Click 'Save' jika selesai</div>
	<div class="gallery">
		<ul class="reorder_ul reorder-photos-list">
		<?php
		if(!empty($images)){
			foreach($images as $row){
		?>
			<li id="image_li_<?php echo $row['id']; ?>" class="ui-sortable-handle">
				<a href="javascript:void(0);" style="float:none;" class="image_link">
					<!-- <img src="<?php echo base_url('assets/images/'.$row["file_name"]); ?>"/> -->
					<?php echo $row["file_name"];?>
				</a>
			</li>
		<?php } } ?>
		</ul>
	</div>
</div>
<script>
$(document).ready(function(){
	$('.reorder_link').on('click',function(){
		$("ul.reorder-photos-list").sortable({ tolerance: 'pointer' });
		$('.reorder_link').html('Simpan');
		$('.reorder_link').attr("id","saveReorder");
		$('#reorderHelper').slideDown('slow');
		$('.image_link').attr("href","javascript:void(0);");
		$('.image_link').css("cursor","move");
		$("#saveReorder").click(function( e ){
			if( !$("#saveReorder i").length ){
				$(this).html('').prepend('<img src="<?php echo base_url('assets/images/refresh-animated.gif'); ?>"/>');
				$("ul.reorder-photos-list").sortable('destroy');
				$("#reorderHelper").html("Reordering Photos - This could take a moment. Please don't navigate away from this page.").removeClass('light_box').addClass('notice notice_error');
	
				var h = [];
				$("ul.reorder-photos-list li").each(function() {
					h.push($(this).attr('id').substr(9));
				});
				
				$.ajax({
					type: "POST",
					url: "<?php echo base_url('drag_drop/orderUpdate'); ?>",
					data: {ids: " " + h + ""},
					success: function(){
						window.location.replace("latihan");
						
					}
				});	
				return false;
			}	
			e.preventDefault();		
		});
	});
});
</script>
</body>

</html>