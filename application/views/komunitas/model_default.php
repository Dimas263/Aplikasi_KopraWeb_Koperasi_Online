<?php
$this->db->select('*');
$this->db->from('koperasi_wilayah');
$this->db->where('LENGTH(kode)', 8);
$this->db->order_by('RAND()');
$wilayah = $this->db->get()->result_array();
foreach ($wilayah as $detail_wilayah):
	?>
	<!-- Modal -->
	<div class="modal fade" id="modal-fadein<?=$detail_wilayah['nama']?>" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="block block-themed block-transparent mb-0">
					<div class="block-content">
						<p class="text-center">Bergabung di komunitas <?=$detail_wilayah['nama']?></p>
						<p class="text-center">Klik untuk bergabung</p>
						<form class="text-center" action="<?=base_url('Source/join_forum')?>" method="post">
							<input type="hidden" name="forum" value="<?=$detail_wilayah['nama']?>">
							<input type="hidden" name="id_user" value="<?=$this->auth_libs->user_login()->id_user?>">
							<button type="submit" name="submit" class="btn btn-outline-success btn-lg text-center">
								<?=$detail_wilayah['nama']?>
							</button>
						</form>
						<br>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- END Modal -->
<?php endforeach?>
