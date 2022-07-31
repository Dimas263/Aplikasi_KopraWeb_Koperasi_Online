<div class="modal fade" id="modal-onboarding" tabindex="-1" role="dialog" aria-labelledby="modal-onboarding" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-popout" role="document">
        <div class="modal-content rounded">
            <div class="block block-rounded block-transparent mb-0 bg-pattern" style="background-image: url('<?=base_url()?>codebase/media/various/bg-pattern-inverse.png');">
                <div class="block-content block-content-full">
                    <div class="js-slider slick-dotted-inner" data-dots="false" data-arrows="false" data-infinite="false">
                        <div class="pb-50">
                            <div class="row justify-content-center text-center">
                                <div class="col-md-10 col-lg-8">
                                    <?php
                                    $id = $_GET['id'];
                                    $this->db->select("*");
                                    $this->db->from("koperasi_message");
                                    $this->db->where("jenis", $id);
                                    $message = $this->db->get()->result_array();
                                    foreach ($message as $detail): ?>
                                        <br>
                                        <div align="center">
                                            <img src="<?=$detail['images']?>" alt=""/>
                                        </div>
                                        <h3 class="font-size-h3 font-w300 mt-20"><?=$detail['titles']?></h3>
                                        <p class="text-muted">
                                            <?=$detail['subtitles']?>
                                        </p>
                                        <a class="btn btn-sm btn-hero btn-noborder btn-primary text-white mb-10 mx-5" href="<?=base_url($detail['routes'])?>">
                                            Lanjutkan
                                        </a>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
