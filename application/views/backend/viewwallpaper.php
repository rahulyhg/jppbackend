<div class="row">
<div class="col s12">
<div class="row">
<div class="col s12 drawchintantable">
<?php $this->chintantable->createsearch(" Wallpaper");?>
<table class="highlight responsive-table">
<thead>
<tr>
<th data-field="id">ID</th>
<!--<th data-field="wallpapercategory">Wallpaper Category</th>-->
<th data-field="name">Name</th>
<th data-field="image1">Image1</th>
<!--
<th data-field="image2">Image2</th>
<th data-field="image3">Image3</th>
<th data-field="image4">Image4</th>
<th data-field="image5">Image5</th>
<th data-field="image6">Image6</th>
-->
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
</div>
<?php $this->chintantable->createpagination();?>
<div class="createbuttonplacement"><a class="btn-floating btn-large waves-effect waves-light blue darken-4 tooltipped" href="<?php echo site_url("site/createwallpaper?id=").$this->input->get('id'); ?>"data-position="top" data-delay="50" data-tooltip="Create"><i class="material-icons">add</i></a></div>
</div>
</div>
<script>
function drawtable(resultrow) {
      var image = "<a class='img-center' href='<?php echo base_url('uploads').'/'; ?>" + resultrow.image1 + "' ><img src='<?php echo base_url('uploads').'/'; ?>" + resultrow.image1 + "'></a>";
        if (resultrow.image1 == "") {
            image = "No Receipt Available";
        }
return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.name + "</td><td>" + image + "</td><td><a class='btn btn-primary btn-xs waves-effect waves-light blue darken-4 z-depth-0 less-pad' href='<?php echo site_url('site/editwallpaper?id=');?>"+resultrow.id+"&wallpapercategoryid="+resultrow.wallpapercategory+"' data-position='top' data-delay='50' data-tooltip='Edit'><i class='fa fa-pencil propericon'></i></a><a class='btn btn-danger btn-xs waves-effect waves-light red pad10 z-depth-0 less-pad' onclick=\"return confirm('Are you sure you want to delete?');\") href='<?php echo site_url('site/deletewallpaper?id='); ?>"+resultrow.id+"&wallpapercategoryid="+resultrow.wallpapercategory+"' data-position='top' data-delay='50' data-tooltip='Delete'><i class='material-icons propericon'>delete</i></a></td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>
