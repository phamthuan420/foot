<?php $loai_san_pham=get_field('loai_san_pham');
$loai_da=get_field('loai_da');
$so_luong_da=get_field('so_luong_da');
$trong_luong_da=get_field('trong_luong_da');
$loai_vang=get_field('loai_vang');
$tuoi_vang=get_field('tuoi_vang');
$trong_luong_vang=get_field('trong_luong_vang');
$trong_luong_san_pham=get_field('trong_luong_san_pham');
?>
<?php if($loai_san_pham){?>
<div class="thong-tin-them">
	<h3>
		Chi tiết sản phẩm
	</h3>
	<div class="box">
	<div class="row-info">
		<div class="left">
			Thương hiệu
		</div>
		<div class="right">
			Kim Khiết Diamond
		</div>
	</div>
	<?php if($loai_da){?>
	<div class="row-info">
		<div class="left">
			Loại đá
		</div>
		<div class="right">
			<?php echo $loai_da;?>
		</div>
	</div><?php }?>
	<?php if($so_luong_da){?>
	<div class="row-info">
		<div class="left">
			Số lượng đá
		</div>
		<div class="right">
			<?php echo $so_luong_da;?>
		</div>
	</div>
	<?php }?>
	<?php if($trong_luong_da){?>
	<div class="row-info">
		<div class="left">
			Trọng lượng đá
		</div>
		<div class="right">
			<?php echo $trong_luong_da;?>
		</div>
	</div><?php }?>
	<?php if($loai_vang){?>
	<div class="row-info">
		<div class="left">
			Loại vàng
		</div>
		<div class="right">
			<?php echo $loai_vang;?>
		</div>
	</div><?php }?>
	<?php if($tuoi_vang){?>
	<div class="row-info">
		<div class="left">
			Tuổi vàng
		</div>
		<div class="right">
			<?php echo $tuoi_vang;?>
		</div>
	</div><?php }?>
	<?php if($trong_luong_vang){?>
	<div class="row-info">
		<div class="left">
			Trọng lượng vàng
		</div>
		<div class="right">
			<?php echo $trong_luong_vang;?>
		</div>
	</div><?php }?>
	<?php if($trong_luong_san_pham){?>
	<div class="row-info">
		<div class="left">
			Trọng lượng sản phẩm
		</div>
		<div class="right">
			<?php echo $trong_luong_san_pham;?>
		</div>
	</div><?php }?>
	</div>
</div>
<?php }?>