<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('index.htm', '869b19e09f97b07d74859acbde816cea', 1404463682);?>
<? if($e) { ?>
<div class="alert alert-error">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>error!</strong> <?=$error[$e]?>.
</div>
<? } else { ?>
<input type="hidden" id="cpu_usage_<?=$UNIQU?>" value="<?=$cpu?>">
<input type="hidden" id="net_in_<?=$UNIQU?>" value="<?=$netin?>">
<input type="hidden" id="net_out_<?=$UNIQU?>" value="<?=$netout?>">
<input type="hidden" id="current_time_<?=$UNIQU?>" value="<?=$time_array?>">

<p><a href="javascript:load_img_<?=$MID?>('<?=$UNIQU?>');">原数据刷新</a>&nbsp;&nbsp;&nbsp;<a href="javascript:mod_request('<?=$CID?>','<?=$MID?>','<?=$UNIQU?>','',0,0);">请求新数据并刷新</a></p>
<p><img id="flag_<?=$UNIQU?>" onload="doit_init_<?=$MID?>('<?=$UNIQU?>');" src="./templates/bootstrap/img/loading-mini.gif"></p>
<div id="show_cpu_usage_<?=$UNIQU?>" style="height:400px"></div>
<div id="show_traffic_<?=$UNIQU?>" style="height:400px"></div>

<? } ?>

